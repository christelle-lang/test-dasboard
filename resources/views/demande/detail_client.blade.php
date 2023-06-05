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
            <h3 class="f_s_25 f_w_700 dark_text mr_30">Demande </h3>
            <ol class="breadcrumb page_bradcam mb-0">
            <li class="breadcrumb-item"><a href="javascript:void(0);">Détail</a></li>
            <li class="breadcrumb-item active">Demande </li>
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
                  <a class="nav-link {{ Request::route()->getName() == 'detail_demandes' ? 'active' : ''}}  "  href="{{route('detail_demandes',['id' => $demande->id])}}">Demande</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link {{ Request::route()->getName() == 'detail_demandes_client' ? 'active' : ''}} " href="{{route('detail_demandes_client',['id' => $demande->id])}}">Client</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::route()->getName() == 'detail_demandes_camion' ? 'active' : ''}} " href="{{route('detail_demandes_camion',['id' => $demande->id])}}">Camion</a>
                  </li>
              </ul>
            </div>  
    <div class="row mt-5">
    <div class="col-12 QA_section">
    <div class="card QA_table ">
   
    <div class="card-body">
    <div class="row mb-4">
    <div class="col">
        <h4 class="m-0">Information de la demande</h4><br>
        <div>
    <strong></strong>
    </div>
    <div>Poids de la marchandise: {{$demande->poidsMarchandise}}</div><hr>
    <div>Lie d'enlèvement: {{$demande->lieuEnlevement}}</div><hr>
    
    <div>Lieu de destination: {{$demande->lieuDestination}}</div><hr>
    <div>Date d'enlèvement: {{$demande->dateEnlevement}}</div><hr>
    <div>Type de marchandise: {{$demande->typeMarchandise}} </div><hr>
    <div>Description de la marchandise: {{$demande->descriptionMarchandise}} </div><hr>
    <div>Statut: {{$demande->statut}} </div><hr>

    </div>

  
    <div class="row mt-5">
    <div class="col-12 QA_section">
    <div class="card QA_table ">
   
    <div class="card-body">
    <div class="row mb-4">
    <div class="col">
        <h4 class="m-0">Information du client</h4><br>
        <div>
    <strong></strong>
    </div>
    <div>Nom: {{$client->nomClient}}</div><hr>
    <div>Prénoms: {{$client->prenomClient}}</div><hr>
    
    <div>Email: {{$client->emailClient}}</div><hr>
    <div>Adresse: {{$client->adresseClient}}</div><hr>
    <div>Téléhone: {{$client->numTelClient}} </div><hr>
    <div>Statut: {{$client->statut}} </div><hr>

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