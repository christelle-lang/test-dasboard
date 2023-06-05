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
            <h3 class="f_s_25 f_w_700 dark_text mr_30">Camion </h3>
            <ol class="breadcrumb page_bradcam mb-0">
            <li class="breadcrumb-item"><a href="javascript:void(0);">Détail</a></li>
            <li class="breadcrumb-item active">Camion </li>
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
                  <a class="nav-link {{ Request::route()->getName() == 'detail_camions' ? 'active' : ''}}  "  href="{{route('detail_camions',['id' => $table_camion->id])}}">Camion</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link {{ Request::route()->getName() == 'detail_conducteurs_camion' ? 'active' : ''}} " href="{{route('detail_conducteurs_camion',['id' => $table_camion->id])}}">Conducteur</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::route()->getName() == 'detail_proprios_camion' ? 'active' : ''}} " href="{{route('detail_proprios_camion',['id' => $table_camion->id])}}">Propriétaire</a>
                  </li>
              </ul>
            </div>  

            <div class="row mt-4">
              <div class="col-12 QA_section">
                  <div class="card QA_table">
                      <div class="card-body">
                          <div class="row mb-4">
                              <div class="card-header">
                                  Information du camion
                                </div>
                              <div class="col-sm-6 ">
                                <p>Type du camion: {{$table_camion->typeCamion}}</p>
                                <p>Caractéristique du camion: {{$table_camion->caractéristiqueCamion}}</p>
                                <p>Numéro d'immatriculation: {{$table_camion->numImmatriculation}}</p>
                                <p>Capacité de charge: {{$table_camion->capaciteDeCharge}}</p>
                                <p>Statut: {{$table_camion->statut}}</p>
                  
                              </div>
                              <div class="col-sm-6">
                                @if (!empty($table_camion) && !empty($table_camion->photoCamion))
                                  @php
                                    $photos = json_decode($table_camion->photoCamion);
                                    $numPhotos = count($photos);
                                  @endphp
                              
                                  @if ($numPhotos > 1)
                      
                                    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                                      <div class="carousel-inner">
                                        @foreach ($photos as $index => $img)
                                          <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                                            <div class="card">
                                              <p>Photo du camion</p>
                                            <img src="{{ asset($img) }}" class="d-block w-100" alt="Photo du camion {{ $index + 1 }}">
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
                                    <div class="card">
                                      <p>Photo du camion</p>
                                      <img src="{{ asset($photos[0]) }}" class="card-img-top img-fluid" alt="Photo du camion">
                                    </div>
                                  @endif
                              
                                @else
                                  <p>Il n'y a pas de pièce enregistrée</p>
                                @endif
                              </div>
                              
                            </div>
                          </div>
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