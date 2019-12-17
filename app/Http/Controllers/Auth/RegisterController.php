<?php

namespace App\Http\Controllers\Auth;

use App\Area;
use App\Customer;
use App\User;
use Illuminate\Support\Arr;
use App\Http\Controllers\Controller;
use App\Repairman;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Foundation\Auth\User as IlluminateUser;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

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
    protected $redirectTo = '/orders';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
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
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
           // 'phone' => ['required', 'string', 'phone', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Users
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'password' => Hash::make($data['password']),
        ]);
    }

    public function register()
    {
        // You should use validator here to validate your inputs here...
        $inputs = request()->except('_token');

        $user_inputs_arr = Arr::only($inputs, ['email', 'password']);
        $user_inputs_arr['password'] = bcrypt($inputs['password']);

        

        if($inputs['type'] == 1) {
            $profile = Customer::create(Arr::only($inputs, ['phone', 'name']));
            $user = $profile->user()->create($user_inputs_arr);
          return redirect('/orders');
        } 
        else {
            $profile = Repairman::create(Arr::only($inputs, ['phone', 'name']));


        
            $user = $profile->user()->create($user_inputs_arr);
            return redirect('/pricing');
        }

        
        
        // Hence your client is registered successfully...
    }

}
