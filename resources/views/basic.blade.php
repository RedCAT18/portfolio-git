@extends('index')

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
                    <hr>
                    <p class='first_line'><span class='big_text'>Hi</span>, I am <span class='heavy_text'>Erica</span>, Kayoung Seo.</p>
                    <hr>
                    <p class='second_line'>Beginner Web Developer, Designer, Illustrator</p>
                    <p class='third_line'>Gamer, Fangirl, SNS addict</p>
                    <hr>
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
                <div class="career">
                    <hr>
                    <h3 class='heavy_text'>Concept Designer</h3>
                    <p class='indent'> <b>Softaction</b>  (May. 2007 ~April. 2008)</p>
                    <p class='indent'> Design game characters, enviromnent, interface</p>
                </div>
                <div class="career">
                    <hr>
                    <h3 class='heavy_text'>Illustrator</h3>
                    <p class='indent'> <b>Freelancer</b>  (2008 ~ )</p>
                    <p class='indent'> Drawing illust in wide range of fields</p>
                </div>
            </div>
        </section>
        <section class="footer col-md-8 col-md-offset-2">
            <div class="row">
                <div class="contact col-md-4">
                    <h3>Contact</h3>
                    <p>Tel. 021 083 00845</p>
                    <p>Email. akaineko18@gmail.com</p>
                    <p>Auckland. New Zealand</p>
                </div>
                <div class="contact col-md-4">
                    <h3>Follow Me</h3>
                    <ul class='sns'>
                        <li><a href="#"><img src="assets/images/twitter-logo-button.png" alt="Twitter"></a></li>
                        <li><a href="#"><img src="assets/images/facebook-logo-button.png" alt="Facebook"></a></li>
                        <li><a href="#"><img src="assets/images/instagram-logo.png" alt="Instagram"></a></li>
                        <li><a href="#"><img src="assets/images/tumblr-logo-button.png" alt="Tumblr"></a></li>
                    </ul>
                </div>
                <div class="download col-md-push-4">
                    <h3>Download CV</h3>
                    <a href="#"><span class="cv_icon glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> English <br />
                    <a href="#"><span class="cv_icon glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> Korean
                </div>
            </div>
        </section>


@endsection