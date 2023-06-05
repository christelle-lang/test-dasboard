@include('..header')


<div class="main_content_iner ">
<div class="container-fluid p-0">
<div class="row justify-content-center">
<div class="col-lg-12">
<div class="white_card card_height_100 mb_30">
<div class="white_card_header">
<div class="box_header m-0">
<div class="main-title  d-flex justify-content-between w-100">
<h5 class="m-0">Liste des demandes</h5>
</div>
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ajouterDemande">
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
    <form action="{{route('recherche_demande')}}" method="post">
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
    
           @if(isset($table_demande) && isset($query))
           <h3>Résultats pour la recherche "{{ $query }}"</h3>
           <br>
           @endif
       
       @php
           $headersDisplayed = false;
       @endphp
       
       @forelse ($table_demande->reverse() as $table_demandes)
           @if (!$headersDisplayed)
               <table class="table lms_table_active3 table-hover ">
                   <thead>
                       <tr>
                        <th scope="col"></th>

                      
                        <th scope="col">#</th>

                           <th scope="col">poidsMarchandise</th>
                           <th scope="col">lieuEnlevement</th>
                           <th scope="col">lieuDestination</th>
                           <th scope="col">dateEnlevement</th>
                           <th scope="col">typeMarchandise</th>
                           <th scope="col">descriptionMarchandise</th>
                           <th scope="col">statut</th>
                           <th scope="col">Action</th>

                       </tr>
                   </thead>
                   <tbody>
                   @php
                       $headersDisplayed = true;
                   @endphp
           @endif
                   <tr>
                          
                
                    <td>
                        <!-- Code du cercle de notification -->
                        @if ($table_demandes->newDemande == 0)
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 17.71 18.595">
                                <g id="bell" transform="translate(0 -64)">
                                    <circle id="circle" cx="8.855" cy="71.762" r="4.875" fill="#D3D3D3"/>
                                    <text id="text" x="8.855" y="74.5" fill="#000000" font-size="6" font-family="Arial" text-anchor="middle">1</text>
                                </g>
                            </svg>
                        @endif
                    </td>
                       <td>{{ $loop->index + 1 }}</td>
               
                       <td>{{ $table_demandes->poidsMarchandise }}</td>
                       <td>{{ $table_demandes->lieuEnlevement }}</td>
                       <td>{{ $table_demandes->lieuDestination }}</td>
                       <td>{{ $table_demandes->dateEnlevement }}</td>
                       <td>{{ $table_demandes->typeMarchandise }}</td>
                       <td>{{ $table_demandes->descriptionMarchandise }}</td>
                       @if ($table_demandes->statut == 'nvlle demande')
                       <td><a href="#" class="status_btn"  style="background-color: orange ">{{$table_demandes->statut}}</a></td> 
                          @else 
                      <td><a href="#" class="status_btn" style="background-color: #d1151e">Désactivé</a></td> 
                      @endif
                    
                       <td>
                        <div class="action_btns d-flex">
                            <a href="{{ route('modifier_demandes',['id'=>$table_demandes->id]) }}" class="action_btn"> <i class="far fa-edit"></i> </a>
                            <a href="{{ route('supprimer_demandes',['id'=>$table_demandes->id]) }}" class="action_btn  "> <i class="fas fa-trash"></i> </a>
                            <a href="{{ route('detail_demandes',['id'=>$table_demandes->id]) }}" class="action_btn  "> <i class="fa-solid fa-eye"></i></a>

                        </div>
                       </td>
                   </tr> 
       @empty
           @if(isset($query))
               <p>Aucun résultat trouvé pour votre recherche.</p>
           @else
               <p>Aucune demande trouvée.</p>
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

           <div class="modal fade" id="ajouterDemande" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" >
            <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Ajouter une demande</h5>
            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body " >


               
                <form action="{{route('ajouter_demandes')}}" method="get">
                    @csrf
                <div class="row">
                    <div class="col-lg-6">
                    <div class="common_input mb_15">
                    <input type="text" placeholder="id du client" name="idClient">
                    </div>
                    </div>
                    <div class="col-lg-6">
                    <div class="common_input mb_15">
                    <input type="text" placeholder="id du camion"  name="idCamion">
                    </div>
                    </div>
                    <div class="col-lg-6">
                    <div class="common_input mb_15">
                    <input type="text" placeholder="poids de la marchandise"  name="poidsMarchandise">
                    </div>
                    </div>
           
                    <div class="col-lg-6">
                       
                        <div class="common_select mb_15">
                          <select class="custom-select custom-select-lg  mb_15" id="inlineFormCustomSelectPref" name="typeMarchandise">
                            <option selected value="">type de la marchandise</option>
                            <option value="Activé">Activé</option>
                            <option value="Désactivé">Désactivé</option>
                          </select>  
                        </div> 
                    </div> 
                    <div class="col-lg-6">
                    <div class="common_input mb_15">
                    <input type="text" placeholder="desription de la marchandise"  name="descriptionMarchandise">
                    </div>
                    </div> 
                    <div class="col-lg-6">
                    <div class="common_input mb_15">
                    <input type="text" placeholder="Lieu d'enlèvement"  name="lieuEnlevement">
                    </div>
                    </div>
                    <div class="col-lg-6">
                    <div class="common_input mb_15">
                    <input type="text" placeholder="date d'enlèvement"  name="dateEnlevement">
                    </div>
                    </div>
                    <div class="col-lg-6">
                    <div class="common_input mb_15">
                    <input type="text" placeholder="Lieu de destination"  name="lieuDestination">
                    </div>
                    </div>
                    
                    
                    <div class="col-lg-6">
                       
                        <div class="common_select mb_15">
                          <select class="custom-select custom-select-lg  mb_15" id="inlineFormCustomSelectPref" name="statut">
                            <option selected value="">type de la marchandise</option>
                            <option value="citerne">camion citerne</option>
                            <option value="benne">camion benne</option>
                            <option value="fourgon">camion fourgon</option>
                            <option value="plateau">camion plateau</option>
                            <option value="frigorifique">camion frigorifique</option>
                            <option value="sémi-remorque">camion sémi-remorque</option>
                
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