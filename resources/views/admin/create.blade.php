<div class="col-md-12">
    <div class="editor col-md-10 col-md-offset-1">
        <h2>Write your post</h2>
        <input type="hidden" class="form-control" id="editor_id">
        <div class="form-group editor_part">
            <label for="editor_title">Title</label>
            <input type="text" class="form-control" id="editor_title">
        </div>
        <div class="form-group editor_part">
            <label for="editor_category">Category</label>
            <select class="editor_category form-control" id="editor_category">
                @foreach($categories as $category)
                <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
            </select>
        </div>

        <textarea name="posteditor" id="editor_desc" rows="20" cols="100"></textarea>

        <div class="form-group editor_part">
            <label for="editor_tags">Tags</label>
            <input type="text" class="form-control" id="editor_tags" name="editor_tags" value="">
        </div>

        <div class="post_button col-md-4 col-md-offset-4">
            <a data-link="{{route('post.write')}}" id="post_submit"><input type="button" class="btn btn-default pull-right" name="submit" value="Submit"/></a>
            <input type="button" class="btn btn-default" id="back" name="cancel" value="Cancel">
        </div>
    </div>
</div>