<?php

use App\Message;
use Illuminate\Database\Seeder;

class MessagesTableSeeder extends Seeder
{
    public function run()
    {
        Message::truncate();

        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 10; $i++) {
            Message::create([
                'name' => $faker->firstName,
                'surname' => $faker->lastName,
                'phone' => $faker->e164PhoneNumber,
                'email' => $faker->email,
                'message' => $faker->sentence,
            ]);
        }
    }
}
