@extends('app')

@section('content')
    <article>
        <h2 >{{$article->title}}</h2>
        {{$article->body}}
    </article>
@stop

@section('footer')
    <div class="container" style="text-align: center">published {{$article->published_at->diffForHumans()}}</div>
@stop