$(document).ready(function(){

    let $ajaxStatus             = $("[name = change-ajax-status]");
    let $ajaxContact            = $("[name = change-ajax-contact]");
    let $ajaxOrdering           = $("input[name = change-ajax-ordering]");
    let $ajaxSelectArttribute   = $("[name = select_change_attr]");

    $ajaxStatus.click(function(){
        let url      = $(this).data("url") ;
        let element  = $(this) ;
        callAjax(url,element,'status');
    });

    $ajaxContact.click(function(){
        let url      = $(this).data("url") ;
        let element  = $(this) ;
        callAjax(url,element,'contact');
    });

    $ajaxOrdering.on("change" ,function(){
        let url      = $(this).data("url").replace("new_value",$(this).val()) ;
        let element  = $(this) ;
        callAjax(url,element,'ordering');
    });
    $ajaxSelectArttribute.on("change" ,function(){
   
        let url   = $(this).data("url").replace("new_value",$(this).val()) ;
        let element  = $(this) ;
        callAjax(url,element,'select');
    });


    
    function callAjax(url,element,type){
        $.ajax({
            url : url ,
            type: "GET",
            dataType: "json",
            success: function (result) {
                if(result){
                    switch(type){
                        case 'status' :
                            element.text(result.name) ;
                            element.removeClass();
                            element.addClass(result.class) ;
                            element.data('url',result.link); //
                            notify(element, result.message);
                        case 'contact' :
                            element.text(result.name) ;
                            element.removeClass();
                            element.addClass(result.class) ;
                            element.data('url',result.link); //
                            notify(element, result.message);
                        case 'ordering' :
                            notify(element, result.message);
                        case 'select' :
                            notify(element, result.message);
                    }
                }else{
                    console.log(result);
                }    
            }
        });
    }
    function notify(element,message){
        $(element).notify(
           ''+message+'' , {className: "success", position: "top", autoHideDelay: 1000, }
        );
    }

}) ;