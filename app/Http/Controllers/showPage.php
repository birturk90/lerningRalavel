<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class showPage extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */
    public function projec()
    {
      return view('showPage', ['name' => 'masume']);
    }
}