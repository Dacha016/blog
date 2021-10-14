<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>Blog</title>
        <link rel="stylesheet" href="/app.css">
       
    </head>
    <body>
       <article>
          <?= $post; ?>
       </article>
       <a href="/">Go Back</a>
    </body>
</html>
