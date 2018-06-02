@extends('admin.layouts.admin')

@section('content')

    <div class="container">
        @component('admin.blocks.breadcrumb')
            @slot('title') Create Article @endslot
            @slot('parent') Article @endslot
            @slot('active') Create @endslot
        @endcomponent
        <hr />

        <form action="{{route('admin.article.store')}}" class="form-horizontal" method="post">
            {{csrf_field()}}
            @include('admin.article.partials.form')

            <input type="hidden" name="created_by" value="{{Auth::id()}}">
        </form>
    </div>

@endsection