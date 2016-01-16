<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Faker\Factory;
use Illuminate\Http\Request;

class PagesController extends Controller
{
	public function home() {
		$faker = Factory::create();
		return view('home')->withFaker($faker);
	}

	public function about() {
		return view('about');
	}
}
