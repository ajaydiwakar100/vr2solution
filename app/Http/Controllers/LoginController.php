<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Route;
use Auth;
use Validator;
use App\Models\User;
use App\Models\Quize;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{

    public function login(Request $request){
      
        return view('Admin.Login');  
    }
 
 	public function dologin(Request $request){

 		$rules = array('email' => 'required|email','password' => 'required | min:6');
 		$validate = Validator::make($request->all(),$rules);

 		if($validate->fails()){ 		
 			return redirect()->back()->withInput()->withErrors($validate);  
 		
 		}else{

 			$arg = $request->all();
 			$Checkuser = Auth::attempt(['email' => $arg['email'], 'password' => $arg['password']] );
 			
 			if($Checkuser == 1){

 				session(['userid'=>Auth::user()->id]);
 				$Message = "Login successfully";
				return redirect('admin/dashboard')->with('success',$Message);
	 			
 			}else{
 				
 				$Message = "User email / password does not match";
	 			return redirect()->back()->with('error', $Message);
	 		}
 			
 		}
	}


	public function dashboard(){
		if(session('userid') != ""){
			$Quize = Quize::count();
			$User = User::count();

			return view('Admin.Dashboard',compact('User','Quize'));
		}else{

			return redirect('/admin/');
		}	
	}


	public function logout(){
		Auth::logout();
		return redirect('admin/')->with('success', 'user logout successfully!');
	}
	
 }
