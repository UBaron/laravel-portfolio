<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"
    >
    <meta http-equiv="X-UA-Compatible"
          content="ie=edge"
    >
    <title>{{ env('APP_NAME') }}</title>

    {{-- Load the default generated javascript and stylesheets --}}
    @vite([ 'resources/js/app.js', 'resources/sass/app.scss' ])

</head>
<body>
<h1>My Blog Post</h1>

<p>{{ $post -> body }}</p>
</body>
</html>
