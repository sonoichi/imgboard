@extends('layout')

@section('content')
    <h1>Articles</h1>
    <hr/>
    @foreach($articles as $article)
        <article>
            <h2>
                <a href="{{url('articles', $article->id) }}">
                    {{ $article->title }}
                </a>
            </h2>
            <div class='boby'>
                {{ $article->body }}
            </div>
        </article>
        {!! link_to('articles/create', '新規作成', ['class' => 'btn btn-primary']) !!}
    @endforeach
@endsection