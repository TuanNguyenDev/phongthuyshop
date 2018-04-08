<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
class AdminLoginController extends Controller
{
	public function __construct(){
		$this->middleware('guest:admin',['except' => ['logout']]);
	}
    public function showLoginForm(){
    	return view('auth.admin-login');
    }

    public function login(Request $request){
    	//validate the form data
    	$this->validate($request, [
    		'email' => 'required|email',
    		'password' => 'required|min:6'
    	]);
    	//attempt to log the user
    	if(Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password, 'trang_thai' => 1], $request->remember)){
            // dd(Auth::guard('admin')['user']);
            // if(Auth::guard('admin')->trang_thai != 1){
            //     Auth::guard('admin')->logout();
            //     return redirect('mod/login');
            // }
    	//if successfull, then redirect to their intended location
    		return redirect()->intended(route('dashboard'));	
    	}
    	//if unsuccessful return login page
    	return redirect()->back()->withInput($request->only('email','remember'));
    }
    public function logout(){
    	Auth::guard('admin')->logout();
    	return redirect('mod/login');
    }
}
