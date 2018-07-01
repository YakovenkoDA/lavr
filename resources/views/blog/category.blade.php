@extends('layouts.app')

@section('title')
    {{$category->title}}
@endsection

@section('content')

    <div class="container">
        @forelse($articleList as $article)
            <div class="row">
                <div class="col-sm-12">
                    <h2>
                        <a href="{{route('article', $article->hash)}}"> {{$article->subject}} </a>
                        <p>{!! $article->description !!}</p>
                    </h2>
                </div>
            </div>
            @empty
            <h2 class="text-center"> not found </h2>
        @endforelse

        {{$articleList->links()}}
    </div>
@endsection
