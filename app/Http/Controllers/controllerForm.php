<?php

namespace App\Http\Controllers;

use Request;
use APP\Http\Requests;
use App\sabtnam;
use Illuminate\Support\Facades\Validator;

class controllerForm extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return view("viewForm");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        $validator=validator::make(
          Request::all(),
            [
            'name' => 'required|alpha|max:100',
            'email' => 'required|email',
            'avrage' => 'required|numeric',
            'number' => 'required|numeric',
            ]
        );
        if($validator->fails()){
           $a= Request::all();
            return view("viewForm",["errors"=>$validator->errors(),"a"=>$a]);

        }
       sabtnam::create(Request::all());
        return redirect('/showtabel');
     
    }
    public function showtabel (){
          $all = sabtnam::get(); 
     
       return view("showalldb",["all"=>$all]);
    }
 
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $a=Request::all();
        $post = sabtnam::where('ID', $a["ID"])->first();
        return view("viewshowform",["post"=>$post]);
         
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function validation (Request $request)
    {
    // $validator=validator::make(
    //    Request::all(),
    //     [
    //     'name' => 'required|unique|alpha_dash|max:100',
    //     'email' => 'required|email',
    //     'avrage' => 'required|',
    //     'number' => 'required|numeric|max:6',
    //     ]
    // );
    // if($validator->fails()){
    //     return redirect()->back()=>withErrors($validator->errors())->withInput();
    // }

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
         $a=Request::all();
         //dd($a);
         $a = sabtnam::where('id',$a['id']) ->update(['name' => $a["name"],'email' => $a["email"],'avrage' => $a["avrage"],'gender' => $a["gender"]]);
          return redirect('/showtabel');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete()
    {
        $a=Request::all();
         $deletedRows = sabtnam::where('id',$a['id'])->delete();
          return redirect('/showtabel');
    }
}
