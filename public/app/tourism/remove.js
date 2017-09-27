$(document).ready(function() {
    
    $('#form').on('submit', function (e) {
        e.preventDefault();
        var $form=$(this);
        var $btn = $('.form-submit');
        $btn.button('loading');
        $.ajax({
            type: "POST",
            url: $(this).attr('action'),
            data:new FormData(this),
            contentType: false,      
            cache: false,            
            processData:false,       
            success: function(msg) {
                console.log(msg);
                $btn.button('reset');
               if(msg.success){
                alertify.success(msg.infor[0]);
                setTimeout(function(){ window.location = "/admin/tourisms"; },500);
               }else{
                 if(msg.infor.length>0){
                     for(var i=0;i<msg.infor.length;i++)
                       alertify.error(msg.infor[i]);
                 }
              }
            }
        });
    });
});