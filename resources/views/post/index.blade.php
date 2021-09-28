<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Post</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">


    </head>
    <body>
        <h1>Posts</h1>
        @foreach ($posts as $post)
            <h2>Post title : {{ $post->title }}</h2>
            <h3>User name : {{ optional($post->user)->name}}</h3>
        @endforeach
    </body>
</html>
