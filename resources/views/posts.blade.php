<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>Blog</title>
        <link rel="stylesheet" href="/app.css">

    </head>
    <body>
        <?php foreach($posts as $post): ?>
       <article>
           <?= $post;?>
       </article>
      <?php endforeach; ?>
    </body>
</html>
