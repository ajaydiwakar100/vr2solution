<?php

namespace App\Http\Controllers;

use Route;
use Auth;
use Validator;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\CrudRepository;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller{
	
	public function view(Request $request){
		if(session('userid') != ""){
    
			$CrudRepository = new CrudRepository();
			$Model = 'App\Models\User';
			$User = $CrudRepository->view($Model);	
			return view('Admin.User.view',compact('User'));
		}else{

			return redirect('/admin/'); 
		}	
	} 


	public function delete(Request $request){

		if(session('userid') != ""){
    
			$data = $request->id;
			$CrudRepository = new CrudRepository();
			$Model = 'App\Models\User';
			$Delete= $CrudRepository->delete($Model,$data);
			$Message = " Delete successfully";
			return redirect('admin/user/view')->with('error',$Message);

		}else{

			return redirect('/admin/');
		}	

	}



}
