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
    // $files= File::files(resource_path("posts"));
    // $posts=[];
    // foreach($files as $file){
    //     $document=YamlFrontMatter::parseFile($file);
    //     $posts[]= new Post(
    //         $document->title,
    //         $document->excerpt,
    //         $document->date,
    //         $document->body
    //     );
    // }
    $document=YamlFrontMatter::parseFile(resource_path("posts/my-first-post.html"));
    ddd($document);
       return view('posts',[
        "posts"=> Post::all()
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
})->where("post","[A-z_\-]+");
