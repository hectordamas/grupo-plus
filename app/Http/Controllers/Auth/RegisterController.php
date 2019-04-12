<?php

namespace App\Http\Controllers\Auth;
use App\Listeners\SendEmailVerificationNotification;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

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

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('role');
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
            'name' => ['required','min:6'],
            'email' => ['required', 'string', 'email', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
            'companyName' => ['required','min:6'],
            'telephoneNumber' => ['required','min:6'],
            'cellphoneNumber' => ['required','min:6'],
            'city' => ['required'],
            'address_send' => ['required'],
            'address_fact' => ['required'],
            'rif' => ['required'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
      return User::create([
            'companyName' => $data['companyName'],
            'telephoneNumber' => $data['telephoneNumber'],
            'name' => $data['name'],
            'cellphoneNumber' => $data['cellphoneNumber'],
            'email' => $data['email'],
            'city' => $data['city'],
            'address_send' => $data['address_send'],
            'role'=> $data['role'],
            'address_fact' => $data['address_fact'],
            'rif'=> strtoupper($data['rif']),
            'date_expiration'=> $data['date_expiration'],
            'password' => Hash::make($data['password']),
            'email_seller'=> $data['email_seller'],
            'name_seller' => $data['name_seller'],
        ]);

    }
}
