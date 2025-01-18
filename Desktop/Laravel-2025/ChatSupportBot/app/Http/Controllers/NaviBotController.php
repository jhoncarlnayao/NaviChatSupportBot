<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NaviBotController extends Controller
{

    
    public function handleMessage(Request $request)
    {
        $message = strtolower($request->input('message'));
        $response = $this->generateResponse($message);

        return response()->json(['response' => $response]);
    }

    private function generateResponse($message)
    {
        $responses = [
            'hello' => 'Hi there! How can I help you today?',
            'book' => 'Please provide your travel details to proceed with the booking.',
            'lost item' => 'Please describe the item and where you lost it.',
            'thank you' => 'You\'re welcome! Let me know if you need further assistance.',
        ];

        return $responses[$message] ?? 'I\'m sorry, I didn\'t understand that. Can you please rephrase?';
    }
}
