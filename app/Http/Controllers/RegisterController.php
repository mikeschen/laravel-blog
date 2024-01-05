<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
			'password' => 'required|confirmed'
		]);

		User::create($attributes);

		// // Create and save the user
		// $user = User::create([
		// 	'username' => request('username'),
		// 	'email' => request('email'),
		// 	'password' => bcrypt(request('password'))
		// ]);

		// Sign them in
		// auth()->login($user);

		// Redirect to the home page
		return redirect('/');
	}
}
