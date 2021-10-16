<?php
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
    $posts= Post::all();
       return view('posts',[
        "posts"=> $posts
    ]);
});
Route::get("posts/{post}",function($slug){
    return view("post",[
            "post"=> Post::find($slug)
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
