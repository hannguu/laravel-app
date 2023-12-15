<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Models\User;

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
    public function index()
    {
        $login_err = null;
        $isAdmin = false;

        return view('login.login', [
            'login_err' => $login_err,
            'isAdmin' => $isAdmin
        ]);

    }
    public function login(Request $request)
    {
        // dd('controller execute');
        $username_input = $request->input('name');
        $password_input = $request->input('password');
        $users = User::all();
        $login_err = null;
        $isAdmin = false;
        foreach ($users as $user) {
            if ($user->name == $username_input) {
                if ($user->password == $password_input) {
                    $isAdmin = true;
                    session('user', $user);
                    return view('index')->with('user', $user);
                } else {
                    $login_err = 'Incorrect username or password';
                }
            } else {
                $login_err = 'Incorrect username or password';
            }
        }
        return view('login.login')->with('login_err', $login_err);



    }
}
