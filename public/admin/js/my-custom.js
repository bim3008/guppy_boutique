//  function changeAjaxStatus(url) {
//       $.ajax({
//          url: url,
//          type: "GET",
//          dataType: "json",
//          cache: false,
//          success: function (data, status) {
//             var element       = 'a#status-' + data[0];
//             var classRemove   = 'btn btn-round btn-info';
//             var classAdd      = 'btn btn-round btn-success';
//             var nameTag       = 'Kích hoạt';
//             if (data[1] == 'inactive') {
//                classRemove   = 'btn btn-round btn-success';
//                classAdd      = 'btn btn-round btn-info';
//                var nameTag    = 'Chưa kích hoạt';
//             }
      
//             $(element).attr('href', "javascript:changeAjaxStatus('" + data[2] + "')");
//             $(element).removeClass(classRemove).addClass(classAdd);
//             $(element).html(nameTag);
//             console.log(element);
//             // NOTIFY
//             $(element).notify(
//                "Cập nhật Trạng thái thành công!", 
//                {className: "success", position: "top", autoHideDelay: 1000}
//             );
//          },
//          complete: refreshPage,
//       });
// }

// function ajaxChangeOrdering(url, id){
//    var newValue   = $('#ordering-' + id).val(); // giá trị mới ở input
//    var url        = url.replace('value_new', newValue); // gắn giá trị mới ở link, template.php
//    $.ajax({
//       url: url,
//       type: "GET",
//       dataType: "json",
//       cache: false,
//       success: function (data, status) {
//          var element    = $('#ordering-' + data[0]);
//          $(element).attr('href', "javascript:ajaxChangeOrdering('" + data[2] + "')");

//          // NOTIFY
//          $(element).notify(
//             "Cập nhật Ordering thành công!", 
//             {className: "success", position: "top", autoHideDelay: 1000}
//          );
//       },
//    });
// }

// function ajaxChangeParent(url, id){
//    var newValue   = $('#parent-' + id).val(); // giá trị mới ở input
//    var url        = url.replace('value_new', newValue); // gắn giá trị mới ở link, template.php
//    $.ajax({
//       url: url,
//       type: "GET",
//       dataType: "json",
//       cache: false,
//       success: function (data, status) {
//          var element    = $('#parent-' + data[0]);
//          $(element).attr('href', "javascript:ajaxChangeParent('" + data[2] + "')");

//          // NOTIFY
//          $(element).notify(
//             "Cập nhật Parent ID thành công!", 
//             {className: "success", position: "top", autoHideDelay: 1000}
//          );
//       },
//    });
// }

// function ajaxChangeDisplay(url, id){
//    // console.log(url);
//    // var newValue   = $('option#display-' + id).val();                   // giá trị mới ở input
//    // var url        = $(this).data('url');  // gắn giá trị mới ở link, template.php
//    // console.log(url);
//    // let selectValue = $(this).val();
// 	// 	let url = $(this).data('url');
//    // $.ajax({
//    //    url: url,
//    //    type: "GET",
//    //    dataType: "json",
//    //    cache: false,
//    //    success: function (data, status) {
//    //       var element    = $('#ordering-' + data[0]);
//    //       $(element).attr('href', "javascript:ajaxChangeOrdering('" + data[2] + "')");

//    //       // NOTIFY
//    //       $(element).notify(
//    //          "Cập nhật Ordering thành công!", 
//    //          {className: "success", position: "top", autoHideDelay: 1000}
//    //       );
//    //    },
//    // });
// }

// function refreshPage(){
//    setInterval("location.reload()", 3000);
// }

// function changeSelect(url, id) {
//    let valueName = $('#select-' + id).val();
//    url = url.replace('value_new', valueName);
//    $.get(url, function(data) {
//       console.log(data);
//        var element = '#select-' + id;
//        $(element).notify(
//            "Cập nhập thành công", {className: "success", position: "top", autoHideDelay: 1000, }
//        );
//    }, 'json');
// }

// function changeSelectTypeOpen(url, id) { // 
//    let valueName = $('#selectTypeOpen-' + id).val(); //id 
//    url = url.replace('value_new', valueName); // 
//    $.get(url, function(data) { //yd 
//        var element = '#selectTypeOpen-' + id;
//        $(element).notify(
//            "Cập nhập thành công", {className: "success", position: "top", autoHideDelay: 1000, }
//        );
//    }, 'json');
// }
// var slug = function(str) {
//    str = str.replace(/^\s+|\s+$/g, ''); // trim
//    str = str.toLowerCase();
 
//    // remove accents, swap ñ for n, etc
//    var from = "ÁẤẦÄÂÀÃÅČÇĆĎÉĚËÈÊẼĔȆĞÍÌÎÏİŇÑÓÖÒÔÕØŘŔŠŞŤÚŮÜÙÛÝŸŽắấáäâàãåčçćďéěëèêẽĕȇğíìîïıňñóöòôõøðřŕšşťúůüùûýÿžþÞĐđßÆa·/_,:;";
//    var to   = "AAAAAAAACCCDEEEEEEEEGIIIIINNOOOOOORRSSTUUUUUYYZaaaaaaaacccdeeeeeeeegiiiiinnooooooorrsstuuuuuyyzbBDdBAa------";
//    for (var i=0, l=from.length ; i<l ; i++) {
//      str = str.replace(new RegExp(from.charAt(i), 'g'), to.charAt(i));
//    }
 
//    str = str.replace(/[^a-z0-9 -]/g, '') // remove invalid chars
//      .replace(/\s+/g, '-') // collapse whitespace and replace by -
//      .replace(/-+/g, '-'); // collapse dashes
 
//    return str;
//  };
// function showName(url){
//    let count = 0 ;
//    let id = $('#attribute-group').val();
//    url = url.replace('attribute_new', id); // 

//       $.get(url, function(data) { 
//       // $('#attribute-group').attr("disabled",true);;
//          $.each(data, function(key , value) {
//             let name = slug(value) ;
//             $('.x_content_attribute').append('<div class="form-group"><label for="name" class="control-label col-md-3 col-sm-3 col-xs-12"> '+ value +'</label><div class="col-md-6 col-sm-6 col-xs-12"><input class="form-control col-md-6 col-xs-12" name="attribute['+name+'][]" type="text" id="tags'+count+'"></div></div>')
//             $('#tags'+count+'').tagsInput({
//             });
//             count ++ ;
//          }); 
//    }, 'json');
   
// }
// function tag(){
//    ('#tags').tagsInput({
//    });
// }

// //=======CHANGE - CODE - FORM/COUPON=====
// $("a#change-code").click(function(e) {
//    let valueRandoom   = Math.random().toString(36).substr(2, 10);
//    var name           = $("input[name=code]").val(valueRandoom);
//  });
$( document ).ready(function() {
    
    $('#combostar').combostars({
        starUrl:'../../../admin/img/stars.png',
        starWidth: 16,
        starHeight: 15,
        clickMiddle:true
        
     });
        
    $('#combostar').on('change',function () {
        $('#starcount').text($(this).val());
    });
});


