<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\User;
use Auth;

class UserController extends Controller
{
    //
    public function Login(){
        return view('Login.login');
    }

    public function post_login(Request $request){
        // dd($request->all());
        Auth::logout();
 		if(Auth::attempt($request->only('email','password'),'category'==='1')){
 			if (Auth::user()->category=='1') {
 				return redirect()->route('company-home')->with('success','chào mừng quay trở lại');
 			} elseif (Auth::user()->category=='2') {
 				return redirect()->route('teacher-home')->with('success','chào mừng quay trở lại');
 			} elseif (Auth::user()->category=='3') {
                return redirect()->route('student-home')->with('success','chào mừng quay trở lại');
            }
		} else {
			return 'false';
		}
    }

    public function registration(){
        return view('Registration.registration');
    }

    public function post_registration(Request $request){
        $request->merge(['password'=>bcrypt($request->password)]);
        if(User::create($request->all())){
			return redirect()->route('login');
		}else{
			return 'false';
		}
    }
}
