<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feedback;

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
            'hi' => 'Hi there! How can I help you today?',
            'thank you' => 'You\'re welcome! Let me know if you need further assistance.',
            'promos for today' => '<img src="' . asset('img/promo1.png') . '" alt="Promo Image" />
            <img src="' . asset('img/promo1.png') . '" alt="Promo Image" />
            <img src="' . asset('img/promo1.png') . '" alt="Promo Image" />',



        ];

        return $responses[$message] ?? 'I\'m sorry, I didn\'t understand that. Can you please rephrase?';
    }
}
