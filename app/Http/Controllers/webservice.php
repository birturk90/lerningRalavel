<?php

namespace App\Http\Controllers;

use Request;
use APP\Http\Requests;
//use Illuminate\Http\Request;
use App\restful;
use Illuminate\Support\Facades\Validator;

class webservice extends Controller
{
  
     public function index(Request $request)
    {
         $data=restful::get();
        return $data;
    }
        public function store(Request $request)
    {
    $validator=validator::make(
          Request::input(),
            [
            'title' => 'required|alpha|max:100',
            'time' => 'required|numeric',
            'importance' => 'required|numeric',
            ]
        );
        if($validator->fails()){
          
            return $validator->errors();

        }

       $data=restful::create(Request::all());
        return $data;
    }
}
