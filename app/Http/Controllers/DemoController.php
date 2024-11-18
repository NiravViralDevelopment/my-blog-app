<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    public function blocksSecound(){
        return view('blocks-page2');
    }
    public function blocksThree(){
        return view('blocks-page3');
    }
    public function blocksFour(){
        return view('blocks-page4');
    }


}
