@extends('common.common')

@section('content')

    <div>
        <a class="btn btn-primary" href="{{ url('/articles/create') }}">添加</a>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th>Title</th>
                <th>SubTitle</th>
                <th>Published At</th>
                <th>Content</th>
                <th>Operate</th>
            </tr>
        </thead>
        <tbody>
            @foreach($articles as $article)
                <tr>
                    <td>{{ $article->title }}</td>
                    <td>{{ $article->sub_title }}</td>
                    <td>{{ $article->published_at }}</td>
                    <td>{{ $article->content }}</td>
                    <td>
                        <a class="btn btn-primary" href="{{ url('/articles', $article->id) }}">查看</a>
                        <a class="btn btn-primary" href="{{ route('articles.edit', $article->id) }}">编辑</a>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>

@stop