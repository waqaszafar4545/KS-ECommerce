<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**
     * Get the login username to be used by the controller.
     *
     * @return string
     */
    public function username()
    {
        return 'email';
    }

    /**
     * Validate the user login request.
     *
     * @param \Illuminate\Http\Request $request
     * @return void
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    protected function validateLogin(Request $request)
    {
        $request->validate([
            $this->username() => 'required|string',
            'password' => 'required|string',
//            'device_name' => 'required|string',
        ]);
    }

    /**
     * Send the response after the user was authenticated.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    protected function sendLoginResponse(Request $request)
    {
        //  "REQUEST_URI" => "/api/login"
        $isSetSession = (isset($_SERVER['REQUEST_URI']) && (trim($_SERVER['REQUEST_URI']) == '/login')) ? true : false;
        if ($isSetSession) {
            $request->session()->regenerate();
        }
        $this->clearLoginAttempts($request);
        $userData = $this->guard()->user();
        if ($response = $this->authenticated($request, $userData)) {
            return $response;
        }
        $tokenId = null;
        if (!$isSetSession) {
            $tokenId = $userData->createToken("aloexpo-token")->plainTextToken;
        }
        $userData = $userData->toArray();
        $userId = $userData['id'] ?? 0;
        $responseData = ['user_data' => $userData, 'idToken' => $tokenId, 'localId' => $userId, 'expiresIn' => 3600,'redirect_to'=>'/'];
        return $request->wantsJson()
            ? $this->success('Logged-in successfully', $responseData)
            : redirect()->intended($this->redirectPath());
    }

    /**
     * Log the user out of the application.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function logout(Request $request)
    {
        $this->guard()->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        if ($response = $this->loggedOut($request)) {
            return $response;
        }

        return $request->wantsJson()
            ? new Response('', 204)
            : redirect('/');
    }

}
