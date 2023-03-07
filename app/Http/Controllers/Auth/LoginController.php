<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;
use Redirect;
use App\Models\Recruiter;
use Illuminate\Support\Facades\Mail;
use App\Mail\ForgotPasswordMail;
use Hash;
use Session;
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

    use AuthenticatesUsers {
        logout as performLogout;
    }
    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo ='/dashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

//     public function logout(Request $request)
// {
//     $this->performLogout($request);
//     return redirect()->route('home');
// }


public function showAdminLoginForm()
{
    return view('auth.login', ['url' => 'admin']);
}
// validation failed return with 422 status


public function accountLogin(Request $request)
{
    $this->validate($request, [
        'email'   => 'required',
        'password' => 'required'
    ]);
    $userdata = array(
        'email' => $request->email ,
        'password' => $request->password ,
      );
      // attempt to do the login
      if (Auth::attempt($userdata)) {

        return response()->json(["status"=>true,"redirect_location"=>url("/dashboard")]);
    }
    return response()->json([["Invalid credentials"]],422);
}

public function logout(Request $request) {
   // dd('');
    Auth::logout();
    Session::flush();
    return redirect('/login');
  }
}
