@extends('admin.layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="jumbotron">
                    <p><span class="label label-primary">Categories 0</span></p>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="jumbotron">
                    <p><span class="label label-primary">Data 0</span></p>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="jumbotron">
                    <p><span class="label label-primary">Visitors 0</span></p>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="jumbotron">
                    <p><span class="label label-primary">Today 0</span></p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6">
                <a class="btn btn-block btn-primary" href="{{route('admin.category.create')}}">Create category</a>
                <a class="list-group-item" href="#">
                    <h4 class="list-group-item-heading">First category</h4>
                    <p class="list-group-item-text">Data count</p>
                </a>
            </div>
            <div class="col-sm-6">
                <a class="btn btn-block btn-primary" href="#">Create data</a>
                <a class="list-group-item" href="#">
                    <h4 class="list-group-item-heading">First data</h4>
                    <p class="list-group-item-text">category</p>
                </a>
            </div>
        </div>
    </div>
@endsection