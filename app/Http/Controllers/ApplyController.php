<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApplyController extends Controller
{
    public function store(Request $request){
      echo $name = $request->input('name','呵呵哒');
    }
}
