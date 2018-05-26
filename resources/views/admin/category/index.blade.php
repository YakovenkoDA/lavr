@extends('admin.layouts.admin')

@section('content')

    <div class="container">
        @component('admin.blocks.breadcrumb')
            @slot('title') Category List @endslot
            @slot('parent') Main @endslot
            @slot('active') Categories @endslot
        @endcomponent
    </div>
    <hr>
    <div class="pull-left">
        <a href="{{route('admin.category.create')}}" class="btn btn-primary">
            <i class="fa-fa-plus"></i> Create Category
        </a>
    </div>
    <table class="table table-striped">
        <thead>
        <th>Name</th>
        <th>Status</th>
        <th class="text-right">Action</th>
        </thead>
        <tbody>
        @forelse($categoryList as $category)
            <tr>
                <td>{{$category->title}}</td>
                <td>{{$category->status}}</td>
                <td>
                    <a href="{{route('admin.category.edit',['id'=>$category->id])}}">
                        <i class="fa-edit"></i>
                    </a>
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


@endsection