<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
	public function home() {
		return view("pages.homepage");
	}

	public function hewan() {
		return view("pages.hewan");
	}

	public function tambahhewan(){
		return view("pages.tambahhewan");
	}

	public function pakan() {
		return view("pages.pakan");
	}
	
}
