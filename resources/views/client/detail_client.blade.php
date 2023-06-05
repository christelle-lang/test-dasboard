@include('..header')




@if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif



  <div class="main_content_iner ">
    <div class="container-fluid p-0">
     <div class="row">
            <div class="col-12">
            <div class="page_title_box d-flex flex-wrap align-items-center justify-content-between">
            <div class="page_title_left d-flex align-items-center">
            <h3 class="f_s_25 f_w_700 dark_text mr_30">Client </h3>
            <ol class="breadcrumb page_bradcam mb-0">
            <li class="breadcrumb-item"><a href="javascript:void(0);">Détail</a></li>
            <li class="breadcrumb-item active">Client </li>
            </ol>
            </div>
            
            <div class="page_title_right">
            <div class="page_date_button d-flex align-items-center">
            <img src="img/icon/calender_icon.svg" alt>
            </div>
            </div>
            </div>
            </div>
            </div>
               <div class="">
            <ul class="nav nav-tabs justify-content-center ">
                <li class="nav-item ">
                  <a class="nav-link {{ Request::route()->getName() == 'detail_clients' ? 'active' : ''}}  "  href="{{route('detail_clients',['id' => $client->id])}}">Client</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link {{ Request::route()->getName() == 'detail_client_demandes' ? 'active' : ''}} " href="{{route('detail_client_demandes',['id' => $client->id])}}">Demande</a>
                </li>
              
              </ul>
            </div> 
    <div class="row mt-5">
    <div class="col-12 QA_section">
    <div class="card QA_table ">
   
    <div class="card-body">
    <div class="row mb-4">
      <div class="card-header">
        Information du client
      </div>
    <strong></strong>
    </div>
    <div>Nom: {{$client->nomClient}}</div>
    <div>Prénoms: {{$client->prenomClient}}</div>
    
    <div>Email: {{$client->emailClient}}</div>
    <div>Adresse: {{$client->adresseClient}}</div>
    <div>Téléhone: {{$client->numTelClient}} </div>

    </div>

  
        
     <div class="footer_part">
        <div class="container-fluid">
        <div class="row">
        <div class="col-lg-12">
        <div class="footer_iner text-center">
        </div>
        </div>
        </div>
        </div>
        </div>
        
        </section> 
            

                       
@include('..footer')