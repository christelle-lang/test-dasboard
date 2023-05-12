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
                        <h5 class="modal-title" id="exampleModalLongTitle">Modifier un conducteur</h5>
                       
                    </div>
                    <div class="modal-body">
                        <form action="{{route('modification_conducteurs',['id'=>$conducteur_modifie->id])}}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="common_input mb_15">
                                        <input type="text" placeholder="Nom" name="nom" value="{{ $conducteur_modifie->nomConducteur }}">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="common_input mb_15">
                                        <input type="text" placeholder="Prenom" name="prenom" value="{{ $conducteur_modifie->prenomConducteur }}">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="common_input mb_15">
                                        <input type="text" placeholder="Email" name="email" value="{{ $conducteur_modifie->emailConducteur }}">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="common_input mb_15">
                                        <input type="text" placeholder="Numéro de télephone 1" name="number1" value="{{ $conducteur_modifie->numTelConducteur }}">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="common_input mb_15">
                                        <input type="text" placeholder="Numéro de télephone 2" name="number2" value="{{ $conducteur_modifie->numTelConducteur2}}">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="common_input mb_15">
                                        <input type="text" placeholder="Numéro de permis" name="numPermis" value="{{ $conducteur_modifie->numPermis}}">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="common_input mb_15">
                                        <input type="text" placeholder="Mot de passe" name="password" value="{{ $conducteur_modifie->motDePasseConducteur}}">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="common_input mb_15">
                                        <input type="text" placeholder="statut" name="statut" value="{{ $conducteur_modifie->statut}}">
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <a href="{{route('modification_annuler_conducteur')}}"><button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button> </a>
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