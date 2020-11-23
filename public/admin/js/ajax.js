$(document).ready(function(){

    let $ajaxStatus             = $("[name = change-ajax-status]");
    let $ajaxContact            = $("[name = change-ajax-contact]");
    let $ajaxOrdering           = $("input[name = change-ajax-ordering]");
    let $ajaxSelectArttribute   = $("[name = select_change_attr]");
    let $ajaxValueCoupon        = $("[name = type_coupon]");
    // Change Ajax Status
    $ajaxStatus.click(function(){
        let url      = $(this).data("url") ;
        let element  = $(this) ;
        callAjax(url,element,'status');
    });
    // Change Ajax Contact in route contact
    $ajaxContact.click(function(){
        let url      = $(this).data("url") ;
        let element  = $(this) ;
        callAjax(url,element,'contact');
    });
    // Change Ordering 
    $ajaxOrdering.on("change" ,function(){
        let url      = $(this).data("url").replace("new_value",$(this).val()) ;
        let element  = $(this) ;
        callAjax(url,element,'ordering');
    });
    // Change SelectBox
    $ajaxSelectArttribute.on("change" ,function(){
        let url   = $(this).data("url").replace("new_value",$(this).val()) ;
        console.log(url);
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
                        case 'coupon' :
                            $("#value").find('option').remove();
                            $.each(result,function(key, value)
                            {
                                $("#value").append('<option value=' + key + '>' + value + '</option>') ; 
                            });

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

