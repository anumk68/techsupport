<?php
namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{

    public function submit(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'name'          => 'required|string|regex:/^[a-zA-Z. ]+$/|max:255',
            'number'        => 'required|digits:10',
            'email'         => 'required|email',
            'subject'       => 'required|string|max:255',

        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $contact                = new Contact();
        $contact->name          = $request->name;
        $contact->email         = $request->email;
        $contact->number        = $request->number;
        $contact->subject       = $request->subject;
        $contact->save();

        $data = [
            'name'          => $request->name,
            'email'         => $request->email,
            'number'        => $request->number,
            'subject'       => $request->subject,

        ];

        try {
            Mail::send('frontend.gmail', $data, function ($message) use ($data) {
                $message->to(env('MAIL_TO_ADDRESS', 'hardeepsingh.digirush@gmail.com'))
                    ->subject('New Inquiry from: ' . $data['name']);
            });

            return response()->json([
                'success' => 'Thank you! We will contact you soon.',
            ]);
        } catch (\Exception $e) {
            Log::error('Email sending failed: ' . $e->getMessage());

            return response()->json([
                'errors' => ['email' => 'Email sending failed. Please try again.'],
            ], 500);
        }

    }

}
