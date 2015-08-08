@extends('app')

@section('content')
    <h1>Create new article</h1>
    <hr/>

    {!! Form::open(['url' => 'articles']) !!}
    @include('articles.form',['submitButtonText'=>'Create article'])
    {!! Form::close() !!}

    @include('errors.list')
@stop
