<div class="profile clearfix">
    <div class="profile_pic">
        <img src="{{ asset('admin/img/img.jpg') }}" alt="..." class="img-circle profile_img">
    </div>
    <div class="profile_info">
        <span>Xin chào,</span>
        <h2>Admin</h2>
    </div>
</div>
<br/>
<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
    <div class="menu_section">
        <h3>Menu</h3>
        <ul class="nav side-menu">
            <li><a href="{{ route('dashboard')  }}"><i class="fa fa-home">          </i> Trang quản lý          </a></li>
            <li><a href="{{ route('slider')     }}"><i class="fa fa-sliders">       </i> Silders                </a></li>
            <li><a href="{{ route('category')   }}"><i class="fa fa fa-building-o"> </i> Thư mục bài viết       </a></li>
            <li><a href="{{ route('article')    }}"><i class="fa fa-newspaper-o">   </i> Bài viết                </a></li>
            <li><a href="{{ route('question')   }}"><i class="fa fa-question">      </i> Câu hỏi thường gặp     </a></li>
            <li><a><i class="fa fa-video-camera"></i> Thư viện <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="{{ route('image')}}"></i> Hình ảnh  </a></li>
                    <li><a href="{{ route('video')}}"></i> Video     </a></li>
                </ul>
            </li>
            <li><a href="{{ route('contact')    }}"> <i class="fa fa-phone">         </i> Khách hàng liên hệ     </a></li>
            <li><a href="{{ route('script')     }}"> <i class="fa fa-code">          </i> Thêm đoạn mã           </a></li>
            <li><a href="{{ route('feedback')   }}"> <i class="fa fa-smile-o">       </i> Cảm nhận khách hàng    </a></li>

        </ul>
    </div>
</div>
