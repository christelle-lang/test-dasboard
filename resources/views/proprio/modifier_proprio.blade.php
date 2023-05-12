@include('..template')
<div class="main_content_iner  ">
    <div class="container-fluid p-0 ">
    <div class="row">
    <div class="col-12">
    <div class="page_title_box d-flex flex-wrap align-items-center justify-content-between">
    <div class="page_title_left d-flex align-items-center">
    <h3 class="f_s_25 f_w_700 dark_text mr_30">Dashboard</h3>

    </div>
    <div class="page_title_right">
    <div class="page_date_button d-flex align-items-center">
    <img src="img/icon/calender_icon.svg" alt>
    </div>
    </div>
    </div>
    </div>
    </div>


   
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Modifier un propriétaire</h5>
                       
                    </div>
                    <div class="modal-body">
                       
                        <form action="{{route('modification_proprios',['id'=>$proprio_modifie->id])}}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="common_input mb_15">
                                        <input type="text" placeholder="Nom" name="nom" value="{{ $proprio_modifie->nomProprio }}">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="common_input mb_15">
                                        <input type="text" placeholder="Prenom" name="prenom" value="{{ $proprio_modifie->prenomProprio }}">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="common_input mb_15">
                                        <input type="text" placeholder="Email" name="email" value="{{ $proprio_modifie->emailProprio }}">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="common_input mb_15">
                                        <input type="text" placeholder="Numéro de télephone 1" name="number1" value="{{ $proprio_modifie->numTelProprio }}">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="common_input mb_15">
                                        <input type="text" placeholder="Numéro de télephone 2" name="number2" value="{{ $proprio_modifie->numTelProprio2}}">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="common_input mb_15">
                                        <input  placeholder="CNI/passport/passport" type="file" name="photoCNI[]" id="photoCNI" accept="image/*" onchange="previewImage(event)" multiple value="{{ $proprio_modifie->photoCNI}}">
                                    </div>
                                </div>
                                 <div class="col-lg-6">
                                <div class="common_input mb_15">
                                <input type="text" placeholder="Date de validité CNI"  name="dateValidite">
                                </div>
                                </div> 
                                
                                
                                <div class="col-lg-6">
                       
                                    <div class="common_select mb_15">
                                      <select class="custom-select custom-select-lg  mb_15" id="inlineFormCustomSelectPref" name="statut">
                                        <option  value="">Statut</option>
                                        <option {{$proprio_modifie->statut=='Activé' ? 'selected':''}} value="Activé">Activé</option>
                                        <option  {{$proprio_modifie->statut=='Désactivé' ? 'selected':''}} value="Désactivé">Désactivé</option>
                                      </select>  
                                    </div> 
                                </div> 
                            
                            <div class="modal-footer">
                                <a href="{{route('modification_annuler_proprio')}}"><button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button> </a>
                                <a href=""><button type="submit" class="btn btn-primary ">Enregistrer</button></a>
                            </div>
                        </form>
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

@include('..template_footer')