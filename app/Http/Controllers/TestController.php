<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDO;

class TestController extends Controller
{
    public function testFunction(){
        $price=100;
        $price=100*0.8;

        return view('test',['price'=>$price]);
    }
    public function discount(){
        $price=100;
        $price=100*0.7;

        return view('test',['price'=>$price]);
    }
}
