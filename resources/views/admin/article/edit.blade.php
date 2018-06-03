@extends('admin.layouts.admin')

@section('content')

    <div class="container">
        @component('admin.blocks.breadcrumb')
            @slot('title') Update Article @endslot
            @slot('parent') Article @endslot
            @slot('active') Update @endslot
        @endcomponent
        <hr />

        <form action="{{route('admin.article.update', $article)}}" class="form-horizontal" method="post">
            <input type="hidden" name="_method" value="put">
            {{csrf_field()}}
            @include('admin.article.partials.form')

            <input type="hidden" name="updated_by" value="{{Auth::id()}}">
        </form>
    </div>

@endsection