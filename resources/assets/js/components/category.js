
//when create

//0. when submit.
//1. find node of input
//2. get values
//3. send data to server

var category = {

    newCategory : {},

    getData : function(id){
        if(id) {
            category.newCategory.id = id;
            category.newCategory.name = $('.category_name_edit').val();
        } else {
            category.newCategory.name = $('#new_category_name').val();
        }
        return category.newCategory;

    },

    addCategory : function(url, id){
        $.post(url, category.newCategory, function(response){
            $('.screenPanel').html(response.data.html);
            $('#edit_cate').modal('hide');
            $('.modal-backdrop').remove();
            $('#edit_cate').modal('show');
        });
    },

    putData: function(url){

        $.get(url, {}, function(response){

            $('#edit_cate').modal('show');
        });
    },

    deleteCategory: function(url, id){
        $.post(url, id, function(response){
            if(response.success == 1) { //응답의 success값이 1일 경우 (TestController에서 넘어옴)
                //console.log(response);
                $('.screenPanel').html(response.data.html);
                $('#edit_cate').modal('hide');
                $('.modal-backdrop').remove();
                $('#edit_cate').modal('show');
            }
        })
    },

    init : function(){
        $(document).on('click','#open_category', function(){
            let url = $(this).attr('data-link');
            category.putData(url);
        });
        $(document).on('click','.add_category', function(){
            let url = $(this).attr('data-link');
            let id = $(this).siblings('.category_id').text();
            category.getData(id);
            category.addCategory(url, id);
        });
        $(document).on('click','.category_edit', function(){

            let name = $(this).siblings('.category_name').text();
            $(this).siblings('.category_name').html('<input type="text" class="category_name_edit"/>');
            $('.category_name_edit').val(name);

            $(this).attr("class","add_category");
        });
        $(document).on('click','.category_delete', function(){
            let id = $(this).siblings('.category_id').text();
            let url = $(this).attr('data-link');

            category.deleteCategory(url, id);
        });
    }
}

$('#admin_post').click(function(){
    category.init();
});
