@extends('layouts.app')

@section('title', $article->meta_title)
@section('meta_tags', $article->meta_tags)
@section('meta_description', $article->meta_description)

@section('content')

    <div class="container">

        <div class="row">
            <div class="col-sm-12">
                <h1>{{$article->subject}}</h1>
                <p>{!! $article->description !!}</p>
            </div>
        </div>

    </div>
@endsection
