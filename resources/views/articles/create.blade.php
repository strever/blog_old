@extends('common.common')

@section('content')
    <h1>Add an Article</h1>

    <hr>

    {!! Form::open(['url' => '/articles']) !!}
        <div class="form-group" >

            {!! Form::label('title', 'Title:') !!}
            {!! Form::text('title', null, ['placeholder' => 'Title', 'class' => 'form-control']) !!}

            {!! Form::label('sub_title', 'SubTitle:') !!}
            {!! Form::text('sub_title', null, ['placeholder' => 'SubTitle', 'class' => 'form-control']) !!}

            {!! Form::label('content', 'Content:') !!}
            {!! Form::text('content', null, ['placeholder' => 'content', 'class' => 'form-control']) !!}

            {!! Form::label('published_at', 'Publish On:') !!}
            {!! Form::input('date', 'published_at', date('Y-m-d'), ['class' => 'form-control']) !!}

            <br>

            {!! Form::submit('Add Article', ['class' => 'btn btn-primary btn-block']) !!}

        </div>
    {!! Form::close() !!}

    <div>
        @include('errors.vadidate')
    </div>
@stop