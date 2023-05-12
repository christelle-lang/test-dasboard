<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from demo.dashboardpack.com/user-management-html/data_table.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 19 Apr 2023 16:10:25 GMT -->
<head>

<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
<title>Management Admin</title>


<link rel="stylesheet" href="css/bootstrap1.min.css" />

<link rel="stylesheet" href="vendors/themefy_icon/themify-icons.css" />

<link rel="stylesheet" href="vendors/scroll/scrollable.css" />

<link rel="stylesheet" href="vendors/font_awesome/css/all.min.css" />

<link rel="stylesheet" href="vendors/datatable/css/jquery.dataTables.min.css" />
<link rel="stylesheet" href="vendors/datatable/css/responsive.dataTables.min.css" />
<link rel="stylesheet" href="vendors/datatable/css/buttons.dataTables.min.css" />

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="css/metisMenu.css">

<link rel="stylesheet" href="css/style1.css" />
</head>
<body class="crm_body_bg">

    @include('..template')


<section class="main_content dashboard_part large_header_bg">

<div class="container-fluid g-0">
<div class="row">
<div class="col-lg-12 p-0 ">
<div class="header_iner d-flex justify-content-between align-items-center">
<div class="sidebar_icon d-lg-none">
<i class="ti-menu"></i>
</div>
<div class="line_icon open_miniSide d-none d-lg-block">
<img src="img/line_img.png" alt>
</div>
<div class="serach_field-area d-flex align-items-center">
<div class="search_inner">
<form action="#">
<div class="search_field">
<input type="text" placeholder="Search">
</div>
<button type="submit"> <img src="img/icon/icon_search.svg" alt> </button>
</form>
</div>
</div>
<div class="header_right d-flex justify-content-between align-items-center">
<div class="header_notification_warp d-flex align-items-center">
<li>
<a class="bell_notification_clicker" href="#"> <img src="img/icon/bell.svg" alt>
<span>2</span>
</a>

<div class="Menu_NOtification_Wrap">
<div class="notification_Header">
<h4>Notifications</h4>
</div>
<div class="Notification_body">

<div class="single_notify d-flex align-items-center">
<div class="notify_thumb">
<a href="#"><img src="img/staf/2.png" alt></a>
</div>
<div class="notify_content">
<a href="#"><h5>Cool Marketing </h5></a>
<p>Lorem ipsum dolor sit amet</p>
</div>
</div>

<div class="single_notify d-flex align-items-center">
<div class="notify_thumb">
<a href="#"><img src="img/staf/4.png" alt></a>
</div>
<div class="notify_content">
<a href="#"><h5>Awesome packages</h5></a>
<p>Lorem ipsum dolor sit amet</p>
</div>
</div>

<div class="single_notify d-flex align-items-center">
<div class="notify_thumb">
<a href="#"><img src="img/staf/3.png" alt></a>
</div>
<div class="notify_content">
<a href="#"><h5>what a packages</h5></a>
<p>Lorem ipsum dolor sit amet</p>
</div>
</div>

<div class="single_notify d-flex align-items-center">
<div class="notify_thumb">
<a href="#"><img src="img/staf/2.png" alt></a>
</div>
<div class="notify_content">
<a href="#"><h5>Cool Marketing </h5></a>
<p>Lorem ipsum dolor sit amet</p>
</div>
</div>

<div class="single_notify d-flex align-items-center">
<div class="notify_thumb">
<a href="#"><img src="img/staf/4.png" alt></a>
</div>
<div class="notify_content">
<a href="#"><h5>Awesome packages</h5></a>
<p>Lorem ipsum dolor sit amet</p>
</div>
</div>

<div class="single_notify d-flex align-items-center">
<div class="notify_thumb">
<a href="#"><img src="img/staf/3.png" alt></a>
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
<a class="CHATBOX_open" href="#"> <img src="img/icon/msg.svg" alt> <span>2</span> </a>
</li>
</div>
<div class="profile_info">
<img src="img/client_img.png" alt="#">
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

<div class="main_content_iner ">
<div class="container-fluid p-0">
<div class="row justify-content-center">
<div class="col-lg-12">
<div class="white_card card_height_100 mb_30">
<div class="white_card_header">
<div class="box_header m-0">
<div class="main-title">
</div>
</div>
</div>
<div class="white_card_body">
<div class="QA_section ">
<div class="white_box_tittle list_header">
<div class="box_right d-flex lms_block">
<div class="serach_field_2">
<div class="search_inner ">
{{-- <form active="#" action="" method="post">
<div class="search_field">
<input type="search" name="recherche" placeholder="Search content here...">
</div>
<button type="submit"> <i class="ti-search"></i> </button>
</form> --}}
</div>
</div>
{{-- <div class="add_button ms-2">
<a href="{{route('data_table')}}" data-toggle="modal" data-target="#addcategory" class="btn_1">Add New</a>
</div> --}}
</div>
</div>
<a href="{{ url()->previous() }}" class="btn btn-primary mb-2"><i class="fa-solid fa-arrow-left  "></i></a>
<div class="box_header m-0">
  <div class="main-title">
     <h5 class="m-0">Liste des conducteurs</h5>
  </div>
</div>
</div>
<div class="QA_table mb_30">

    <h3> <p>Résultats pour la recherche "{{ $query }}" </h3><br>
    @if ($recherche_conducteur->count())
     
    <table class="table lms_table_active3 ">
        
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">nom</th>
                <th scope="col">prenom</th>
                <th scope="col">email</th>
                <th scope="col">mot de passe</th>
                <th scope="col">numéro</th>
                <th scope="col">statut</th>
            </tr>
        </thead>
        <tbody>
            
            @foreach ($recherche_conducteur as $recherche_conducteurs)
            <tr>
                <td>{{ $recherche_conducteurs->idConducteur }}</td>
                <td>{{ $recherche_conducteurs->nomConducteur }}</td>
                <td>{{ $recherche_conducteurs->prenomConducteur }}</td>
                <td>{{ $recherche_conducteurs->emailConducteur }}</td>
                <td>{{ $recherche_conducteurs->motDePasseConducteur }}</td>
                <td>{{ $recherche_conducteurs->numTelConducteur }}</td>
                <td>{{ $recherche_conducteurs->statut }}</td>



            </tr>
             
            @endforeach
 
        </tbody>
    </table>

@else
    <p>Aucun résultat trouvé pour votre recherche.</p>
@endif
    </table>





    @include('..footer')