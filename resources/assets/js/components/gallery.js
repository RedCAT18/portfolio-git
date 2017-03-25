
var gallery = {

    newPost : {},

    openForm : function(){
        let url = $('#create_post').attr('data-link'); //url에서 data-link속성의 값을 얻어옴 : <a data-link="{{route('test')}}"> - data-link는 custom data attributes
        $.get(url, {}, function(response){ //get함수를 통해 url(위에서 data-link값 받아온 것)의 응답을 보낸다
            if(response.success == 1) { //응답의 success값이 1일 경우 (TestController에서 넘어옴)

                $('.screenPanel').html(response.data.html);
                CKEDITOR.replace( 'posteditor' );
            }
        });

        $(document).on('click', '#post_submit', function(){
            post.postUpolad();
        });

    },


    init : function(){
        $(document).on('click','#create_post',function(){
            gallery.openForm();
        });

    }
}

$('#admin_gallery').click(function(){
    gallery.init();
});
