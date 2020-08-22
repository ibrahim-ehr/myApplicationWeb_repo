<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SecondController extends Controller
{
    public function __construct(){
        $this ->middleware('auth')->except('showString3');
    }
    public function showString1(){
        return 'static string 1';
    }
    public function showString2(){
        return 'static string 2';
    }
    public function showString3(){
        return 'static string 3';
    }
    public function showString4(){
        return 'static string 4';
    }
}
