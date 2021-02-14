<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

Class CrudRepository extends Controller{

	public function view($Model){

		$User = $Model::paginate(10);
		return $User; 			
	}

	public function save($Model,$data){

		$form_data = $Model::create($data);
		return $form_data;

	}

	public function edit($Model,$id){

		$getData = $Model::findorfail($id);
		return $getData; 			
	}

	public function editsave($model,$data,$id){

		$editdata = $model::findorfail($id);
		foreach($data as $key => $d){
			//print_r($d);
			$editdata[$key] = $d;
		}
		//die;
		$editdata->save();
		return $editdata;
	}




	public function delete($Model,$id){

		$delete = $Model::findorfail($id)->delete();
		return 1;
	}

} 

