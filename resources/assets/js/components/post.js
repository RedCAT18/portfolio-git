
var post = {

    newPost : {},

    getData : function(){
        post.newPost.id = $('#editor_id').val();
        post.newPost.title = $('#editor_title').val();
        post.newPost.category = $('#editor_category').val();
        post.newPost.description = $('#editor_desc').text(); // 안먹힌다?!
        post.newPost.tags = $('#editor_tags').val();

        return post.newPost;
    },

    writePost : function(url){
        $.post(url, post.newPost, function(response){
            if(response.success == 1) { //응답의 success값이 1일 경우 (TestController에서 넘어옴)
                //console.log(response);
                $('.screenPanel').html(response.data.html);//html파일로 넘어온다. screenPanel클래스 부분에 넘어온 응답을 html형태로 출력. (TestController에서 결과값을 Array형태(ajax)로 받아옴.)
            }
        });
    },

    openForm : function(){
        let url = $('#create_post').attr('data-link'); //url에서 data-link속성의 값을 얻어옴 : <a data-link="{{route('test')}}"> - data-link는 custom data attributes
        $.get(url, {}, function(response){ //get함수를 통해 url(위에서 data-link값 받아온 것)의 응답을 보낸다
            if(response.success == 1) { //응답의 success값이 1일 경우 (TestController에서 넘어옴)

                $('.screenPanel').html(response.data.html);
                CKEDITOR.replace( 'posteditor', {
                    filebrowserUploadUrl: 'admin/image'
                });
            }
        });
    },

    editPost : function(url, id){
        $.get(url, id, function(response){
            if(response.success == 1){

                $('.screenPanel').html(response.data.html);
                CKEDITOR.replace( 'posteditor', {
                    filebrowserUploadUrl: 'admin/image'
                });
            console.log(response.data.post);
                $('#editor_id').val(response.data.post.id);
                $('#editor_title').val(response.data.post.title);
                $('#editor_category').val(response.data.post.category);
                $('#editor_desc').val(response.data.post.description);
                $('#editor_tags').val(response.data.post.tags);
            }
        });
    },


    init : function(){
        $(document).on('click','#create_post',function(){
            post.openForm();
        });
        $(document).on('click','#post_submit', function(){
            let url = $(this).attr('data-link');
            post.getData();
            post.writePost(url);
        });

        $(document).on('click','.post_edit_btn', function(){
            let url = $(this).attr('data-link');
            let id = $(this).siblings('.post_id').text();

            post.editPost(url, id);

        });
    }
}

$('#admin_post').click(function(){
    post.init();
});

