@extends('admin.layouts.admin')

@section('content')

    <div class="container">
        @component('admin.blocks.breadcrumb')
            @slot('title') Update Category @endslot
            @slot('parent') Category @endslot
            @slot('active') Create @endslot
        @endcomponent
        <hr />

        <form action="{{route('admin.category.update', $category)}}" class="form-horizontal" method="post">
            <input type="hidden" name="_method" value="put">
            {{csrf_field()}}
            @include('admin.category.partials.form')
        </form>
    </div>

@endsection