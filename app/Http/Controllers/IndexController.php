<?php

namespace App\Http\Controllers;

use Route;
use Auth;
use Validator;
use App\Models\Quize;
use App\Models\Report;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;


class IndexController extends Controller{
	
	public function view(Request $request){
    if(session('userid') != ""){

      $user = Auth::user()->name;
      $Question = Quize::whereDate('created_at', \Carbon\Carbon::today())->get();

      $CheckuserLog = Report::whereDate('created_at', \Carbon\Carbon::today())->where('user',Auth::user()->id)->count();
  		return view('index',compact('Question','user','CheckuserLog'));
    
    }else{

      return redirect('/');
    }

	} 

  public function CheckAnswer(Request $request){
    if(session('userid') != ""){
      $user = Auth::user()->name;
      $points = 0;
      $total_quest = Quize::count();
      foreach ($request->except('_token') as $key => $part) {
        
        $Question = Quize::findorfail($key);  

        if($Question->answer == $part){

          $points = $points + 1;
          
        }
      }
      $Question->total_point = $points;
      $Question->save();

      $Report = new Report;
      $Report->user = Auth::user()->id;
      $Report->total_wrong = $total_quest - $points;
      $Report->total_point = $points;
      $Report->save();


      return view('result',compact('points','user','total_quest'));
    }else{

      return redirect('/');
    }  
  }

  public function login(Request $request){

    return view('Login');  
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
        return redirect('quiz')->with('success',$Message);
        
      }else{
        
        $Message = "User email / password does not match";
        return redirect()->back()->with('error', $Message);
      }
      
    }
  }


}
