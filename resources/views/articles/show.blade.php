@extends('common.common')

@section('content')
    <h1>{{ $article->title }}</h1>

    <hr>

    <div>
        Published at {{ $article->published_at }}
    </div>

    <hr>

    <div>
        {{ $article->content }}
    </div>
@stop