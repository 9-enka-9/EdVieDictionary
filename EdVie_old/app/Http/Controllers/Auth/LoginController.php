<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Redirect;

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
     * @param \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    

    public function index(){
        return view('auth.login');
    }

    
    public function check(Request $request){
        $userData = Arr::except($request->input(), ['_token']);
        $validate = $this->validator($userData);
        
        // dd($validate->fails());

        if ($validate->fails()){
            return redirect('login')->withErrors($validate);
        } else {
            if (Auth::attempt($userData)){
                return redirect("home");
            } else {
                return Redirect::back()->with('all','Mật khẩu hoặc email không đúng.');
            }
        }
    }
    
    public function logout(Request $request) {
        Auth::logout();
        return redirect('/');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'string', 'min:8'],
        ],[
            'email.required' => 'Hãy điền địa chỉ email của bạn',
            'email.email' => 'Đây không phải là một email',
            'password.required' => 'Hãy điền mật khẩu của bạn',
            'password.min' => 'Mật khẩu phải trên 8 kí tự',
        ]);
    }


}
