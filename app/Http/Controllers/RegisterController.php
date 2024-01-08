<?php

namespace App\Http\Controllers;

use App\Models\User;

class RegisterController extends Controller
{
	public function create()
	{
		return view('register.create');
	}

	public function store() {
		// Validate the user
		$attributes = request()->validate([
			'name' => 'required',
			'username' => 'required',
			'email' => 'required|email',
			'password' => 'required'
		]);

		User::create($attributes);

		return redirect('/');
	}
}
