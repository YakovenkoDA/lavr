@extends('admin.layouts.admin')

@section('content')

    <div class="container">
        @component('admin.blocks.breadcrumb')
            @slot('title') Create Category @endslot
            @slot('parent') Category @endslot
            @slot('active') Create @endslot
        @endcomponent
        <hr />

        <form action="{{route('admin.category.store')}}" class="form-horizontal" method="post">
            {{csrf_field()}}
            @include('admin.category.partials.form')
        </form>
    </div>

@endsection