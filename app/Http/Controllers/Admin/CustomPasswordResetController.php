<?php


namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class CustomPasswordResetController extends Controller
{
    /**
     * Display the password reset request form.
     */
    public function showLinkRequestForm()
    {
        return view('auth.passwords.email');
    }

    /**
     * Handle sending a password reset link to the user.
     */
    public function sendResetLink(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
        ]);

        $email = $request->email;

        // Generate a new reset token
        $token = Str::random(60);

        // Check if a token already exists for the email
        $existingToken = DB::table('password_reset_tokens')->where('email', $email)->first();

        if ($existingToken) {
            // Update the existing token
            DB::table('password_reset_tokens')
                ->where('email', $email)
                ->update(['token' => $token, 'created_at' => now()]);
        } else {
            // Create a new token record
            DB::table('password_reset_tokens')->insert([
                'email' => $email,
                'token' => $token,
                'created_at' => now(),
            ]);
        }

        // Send reset email
        Mail::send('auth.passwords.reset_email', ['token' => $token, 'email' => $email], function ($message) use ($email) {
            $message->to($email);
            $message->subject('Password Reset Request');
        });

        return redirect()->route('login')->with('status', 'We have emailed your password reset link!');
    }

    /**
     * Display the password reset form.
     */
    public function showResetForm(Request $request, $token)
    {
        return view('auth.passwords.reset', ['token' => $token, 'email' => $request->email]);
    }

    /**
     * Handle resetting the user's password.
     */
    public function reset(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users,email',
            'password' => 'required|confirmed|min:6',
        ]);

        // Verify token and email match
        $resetRecord = DB::table('password_reset_tokens')->where('token', $request->token)->first();

        if (!$resetRecord || $resetRecord->email !== $request->email) {
            return back()->withErrors(['email' => 'Invalid token or email.']);
        }

        // Update the user's password
        $user = User::where('email', $request->email)->first();
        $user->password = Hash::make($request->password);
        $user->save();

        // Remove the used token
        DB::table('password_reset_tokens')->where('token', $request->token)->delete();

        return redirect('/login')->with('status', 'Your password has been reset!');
    }
}
