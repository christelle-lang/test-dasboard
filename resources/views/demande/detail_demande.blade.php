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
              
    <div class="row mt-5">
    <div class="col-12 QA_section">
    <div class="card QA_table ">
   
    <div class="card-body">
    <div class="row mb-4">
      <div class="col-sm-6">
      <div class="card">
        <div class="card-header">
          Information de la demande
        </div>
        <div class="card-body">
          <blockquote class="blockquote mb-0">
            <p> Poids de la marchandise: {{$demande->poidsMarchandise}}</p>
            <p> Lieu d'enlèvement: {{$demande->lieuEnlevement}}</p>
            
              <p>Lieu de destination: {{$demande->lieuDestination}}</p>
                <p>Date d'enlèvement: {{$demande->dateEnlevement}}</p>
                  <p>Type de marchandise: {{$demande->typeMarchandise}} </p>
                    <p>Description de la marchandise: {{$demande->descriptionMarchandise}} </p>
                      <p>tatut: {{$demande->statut}} </p>
          </blockquote>
        </div>
      </div>
    </div>
  
    <div class="col-sm-6 ">
      <div class="card">
        <div class="card-header">
          Information du client
        </div>
        <div class="card-body">
          <blockquote class="blockquote mb-0">
            <p> Nom: {{$client->nomClient}}</p>
            <p> Prénoms: {{$client->prenomClient}}  <p> 
            
              <p> Email: {{$client->emailClient}}  <p> 
                <p> Adresse: {{$client->adresseClient}}  <p> 
                  <p> Téléhone: {{$client->numTelClient}}   <p> 
                    <p> Statut: {{$client->statut}}  <p> 
          </blockquote>
        </div>
      </div>
    </div>
    <div class="col-sm-6 mt-3">
      <div class="card">
        <div class="card-header">
          Information du camion
        </div>
        <div class="card-body">
          <blockquote class="blockquote mb-0">
              <p>  Type du camion: {{$camion->typeCamion}}</p>
              <p> Caractéristique du camion: {{$camion->caractéristiqueCamion}}</p>
              <p> Numérod'immatriculation: {{$camion->numImmatriculation}}</p>
              <p> Capacité de charge: {{$camion->capaciteDeCharge}}</p>
              <p> Photo du camion: {{$camion->photoCamion}} </p>
              <p> Statut: {{$camion->statut}}</p>
          </blockquote>
        </div>
      </div>
    </div>



   
    {{-- <div class="col">
        <h4 class="m-0">Information de la demande</h4><br>
        <div>
    <strong></strong>
    </div>
    <div>Poids de la marchandise: {{$demande->poidsMarchandise}}</div>
    <div>Lieu d'enlèvement: {{$demande->lieuEnlevement}}</div>
    
    <div>Lieu de destination: {{$demande->lieuDestination}}</div>
    <div>Date d'enlèvement: {{$demande->dateEnlevement}}</div>
    <div>Type de marchandise: {{$demande->typeMarchandise}} </div>
    <div>Description de la marchandise: {{$demande->descriptionMarchandise}} </div>
    <div>Statut: {{$demande->statut}} </div> --}}

    </div>
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