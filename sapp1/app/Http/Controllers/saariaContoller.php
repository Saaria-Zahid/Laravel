<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class saariaContoller extends Controller
{
    // 
    public function checkin($num){

     return view("oop", ["num"=>$num, "name" => ["Babar","Shaheen","Virat","Fakhar","Shadab","Warner", "Smith"] ]);

    }
}
