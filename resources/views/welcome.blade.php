<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->

    </head>
    <body>
        <div>
            <form action="{{route('subscribe')}}" method="post">
                @csrf
                <div>
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" class="mb-4">
                </div>
                <div>
                    <label for="subscribe">Subscribe</label>
                    <input type="email" name="subscribe" id="subscribe" class="mb-4">
                </div>
                <button class="p-4" type="Submit">Submit</button>
            </form>
        </div>
    </body>
</html>
