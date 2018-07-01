@extends('admin.layouts.admin')

@section('content')

    <div class="container">
        @component('admin.blocks.breadcrumb')
            @slot('title') Update User @endslot
            @slot('parent') User @endslot
            @slot('active') Update @endslot
        @endcomponent
        <hr />

        <form action="{{route('admin.user.update', $user)}}" class="form-horizontal" method="post">
            {{ method_field('PUT') }}
            {{csrf_field()}}
            @include('admin.user.partials.form')
        </form>
    </div>

@endsection