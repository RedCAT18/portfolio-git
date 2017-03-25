
<div class="profile col-md-12" id="pBody">
    <h2>Profile Edit</h2>
    <div class="row">
        @foreach($profile as $pf)
        <div class="col-md-6">
            <div class="form-group">
                <label for="myname">Name</label>
                <input type="text" class="form-control" id="myname" value="{{$pf->name}}">
             </div>
             <div class="form-group">
                <label for="myprofile">Profile</label>
                <textarea class="form-control" name="myprofile" id="aboutMe" rows="10">{{$pf->about}}</textarea>
             </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="myphone">Phone</label>
                <input type="text" class="form-control" id="myphone" value="{{$pf->phone}}">
            </div>
            <div class="form-group">
                <label for="myemail">Email</label>
                <input type="email" class="form-control" id="myemail" value="{{$pf->email}}">
            </div>
            <div class="form-group">
                <label for="mysns">SNS</label>
                <input type="text" class="form-control mysns" id="mytwitter" value="{{$pf->myTwitter}}">
                <input type="text" class="form-control mysns" id="myfacebook" value="{{$pf->myFacebook}}">
                <input type="text" class="form-control mysns" id="myinstagram" value="{{$pf->myInstagram}}">
                <input type="text" class="form-control mysns" id="mytumblr" value="{{$pf->myTumblr}}">
            </div>
        </div>
        @endforeach
        <button class='btn btn-primary pull-right' data-link="{{route('profile.update')}}" id="update_profile">Edit</button>
    </div>
</div>
