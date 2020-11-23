$(document).ready(function() {
   tab();
   tab1();
   tab2();
});
function tab() {
    $('.tab_content').hide();
    $('.tab_content:first').show();
    $('.tab_nav li a:first').addClass('active');
    $('.tab_nav li a').click(function(){
       var  id_content = $(this).attr("href"); 
       $('.tab_content').hide();
       $(id_content).show();
       $('.tab_nav li a').removeClass('active');
       $(this).addClass('active');
       return false;
    });

}
function tab1() {
    $('.tab_nav1').parents('.sp_nb').find('.tab_content1').hide();
    $('.tab_nav1').parents('.sp_nb').find('.tab_content1:first').show();
    $('.tab_nav1').parents('.sp_nb').find('.tab_nav1 li:first').addClass('active');
    $('.tab_nav1 li a').click(function(){
       var  id_content1 = $(this).attr("href"); 
       $(this).parents('.sp_nb').find('.tab_content1').hide();
       $(id_content1).show();
       $(this).parents('.sp_nb').find('li').removeClass('active');
       $(this).parent().addClass('active');
       return false;
    });

}
function tab2() {
    $('.tab_content2').hide();
    $('.tab_content2:first').show();
    $('.tab_nav2 li a:first').addClass('active');
    $('.tab_nav2 li a').click(function(){
       var  id_content = $(this).attr("href"); 
       $('.tab_content2').hide();
       $(id_content).show();
       $('.tab_nav2 li a').removeClass('active');
       $(this).addClass('active');
       return false;
    });

}