<?php

use App\Models\Category;
use App\Models\Post;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;
use Spatie\YamlFrontMatter\YamlFrontMatter;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $posts= Post::with("category")->get();
       return view('posts',[
        "posts"=> $posts
    ]);
});
Route::get("posts/{post:slug}",function(Post $post){
    return view("post",[
            "post"=> $post
        ]);


    // if(! file_exists( $path=__DIR__ . "/../resources/posts/{$slug}.html")){
    //     return redirect("/");   // vraca na home page
    //     // dd("File doesn't exist!!!");
    //      // ddd("File doesn't exist!!!");
    //     //   abort(404);
    // }
    // $post= cache()->remember("posts.{$slug}",5, fn()=> file_get_contents($path));
    // return view("post",[
    //     "post"=> $post
    // ]);
});
Route::get("categories/{category:slug}",function(Category $category){
    return view("posts",[
        "posts"=>$category->posts
    ]);
});
