<?php

namespace App\Http\Controllers;

// use App\Models\User;
use App\Models\Admin;
use App\Models\Blogger;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;

class TRegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;
    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller in++stance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:teacher');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showteacherRegisterForm()
    {
        return view('teacher.register', ['url' => 'teacher']);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showBloggerRegisterForm()
    {
        return view('teacher.register', ['url' => 'teacher']);
    }
    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'phone' => ['required'],
            'country' => ['required','string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'gender' => ['required']
        ]);
    }
    /**
     * @param array $data
     *
     * @return mixed
     */
    protected function create(array $data)
    {
        return Admin::create([
            'name' => $data['name'],
            'phone' => $data['phone'],
            'country' => $data['country'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'gender' => $data['gender'],
        ]);
    }

    /**
     * @param Request $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    protected function createteacher(Request $request)
    {
        $this->validator($request->all())->validate();
        Admin::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'country' => $request->country,
            'email' => $request->email,
            'password' => $request->password,
            'gender' => $request->gender,
        ]);
        return redirect()->intended('login/teacher');
    }

    /**
     * @param Request $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
}