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
                        <h3 class="f_s_25 f_w_700 dark_text mr_30">Propriétaire </h3>
                        <ol class="breadcrumb page_bradcam mb-0">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Détail</a></li>
                            <li class="breadcrumb-item active">Propriétaire </li>
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
                  <a class="nav-link {{ Request::route()->getName() == 'detail_proprios' ? 'active' : ''}}  "  href="{{route('detail_proprios',['id' => $proprio->id])}}">Propriétaire</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link {{ Request::route()->getName() == 'detail_camions_proprio' ? 'active' : ''}} " href="{{route('detail_camions_proprio',['id' => $proprio->id])}}">Camion</a>
                </li>
               
              </ul>
            </div>  
                
        <div class="row mt-4">
            <div class="col-12 QA_section">
                <div class="card QA_table">
                    <div class="card-body">
                        <div class="row mb-4">
                            <div class="card-header">
                                Information du propriétaire
                              </div>
                            <div class="col-sm-5 mt-4">
                                <div>Nom: {{$proprio->nomProprio}}</div>
                                <hr>
                                <div>Prénoms: {{$proprio->prenomProprio}}</div>
                                <hr>
                                <div>Email: {{$proprio->emailProprio}}</div>
                                <hr>
                                <div>Numéro 1: {{$proprio->numTelProprio}}</div>
                                <hr>
                                <div>Numéro 2: {{$proprio->numTelProprio2}}</div>
                                <hr>
                                <div>Statut: {{$proprio->statut}}</div>
                                <hr>
                            </div>
                            <div class="col-sm-1 mt-4">
                            </div> 
                            <div class="col-sm-6 mt-4">
                                @if (!empty($table_proprio))
                                <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                                    <div class="carousel-inner">
                                        @foreach(json_decode($table_proprio->photoCNI) as $img)
                                        <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                                            <div class="card" style="width: 18rem;">
                                                <h4>Pièce d'identité</h4>
                                                <img src="{{ asset($img) }}" class="card-img-top" alt="...">
                                                <div class="card-body">
                                                    <p class="card-text">Date de validité: {{$proprio->dateValidite}}</p>
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
                                        <span class="carousel-control-next-icon" aria-hidden="true

                                        "></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                                @endif
                            </div>
                        </div>

                        <div class="card-header" style="background-color: #ad83f0">
                            Récapitulatif
                        </div>

                        <div class="white_card card_height_100">
                            <div class="white_card_header">
                                <div class="box_header m-0">
                                    <div class="card-header">
                                        Information du camion
                                      </div>
                                </div>
                            </div>
                            <div class="white_card_body table-responsive">
                                <div class="QA_section">
                                    <div class="white_box_tittle list_header">
                                        <div class="box_right d-flex lms_block">
                                            <div class="search_field_2">
                                                <div class="search_inner">
                                                    
                                                    @if (count($camion)>0)
                                                    <div class="QA_table mb_30">
                                                        
                                                        <table class="table lms_table_active3 table-hover">
                                                            <thead>
                                                                <tr>
                                                                    <th>#</th>
                                                                    <th>Type de camion</th>
                                                                    <th>Caractéristique du camion</th>
                                                                    <th>Numéro d'immatriculation</th>
                                                                    <th>capacité de Charge </th>
                                                                    @if ($conducteur->isNotEmpty())
                                                                    <th>Nom et prénom conducteur </th>
                                                                    <th>Téléphone conducteur </th>
                                                                    <th>Téléphone 2 conducteur </th>
                                                                    @else
                                                                    <th>Conducteur </th>

                                                                    @endif

                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($camion as $camions)
                                                                <tr>
                                                                    <td scope="col">{{ $loop->iteration }}</td>
                                                                    <td scope="col">{{ $camions['typeCamion'] }}</td>
                                                                    <td scope="col">{{ $camions['caractéristiqueCamion'] }}</td>
                                                                    <td scope="col">{{ $camions['numImmatriculation'] }}</td>
                                                                    <td scope="col">{{ $camions['capaciteDeCharge'] }}</td>
                                                                    @foreach ($conducteur as $conducteurs)
                                                                    @if ($conducteurs->isNotEmpty())
                                               
                                                                  
                                                       
                                                                    <td scope="col">{{ $conducteurs['nomConducteur'] }}{{ $conducteurs['prenomConducteur'] }}</td>
                                                                    <td scope="col">{{ $conducteurs['numTelConducteur'] }}</td>
                                                                    <td scope="col">{{ $conducteurs['numTelConducteur2'] }}</td>
                                                                     @else
                                                                     <td>
                                                                    Aucun conducteur assigné
                                                                    </td>
                                        
                                                                    @endif
                                                                    @endforeach
                                                                </tr>
                                                             
                                                                @endforeach
                                                               </table>
                                               </div>  
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
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



