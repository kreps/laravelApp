@extends('app')

@section('content')
    <h1>Edit article: {{$article->title}}</h1>
    <hr/>
    {!! Form::model($article, ['method' => 'PATCH','url' => 'articles/'.$article->id]) !!}
    @include('articles.form',['submitButtonText'=>'Update article'])
    {!! Form::close() !!}
    @include('errors.list')
@stop