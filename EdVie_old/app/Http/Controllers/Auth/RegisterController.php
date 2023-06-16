<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

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
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @param \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('guest');
    }
 
    public function index(Request $request){

        return view('auth.signup');
    }

    public function store(Request $request){
        $userData = $request->input();
        $validate = $this->validator($userData);

        if ($validate->fails()){
            return redirect('signup')->withErrors($validate);
        } else {
            $this->create([
                'fullname' => $userData['fullname'],
                'email' => $userData['email'],
                'password' => $userData['password'],
            ]);
            return redirect($this->redirectTo);
        }
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
            'fullname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
            'repeat_password' => [  'required_with:password','same:password']
        ],[
            'fullname.required' => 'Hãy điền tên của bạn',
            'fullname.max' => 'Tên bạn quá dài',
            'email.required' => 'Hãy điền địa chỉ email của bạn',
            'email.unique' => 'Email này đã tồn tại',
            'email.email' => 'Đây không phải là một email',
            'password.required' => 'Hãy điền mật khẩu của bạn',
            'password.min' => 'Mật khẩu phải trên 8 kí tự',
            'repeat_password.same' => 'Mật khẩu xác nhận không trùng khớp',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            'fullname' => $data['fullname'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
