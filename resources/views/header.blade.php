<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from demo.dashboardpack.com/user-management-html/admin_list.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 19 Apr 2023 16:10:13 GMT -->
<head>

<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
<title>Management Admin</title>
<link rel="icon" href="{{asset('img/mini_logo.png')}}" type="image/png">

<link rel="stylesheet" href="{{asset('css/bootstrap1.min.css')}}" />


<link rel="stylesheet" href="{{asset('vendors/themefy_icon/themify-icons.css')}}" />

<link rel="stylesheet" href="{{asset('vendors/niceselect/css/nice-select.css')}}" />

<link rel="stylesheet" href="{{asset('vendors/owl_carousel/css/owl.carousel.css')}}" />

<link rel="stylesheet" href="{{asset('vendors/gijgo/gijgo.min.css')}}" />

<link rel="stylesheet" href="{{asset('vendors/font_awesome/css/all.min.css')}}" />
<link rel="stylesheet" href="{{asset('vendors/tagsinput/tagsinput.css')}}" />

<link rel="stylesheet" href="{{asset('vendors/datepicker/date-picker.css')}}" />
<link rel="stylesheet" href="{{asset('vendors/vectormap-home/vectormap-2.0.2.css')}}" />

<link rel="stylesheet" href="{{asset('vendors/scroll/scrollable.css')}}" />

<link rel="stylesheet" href="{{asset('vendors/datatable/css/jquery.dataTables.min.css')}}" />
<link rel="stylesheet" href="{{asset('vendors/datatable/css/responsive.dataTables.min.css')}}" />
<link rel="stylesheet" href="{{asset('vendors/datatable/css/buttons.dataTables.min.css')}}" />

<link rel="stylesheet" href="{{asset('vendors/text_editor/summernote-bs4.css')}}" />

<link rel="stylesheet" href="{{asset('vendors/morris/morris.css')}}">

<link rel="stylesheet" href="{{asset('vendors/material_icon/material-icons.css')}}" />

<link rel="stylesheet" href="{{asset('css/metisMenu.css')}}">

<link rel="stylesheet" href="{{asset('css/style1.css')}}" />
<link rel="stylesheet" href="{{asset('css/colors/default.css')}}" id="colorSkinCSS">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>



