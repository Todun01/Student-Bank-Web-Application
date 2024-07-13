<?php

namespace App\Http\Controllers\User\Auth;

use App\Models\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests;
use Illuminate\Http\Request;
Use Alert;
class RegisterController extends Controller
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

    // use RegistersUsers;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/user/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('user.guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    // protected function validator(array $data)
    // {
    //     return Validator::make($data, [
    //         'name' => 'required|max:255',
    //         'email' => 'required|email|max:255|unique:users',
    //         'password' => 'required|min:6|confirmed',
    //     ]);
    // }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function createuser(Request $request){
        $validator = Validator::make($request->all(), [
            'first_name' => 'required|string',
            'middle_name' => 'nullable|string',
            'last_name' => 'required|string',
            'email' => 'required|email|unique:users',
            'matric_number' => 'required|min:11|max:11|string|unique:users',
            'password' => 'required|min:6',
            'confirmpassword' => 'required|min:6',
        ]);
        if ($validator->fails()) {
            Alert::error('Error!', $validator->messages()->all()[0])->persistent('Close');
            return redirect()->back();
        }
        $user = new User();
        $user->matric_number = $request->matric_number;
        $user->first_name = $request->first_name;
        $user->middle_name = $request->middle_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        if($request->password != $request->confirmpassword){
            Alert::error('Error!', 'Your passwords must match!')->persistent('Close');
            return redirect()->back();
        }
        $user->password = bcrypt($request->confirmpassword);
        if($user->save()){
            Alert::success('Congratulations!','Your account has successfully been created!')->persistent('Close');
            return view('user.auth.login');
        }


    }

    /**
     * Show the application registration form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showRegistrationForm()
    {
        return view('user.auth.register');
    }

    /**
     * Get the guard to be used during registration.
     *
     * @return \Illuminate\Contracts\Auth\StatefulGuard
     */
    protected function guard()
    {
        return Auth::guard('user');
    }
}
