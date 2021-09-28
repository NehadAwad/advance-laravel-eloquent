<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Testing</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">


    </head>
    <body>
        <h1>Has One</h1>
        @foreach ($addresses as $address)
            <h3>Name: {{ $address->user->name }} </h3>
        @endforeach

        <h1>Has many</h1>
        @foreach ($users as $user)
            <h3>Name: {{ $user->name}}</h3>
            @foreach ($user->addresses as $address)   
                <h2> address: {{ $user->address->country }}</h2>
            @endforeach
        @endforeach
        
    </body>
</html>
