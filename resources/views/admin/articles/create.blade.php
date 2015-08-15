@extends('common.common')

@section('content')
    <h1>添加文章</h1>

    <hr>

    {!! Form::open(['route' => 'articles.create']) !!}
    <div class="form-group" >

        {!! Form::label('title', 'Title:') !!}
        {!! Form::text('title', null, ['placeholder' => 'Title', 'class' => 'form-control']) !!}

        {!! Form::label('sub_title', 'SubTitle:') !!}
        {!! Form::text('sub_title', null, ['placeholder' => 'SubTitle', 'class' => 'form-control']) !!}

        {!! Form::label('content_type', 'Content Type:') !!}
        <div class="btn-group" data-toggle="buttons">
            <label class="btn btn-primary">
                <input type="radio" name="content_type" value="markdown"> markdown
            </label>
            <label class="btn btn-primary">
                <input type="radio" name="content_type" value="plain"> plain
            </label>
        </div>
        <br>


        {!! Form::label('content', 'Content:') !!}
        {!! Form::textarea('content', null, ['placeholder' => 'content', 'class' => 'form-control', 'rows' => 5]) !!}

        {!! Form::label('published_at', 'Publish On:') !!}
        {!! Form::input('date', 'published_at', date('Y-m-d'), ['class' => 'form-control']) !!}

        <br>

        {!! Form::label('tags', 'Tags :') !!}
        {!! Form::select('tags', $tags, ['class' => 'form-control', 'multiple']) !!}

        {!! Form::submit('Add Article', ['class' => 'btn btn-primary btn-block']) !!}

    </div>
    {!! Form::close() !!}

    <div>
        @include('errors.vadidate')
    </div>
@stop