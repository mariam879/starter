<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth')->except('openLandingPage');
	}
    public function showAdminName()
    {
    	return'mariam hany';
    }
    public function showAdminName1()
    {
    	return'mariam hany1';
    }
    public function showAdminName2()
    {
    	return'mariam hany2';
    }
    public function showAdminName3()
    {
    	return'mariam hany3';
    }
    public function openLandingPage(){
        return view('landing');
    }
}
