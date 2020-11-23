
function smoothScrolling() 
{
  try {
    $.browserSelector();
    if ($("html").hasClass("chrome")) {
      $.smoothScroll();
    }
  }catch (err) {
  }
}


$(function(){
  smoothScrolling();
});


$(document).ready(function() {
  olw();
});
function olw()
{
  $("#slick").on('init', function () {
    $('.frame_images').css('opacity', '1');
  }); 
  $("#slick1").on('init', function () {
    $('.selectors').css('opacity', '1');
  }); 
  $('#slick1').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay:3000,
    arrows: false,
    fade: true,
    asNavFor: '#slick',
    pauseOnHover:true,
    infinite:true
  });
  $('#slick').slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    dots: false,
    centerMode: false,
    autoplay:3000,
    focusOnSelect: true,
    asNavFor: '#slick1',
    prevArrow: $('.prev_sub_news'),
    nextArrow: $('.next_sub_news'),
    pauseOnHover:true,
    focusOnSelect: true,
    infinite:true
  });
}

$(document).ready(function(e) {
  $(".img_capcha").click(function() {
    $(this).attr("src","captcha/captcha.php?"+(new Date()).getTime());
  });
  $(".img_capcha1").click(function() {
    $(this).attr("src","captcha/captcha1.php?"+(new Date()).getTime());
  });
  $('nav#menu').mmenu({
    extensions  : [ 'effect-slide-menu', 'pageshadow' ],
    searchfield : true,
    counters  : true,
    navbar    : {
      title   : 'Menu'
    },
    navbars   : [
    {
      position  : 'top',
      content   : [ 'searchfield' ]
    }, {
      position  : 'top',
      content   : [
      'prev',
      'title',
      'close'
      ]
    }
    ]
  });
});

$(document).ready(function() {
   $('body').on('click', 'input[name="size"]', function(event) {
    $(this).parents('.content_product').find('input[name="size_val"]').val($(this).val());
  });
  $('body').on('click', '.btndatmua', function(event) {
    var pid=$(this).attr('data-id');
    size=$(this).parents('.content_product').find('input[name="size_val"]').val();
    soluong=1;
    $.ajax ({
      type: "POST",
      url: "ajax/add_giohang.php",
      dataType : 'json',
      data: {pid:pid,soluong:soluong,size:size},
      success: function(result) { 
        $('.cart_top span').html(result.count);
        var myModal =new jBox('Confirm', {
          content: 'Sản phẩm này đã được thêm vào giỏ hàng của bạn',
          cancelButton: 'Tiếp tục mua hàng',
          confirmButton: 'Xem giỏ hàng',
          closeOnClick: 'body',
          closeButton: 'box',
          confirm: function () {
            window.location="gio-hang/";
          },

        });
        myModal.open();
      }
    });
  });

  $('body').on('click', '.a_addtocart', function(event) {
    var pid=$(this).attr('data-id');
    size='';
    soluong=1;
    $.ajax ({
      type: "POST",
      url: "ajax/add_giohang.php",
      dataType : 'json',
      data: {pid:pid,soluong:soluong,size:size},
      success: function(result) { 
        $('.cart_top span').html(result.count);
        var myModal =new jBox('Confirm', {
          content: 'Sản phẩm này đã được thêm vào giỏ hàng của bạn',
          cancelButton: 'Tiếp tục mua hàng',
          confirmButton: 'Xem giỏ hàng',
          closeOnClick: 'body',
          closeButton: 'box',
          confirm: function () {
            window.location="gio-hang/";
          },

        });
        myModal.open();
      }
    });
  });
  
  $('body').on('click', '.dem', function(event) {
    var soluong=$('.soluong_donhang').val();
    var type=$(this).attr('data-type');
    var id=$(this).attr('data-id');
    if(type=='cong')
    {
      soluong++;
      $('.soluong_donhang').val(soluong);
    }
    if(type=='tru')
    {
      if(soluong > 1)
      {
        soluong--;
        $('.soluong_donhang').val(soluong);
      }
    }
    
    $.ajax ({
      type: "POST",
      url: "ajax/ajax_soluong.php",
      dataType : 'json',
      data: {id:id,soluong:soluong},
      success: function(result) { 
       $('.tamtinh span').html(result.tonggia);
       $('.tongtien span').html(result.tongtien);
     }
   });
  });
});

function updownqty(type)
{
  var soluong=$('.soluong').val();
  if(type=='up')
  {
    soluong++;
    $('.soluong').val(soluong);
  }
  if(type=='down')
  {
    if(soluong > 1)
    {
      soluong--;
      $('.soluong').val(soluong);
    }
  }
}

$(document).ready(function() {
  $('.icon_timkiem').click(function(event) {
    if($('.timkiem_menu').hasClass('active1'))
    {
      $('.timkiem_menu').removeClass('active1');
      $('.timkiem').val('');
    }
    else
    {
      $('.timkiem_menu').addClass('active1');
    }
  });
  $('.form_timkiem').submit(function(event) {
    var keywords = $('.timkiem').val();
    if(keywords=='')
    {
      alert('Bạn chưa nhập từ khóa cần tìm . ');
    } 
    else 
    {

      window.location.href = 'tim-kiem&keyword='+keywords+'.html';
    }
    return false;
  });
});

$(window).bind("scroll", function () {
  var cach_top = $(window).scrollTop();
  var heaigt_header = $('#header').height();
  $('#header').css('min-height', heaigt_header);
  if (cach_top >= heaigt_header) {
    if (!$('#header .header').hasClass('fix_head fadeInDown animated')) {
      $('#header .header').addClass('fix_head fadeInDown animated');
    }
  } else {
    $('#header .header').removeClass('fix_head fadeInDown animated');
  }
});
$('body').on('click', '.a_xemthem_pr', function(event) {
  var id=$(this).attr('data-id');
  $.ajax ({
    type: "POST",
    url: "ajax/ajax_show.php",
    data: {id:id},
    beforeSend:function(){
      $('#loadding').show();
    },
    success: function(result) { 
      $('#myModal #donhang').html(result);
      setTimeout(function () {
        $("#slick2").on('init', function () {
          $('.frame_images').css('opacity', '1');
        }); 
        $("#slick3").on('init', function () {
          $('.selectors').css('opacity', '1');
        }); 
        $('#slick2').slick({
          slidesToShow: 1,
          slidesToScroll: 1,
          autoplay:3000,
          arrows: false,
          fade: true,
          asNavFor: '#slick3',
          pauseOnHover:true
        });

        $('#slick3').slick({
          slidesToShow: 4,
          slidesToScroll: 1,
          dots: false,
          centerMode: false,
          autoplay:3000,
          focusOnSelect: true,
          asNavFor: '#slick2',
          prevArrow: $('.prev_sub_news'),
          nextArrow: $('.next_sub_news'),
          pauseOnHover:true,
          focusOnSelect: true
        });
      }, 300);

      $('#myModal').modal();
      $('#donhang').show();
      $('#loadding').hide();
    }
  });
  $("#myModal").on("hidden.bs.modal", function () {
    $('.selectors1').css('opacity', 0);
  });
});

