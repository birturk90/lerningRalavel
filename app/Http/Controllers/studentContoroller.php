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
dd($student);
         $hospital->id = '4';
        $hospital->name = 'saba';
        $hospital->grade ='7';
        $hospital->avrage= '14';
        $hospital->save();    

    }
}