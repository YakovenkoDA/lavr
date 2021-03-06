@extends('admin.layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="jumbotron">
                    <p><span class="label label-primary">total Categories: {{ $categoryCount }}</span></p>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="jumbotron">
                    <p><span class="label label-primary">total Articles: {{ $articleCount }}</span></p>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="jumbotron">
                    <p><span class="label label-primary">Visitors 0</span></p>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="jumbotron">
                    <p><span class="label label-primary">Today 0</span></p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6">
                <a class="btn btn-block btn-primary" href="{{route('admin.category.index')}}">Category</a>
                @foreach($categories as $category)
                <a class="list-group-item" href="{{ route('admin.category.edit', $category) }}">
                    <h4 class="list-group-item-heading">{{ $category->title }}</h4>
                    <p class="list-group-item-text">{{ $category->getArticles()->count() }}</p>
                </a>
                @endforeach
            </div>
            <div class="col-sm-6">
                <a class="btn btn-block btn-primary" href="{{route('admin.article.index')}}">Article</a>
                @foreach($articles as $article)
                    <a class="list-group-item" href="{{ route('admin.article.edit', $article) }}">
                        <h4 class="list-group-item-heading">{{ $article->subject }}</h4>
                        <p class="list-group-item-text">{{ $article->categories()->pluck('title')->implode(', ')}}</p>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
@endsection