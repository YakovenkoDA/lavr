@foreach($categories as $categoryItem)
    <option value="{{$categoryItem->id or ""}}"
            @isset($category->id)

                @if($category->parent_id == $categoryItem->id)
                selected=""
                @endif

                @if($category->id == $categoryItem->id)
                hidden=""
                @endif

            @endisset
    >{!! $delimiter or '' !!}{{$categoryItem->title or ""}}</option>

    @if(count($categoryItem->getChildren) > 0)
        @include('admin.category.partials.categoryDropDown', [
        'categories' => $categoryItem->getChildren,
        'delimiter' => ' - ' . $delimiter
        ])
    @endif
@endforeach