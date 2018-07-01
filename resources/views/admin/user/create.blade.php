@extends('admin.layouts.admin')

@section('content')

    <div class="container">
        @component('admin.blocks.breadcrumb')
            @slot('title') Create User @endslot
            @slot('parent') User @endslot
            @slot('active') Create @endslot
        @endcomponent
        <hr />

        <form action="{{route('admin.user.store')}}" class="form-horizontal" method="post">
            {{csrf_field()}}
            @include('admin.user.partials.form')

        </form>
    </div>

@endsection