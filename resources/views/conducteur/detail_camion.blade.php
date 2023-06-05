@include('..header')



@if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif


<div class="main_content_iner overly_inner">
    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-12">
                <div class="page_title_box d-flex flex-wrap align-items-center justify-content-between">
                    <div class="page_title_left d-flex align-items-center">
                        <h3 class="f_s_25 f_w_700 dark_text mr_30">Conducteur </h3>
                        <ol class="breadcrumb page_bradcam mb-0">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Détail</a></li>
                            <li class="breadcrumb-item active">Conducteur </li>
                        </ol>
                    </div>
                    <div class="page_title_right">
                        <div class="page_date_button d-flex align-items-center">
                            <img src="img/icon/calender_icon.svg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="">
            <ul class="nav nav-tabs justify-content-center ">
                <li class="nav-item ">
                  <a class="nav-link {{ Request::route()->getName() == 'detail_conducteurs' ? 'active' : ''}}  "  href="{{route('detail_conducteurs',['id' => $table_conducteur->id])}}">Coonducteur</a>
                </li>
                    

                <li class="nav-item">
                  <a class="nav-link {{ Request::route()->getName() == 'detail_camions_conduc' ? 'active' : ''}} " href="{{route('detail_camions_conduc',['id' => $table_conducteur->id])}}">Camion</a>
                </li>

                <li class="nav-item">
                  
                    <a class="nav-link {{ Request::route()->getName() == 'detail_proprios_conduc' ? 'active' : ''}} " href="{{route('detail_proprios_conduc',['id' => $table_conducteur->id])}}">Propriétaire</a>

                  </li>
           
                  
              </ul>
            </div>   
        <div class="row mt-4">
            <div class="col-12 QA_section">
                <div class="card QA_table">
                    <div class="card-body">
                        <div class="row mb-4">
                            <div class="card-header">
                                Information du conducteur
                              </div>
                            <div class="col-sm-4 mt-4">
                                <div>Nom prénoms: {{$table_conducteur->nomConducteur}} {{$table_conducteur->prenomConducteur}}</div>
                              
                                
                                <div>Email: {{$table_conducteur->emailConducteur}}</div>
                                
                                <div>Numéro 1: {{$table_conducteur->numTelConducteur}}</div>
                                
                                <div>Numéro 2: {{$table_conducteur->numTelConducteur2}}</div>
                                
                                <div>Statut: {{$table_conducteur->statut}}</div>
                                
                            </div>
              
                            <div class="col-sm-4 mt-4">
                                @if (!empty($table_conducteur))
                                    @if (!empty($table_conducteur->photoCNI))  
                                <div id="carouselExampleFade" class="carousel slide carousel-fade " data-bs-ride="carousel">
                                    <div class="carousel-inner">
                                        @foreach( json_decode($table_conducteur->photoCNI) as $img)           
                                         <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                                            <div class="card" style="width: 18rem;">
                                                <p>Pièce d'identité</p>
                                                <img src="{{ asset($img) }}" class="card-img-top img-fluid" alt="...">
                                                <div class="card-body">
                                                    <p class="card-text">Date d'expiration:{{$table_conducteur->dateValiditeCNI}}</p>
                                                </div>
                                              </div>      
                                        </div>
                                      @endforeach
                                    </div>
                                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                      <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                      <span class="visually-hidden">Next</span>
                                    </button>
                                  </div>
                                       
                                @else
                                    <p>Il n'y a pas de pièce enregistrée</p>
                                @endif
                                @endif
                            </div>
                            <div class="col-sm-4 mt-4">
                                    @if (!empty($table_conducteur->photoPermis))  
                                    <div id="carouselExampleFade" class="carousel slide carousel-fade " data-bs-ride="carousel">
                                       <div class="carousel-inner">
                                         @foreach( json_decode($table_conducteur->photoPermis) as $img)           
                                          <div class="carousel-item {{ $loop->first ? 'active' : '' }} ">
                                             <div class="card" style="width: 18rem;">
                                                 <p>Permis de conduire</p>
                                                 <img src="{{ asset($img) }}" class="card-img-top img-fluid" alt="...">
                                                 <div class="card-body">
                                                     <p class="card-text">Date d'expiration:{{$table_conducteur->dateValiditePermis}}</p>
                                                 </div>
                                               </div>      
                                         </div>
                                       @endforeach
                                   </div>
                                   <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                                     <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                     <span class="visually-hidden">Previous</span>
                                   </button>
                                   <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                                     <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                     <span class="visually-hidden">Next</span>
                                   </button>
                                   </div>
                                   @else
                                     <p>Il n'y a pas de permis enregistrée</p>
                                   @endif
                                </div>   

                                   </div>
                                   </div>   
                                   
                                   @if ($camion)
                                  
                               
                                    <div class="row mt-5">
                                        <div class="col-12 QA_section">
                                        <div class="card QA_table ">
                                       
                                        <div class="card-body">
                                        <div class="row mb-4">
                                            <div class="card-header">
                                                Information du camion
                                        <strong></strong>
                                        </div>
                                        <div>Type du camion: {{$camion->typeCamion}}</div>
                                        <div>Caractéristique du camion: {{$camion->caractéristiqueCamion}}</div>
                                        
                                        <div>Numérod'immatriculation: {{$camion->numImmatriculation}}</div>
                                        <div>Capacité de charge: {{$camion->capaciteDeCharge}}</div>
                                        <div>Photo du camion: {{$camion->photoCamion}} </div>
                                        <div>Statut: {{$camion->statut}} </div>
                                    
                                        </div>
                                 </div>
                               @else
                                   <p>Aucune demande trouvée pour l'ID du client donné.</p>
                               @endif
                           
                           

                       
