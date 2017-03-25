
//when create

//0. when submit.
//1. find node of input
//2. get values
//3. send data to server
var newCareer = {
    career : {},
    addCareer : function(){
        let url= $('#career_submit').attr('data-link');

        $.post(url, newCareer.career , function(response){

            if(response.success == 1) { //응답의 success값이 1일 경우 (TestController에서 넘어옴)
                //console.log(response);
                $('.screenPanel').html(response.data.html);//html파일로 넘어온다. screenPanel클래스 부분에 넘어온 응답을 html형태로 출력. (TestController에서 결과값을 Array형태(ajax)로 받아옴.)
            }
        });
    },

    putData: function(url, id){
        $.get(url, id, function(response){
            //console.log(response);
            $('#career_id').val(response.id);
            $('#career_name').val(response.name);
            $('#career_position').val(response.position);
            $('#career_period').val(response.period);
            $('#career_desc').val(response.description);

            $('#modal_career').modal('show');
        })
    },

    getData: function() {
        newCareer.career.id = $('#career_id').val();
        newCareer.career.name = $('#career_name').val();
        newCareer.career.position = $('#career_position').val();
        newCareer.career.period = $('#career_period').val();
        newCareer.career.desc = $('#career_desc').val();

        return newCareer.career;
    },

    deleteData: function(url, id) {
        $.post(url, id, function(response){
            if(response.success == 1) { //응답의 success값이 1일 경우 (TestController에서 넘어옴)
                //console.log(response);
                $('.screenPanel').html(response.data.html);//html파일로 넘어온다. screenPanel클래스 부분에 넘어온 응답을 html형태로 출력. (TestController에서 결과값을 Array형태(ajax)로 받아옴.)
            }
        })
    },

    init: function(){

        $(document).on('click','#career_submit',function(){    //blade가 로딩 되기 전에 js가 먼저 로딩되서 스크립트가 엘리먼트에 걸리지 않음 대환장쇼..........
            newCareer.getData();
            newCareer.addCareer();

            $('#modal_career').modal('hide');
            $('.modal-backdrop').remove();
        });
        $(document).on('click','.career_edit_btn', function(){
            let url= $(this).attr('data-link');
            let id = $(this).siblings('.career_list_Id').text();

           newCareer.putData(url, id);
        });

        $(document).on('click', '.career_delete_btn', function(){
            let url=$(this).attr('data-link');
            let id = $(this).siblings('.career_list_Id').text();

            newCareer.deleteData(url, id);
        });
    }

}

$('#admin_career').click(function(){
    newCareer.init();
});

