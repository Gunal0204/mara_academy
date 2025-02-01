<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;

class students_reg extends Controller
{
    public function add_Students(Request $request){
        student::create($request->all());
        return redirect()->route('home')->with('message','Student successfully Inserted !');
    }
}
