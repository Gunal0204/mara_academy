<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Home_controller extends Controller
{
    public function viewform(){

        return view('Level_2');
    }

    public function home(){
        return view('Home');
    }

    public function Key_Board1(){
        return view('Key_Board_L1');
    }

    public function Key_Board2(){
        return view('Key_Board_L2');
    }

    public function Flute(){
        return view('Flute');
    }

    public function contact(){
        return view('contact');
    }

    public function student_login(){
        return view('student_login');
    }

    public function courses(){
        return view('courses');
    }

    public function student_Reg(){
        return view('student_Reg');
    }


}
