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
                                      
    
            <div class="col-12 QA_section">
                <div class="card QA_table">
                    <div class="card-body">
                        <div class="row mb-4">
                            <div class="card-header">
                                Information du propriétaire
                              </div>
                            <div class="col-sm-5">
                            @foreach($proprios as $proprio)
                            <div class="mt-4">Nom: {{$proprio->nomProprio}}</div>
                                
                                <div>Prénoms: {{$proprio->prenomProprio}}</div>
                                
                                <div>Email: {{$proprio->emailProprio}}</div>
                                
                                <div>Numéro 1: {{$proprio->numTelProprio}}</div>
                                
                                <div>Numéro 2: {{$proprio->numTelProprio2}}</div>
                                
                                <div>Statut: {{$proprio->statut}}</div>
                                
                                @endforeach

                            </div>
                            <div class="col-sm-2 mt-4">
                            </div> 
                            <div class="col-sm-5 mt-4">
                           
                                @if (!empty($proprio))
                                <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                                    <div class="carousel-inner">
                                        @foreach(json_decode($proprio->photoCNI) as $img)
                                        <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                                            <div class="card" style="width: 18rem;">
                                                <p>Pièce d'identité</p>
                                                <img src="{{ asset($img) }}" class="card-img-top" alt="...">
                                                <div class="card-body">
                                                    <p class="card-text">Date d'expiration: {{$proprio->dateValidite}}</p>
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
                                @endif
                            </div>
                        </div>

                        
                           
                           

                       
@include('..footer')












{{-- 






