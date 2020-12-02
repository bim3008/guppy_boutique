$(document).ready(function () {

    $('.btn-subscribe').click(function (e) { 
        e.preventDefault();
        subscribe   = $("input[name = subscribe]").val();
        url         = $(this).data("url");
        url         = url.replace("new_value", subscribe);
        console.log(url);
        $.ajax({
            url: url,
            type: "GET",
            dataType: "json",
            success: function (result) {
                $(".alert-success").text(result.message);
                $("input[name = subscribe]").val("");
            }
        })
    }); 

});