<body class="crm_body_bg">
<nav class="sidebar">
    <div class="logo d-flex justify-content-between">
    <a class="large_logo" href="{{route('ndex_2')}}"><img src="{{asset('img/logo.png')}}" alt></a>
    <a class="small_logo" href="{{route('ndex_2')}}"><img src="{{asset('img/mini_logo.png')}}" alt></a>
    <div class="sidebar_close_icon d-lg-none">
    <i class="ti-close"></i>
    </div>
    </div>
    <ul id="sidebar_menu">
    <li class>
    <a class="has-arrow" href="#" aria-expanded="false">
    <div class="nav_icon_small">
    <img src="{{asset('img/menu-icon/dashboard.svg')}}" alt>
    </div>

    <div class="nav_title">
        <span>Tables </span>
        </div>
        </a>
        <ul>
            <li><a href="{{route('table_client')}}">Clients</a></li>
            <li><a href="{{route('table_proprio')}}">Propriétaires</a></li>
            <li><a href="{{route('table_conducteur')}}">Conducteurs</a></li>
            <li><a href="{{route('table_demande')}}">Demandes</a></li>
            <li><a href="{{route('table_camion')}}"> Camion</a></li>

        </ul>
        </li>
        <li class>
        <a class="has-arrow" href="#" aria-expanded="false">
        <div class="nav_icon_small">
        <img src="{{asset('img/menu-icon/2.svg')}}" alt>
        </div>


        <div class="nav_title">
            <span>Admins</span>
            </div>
            </a>
            <ul>
            <li><a href="{{route('admin_list')}}">Admin List</a></li>
            <li><a href="{{route('add_new_admin')}}">Add New Admin</a></li>
            <li><a href="{{route('ajouter_conducteurs')}}">Ajouter conducteur</a></li>
            </ul>
            </li>
            <li class>
            <a class="has-arrow" href="#" aria-expanded="false">
            <div class="nav_icon_small">
            <img src="{{asset('img/menu-icon/11.svg')}}" alt>
            </div>

            <div class="nav_title">
                <span>UI Kits </span>
                </div>
                </a>
                <ul>
                <li><a href="{{route('colors')}}">colors</a></li>
                <li><a href="{{route('Alerts')}}">Alerts</a></li>
                <li><a href="{{route('buttons')}}">Buttons</a></li>
                <li><a href="{{route('modal')}}">modal</a></li>
                <li><a href="{{route('dropdown')}}">Droopdowns</a></li>
                <li><a href="{{route('Badges')}}">Badges</a></li>
                <li><a href="{{route('Loading_Indicators')}}">Loading Indicators</a></li>
                <li><a href="{{route('color_plate')}}">Color Plate</a></li>
                <li><a href="{{route('typography')}}">Typography</a></li>
                <li><a href="{{route('datepicker')}}">Date Picker</a></li>
                </ul>
                </li>
                <li class>
                <a class="has-arrow" href="#" aria-expanded="false">
                <div class="nav_icon_small">
                <img src="{{asset('img/menu-icon/21.svg')}}" alt>
                </div>

        </nav>
    {{-- <div class="nav_title">
    <span>User Management </span>
    </div>
    </a>
    <ul>
    <li><a href="{{route('ndex_2')}}">Default</a></li>
    <li><a href="{{route('index_3')}}">Dark Sidebar</a></li>
    <li><a href="{{route('ndex_2')}}">Light Sidebar</a></li>
    </ul>
    </li>
    <li class>
    <a class="has-arrow" href="#" aria-expanded="false">
    <div class="nav_icon_small">
    <img src="img/menu-icon/2.svg" alt>
    </div> --}}
    {{-- <div class="nav_title">
    <span>Application </span>
    </div>
    </a>
    <ul>
    <li><a href="{{route('editor')}}">editor</a></li>
    <li><a href="{{route('mail_box')}}">Mail Box</a></li>
    <li><a href="{{route('chat')}}">Chat</a></li>
    <li><a href="{{route('faq')}}">FAQ</a></li>
    </ul>
    </li>
    <li class>
    <a class="has-arrow" href="#" aria-expanded="false">
    <div class="nav_icon_small">
    <img src="img/menu-icon/3.svg" alt>
    </div>
    <div class="nav_title">
    <span>Pages</span>
    </div>
    </a>
    <ul>
    <li><a href="{{route('login')}}">Login</a></li>
    <li><a href="{{route('resister')}}">Register</a></li>
    <li><a href="{{route('error_400')}}">Error 404</a></li>
    <li><a href="{{route('error_500')}}">Error 500</a></li>
    <li><a href="{{route('forgot_pass')}}">Forgot Password</a></li>
    <li><a href="{{route('gallery')}}">Gallery</a></li>
    </ul>
    </li>
    <li class>
    <a class="has-arrow" href="#" aria-expanded="false">
    <div class="nav_icon_small">
    <img src="img/menu-icon/4.svg" alt>
    </div>
    <div class="nav_title">
    <span>Admins</span>
    </div>
    </a>
    <ul>
    <li><a href="{{route('admin_list')}}">Admin List</a></li>
    <li><a href="{{route('add_new_admin')}}">Add New Admin</a></li>
    <li><a href="{{route('ajouter_conducteur')}}">Ajouter conducteur</a></li>
    </ul>
    </li>
    <li class>
    <a class="has-arrow" href="#" aria-expanded="false">
    <div class="nav_icon_small">
    <img src="img/menu-icon/11.svg" alt>
    </div>
    <div class="nav_title">
    <span>Role & Permissions</span>
    </div>
    </a>
    <ul>
    <li><a href="{{route('module_setting')}}">Module Setting</a></li>
    <li><a href="{{route('role_permissions')}}">Role & Permissions</a></li>
    </ul>
    </li>
    <li class>
    <a href="navs.html" aria-expanded="false">
    <div class="nav_icon_small">
    <img src="img/menu-icon/12.svg" alt>
    </div>
    <div class="nav_title">
    <span>Navs</span>
    </div>
    </a>
    </li>
    <li class>
    <a class="has-arrow" href="#" aria-expanded="false">
    <div class="nav_icon_small">
    <img src="img/menu-icon/5.svg" alt>
    </div>
    <div class="nav_title">
    <span>Users</span>
    </div>
    </a>
    <ul>
    <li><a href="{{route('user_list')}}">Users List</a></li>
    <li><a href="{{route('add_new_user')}}">Add New User</a></li>
    </ul>
    </li>
    <li>
    <a href="{{route('Builder')}}" aria-expanded="false">
    <div class="nav_icon_small">
    <img src="img/menu-icon/6.svg" alt>
    </div>
    <div class="nav_title">
    <span>Builder </span>
    </div>
    </a>
    </li>
    <li class>
    <a href="{{route('invoice')}}" aria-expanded="false">
    <div class="nav_icon_small">
    <img src="img/menu-icon/7.svg" alt>
    </div>
    <div class="nav_title">
    <span>Invoice</span>
    </div>
    </a>
    </li>
    <li class>
    <a class="has-arrow" href="#" aria-expanded="false">
    <div class="nav_icon_small">
    <img src="img/menu-icon/8.svg" alt>
    </div>
    <div class="nav_title">
    <span>forms</span>
    </div>
    </a>
    <ul>
    <li><a href="{{route('Basic_Elements')}}">Basic Elements</a></li>
    <li><a href="{{route('Groups')}}">Groups</a></li>
    <li><a href="{{route('Max_Length')}}">Max Length</a></li>
    <li><a href="{{route('Layouts')}}">Layouts</a></li>
    </ul>
    </li>
    <li class>
    <a href="{{route('Board')}}" aria-expanded="false">
    <div class="nav_icon_small">
    <img src="img/menu-icon/9.svg" alt>
    </div>
    <div class="nav_title">
    <span>Board</span>
    </div>
    </a>
    </li>
    <li class>
    <a href="{{route('calender')}}" aria-expanded="false">
    <div class="nav_icon_small">
    <img src="img/menu-icon/10.svg" alt>
    </div>
    <div class="nav_title">
    <span>Calander</span>
    </div>
    </a>
    </li>
    <li class>
    <a class="has-arrow" href="#" aria-expanded="false">
    <div class="nav_icon_small">
    <img src="img/menu-icon/11.svg" alt>
    </div>
    <div class="nav_title">
    <span>Themes</span>
    </div>
    </a>
    <ul>
    <li><a href="{{route('dark_sidebar')}}">Dark Sidebar</a></li>
    <li><a href="{{route('light_sidebar')}}">light Sidebar</a></li>
    </ul>
    </li>
    <li class>
    <a class="has-arrow" href="#" aria-expanded="false">
    <div class="nav_icon_small">
    <img src="img/menu-icon/12.svg" alt>
    </div>
    <div class="nav_title">
    <span>General</span>
    </div>
    </a>
    <ul>
    <li><a href="{{route('Minimized_Aside')}}">Minimized Aside</a></li>
    <li><a href="{{route('empty_page')}}">Empty page</a></li>
    <li><a href="{{route('fixed_footer')}}">Fixed Footer</a></li>
    </ul>
    </li>
    <li class>
    <a class="has-arrow" href="#" aria-expanded="false">
    <div class="nav_icon_small">
    <img src="img/menu-icon/13.svg" alt>
    </div>
    <div class="nav_title">
    <span>Products</span>
    </div>
    </a>
    <ul>
    <li><a href="{{route('Products')}}">Products</a></li>
    <li><a href="{{route('Product_Details')}}">Product Details</a></li>
    <li><a href="{{route('Cart')}}">Cart</a></li>
    <li><a href="{{route('Checkout')}}">Checkout</a></li>
    </ul>
    </li>
    <li class>
    <a class="has-arrow" href="#" aria-expanded="false">
    <div class="nav_icon_small">
    <img src="img/menu-icon/14.svg" alt>
    </div>
    <div class="nav_title">
    <span>Icons</span>
    </div>
    </a>
    <ul>
    <li><a href="{{route('Fontawesome_Icon')}}">Fontawesome Icon</a></li>
    <li><a href="{{route('themefy_icon')}}">themefy icon</a></li>
    </ul>
    </li>
    <li class>
    <a class="has-arrow" href="#" aria-expanded="false">
    <div class="nav_icon_small">
    <img src="img/menu-icon/15.svg" alt>
    </div>
    <div class="nav_title">
    <span>Animations</span>
    </div>
    </a>
    <ul>
    <li><a href="{{route('wow_animation')}}">Animate</a></li>
    <li><a href="{{route('Scroll_Reveal')}}">Scroll Reveal</a></li>
    <li><a href="{{route('tilt')}}">Tilt Animation</a></li>
    </ul>
    </li>
    <li class>
    <a class="has-arrow" href="#" aria-expanded="false">
    <div class="nav_icon_small">
    <img src="img/menu-icon/16.svg" alt>
    </div> --}}
    {{-- <div class="nav_title">
    <span>Components</span>
    </div>
    </a>
    <ul>
    <li><a href="{{route('accordion')}}">Accordions</a></li>
    <li><a href="{{route('Scrollable')}}">Scrollable</a></li>
    <li><a href="{{route('notification')}}">Notifications</a></li>
    <li><a href="{{route('carousel')}}">Carousel</a></li>
    <li><a href="{{route('Pagination')}}">Pagination</a></li>
    </ul>
    </li>
    <li class>
    <a class="has-arrow" href="#" aria-expanded="false">
    <div class="nav_icon_small">
    <img src="img/menu-icon/17.svg" alt>
    </div>
    <div class="nav_title">
    <span>Table</span>
    </div>
    </a>
    <ul>
    <li><a href="{{route('data_table')}}">Data Tables</a></li>
    <li><a href="{{route('table_proprio')}}">Table propriétaires</a></li>
    <li><a href="{{route('table_conducteur')}}">Table conducteurs</a></li>
    <li><a href="{{route('table_demande')}}">Table demandes</a></li>

    <li><a href="{{route('bootstrap_table')}}">Bootstrap</a></li>
    </ul>
    </li>
    <li class>
    <a class="has-arrow" href="#" aria-expanded="false">
    <div class="nav_icon_small">
    <img src="img/menu-icon/18.svg" alt>
    </div> --}}
    {{-- <div class="nav_title">
    <span>Cards</span>
    </div>
    </a>
    <ul>
    <li><a href="{{route('basic_card')}}">Basic Card</a></li>
    <li><a href="{{route('theme_card')}}">Theme Card</a></li>
    <li><a href="{{route('dargable_card')}}">Draggable Card</a></li>
    </ul>
    </li>
    <li class>
    <a class="has-arrow" href="#" aria-expanded="false">
    <div class="nav_icon_small">
    <img src="img/menu-icon/19.svg" alt>
    </div>
    <div class="nav_title">
    <span>Charts</span>
    </div>
    </a>
    <ul>
    <li><a href="{{route('chartjs')}}">ChartJS</a></li>
    <li><a href="{{route('apex_chart')}}">Apex Charts</a></li>
    <li><a href="{{route('chart_sparkline')}}">Chart sparkline</a></li>
    <li><a href="{{route('am_chart')}}">am-charts</a></li>
    <li><a href="{{route('nvd3_charts')}}">nvd3 charts.</a></li>
    </ul>
    </li>
    <li class>
    <a class="has-arrow" href="#" aria-expanded="false">
    <div class="nav_icon_small">
    <img src="img/menu-icon/20.svg" alt>
    </div>
    <div class="nav_title">
    <span>UI Kits </span>
    </div>
    </a>
    <ul>
    <li><a href="{{route('colors')}}">colors</a></li>
    <li><a href="{{route('Alerts')}}">Alerts</a></li>
    <li><a href="{{route('buttons')}}">Buttons</a></li>
    <li><a href="{{route('modal')}}">modal</a></li>
    <li><a href="{{route('dropdown')}}">Droopdowns</a></li>
    <li><a href="{{route('Badges')}}">Badges</a></li>
    <li><a href="{{route('Loading_Indicators')}}">Loading Indicators</a></li>
    <li><a href="{{route('color_plate')}}">Color Plate</a></li>
    <li><a href="{{route('typography')}}">Typography</a></li>
    <li><a href="{{route('datepicker')}}">Date Picker</a></li>
    </ul>
    </li>
    <li class>
    <a class="has-arrow" href="#" aria-expanded="false">
    <div class="nav_icon_small">
    <img src="img/menu-icon/21.svg" alt>
    </div>
    <div class="nav_title">
    <span>Widgets</span>
    </div>
    </a>
    <ul>
    <li><a href="{{route('chart_box_1')}}">Chart Boxes 1</a></li>
    <li><a href="{{route('profilebox')}}">Profile Box</a></li>
    </ul>
    </li>
    <li class>
    <a class="has-arrow" href="#" aria-expanded="false">
    <div class="nav_icon_small">
    <img src="img/menu-icon/12.svg" alt>
    </div>
    <div class="nav_title">
    <span>Maps</span>
    </div>
    </a>
    <ul>
    <li><a href="{{route('mapjs')}}">Maps JS</a></li>
    <li><a href="{{route('vector_map')}}">Vector Maps</a></li>
    </ul>
    </li>
    </ul>
    </nav> --}}
    <section class="main_content dashboard_part large_header_bg">

        <div class="container-fluid g-0">
        <div class="row">
        <div class="col-lg-12 p-0 ">
        <div class="header_iner d-flex justify-content-between align-items-center">
        <div class="sidebar_icon d-lg-none">
        <i class="ti-menu"></i>
        </div>
        <div class="line_icon open_miniSide d-none d-lg-block">
        <img src="{{asset('img/line_img.png')}}" alt>
        </div>
        <div class="serach_field-area d-flex align-items-center">
        <div class="search_inner">
        <form action="#">
        <div class="search_field">
        <input type="text" placeholder="Search">
        </div>
        <button type="submit"> <img src="{{asset('img/icon/icon_search.svg')}}" alt> </button>
        </form>
        </div>
        </div>
        <div class="header_right d-flex justify-content-between align-items-center">
        <div class="header_notification_warp d-flex align-items-center">
        <li>
        <a class="bell_notification_clicker" href="#"> <img src="{{asset('img/icon/bell.svg')}}" alt>
        <span>2</span>
        </a>
        
        <div class="Menu_NOtification_Wrap">
        <div class="notification_Header">
        <h4>Notifications</h4>
        </div>
        <div class="Notification_body">
        
        <div class="single_notify d-flex align-items-center">
        <div class="notify_thumb">
        <a href="#"><img src="{{asset('img/staf/2.png')}}" alt></a>
        </div>
        <div class="notify_content">
        <a href="#"><h5>Cool Marketing </h5></a>
        <p>Lorem ipsum dolor sit amet</p>
        </div>
        </div>
        
        <div class="single_notify d-flex align-items-center">
        <div class="notify_thumb">
        <a href="#"><img src="{{asset('img/staf/4.png')}}" alt></a>
        </div>
        <div class="notify_content">
        <a href="#"><h5>Awesome packages</h5></a>
        <p>Lorem ipsum dolor sit amet</p>
        </div>
        </div>
        
        <div class="single_notify d-flex align-items-center">
        <div class="notify_thumb">
        <a href="#"><img src="{{asset('img/staf/3.png')}}" alt></a>
        </div>
        <div class="notify_content">
        <a href="#"><h5>what a packages</h5></a>
        <p>Lorem ipsum dolor sit amet</p>
        </div>
        </div>
        
        <div class="single_notify d-flex align-items-center">
        <div class="notify_thumb">
        <a href="#"><img src="{{asset('img/staf/2.png')}}" alt></a>
        </div>
        <div class="notify_content">
        <a href="#"><h5>Cool Marketing </h5></a>
        <p>Lorem ipsum dolor sit amet</p>
        </div>
        </div>
        
        <div class="single_notify d-flex align-items-center">
        <div class="notify_thumb">
        <a href="#"><img src="{{asset('img/staf/4.png')}}" alt></a>
        </div>
        <div class="notify_content">
        <a href="#"><h5>Awesome packages</h5></a>
        <p>Lorem ipsum dolor sit amet</p>
        </div>
        </div>
        
        <div class="single_notify d-flex align-items-center">
        <div class="notify_thumb">
        <a href="#"><img src="{{asset('img/staf/3.png')}}" alt></a>
        </div>
        <div class="notify_content">
        <a href="#"><h5>what a packages</h5></a>
        <p>Lorem ipsum dolor sit amet</p>
        </div>
        </div>
        </div>
        <div class="nofity_footer">
        <div class="submit_button text-center pt_20">
        <a href="#" class="btn_1">See More</a>
        </div>
        </div>
        </div>
        
        </li>
        <li>
        <a class="CHATBOX_open" href="#"> <img src="{{asset('img/icon/msg.svg')}}" alt> <span>2</span> </a>
        </li>
        </div>
        <div class="profile_info">
        <img src="{{asset('img/client_img.png')}}" alt="#">
        <div class="profile_info_iner">
        <div class="profile_author_name">
        <p>Neurologist </p>
        <h5>Dr. Robar Smith</h5>
        </div>
        <div class="profile_info_details">
        <a href="#">My Profile </a>
        <a href="#">Settings</a>
        <a href="#">Log Out </a>
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
        
    