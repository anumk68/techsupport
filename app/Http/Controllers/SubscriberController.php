<?php

namespace App\Http\Controllers;

use App\Models\Subscriber;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class SubscriberController extends Controller
{
    // Send Email when we user subscribe
    public function subscribe(Request $request)
    {
        $validator = validator::make($request->all(), [
            'email' => 'required|email|unique:subscribers,email',
        ]);
        if ($validator->fails()) {
            return response()->json([
                'errors' => $validator->errors(),
            ], 422);
        }
        $email = $request->input('email');
        try {
            Subscriber::create(['email' => $email]);
            Mail::send([], [], function ($m) use ($email) {
                $m->to($email)
                    ->subject('Subscription Confirmation')
                    ->html('<h1>Congratulations!</h1><p>You have successfully subscribed.</p>');
            });
            return response()->json([
                'message' => 'Thank you for subscribing! Please check your email.'
            ], 200);
        } catch (\Exception $e) {
            Log::error('Subscription email failed: ' . $e->getMessage());
            return response()->json([
                'message' => 'Failed to send confirmation. Try again later.'
            ], 500);
        }
    }
}
