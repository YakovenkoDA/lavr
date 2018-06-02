@extends('admin.layouts.admin')

@section('content')

    <div class="container">
        @component('admin.blocks.breadcrumb')
            @slot('title') Article List @endslot
            @slot('parent') Main @endslot
            @slot('active') Articles @endslot
        @endcomponent
        <hr />

        <div class="pull-left">
            <a href="{{route('admin.article.create')}}" class="btn btn-primary">
                <i class="fa-fa-plus"></i> Create Article
            </a>
        </div>
        <table class="table table-striped">
            <thead>
            <th>Name</th>
            <th>Status</th>
            <th class="text-right">Action</th>
            </thead>
            <tbody>
            @forelse($articleList as $article)
                <tr>
                    <td>{{$article->subject}}</td>
                    <td>{{$article->status}}</td>
                    <td class="text-right">
                        <form action="{{route('admin.article.destroy', $article)}}"
                              onsubmit="return confirm('Are you sure?')" method="post">
                            <input type="hidden" name="_method" value="DELETE">
                            {{ csrf_field() }}
                            <a class="btn btn-default" href="{{route('admin.article.edit', $article)}}"><i class="fa fa-edit"></i></a>
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
                        {{$articleList->links()}}
                    </ul>
                </td>
            </tr>
            </tfoot>
        </table>
    </div>

@endsection