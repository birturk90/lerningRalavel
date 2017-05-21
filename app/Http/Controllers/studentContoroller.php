<?php

namespace App\Http\Controllers;
use App\student;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class studentContoroller extends Controller
{
    /**
     * Create a new flight instance.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        // Validate the request...

        $hospital = new Student;

        $hospital->id= $request->id;
        $hospital->name = $request->name;
        $hospital->grade = $request->grade;
        $hospital->avrage = $request->avrage;
        $hospital->save();
    }
    public function update(){
         $student = Student::where('id','1')->get()->first();
          $student = Student::where('id','1') ->update(['name' => 'saba']);
         
//dd($student);
      
    }
     public function delet(){

          $deletedRows = Student::where('id', '3')->delete();
     }
}