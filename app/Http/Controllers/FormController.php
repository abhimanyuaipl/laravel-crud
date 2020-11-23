<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function index(){

    	return view('user.header').view('formpage') .view('user.footer');
}
	public function about(){
		return view('user.header').view('about') .view('user.footer');
	}

	public function contact(){
		return view('user.header').view('contact') .view('user.footer');
	}
	public function form_submit(Request $req){
		$req->validate([
			'firstname'=>'required',
			'email'=>'required|email'
 		]);
		$user= $req->input();
		$user =  collect( (object)[$user]);
		// dd($user);
		return view('formpage',compact('user'));
		// redirect('formpage');
		// echo "<pre>";
		// print_r($user);
		
	}
}

