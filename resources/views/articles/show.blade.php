@extends('app')

@section('content')

    <article>
        <h2>{{$article->title}}</h2>
        {{$article->body}}
        <hr>
        @foreach($article->tags as $tag)
            [{{$tag->name}}]
        @endforeach
        Published {{$article->published_at->diffForHumans()}}
    </article>

@stop

@section('footer')

    <div class="container" style="text-align: center">

        {{--<h5>Tags:</h5>--}}
        {{--@foreach($article->tags as $tag)--}}
            {{--[{{$tag->name}}]--}}
        {{--@endforeach--}}
        {{--Published {{$article->published_at->diffForHumans()}}--}}

    </div>
@stop