
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
<h5 class="m-0">Liste des conducteurs</h5>
</div>
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalCenter">
    <i class="fa-solid fa-plus d-flex justify-content-center"> </i>
</button>
</div>
</div>
<div class="white_card_body table-responsive">
<div class="QA_section">
<div class="white_box_tittle list_header">
<h4></h4>
<div class="box_right d-flex lms_block">
<div class="serach_field_2">
<div class="search_inner">
    <form action="{{route('recherche_conducteurs')}}" method="post">
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
       <div class="QA_table mb_30">
        @if(isset($table_conducteur) && isset($query))
        <h3>Résultats pour la recherche "{{ $query }}"</h3>
        <br>
    @endif
    
    @php
        $headersDisplayed = false;
    @endphp
    
    @forelse ($table_conducteur as $table_conducteurs)
        @if (!$headersDisplayed)
            <table class="table lms_table_active3 table-hover ">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nom</th>
                        <th scope="col">Prenoms</th>
                        <th scope="col">Email</th>
                        <th scope="col">Numéro 1</th>
                        <th scope="col">Numéro 2</th>
                        <th scope="col">Statut</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                @php
                    $headersDisplayed = true;
                @endphp
        @endif
                <tr>
                    <td>{{ $loop->index + 1 }}</td>
                    <td>{{ $table_conducteurs->nomConducteur   }}</td>
                    <td>{{ $table_conducteurs->prenomConducteur   }}</td>
                    <td>{{ $table_conducteurs->emailConducteur  }}</td>
                    <td>{{ $table_conducteurs->numTelConducteur  }}</td>
                    <td>{{ $table_conducteurs->numTelConducteur2  }}</td>
                     @if ($table_conducteurs->statut == 'Activé')
                         <td><a href="#" class="status_btn">Activé</a></td> 
                     @else 
                        <td><a href="#" class="status_btn" style="background-color: #d1151e">Désactivé</a></td> 
                     @endif
                     <td> 
                        <div class="action_btns d-flex">
                            <a href="{{ route('modifier_conducteurs',['id'=>$table_conducteurs->id]) }}" class="action_btn"> <i class="far fa-edit"></i> </a>
                            <a href="{{ route('supprimer_conducteurs',['id'=>$table_conducteurs->id]) }}" class="action_btn  "> <i class="fas fa-trash "></i> </a>
                            <a href="{{ route('detail_conducteurs',['id'=>$table_conducteurs->id]) }}" class="action_btn  "> <i class="fa-solid fa-eye"></i></a>

                        </div>
                        
                    </td>
    @empty
        @if(isset($query))
            <p>Aucun résultat trouvé pour votre recherche.</p>
        @else
            <p>Aucun conducteur trouvé.</p>
        @endif
    @endforelse
    
    @if ($headersDisplayed)
        </tbody>
        </table>
    @endif
    
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
        





           <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" >
            <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Ajouter un conducteur</h5>
            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body " >

                <form action="{{route('ajouter_conducteurs')}}" method="post" enctype="multipart/form-data">
                    @csrf
                <div class="row">
                    <div class="col-lg-6">
                    <div class="common_input mb_15">
                    <input type="text" placeholder="Nom" name="nom">
                    </div>
                    </div>
                    <div class="col-lg-6">
                    <div class="common_input mb_15">
                    <input type="text" placeholder="Prenom"  name="prenom">
                    </div>
                    </div>
                    <div class="col-lg-6">
                    <div class="common_input mb_15">
                    <input type="text" placeholder="Email"  name="email">
                    </div>
                    </div>
                    <div class="col-lg-6">
                    <div class="common_input mb_15">
                    <input type="text" placeholder="Numéro de télephone 1"  name="number1">
                    </div>
                    </div>
                    <div class="col-lg-6">
                    <div class="common_input mb_15">
                    <input type="text" placeholder="Numéro de télephone 2"  name="number2">
                    </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="common_input mb_15">
                            <input  placeholder="CNI/passport/passport" type="file" name="photoCNI[]" id="photoCNI" accept="image/*" onchange="previewImage(event)" multiple>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="common_input mb_15">
                        <input type="text" placeholder="Date de validité CNI"  name="dateValiditeCNI">
                        </div>
                        </div> 
                        
                    <div class="col-lg-6">
                        <div class="common_input mb_15">
                            <input  placeholder="Photo du permis" type="file" name="photoPermis[]" id="photoCNI" accept="image/*" onchange="previewImage(event)" multiple>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="common_input mb_15">
                        <input type="text" placeholder="Date de validité CNI"  name="dateValiditePermis">
                        </div>
                        </div> 
                        
                   
                    <div class="col-lg-6">
                       
                        <div class="common_select mb_15">
                          <select class="custom-select custom-select-lg  mb_15" id="inlineFormCustomSelectPref" name="statut">
                            <option selected value="">Statut</option>
                            <option value="Activé">Activé</option>
                            <option value="Désactivé">Désactivé</option>
                          </select>  
                        </div> 
                    </div> 
                    
                
            <div class="modal-footer">
            <button type="submit" class="btn btn-primary">  Ajouter </button>
            </form>
            </div>
            </div>
            </div>
            </div>
            
            <div id="back-top" style="display: none;">
                <a title="Go to Top" href="#">
                <i class="ti-angle-up"></i>
                </a>
                </div>
            @include('..footer')