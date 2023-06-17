@extends('layout')
<head>
    <link rel="stylesheet" href="/css/style-article.css">
    <title>Articles</title>
</head>
@section('content')
    <body>
    <div class="ArticleContent">
        <a href="{{route('articles.index')}}" >
            <button>All Articles :D</button>
        </a>
        <div>
        <ul>
                <h1> {{$article->title}}</h1>
                <h3> {{$article->body}}</h3>
        </ul>
        </div>
        <a href="{{route('articles.edit', $article)}}" >
            <button>EDIT</button>
        </a>
    </div>
    <img class="eviedehond" src="/img/evie.jpg" alt="fotoEvie" width="300px" height="300px">
    </body>
@endsection
