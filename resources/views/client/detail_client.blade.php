@include('..header')



@if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif



<div class="main_content_iner overly_inner ">
    <div class="container-fluid p-0 ">
    
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
                
    
    <div class="row ">
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

    <div class="card-header" style="background-color:#ad83f0">
       Récaptitulatif   
        </div>
<div class="white_card card_height_100 ">
<div class="white_card_header">
<div class="box_header m-0">
<div class="main-title  d-flex justify-content-between w-100">
<h4 class="m-0 float-start">Liste des demandes du client</h4>
</div>

</div>
</div>
<div class="white_card_body table-responsive">
    <div class="QA_section">
    <div class="white_box_tittle list_header">
    <h4></h4>
    <div class="box_right d-flex lms_block">
    <div class="serach_field_2">
    <div class="search_inner">
        <form action="" method="post">
            @csrf
           <div class="search_field">
           <input type="search" name="recherche" placeholder="faites votre recherche ici...">
           </div>
           <button > <i class="ti-search"></i> </button>
           </div>
           </div>
           <div class=" ms-2">
           <button type="submit" data-toggle="modal" data-target="#addcategory" class="btn_1">Rechercher</button>
           </div>
           </div>
           </div>
           </form>
        
    
                @if ($informations)
                <div class="QA_table mb_30">
            
                    <table  class="table lms_table_active3 table-hover ">
            
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Type de la marchandise</th>
                            <th>Lieu d'enlèvement</th>
                            <th>Lieu destination</th>
                            <th>Date enlèvement</th>
                            <th>Type du camion</th>

                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($informations as $information)
                            <tr>
                                <td scope="col">{{ $loop->index + 1 }}</td>
                                <td scope="col">{{ $information['typeMarchandise'] }}</td>
                                <td scope="col">{{ $information['lieuEnlevement'] }}</td>
                                <td scope="col">{{ $information['lieuDestination'] }}</td>
                                <td scope="col">{{ $information['dateEnlevement'] }}</td>
                   
                   
                           
                            <td scope="col">{{ $typeCamion }}</td>
                        </tr>
                            @endforeach
                    </tbody>
                </table>
              </div>
            @else
                <p>Aucune demande trouvée pour l'ID du client donné.</p>
            @endif



        
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