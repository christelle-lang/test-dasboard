@include('..header')


<div class="main_content_iner ">
<div class="container-fluid p-0">
<div class="row justify-content-center">
<div class="col-lg-12">
<div class="white_card card_height_100 mb_30">
<div class="white_card_header">
<div class="box_header m-0">
<div class="main-title  d-flex justify-content-between w-100">
<h5 class="m-0">Liste des camions</h5>
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
    <form action="{{route('recherche_camions')}}" method="post">
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
        @if(isset($table_camion) && isset($query))
        <h3>Résultats pour la recherche "{{ $query }}"</h3>
        <br>
    @endif
    
    @php
        $headersDisplayed = false;
    @endphp
    @forelse ($table_camion as $table_camions)
        @if (!$headersDisplayed)
            <table class="table lms_table_active3 table-hover ">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Propriétaire</th>
                        <th scope="col">idConducteur</th>
                        <th scope="col">Type </th>
                        <th scope="col">caractéristique </th>
                        <th scope="col">Capacité de charge </th>
                        <th scope="col">Photo</th>
                        <th scope="col">Numéro d'immatriculation</th>
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
                    <td>{{ $table_camions->idProprio }}</td>
                    <td>{{ $table_camions->idConducteur }}</td>
                    <td>{{ $table_camions->typeCamion }}</td>
                    <td>{{ $table_camions->caractéristiqueCamion }}</td>
                    <td>{{ $table_camions->capaciteDeCharge }}</td>
                    <td>{{ $table_camions->photoCamion }}</td>
                    <td>{{ $table_camions->numImmatriculation }}</td>
                    @if ($table_camions->statut == 'Activé')
                    <td><a href="#" class="status_btn">Activé</a></td> 
                @else 
                   <td><a href="#" class="status_btn" style="background-color: #d1151e">Désactivé</a></td> 
                @endif
                  

                    <td>
                        <div class="action_btns d-flex">
                        <a href="{{ route('modifier_camions',['id'=>$table_camions->id]) }}" class="action_btn"> <i class="far fa-edit"></i> </a>
                        <a href="{{ route('supprimer_camions',['id'=>$table_camions->id]) }}" class="action_btn mr_10 "> <i class=" fas fa-trash"></i> </a>

                       </div>
                    </td>
                </tr> 
    @empty
        @if(isset($query))
            <p>Aucun résultat trouvé pour votre recherche.</p>
        @else
            <p>Aucun camion trouvé.</p>
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
            <h5 class="modal-title" id="exampleModalLongTitle">Ajouter un camion</h5>
            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body " >


                <form action="{{route('ajouter_camions')}}" method="get">
                    @csrf
                <div class="row">
                    <div class="col-lg-6">
                    <div class="common_input mb_15">
                    <input type="text" placeholder="idProprio" name="idProprio">
                    </div>
                    </div>
                           <div class="col-lg-6">
                    <div class="common_input mb_15">
                    <input type="text" placeholder="idConducteur" name="idConducteur">
                    </div>
                    </div>
                    <div class="col-lg-6">
                    <div class="common_input mb_15">
                    <input type="text" placeholder="caractéristique du camion"  name="caractéristiqueCamion">
                    </div>
                    </div>
                    <div class="col-lg-6">
                    <div class="common_select mb_15">
                        <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref"  name="typeCamion">
                            <option selected>Type du camion</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                          </select>
                    </div>
                  </div>
                    <div class="col-lg-6">
                    <div class="common_input mb_15">
                    <input type="text" placeholder="capacite de charge"  name="capaciteDeCharge">
                    </div>
                    </div>
                    <div class="col-lg-6">
                    <div class="common_input mb_15">
                    <input type="text" placeholder="Numéro d'immatriculation"  name="numImmatriculation">
                    </div>
                    </div>
                    <div class="col-lg-6">
                    <div class="common_input mb_15">
                    <input type="text" placeholder="Photo du camion"  name="photoCamion">
                    </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="common_select mb_15">
                            <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref"  name="statut">
                                <option selected>Statut</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
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
            
@include('..footer')