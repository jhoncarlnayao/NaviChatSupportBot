<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserFeedback;

class NaviBotController extends Controller
{

    
    public function handleMessage(Request $request)
    {
        $message = strtolower($request->input('message'));

        if (str_starts_with($message, 'feedback:')) {
            UserFeedback::create(['message' => $message]);
            return response()->json(['response' => 'Thank you for your feedback!']);
        }
    
        $response = $this->generateResponse($message);
        return response()->json(['response' => $response]);
    }

    private function generateResponse($message)
    {
        $responses = [
            'hello' => 'Hi there! How can I help you today?',
            'hi' => 'Hi there! How can I help you today?',
            'thank you' => 'You\'re welcome! Let me know if you need further assistance.',
            'promos for today' => '<img src="' . asset('img/promo1.png') . '" alt="Promo Image" />
            <img src="' . asset('img/promo1.png') . '" alt="Promo Image" />
            <img src="' . asset('img/promo1.png') . '" alt="Promo Image" />',



        ];

        return $responses[$message] ?? 'I\'m sorry, I didn\'t understand that. Can you please rephrase?';
    }
}
