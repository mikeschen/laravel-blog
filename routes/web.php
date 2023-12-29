<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;

Route::get('/', [PostController::class, 'index'])->name('home');
Route::get('posts/{post}', [PostController::class, 'show']);

// Route::get('categories/{category:slug}', function (Category $category) {
//     return view('posts', [
//         'posts' => $category->posts,
//         'currentCategory' => $category,
//         'categories' => Category::all()
//     ]);
// })->name('category');

Route::get('authors/{author:username}', function (User $author) {
	return view('posts', [
		'posts' => $author->posts,
		'categories' => Category::all(),
	]);
});
