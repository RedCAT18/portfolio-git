{{--blog--}}
<div class="blog_admin col-md-12">
    <div class="blog_admin_title col-md-12">
        <h2>Blog Post Edit</h2>
    </div>
    <div class="blog_table">
        <table class="table table-condensed">
            <thead class="work_through">
                <th>No.</th>
                <th>Title</th>
                <th>Category</th>
                <th>Created at</th>
                <th>Edit</th>
                <th>Delete</th>
            </thead>
            <tbody class="work_through">
                @foreach($posts as $post)
                <tr>
                    <td class="post_id">{{$post->id}}</td>
                    <td class="post_title">{{$post->title}}</td>
                    <td class="post_category">{{$post->category->name}}</td>
                    <td class="post_desc">{{$post->created_at}}</td>
                    <td class="post_edit_btn" data-link="{{route('post.edit', $post->id)}}"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></td>
                    <td class="post_delete_btn"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="btn btn-default" id="open_category" data-link="{{route('category')}}">
            Edit Category
        </div>
        <div class="btn btn-primary pull-right" id="create_post" data-link="{{route('create')}}">
            Create New Post
        </div>
    </div>
</div>

{{--<!-- modal for category edit-->--}}
<div class="modal fade" id='edit_cate' tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Modal title</h4>
            </div>
            <div class="modal-body">
                <table class="table table-hover">
                    <thead>
                        <th>No.</th>
                        <th>Name</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </thead>
                    <tbody>
                        @foreach($categories as $category)
                        <tr class="category_row">
                            <td class="category_id">{{$category->id}}</td>
                            <td class="category_name">{{$category->name}}</td>
                            <td class="category_edit" data-link="{{route('category.create')}}"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></td>
                            <td class="category_delete" data-link="{{route('category.delete', $category->id)}}"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></td>
                        </tr>
                        @endforeach
                        <tr>
                            <td></td>
                            <td><input type="text" id="new_category_name"></td>
                            <td data-link="{{route('category.create')}}" class="add_category"><span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                {{--<button type="button" class="btn btn-primary">Save changes</button>--}}
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->