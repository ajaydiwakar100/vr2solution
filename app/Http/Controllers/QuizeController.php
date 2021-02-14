<?php

namespace App\Http\Controllers;

use Route;
use Auth;
use Validator;
use App\Models\Quize;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\CrudRepository;
use Illuminate\Support\Facades\Hash;


class QuizeController extends Controller{
	
	public function view(Request $request){

    if(session('userid') != ""){
    
  		$CrudRepository = new CrudRepository();
  		$Model 	  = 'App\Models\Quize';
  		$Quize    = $CrudRepository->view($Model);	
  		return view('Admin.Quize.view',compact('Quize'));
    
    }else{

      return redirect('/admin/');

    }  
	} 


	public function add(Request $request){
    if(session('userid') != ""){
    
      return view('Admin.Quize.add');
    }else{
      return redirect('/admin/');
    }  

	}

	public function save(Request $request){
    if(session('userid') != ""){
    
  		$data = $request->all();
  		$CrudRepository = new CrudRepository();
      $rules = array('question' => 'required', 
                    'option_a'  => 'required',
                    'option_b'  => 'required',
                    'option_c'  => 'required',
                    'option_d'  => 'required',
                    'answer'    => 'required');

      $validate = Validator::make($data,$rules);
      if($validate->fails()){         
        return redirect()->back()->withInput()->withErrors($validate);  
      
      }else{

        $form_data = array(
          'question'  => $data['question'],
          'option_a'  => $data['option_a'],
          'option_b'  => $data['option_b'],
          'option_c'  => $data['option_c'],
          'option_d'  => $data['option_d'],
          'answer'    => $data['answer']
        );

        $Model 	  = 'App\Models\Quize';
        $Category = $CrudRepository->save($Model,$form_data);	

        $Message = "successfully added";
        return redirect('admin/quize/view')->with('success',$Message);
    	}
    }else{

      return redirect('/admin/');
    }  
	}

	public function edit(Request $request){

    if(session('userid') != ""){
    
  		$CrudRepository = new CrudRepository();
  		$Model 	    = 'App\Models\Quize';
  		$id 	      = $request->id;   
      $Quize    = $CrudRepository->edit($Model,$id);	
  		return view('Admin.Quize.edit',compact('Quize'));
    
    }else{

      return redirect('/admin/');
    }  

	}


	public function editsave(Request $request){

    if(session('userid') != ""){
      
  		$data = $request->all();
  		$CrudRepository = new CrudRepository();
        
      $Quize = Quize::findorfail($data['id']); 
      $form_data = array(
        'question'  => @$data['question'] ? @$data['question'] : $Quize->question,
        'option_a'  => @$data['option_a'] ? @$data['option_a'] : $Quize->option_a,
        'option_b'  => @$data['option_b'] ? @$data['option_b'] : $Quize->option_b,
        'option_c'  => @$data['option_c'] ? @$data['option_c'] : $Quize->option_c,
        'option_d'  => @$data['option_d'] ? @$data['option_d'] : $Quize->option_d,
        'answer'    => @$data['answer']   ? @$data['answer']   : $Quize->answer
      );

      $Model 	  = 'App\Models\Quize';
      $Quize = $CrudRepository->editsave($Model,$form_data,$data['id']);	

      $Message = "successfully update";
      return redirect('admin/quize/view')->with('success',$Message);
    
    }else{

      return redirect('/admin/');
    }  
	}

	public function delete(Request $request){

    if(session('userid') != ""){
    
  		$data = $request->id;
  		$CrudRepository = new CrudRepository();
  		$Model = 'App\Models\Quize';
  		$Delete= $CrudRepository->delete($Model,$data);
  		$Message = " Delete successfully";
  		return redirect('admin/quize/view')->with('error',$Message);

    }else{

      return redirect('/admin/'); 
    }  

	}
}
