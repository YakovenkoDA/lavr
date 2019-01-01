@extends('admin.layouts.admin')

@section('content')

    <div class="container">
        @component('admin.blocks.breadcrumb')
            @slot('title') Category List @endslot
            @slot('parent') Main @endslot
            @slot('active') Categories @endslot
        @endcomponent
            {{  Form::model(new App\Category(), ['route'=>'admin.category.search', 'method' => 'get']) }}
            <table class="table table-striped">
            <thead>
                <tr>
                <th>#</th>
                <th>Title</th>
                <th>Status</th>
                <th class="text-right">Action</th>
            </tr>
                <tr>
                    <td>{{ Form::text('id') }}</td>
                    <td>{{ Form::text('title') }}</td>
                    <td>{{ Form::text('status') }}</td>
                    <td class="text-right">
                        {{Form::button('<i class="fa fa-search"></i>',['class' => 'btn btn-success', 'type' => 'submit']) }}
                    </td>
                </tr>
            </thead>
            <tbody>
            @forelse($categoryList as $category)
                <tr>
                    <td>{{$category->id}}</td>
                    <td>{{$category->title}}</td>
                    <td>{{$category->status}}</td>
                    <td class="text-right">
                        <a class="btn btn-default" href="{{route('admin.category.edit', $category)}}"><i class="fa fa-edit"></i></a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="3" class="text-center">
                        <h2>Category data is empty</h2>
                    </td>
                </tr>
            @endforelse
            </tbody>
            <tfoot>
            <tr>
                <td colspan="3">
                    <ul class="pagination pull-right">
                        {{$categoryList->links()}}
                    </ul>
                </td>
            </tr>
            </tfoot>
        </table>
            {{ Form::close() }}

            <hr/>
        <div class="pull-left">
            <a href="{{route('admin.category.create')}}" class="btn btn-primary">
                <i class="fa-fa-plus"></i> Create Category
            </a>
        </div>
    </div>

@endsection