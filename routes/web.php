<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
// Route::get('blog', function () {
//     return view('blog');
// });

Route::get('/chat', function () {
    echo 'nama saya agung muliawan';
});
Route::redirect('/dari_sini', '/kesini', 301);
Route::permanentRedirect('/dari_sini_kak', '/kesini');

//Route::view('/blog', 'blog', ['name' => 'agung muliawan']);

// Route::get('user/{id}', function ($id) {
//     return 'user' . $id;
// });

// Route::get('posts/{post}/comments/{comment}', function ($postId, $commentId) {
//     return 'posts' . $postId;
// });

Route::get('users/{name?}', function ($name = null) {
    return $name;
});
Route::get('userku/{nameku?}', function ($nameku = 'agungmuliawan') {
    return $nameku;
});
