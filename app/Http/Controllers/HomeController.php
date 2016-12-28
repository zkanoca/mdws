<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pages;

class HomeController extends Controller
{
    //
    public function index(){


        return view('master');
    }
    

    
}
