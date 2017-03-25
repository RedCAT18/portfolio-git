{{--work--}}
<div class="work_admin col-md-12">
    <div class="work_admin_title col-md-12">
        <h2>Work Edit</h2>
    </div>
    <div class="work_table">
        <table class="table table-condensed">
            <thead class="work_through">
                <th>No.</th>
                <th>Title</th>
                <th>Created at</th>
                <th>Edit</th>
                <th>Delete</th>
            </thead>
            <tbody class="work_through">
                <tr>
                    <td>1</td>
                    <td>ASDF</td>
                    <td>2017-01-30</td>
                    <td><a href="#"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a></td>
                    <td><a href="#"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>test</td>
                    <td>2017-01-30</td>
                    <td><a href="#"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a></td>
                    <td><a href="#"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
                </tr>
            </tbody>
        </table>
        <div class="btn btn-primary pull-right" id="create_post" data-link="{{route('create')}}">
            Create New Post
        </div>
    </div>
</div>