@include('..footer')












{{-- 










@include('..header')



@if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif

<div class="main_content_iner ">
<div class="container-fluid p-0">
<div class="row justify-content-center">
<div class="col-lg-12">
<div class="white_card card_height_100 mb_30">
<div class="white_card_header">
<div class="box_header m-0">
<div class="main-title  d-flex justify-content-between w-100">
<h5 class="m-0">Informations supplémentaires</h5>
</div>

</div>
</div> 
<div class="d-flex justify-content-center ">
    <div >
@if (!empty($table_conducteur))
    
    {{-- @foreach( json_decode($table_proprio->photoCNI) as $img) --}}
    {{-- @if (!empty($table_conducteur->photoCNI))  
    <div id="carouselExampleFade" class="carousel slide carousel-fade " data-bs-ride="carousel">
        <div class="carousel-inner">
            @foreach( json_decode($table_conducteur->photoCNI) as $img)           
             <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                <div class="card" style="width: 18rem;">
                    <h4>Pièce</h4>
                    <img src="{{ asset($img) }}" class="card-img-top img-fluid" alt="...">
                    <div class="card-body">
                        <p class="card-text">Date de validité:{{$table_conducteur->dateValiditeCNI}}</p>
                    </div>
                  </div>      
            </div>
          @endforeach
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
           
    @else
        <p>Il n'y a pas de pièce enregistrée</p>
    @endif
</div>
<div>
 @if (!empty($table_conducteur->photoPermis))  
 <div id="carouselExampleFade" class="carousel slide carousel-fade " data-bs-ride="carousel">
    <div class="carousel-inner">
      @foreach( json_decode($table_conducteur->photoPermis) as $img)           
       <div class="carousel-item {{ $loop->first ? 'active' : '' }} ">
          <div class="card" style="width: 18rem;">
              <h4>Pièce</h4>
              <img src="{{ asset($img) }}" class="card-img-top img-fluid" alt="...">
              <div class="card-body">
                  <p class="card-text">Date de validité:{{$table_conducteur->dateValiditePermis}}</p>
              </div>
            </div>      
      </div>
    @endforeach
</div>
<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
  <span class="visually-hidden">Previous</span>
</button>
<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
  <span class="carousel-control-next-icon" aria-hidden="true"></span>
  <span class="visually-hidden">Next</span>
</button>
</div>
@else
  <p>Il n'y a pas de permis enregistrée</p>
@endif
@endif
</div>
</div>   






<div class="white_card_body table-responsive">
    <div class="QA_section">
    <div class="white_box_tittle list_header">
       
    <div class="box_right d-flex  lms_block">
    <div class="serach_field_2">
    <div class="search_inner">


            @if ($camion->isNotEmpty()&& count($proprios)>0)
            <div class="QA_table mb_30">
            <table  class="table lms_table_active3 table-hover ">

                <thead>
                    <tr>
                        <th>#</th>
                        <th>Type du camion</th>
                        <th>caractéristique du camion</th>
                        <th>Numéro d'immatriculation</th>
                        <th>Capacité de charge</th>
                        <th>Nom propriétaire camion</th>
                        <th>Prenom du propriétaire camion</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($camion as $camions)
                    <tr> 
                       <tr>
                            <td scope="col">{{ $loop->iteration }}</td>
                            <td scope="col">{{ $camions['typeCamion'] }}</td>
                            <td scope="col">{{ $camions['caractéristiqueCamion'] }}</td>
                            <td scope="col">{{ $camions['numImmatriculation'] }}</td>
                            <td scope="col">{{ $camions['capaciteDeCharge'] }}</td>
                    @endforeach
                        @foreach ($proprios as $proprio)
                            <td scope="col">{{ $proprio['nomProprio'] }}</td>
                            <td scope="col">{{ $proprio['prenomProprio'] }}</td>
                        

                        </tr>
                     @endforeach
                   
                </tbody>
            </table>
            </div>
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
    
    
            
    @include('..footer') --}}

  
     
       {{-- <div class="QA_table mb_30">
        <table  class="table lms_table_active3 table-hover" >
        <thead>
            <tr>
                <th scope="col" >#</th>
                <th scope="col">Id du camion</th>
                <th scope="col">Poids de la marchandise</th>
                <th scope="col">Lieu d'enlèvement</th>
                <th scope="col">Lieu destination</th>
                
            </tr>
        </thead>
        <tbody>
            @foreach ($conducteur as $conducteurs)
                <tr>
                    <td scope="col">{{ $loop->iteration }}</td>
                    <td scope="col">{{ $conducteurs['nom'] }}</td>
                    <td scope="col">{{ $conducteur['prenom'] }}</td>
               @endforeach
               @foreach($camion as $camions)     
                    <td scope="col">{{ $camions['typeCamion'] }}</td>
                    <td scope="col">{{ $camions['capaciteDeCharge'] }}</td>
               @endforeach

       


                </tr>
            </tbody>
          </table> --}}
            {{-- @if ($ca)
         
                <div class="QA_table mb_30">
        <table  class="table lms_table_active3 table-hover" >
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Id du camion</th>
                        <th>Poids de la marchandise</th>
                        <th>Lieu d'enlèvement</th>
                        <th>Lieu destination</th>
                        <th>Date enlèvement</th>
                        <th>Type de la marchandise</th>
                        <th>Description de la marchandise</th>
                        <th>Statut</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($informations as $information)
                        <tr>
                            <td scope="col">{{ $loop->iteration }}</td>
                            <td scope="col">{{ $information['idCamion'] }}</td>
                            <td scope="col">{{ $information['poidsMarchandise'] }}</td>
                            <td scope="col">{{ $information['lieuEnlevement'] }}</td>
                            <td scope="col">{{ $information['lieuDestination'] }}</td>
                            <td scope="col">{{ $information['dateEnlevement'] }}</td>
                            <td scope="col">{{ $information['typeMarchandise'] }}</td>
                            <td scope="col">{{ $information['descriptionMarchandise'] }}</td>
                            <td scope="col">{{ $information['statut'] }}</td>


                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p>Aucune demande trouvée pour l'ID du client donné.</p>
        @endif --}}
        
    

 