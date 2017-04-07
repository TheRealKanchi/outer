<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StorageController extends Controller
{


	public function index(){

	return \View::make('form');

}
	public function save(Request $request)
{
 
    
       $file = $request->file('file');
 
       
       $name = $file->getClientOriginalName();
 
       
       \Storage::disk('local')->put($name,  \File::get($file));
 
       return "archivo guardado";
}

}
