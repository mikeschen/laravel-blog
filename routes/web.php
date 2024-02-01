<?php

use App\Http\Controllers\PostCommentsController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;
use App\Models\Category;
use App\Models\User;
use MailchimpMarketing\ApiClient;

Route::get('ping', function () {

	$mailchimp = new \MailchimpMarketing\ApiClient();

	$mailchimp->setConfig([
		'apiKey' => config('services.mailchimp.key'),
		'server' => 'us21'
	]);

	$response = $mailchimp->lists->addListMember('942a7902f6', [
		'email_address' => 'schenstock@yahoo.com',
		'status' => 'subscribed',
	]);

	ddd($response);
});

Route::get('/', [PostController::class, 'index'])->name('home');

Route::get('posts/{post}', [PostController::class, 'show']);
Route::post('posts/{post:slug}/comments', [PostCommentsController::class, 'store']);

Route::get('register', [RegisterController::class, 'create'])->middleware('guest');
Route::post('register', [RegisterController::class, 'store'])->middleware('guest');

Route::get('authors/{author:username}', function (User $author) {
	return view('posts', [
		'posts' => $author->posts,
		'categories' => Category::all(),
	]);
});
