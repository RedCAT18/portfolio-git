@extends('layouts.app')

@section('content')

    <div class="bodyPanel">
        <div class="indexBody">
            <section class='first_sect col-md-10 col-md-offset-1'>
                <div class="col-md-10 col-md-offset-1 center_text">
                    <p>Now, you can see</p>
                    <p>What I do</p>
                    <p>and</p>
                    <p>Who I am</p>
                </div>
            </section>
            <section class='second_sect col-md-12'>
                <div class="work_title">
                    <h1 class="big_text">Who I am </h1>
                </div>
                <div class="row">
                    <div class="col-md-8 aboutMe">
                        @foreach($profile as $pf)
                        <hr>
                        <p class='first_line'><span class='big_text'>Hi</span>, I am <span class='heavy_text'>{{$pf->name}}</span></p>
                        <hr>
                        {{--<p class='second_line'>Beginner Web Developer, Designer, Illustrator</p>--}}
                        <p class='third_line'>{{$pf->about}}</p>
                        <hr>
                        @endforeach
                    </div>
                    <div class="col-md-4 mePhoto">
                        <img src="assets/images/me.jpg" width='400' alt="Photo of myself">
                    </div>
                </div>
            </section>
            <section class="third_sect col-md-8 col-md-offset-2">
                <div class="work_title">
                    <h1 class="big_text">What I do</h1>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <a href="#" class="thumbnail">
                            <img src="assets/images/thumb.jpg" alt="thumbnail test">
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="#" class="thumbnail">
                            <img src="assets/images/thumb.jpg" alt="thumbnail test">
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="#" class="thumbnail">
                            <img src="assets/images/thumb.jpg" alt="thumbnail test">
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <a href="#" class="thumbnail">
                            <img src="assets/images/thumb.jpg" alt="thumbnail test">
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="#" class="thumbnail">
                            <img src="assets/images/thumb.jpg" alt="thumbnail test">
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="#" class="thumbnail">
                            <img src="assets/images/thumb.jpg" alt="thumbnail test">
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <a href="#" class="thumbnail">
                            <img src="assets/images/thumb.jpg" alt="thumbnail test">
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="#" class="thumbnail">
                            <img src="assets/images/thumb.jpg" alt="thumbnail test">
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="#" class="thumbnail">
                            <img src="assets/images/thumb.jpg" alt="thumbnail test">
                        </a>
                    </div>
                </div>
            </section>
            <section class="second_sect col-md-12">
                <div class="work_title">
                    <h1 class="big_text">What I did</h1>
                </div>
                <div class="col-md-8 col-md-offset-2">
                    @foreach($careers as $career)
                    <div class="career">
                        <hr>
                        <h3 class='heavy_text'>{{$career->name}}</h3>
                        <p class='indent'> <b>{{$career->position}}</b>  ({{$career->period}})</p>
                        <p class='indent'> {{$career->description}}</p>
                    </div>
                    @endforeach
                </div>
            </section>
            <section class="footer col-md-8 col-md-offset-2">
                <div class="row">
                    <div class="contact col-md-4">
                        @foreach($profile as $pf)
                        <h3>Contact</h3>
                        <p>Tel. {{$pf->phone}}</p>
                        <p>Email. {{$pf->email}}</p>
                        <p>Auckland. New Zealand</p>
                    </div>
                    <div class="contact col-md-4">
                        <h3>Follow Me</h3>
                        <ul class='sns'>
                            <li><a href="{{$pf->myTwitter}}" target="_blank"><img src="assets/images/twitter-logo-button.png" alt="Twitter"></a></li>
                            <li><a href="{{$pf->myFacebook}}" target="_blank"><img src="assets/images/facebook-logo-button.png" alt="Facebook"></a></li>
                            <li><a href="{{$pf->myInstagram}}" target="_blank"><img src="assets/images/instagram-logo.png" alt="Instagram"></a></li>
                            <li><a href="{{$pf->myTumblr}}" target="_blank"><img src="assets/images/tumblr-logo-button.png" alt="Tumblr"></a></li>
                        </ul>
                        @endforeach
                    </div>
                    <div class="download col-md-push-4">
                        <h3>Download CV</h3>
                        <a href="{{url('docs/CV_en')}}#"><span class="cv_icon glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> English <br />
                        <a href="#"><span class="cv_icon glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> Korean
                    </div>
                </div>
            </section>
        </div>
    </div>

@endsection
