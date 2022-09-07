<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;

class TLoginController extends Controller
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
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
            $this->middleware('guest:teacher')->except('logout');
    }
     public function showteacherLoginForm()
    {
        return view('auth.login', ['url' => 'teacher']);
    }
    public function teacherRegisterForm()
    {
        return view('teacher.register', ['url' => 'teacher']);
    }
    public function teacherloginLink()
    {
        return view('teacher.login', ['url' => 'teacher']);
    }

    public function teacherLogin(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6'
        ]);
             dd([Auth::guard('teacher')->attempt(['email' => $request->email, 'password' => $request->password])]);
        if (Auth::guard('teacher')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember')))
        {
            return redirect()->intended('/teacher');
        }
            return back()->withInput($request->only('email', 'remember'));
        
    }
}