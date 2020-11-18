// RAMDOM
function ramdom(length) {
    var result           = '';
    var characters       = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
    var charactersLength = characters.length;
    for ( var i = 0; i < length; i++ ) {
       result += characters.charAt(Math.floor(Math.random() * charactersLength));
    }
    return result;
}
//=======CHANGE - CODE - FORM/COUPON=====
$("a#change-code").click(function(e) {
   let valueRandoom   =  ramdom(10)   ;
   var name           = $("input[name=code]").val(valueRandoom);
 });
 // DISPLAY STAR
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


