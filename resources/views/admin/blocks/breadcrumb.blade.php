<h2>{{$title}}</h2>
<ol class="breadcrumb">
    <li>
        <a href="{{route('admin.index')}}">{{$parent}}</a>
        <i class="fa fa-caret-right"> </i>
    </li>
    <li class="active">{{$active}}</li>
</ol>