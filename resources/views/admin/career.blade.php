{{--career--}}
<div class="profile col-md-12" id="cBody">
    <h2>Career Edit</h2>
    <div class="blog_table">
        <table class="table table-condensed">
            <thead class="work_through">
                <th>No.</th>
                <th>Company</th>
                <th>Position</th>
                <th>Period</th>
                <th>Edit</th>
                <th>Delete</th>
            </thead>
            <tbody class="work_through">
                @foreach($careers as $career)
                <tr>
                    <td class="career_list_Id">{{$career->id}}</td>
                    <td>{{$career->name }}</td>
                    <td>{{$career->position}}</td>
                    <td>{{$career->period}}</td>
                    <td data-link="{{route('career.edit', $career->id)}}" class="career_edit_btn"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></td>
                    <td data-link="{{route('career.delete',$career->id)}}" class="career_delete_btn"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="btn btn-primary pull-right" data-toggle="modal" data-target="#modal_career">
            Add New Career
        </div>
    </div>
</div>

<!-- modal for career edit-->
<div class="modal fade" id='modal_career' tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            {{--<input type="hidden" name="_token" value="{{ csrf_token() }}">--}}
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Add New Career</h4>
            </div>
            <div class="modal-body" id="career_input">
                <input type="hidden" class="form-control" id="career_id" value="">
                <div class="form-group">
                    <label for="career_name">Name</label>
                    <input type="text" class="form-control" id="career_name" value="">
                </div>
                <div class="form-group">
                    <label for="career_position">Position</label>
                    <input type="text" class="form-control" id="career_position" value="">
                </div>
                <div class="form-group">
                    <label for="career_period">Period</label>
                    <input type="text" class="form-control" id="career_period" value="">
                </div>
                <div class="form-group">
                    <label for="career_desc">Description</label>
                    <textarea class="form-control" id="career_desc" name="career_desc" rows="1"></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" data-link="{{route('career.create')}}" id="career_submit">Save</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->