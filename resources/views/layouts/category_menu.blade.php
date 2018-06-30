@foreach ($categories as $category)
    @if($category->getChildren->where('status', 1)->count())
        <li class="dropdown">
            <a href="{{url('/blog/category/'.$category->hash)}}" class="dropdown-toggle"
               data-toggle="dropdown" role="button" aria-expanded="false">
                {{$category->title}} <span class="caret"></span>
            </a>
            <ul class="dropdown-menu" role="menu">
                @include('layouts.category_menu', ['categories'=> $category->getChildren])
            </ul>
        </li>
    @else
        <li>
            <a href="{{url('/blog/category/'.$category->hash)}}">
                {{$category->title}}
            </a>
        </li>
    @endif
@endforeach