<label for="">Status</label>
<select name="status" class="form-control">
    @if(empty($category))
        <option value="0">Disabled</option>
        <option value="1">Enabled</option>
    @else
        <option value="0" @if($category->status == 0) selected="" @endif>Disabled</option>
        <option value="1" @if($category->status == 1) selected="" @endif>Enabled</option>
    @endif
</select>

<label for="">Title</label>
<input type="text" class="form-control" name="title" value="{{$category->title or ''}}" required>

@if(!empty($category))
    <label for="">Hash</label>
    <input type="text" class="form-control" name="hash" value="{{$category->hash}}" readonly="">
    @else
    <input type="hidden" class="form-control" name="hash" value="">
@endif

<label for="">Parent category</label>
<select name="parent_id" class="form-control">
    <option value="0"></option>
    @include('admin.category.partials.categoryDropDown', ['categories' => $categoryList])
</select>

<hr />
<input type="submit" class="btn btn-primary" value="Ok">