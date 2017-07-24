<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
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
     * Where to redirect users after login / registration.
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
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }

    public function register(Request $request)
    {
        $errors =Validator::make($request->all(), [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6',
        ])->errors();
        if (!empty($errors->all())) {
            $arrErrors=$errors->toArray();
            $errText="";
            if(isset($arrErrors['email']))
            {
                $errText.=$arrErrors['email'][0].';';

            }
            if(isset($arrErrors['password']))
            {
                $errText.=$arrErrors['password'][0].';';

            }
            if(isset($arrErrors['name']))
            {
                $errText.=$arrErrors['name'][0].';';

            }
            return  response(json_encode(array("message"=>"Validation failed.","errors"=>$errText)), 422)
                ->header('Content-Type', 'application/json');
        } else {
            return  response(json_encode(User::create([
                'name' => $request->all()['name'],
                'email' => $request->all()['email'],
                'password' => bcrypt($request->all()['password']),
            ])), 201)
                ->header('Content-Type', 'application/json');
        }
    }
}
