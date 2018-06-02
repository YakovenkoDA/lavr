@foreach($categories as $category)
    <option value="{{$category->id or ""}}"
        @isset($article->id)
            @foreach($article->categories as $related)
                @if($category->id == $related->id)
                    selected="selected"
                @endif
            @endforeach
        @endisset
    >{!! $delimiter or '' !!}{{$category->title or ""}}</option>

    @if(count($category->getChildren) > 0)
        @include('admin.article.partials.categoryDropDown', [
        'categories' => $category->getChildren,
        'delimiter' => ' - ' . $delimiter
        ])
    @endif
@endforeach