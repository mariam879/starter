<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as Controller;

class UserController extends Controller
{
    public function showAdminName()
    {
    	return'mariam hany';
    }

    public function index(){
    	$obj=new \stdClass();
    	$obj->name='mariam';
    	$obj->id=3;

    	return view('welcome',compact('obj'));
    }
}
