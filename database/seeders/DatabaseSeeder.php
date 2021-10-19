<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Post::factory()->create();

        //koristimo ako nismo koristli vise odvojenih "fabrika"
        // User::truncate();
        // Category::truncate();
        // Post::truncate();
        //  $user = User::factory()->create();
        //  $personal = Category::create([
        //     "name"=>"Personal",
        //     "slug"=>"personal"
        //  ]);
        //  $family= Category::create([
        //     "name"=>"Family",
        //     "slug"=>"family"
        //  ]);
        //  $work = Category::create([
        //     "name"=>"Work",
        //     "slug"=>"work"
        //  ]);
        //  Post::create([
        //      "user_id"=>$user->id,
        //      "category_id"=>$family->id,
        //      "title"=>"My Family post",
        //      "slug"=>"my-family-post",
        //      "excerpt"=>"Lorem ipsum",
        //      "body"=>"<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ab velit assumenda labore aut vitae, ratione deserunt voluptas! Accusamus deserunt magnam, sapiente ipsam facere quidem tenetur earum accusantium nihil? Dolore voluptatem quam quisquam hic molestiae molestias corporis eligendi inventore asperiores quod, quis eum voluptatum. Quam, ea error! Enim molestiae nisi sequi necessitatibus quo itaque vero sed, id, iste earum, quisquam dolore aut accusamus amet aspernatur? Ratione voluptatum id quis accusamus vero natus similique aspernatur voluptatem nam sed enim animi tempore saepe at eos asperiores, fugiat repellat vitae omnis. Beatae fugit, vero sequi corrupti reiciendis repellendus id sunt reprehenderit eveniet illo soluta dolore praesentium esse maiores ipsa maxime odit eaque distinctio aspernatur quo impedit modi! Voluptatem architecto voluptatibus aut ducimus modi delectus cumque necessitatibus, iste non, fuga impedit rem libero nobis, rerum consequatur corporis at neque provident eaque sint. Necessitatibus ea temporibus recusandae provident porro perspiciatis, excepturi, possimus voluptate, incidunt non perferendis.</p>"
        //  ]);
        //  Post::create([
        //     "user_id"=>$user->id,
        //     "category_id"=>$personal->id,
        //     "title"=>"My Personal post",
        //     "slug"=>"my-personal-post",
        //     "excerpt"=>"Lorem ipsum dolor si amet",
        //     "body"=>"<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia sapiente, ut ratione recusandae, iste illum quibusdam soluta voluptas exercitationem distinctio dolorum culpa! Soluta eaque rem, reiciendis eligendi recusandae facilis sequi molestiae id. Similique, deserunt ipsa? Error adipisci ducimus vero, blanditiis perferendis, consequatur iusto quae maxime debitis sint libero et aut!</p>"
        // ]);
    }
}
