$(document).ready(function(){
});
    function addrow(){

        var tables = $('.addky');

        var addtr = $(
            "<div class='input-group mb-3'>"+
            "<div class='input-group-prepend'>"+
            "<span class='input-group-text'>替换"+
            "</span>"+
            "</div>"+
            "<input type='text' class='form-control' placeholder='变量名称' name='key[]'>"+
            "<input type='text' class='form-control' placeholder='变量值' name='val[]'>"+
            "</div>");

        addtr.appendTo(tables);

    }

