<label for="">Status</label>
<select name="status" class="form-control">
    @if(empty($article))
        <option value="0">Disabled</option>
        <option value="1">Enabled</option>
    @else
        <option value="0" @if($article->status == 0) selected="" @endif>Disabled</option>
        <option value="1" @if($article->status == 1) selected="" @endif>Enabled</option>
    @endif
</select>

<label for="">Subject</label>
<input type="text" class="form-control" name="subject" value="{{$article->subject or ''}}" required>

@if(!empty($article))
    <label for="">Hash</label>
    <input type="text" class="form-control" name="hash" value="{{$article->hash}}" readonly="">
    @else
    <input type="hidden" class="form-control" name="hash" value="">
@endif

<label for="">Categories</label>
<select name="categories[]" class="form-control" multiple="">
    @include('admin.article.partials.categoryDropDown', ['categories' => $categoryList])
</select>

<label for="">Description</label>
<textarea name="description" id="description" class="form-control">
    {{$article->description or ''}}
</textarea>

<label for="">Content</label>
<textarea name="text" id="text" class="form-control">
    {{$article->text or ''}}
</textarea>

<label for="">Meta title</label>
<input type="text" class="form-control" name="meta_title" value="{{$article->meta_title or ''}}">

<label for="">Meta description</label>
<input type="text" class="form-control" name="meta_description" value="{{$article->meta_description or ''}}">

<label for="">Meta tags</label>
<input type="text" class="form-control" name="meta_tags" value="{{$article->meta_tags or ''}}">

<hr />
<input type="submit" class="btn btn-primary" value="Ok">