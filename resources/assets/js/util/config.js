//var ajaxConfig = function (){
//    $.ajaxSetup({
//        headers: {
//            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//        }
//    });
//};
//
//module.exports.ajaxConfig = ajaxConfig; //nodejs에서 외부 모듈 만드는 방식. app.js에서 require로 불러온다.

var ajaxConfig = function (){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
        }
    });
};

module.exports.ajaxConfig = ajaxConfig; //nodejs에서 외부 모듈 만드는 방식. app.js에서 require로 불러온다.