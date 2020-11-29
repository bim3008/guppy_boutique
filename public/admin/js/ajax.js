$(document).ready(function () {

    let $ajaxStatus = $("[name = change-ajax-status]");
    let $ajaxContact = $("[name = change-ajax-contact]");
    let $ajaxOrdering = $("input[name = change-ajax-ordering]");
    let $ajaxSelectArttribute = $("[name = select_change_attr]");
    let $ajaxChangeCategoryNested = $("[name = category_id]");
    let $ajaxIsHome = $("[name = change-ajax-isHome]");
    let $ajaxTag = $('#tag');
    let $ajaxAttrChangePrice = $('#attribute-group-change-price');
    let $removeRow = $("[name = remove-row]");
    // Change Ajax Status
    $ajaxStatus.click(function () {
        let url = $(this).data("url");
        let element = $(this);
        callAjax(url, element, 'status');
    });

    $ajaxIsHome.click(function () {
        let url = $(this).data("url");
        let element = $(this);
        callAjax(url, element, 'status');
    });
    // Change Ajax Contact in route contact
    $ajaxContact.click(function () {
        let url = $(this).data("url");
        let element = $(this);
        callAjax(url, element, 'contact');
    });
    // Change Ordering 
    $ajaxOrdering.on("change", function () {
        let url = $(this).data("url").replace("new_value", $(this).val());
        let element = $(this);
        callAjax(url, element, 'ordering');
    });
    // Change SelectBox
    $ajaxSelectArttribute.on("change", function () {
        let url = $(this).data("url").replace("new_value", $(this).val());
        let element = $(this);
        callAjax(url, element, 'select');
    });

    $ajaxChangeCategoryNested.on("change", function () {
        let url = $(this).data("url").replace("new_value", $(this).val());
        let element = $(this);
        callAjax(url, element, 'select');
    });

    
    function callAjax(url, element, type) {
        $.ajax({
            url: url,
            type: "GET",
            dataType: "json",
            success: function (result) {
                if (result) {
                    switch (type) {
                        case 'status':
                            element.text(result.name);
                            element.removeClass();
                            element.addClass(result.class);
                            element.data('url', result.link); //
                            notify(element, result.message);
                            case 'contact':
                                element.text(result.name);
                                element.removeClass();
                                element.addClass(result.class);
                                element.data('url', result.link); //
                                notify(element, result.message);
                                case 'ordering':
                                    notify(element, result.message);
                                    case 'select':
                                        notify(element, result.message);
                                        case 'coupon':
                                            $("#value").find('option').remove();
                                            $.each(result, function (key, value) {
                                                $("#value").append('<option value=' + key + '>' + value + '</option>');
                                            });
                                            
                                        }
                                    } else {
                                        console.log(result);
                                    }
                                }
                            });
                        }
    function notify(element, message) {
        $(element).notify(
            '' + message + '', { className: "success", position: "top", autoHideDelay: 1000, }
            );
    }

    // SELECT2 TAG
    $('.tag-select').select2();
        
    //AUTOCOMPLETE TAG
    // $ajaxTag.autocomplete({
    //     source: 'autocomplete',
    // })
        

    // KÉO THẢ INPUT THAY ĐỔI GIÁ
    $('.list-draggable').sortable();

    $('#attribute-group-change-price').on('change', function () {
        if ($(this).val() != 'default') {
            let text = $("#attribute-group-change-price option:selected").text();
            $('#attribute_name_label').html(text);
            $('.btn-add-attribute-price').css('display', 'unset');
            $.ajax({
                url: $(this).data('link'),
                type: "GET",
                dataType: "html",
                success: function (result) {
                    $('.price-list').html(result);
                    $('.btn-delete-price-row').on('click', function () {
                        let ele = $(this).parents('.price-row')
                        $(ele).hide('slow', function () { $(ele).remove(); });
                    })
                }
            })
        }
    })

    $('.btn-add-attribute-price').on('click', function () {
        $.ajax({
            url: $('#attribute-group-change-price').data('link'),
            type: "GET",
            dataType: "html",
            success: function (result) {
                $('.price-list').append(result);
                $('.btn-delete-price-row').on('click', function () {
                    let ele = $(this).parents('.price-row')
                    $(ele).hide('slow', function () { $(ele).remove(); });
                })
            }
        })
    })

    $('.btn-delete-price-row').on('click', function () {
        // $(this).parents('.price-row').remove();
        let ele = $(this).parents('.price-row')
        $(ele).hide('slow', function () { $(ele).remove(); });
    })

    // THUỘC TÍNH KHÔNG THAY ĐỔI GIÁ
    $('.attribute_group').on('change', function () {
        if ($(this).val() != 'default') {
            let url = $(this).data("link").replace("attribute_new", $(this).val());
            $.ajax({
                url: url,
                type: "GET",
                dataType: "json",
                success: function (result) {
                    console.log(result);
                    if (result.length > 1 ) {
                        $.each( result, function( key, value ) {
                            name = value;
                            xhtml = '<label id="attribute_name_label" class="label label-success attribute_name_label" style="font-size: 16px">'+name+'</label></br>';
                            $('.x_content_attribute').append(xhtml);
                        });
                    }else{
                        name = result[0];
                        $('.attribute_name_label').html(name);
                    }
                    // $('.price-list').html(result);
                    // $('.btn-delete-price-row').on('click', function () {
                    //     let ele = $(this).parents('.price-row')
                    //     $(ele).hide('slow', function () { $(ele).remove(); });
                    // })
                }
            })
        }
    })
});

//ADMIN - PRODUCT - ATTRIBUTE
function showName(url) {
    let id = $('#attribute-group').val();
    url = url.replace('attribute_new', id); // 
    $.get(url, function (data) {
        $('.new').remove();
        $.each(data, function (index, value) {
            let name = value;
            $('.x_content_attribute').after('<div class="form-group new" id="attr"><label  class="control-label col-md-3 col-sm-3 col-xs-12"> ' + value + '</label><div class="col-md-6 col-sm-6 col-xs-12"><input class="form-control col-md-6 col-xs-12  input-tags-attr" name="attribute[' + name + '][]" type="text" ></div></div>');
            $('.input-tags-attr').tagsInput();
        });
    }, 'json');
}


