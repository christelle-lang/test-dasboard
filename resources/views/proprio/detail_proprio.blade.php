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
                            
                                <div>Prénoms: {{$proprio->prenomProprio}}</div>
                            
                                <div>Email: {{$proprio->emailProprio}}</div>
                            
                                <div>Numéro 1: {{$proprio->numTelProprio}}</div>
                            
                                <div>Numéro 2: {{$proprio->numTelProprio2}}</div>
                            
                                <div>Statut: {{$proprio->statut}}</div>
                            
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
                                        <span class="carousel-control-next-icon" aria-hidden="true

                                        "></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                                @endif
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