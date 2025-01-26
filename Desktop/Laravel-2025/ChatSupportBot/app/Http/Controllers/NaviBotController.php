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
        // Define the responses
        $responses = [
            'hello' => 'Hi there! How can I help you today?',
            'Testing' => 'testing',
            'hi' => 'Hi there! How can I help you today?',
            'How can I book a ticket?' => 'Testing How can I book a ticket?',
            'I lost my luggage.' => 'Sorry to hear that! Please provide your ticket details for assistance.',

            // AVAILABLE ROUTES
            'What are the available routes?' => '
                <div style="border: 1px solid #ccc; padding: 16px; border-radius: 8px; background-color: #f9f9f9;">
                    <h3 style="color: #2c3e50;">Available Routes in Davao City</h3>
                    <ul style="list-style-type: none; padding: 0; color:black;">
                        <li style="margin: 8px 0;">
                            <strong>Route A:</strong> Roxas Ave to Matina
                        </li>
                        <li style="margin: 8px 0;">
                            <strong>Route B:</strong> Toril to Buhangin
                        </li>
                        <li style="margin: 8px 0;">
                            <strong>Route C:</strong> Lanang to Mintal
                        </li>
                    </ul>
                    <p style="margin-top: 12px; color: #7f8c8d;">
                        For more details, please visit our terminal or contact customer service. <br><br>
                        +63 123-456-7890 <br>
                        @example.com
                    </p>
                </div>',
                  // END OF AVAILABLE ROUTES
            'What are the operating hours?' => '<div class= "Operating-hours">
                Our operating hours are from 6 AM to 10 PM daily.
            </div>',
            'thank you' => 'You\'re welcome! Let me know if you need further assistance.',
            'promos for today' => '<img src="' . asset('img/promo1.png') . '" alt="Promo Image" />
                <img src="' . asset('img/promo2.png') . '" alt="Promo Image" />',
            '/help' => 'What kind of help do you want?<br>
            <div class="" style="display:flex; flex-direction:column;">
            <a href="#" style="font-weight:bold;">Help 1</a><br>
            <a href="#" style="font-weight:bold;">Help 2</a>
            </div>',
        ];
    

        $lowercaseMessage = strtolower($message);
    
      
        foreach ($responses as $key => $response) {
            if (strtolower($key) == $lowercaseMessage) {
                return $response;
            }
        }
    
     
        return 'I\'m sorry, I didn\'t understand that. Can you please rephrase?';
    }
    
}    
