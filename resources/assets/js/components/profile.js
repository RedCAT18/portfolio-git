var profile = {

    newProf : {}, // 프로필 정보를 받아올 오브젝트

    getValue : function(){
        //newProf에 화면에서 받아온 폼 정보 집어넣기
        profile.newProf.name = $('#myname').val();
        profile.newProf.about = $('#aboutMe').val();
        profile.newProf.phone = $('#myphone').val();
        profile.newProf.email = $('#myemail').val();
        profile.newProf.myTwitter = $('#mytwitter').val();
        profile.newProf.myFacebook = $('#myfacebook').val();
        profile.newProf.myInstagram = $('#myinstagram').val();
        profile.newProf.myTumblr = $('#mytumblr').val();

        return profile.newProf;
    },

    update : function(){
        let url = $('#update_profile').attr('data-link');

        $.post(url, profile.newProf, function(response){
            if(response.success == 1) { //응답의 success값이 1일 경우 (TestController에서 넘어옴)
                console.log(response);
                $('.screenPanel').html(response.data.html);//html파일로 넘어온다. screenPanel클래스 부분에 넘어온 응답을 html형태로 출력. (TestController에서 결과값을 Array형태(ajax)로 받아옴.)
            }
        })
    },

    init: function(){
        $(document).on('click', '#update_profile', function(event){
            alert('done!');
            profile.getValue();
            profile.update();
        });
    }
};

$('#admin_profile').on('click', function() {
    profile.init();
});
