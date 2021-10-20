<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>Blog</title>
        <link rel="stylesheet" href="/app.css">

    </head>
    <body>
       <div>
        <form action="#" method="GET">
            <input type="text" name="search" placeholder="find" value="{{request('search')}}">
        </form>
       </div>
        @yield("content")
    </body>
</html>
