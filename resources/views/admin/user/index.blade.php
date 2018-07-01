@extends('admin.layouts.admin')

@section('content')

    <div class="container">
        @component('admin.blocks.breadcrumb')
            @slot('title') User List @endslot
            @slot('parent') Main @endslot
            @slot('active') Users @endslot
        @endcomponent
        <hr />

        <div class="pull-left">
            <a href="{{route('admin.user.create')}}" class="btn btn-primary">
                <i class="fa-fa-plus"></i> Create User
            </a>
        </div>
        <table class="table table-striped">
            <thead>
            <th>Name</th>
            <th>Email</th>
            <th class="text-right">Action</th>
            </thead>
            <tbody>
            @forelse($userList as $user)
                <tr>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td class="text-right">
                        <form action="{{route('admin.user.destroy', $user)}}"
                              onsubmit="return confirm('Are you sure?')" method="post">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <a class="btn btn-default" href="{{route('admin.user.edit', $user)}}"><i class="fa fa-edit"></i></a>
                            <button type="submit" class="btn"><i class="fa fa-trash-o"></i></button>
                        </form>

                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="3" class="text-center">
                        <h2>Article data is empty</h2>
                    </td>
                </tr>
            @endforelse
            </tbody>
            <tfoot>
            <tr>
                <td colspan="3">
                    <ul class="pagination pull-right">
                        {{$userList->links()}}
                    </ul>
                </td>
            </tr>
            </tfoot>
        </table>
    </div>

@endsection