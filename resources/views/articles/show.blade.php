@extends('layout')

@section('content')
    <h1>{{ $article->title }}</h1>
    <hr/> 
    <article>
        <div class="body"> {{ $article->body }} </div>
    </article>

    <br/>
    {!! link_to(action('ArticlesController@edit', ['id' => $article->id]), '編集', ['class' => 'btn btn-primary']) !!}
    <br/>
    <br/>
    {!! Form::open(['method' => 'DELETE', 'url' => ['articles', $article->id]]) !!}
        {!! Form::submit('削除', ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@stop