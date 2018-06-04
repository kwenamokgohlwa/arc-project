<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index()
    {
        $message = Message::all();

        return $message;
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'surname' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        $message = Message::create($request->all());

        return response()->json($message);
    }

    public function show($id)
    {
        $message = Message::find($id);

        return $message;
    }

    public function delete(Request $request, $id)
    {
        $message = Message::findOrFail($id);
        $message->delete();

        return response()->json($message, 204);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
              'email' => 'email',
        ]);

        $message = Message::findOrFail($id);
        $message->update($request->all());

        return response()->json($message);
    }


}
