<?php
namespace App\Http\Controllers\Auth;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User; 

class LoginController extends Controller
{
    protected function guard()
    {
        return Auth::guard('web');
    }

    protected function redirectPath()
    {
        return '/dashboard';
    }

    // Display the login form
    public function showLoginForm()
    {
        $user = auth()->user();
        if($user !=''){
            return redirect('/dashboard');
        }

        return view('auth.login');
    }

    // Handle a login request
    public function login(Request $request)
    {
        $this->validateLogin($request);

        if ($this->attemptLogin($request)) {
            return $this->sendLoginResponse($request);
        }

        return $this->sendFailedLoginResponse($request);
    }

    // Custom validator for login form data
    protected function validateLogin(Request $request)
    {
        $request->validate([
            $this->username() => 'required|string',
            'password' => 'required|string',
        ]);
    }

    // Get the login username to be used by the controller.
    protected function username()
    {
        return 'email';
    }

    // Attempt to log the user into the application.
    protected function attemptLogin(Request $request)
    {
        return $this->guard()->attempt(
            $this->credentials($request), $request->filled('remember')
        );
    }

    // Get the needed authorization credentials from the request.
    protected function credentials(Request $request)
    {
        return $request->only($this->username(), 'password');
    }

    // Send the response after the user was authenticated.
    protected function sendLoginResponse(Request $request)
    {
        $request->session()->regenerate();

        return redirect()->intended($this->redirectPath());
    }

    // Send the response after the user failed to authenticate.
    protected function sendFailedLoginResponse(Request $request)
    {
        return redirect()->back()
            ->withInput($request->only($this->username(), 'remember'))
            ->withErrors([
                $this->username() => __('auth.failed'),
            ]);
    }

    // Log the user out of the application.
    public function logout(Request $request)
    {
        $this->guard()->logout();

        $request->session()->invalidate();

        return redirect('/');
    }
}
