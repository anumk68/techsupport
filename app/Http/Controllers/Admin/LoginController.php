<?php


namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    /**
     * Display the login form.
     *
     * @return \Illuminate\View\View
     * This function shows the login form for the admin user.
     */
    public function showLoginForm()
    {
        return view('admin.login');
    }

    /**
     * Handle the login request.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     * This function processes the login request by validating the credentials 
     * and authenticating the user.
     */


    // public function login(Request $request)
    // {
    //     $request->validate([
    //         'email' => 'required|email',
    //         'password' => 'required',
    //     ]);
    //     if (!Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
    //         return back()->withErrors(['email' => 'Invalid credentials'])->withInput();
    //     }
    //     return redirect()->route('admindashboard');
    // }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        $user = User::where('email', $request->email)->first();
        if (!$user) {
            return back()->withErrors(['email' => 'User with this email does not exist.'])->withInput();
        }
        if (!Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return back()->withErrors(['password' => 'Invalid password'])->withInput();
        }
        return redirect()->intended('/admin-dashboard');
    }

    /**
     * Display the forget password form.
     *
     * @return \Illuminate\View\View
     * This function shows the form where users can request a password reset link.
     */
    public function showForgetPasswordForm()
    {
        return view('admin.forgetPassword');
    }

    /**
     * Process the forget password form submission.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     * This function validates the email, generates a reset token, 
     * and sends a password reset email.
     */
    public function submitForgetPasswordForm(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users,email',
        ]);

        $user = User::where('email', $request->email)->first();

        if (!$user) {
            return back()->withErrors(['email' => 'The selected email is invalid.']);
        }

        // Generate a random token for password reset
        $token = Str::random(64);

        // Store or update the password reset record
        DB::table('password_resets')->updateOrInsert(
            ['email' => $request->email],
            [
                'email' => $request->email,
                'token' => $token,
                'created_at' => Carbon::now(),
            ]
        );

        // Send password reset email with the token
        Mail::send('emails.forgetPassword', ['token' => $token], function ($message) use ($request) {
            $message->to($request->email);
            $message->subject('Reset Password Notification');
        });

        return back()->with('message', 'A password reset link has been sent to your email.');
    }

    /**
     * Handle the logout request.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     * This function logs the user out and invalidates the session.
     */
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login')
            ->withSuccess('You have logged out successfully!');
    }
}
