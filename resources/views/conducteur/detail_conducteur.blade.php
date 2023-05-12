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
    @if (!empty($table_conducteur->photoCNI))  
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


            @if ($camion->isNotEmpty()&& count($proprios) > 0)
            <div class="QA_table mb_30">
            <table  class="table lms_table_active3 table-hover ">

                <thead>
                    <tr>
                        <th>#</th>
                        <th>Id du camion</th>
                        <th>Type du camion</th>
                        <th>caractéristique du camion</th>
                        <th>Numéro d'immatriculation</th>
                        <th>Capacité de charge</th>
                        <th>Id du propriétaire camion</th>
                        <th>Nom propriétaire camion</th>
                        <th>Prenom du propriétaire camion</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($camion as $camions)
                    <tr> 
                       <tr>
                            <td scope="col">{{ $loop->iteration }}</td>
                            <td scope="col">{{ $camions['id'] }}</td>
                            <td scope="col">{{ $camions['typeCamion'] }}</td>
                            <td scope="col">{{ $camions['caractéristiqueCamion'] }}</td>
                            <td scope="col">{{ $camions['numImmatriculation'] }}</td>
                            <td scope="col">{{ $camions['capaciteDeCharge'] }}</td>
                    @endforeach
                        @foreach ($proprios as $proprio)
                            <td scope="col">{{ $proprio['id'] }}</td>
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
    
    
            
    @include('..footer')
     
  
     
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
        
    

 