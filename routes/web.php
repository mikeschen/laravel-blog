<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;

Route::get('/', function () {
	\Illuminate\Support\Facades\DB::listen(function ($query) {
		logger($query->sql);
	});

    return view('posts', [
		'posts' => Post::latest()->with('category', 'author')->get()
	]);
});

Route::get('posts/{post}', function (Post $post) {
    return view('post', [
		'post' => $post
	]);
});

Route::get('categories/{category:slug}', function (Category $category) {
	return view('posts', [
		'posts' => $category->posts
	]);
});

Route::get('authors/{author:username}', function (User $author) {
	return view('posts', [
		'posts' => $author->posts
	]);
});
