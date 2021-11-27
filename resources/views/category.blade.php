@extends('layouts.main')

@section('container')

<body style="background-color: black;">
    <h1 class="mb-5">Post Category: {{$category}}</h1>

    @foreach ($articles as $article)
    <article class="mb-5">
        <h2>
            <a href="/article/{{$article->slug}}">{{ $article["title"] }}</a>
        </h2>
        <p>{{ $article->excerpt}}</p>
    </article>
</body>
@endforeach
@endsection