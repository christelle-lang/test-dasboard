@include('..header')
<div class="main_content_iner ">
  <div class="container-fluid p-0">
  <div class="row justify-content-center">
  <div class="col-lg-12">
      <div class="page_title_left d-flex align-items-center">
  <h3 class="f_s_25 f_w_700 dark_text mr_30">Propriétaire</h3>
  <ol class="breadcrumb page_bradcam mb-0">
  <li class="breadcrumb-item"><a href="javascript:void(0);">ajout</a></li>
  <li class="breadcrumb-item active">propriétaire</li>
  </ol>
  </div><br>
  <div class="white_card card_height_100 mb_30">
  <div class="white_card_header">
  <div class="box_header m-0">
  <div class="main-title  d-flex justify-content-between w-100">
  <h5 class="m-0">Ajouter des proprietaire</h5>
  </div>
</div>
</div>
<form action="{{route('ajouter_proprios')}}" method="post"  enctype="multipart/form-data">
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
                    <input type="text" placeholder="Mot de passe "  name="password">
                    </div>
                    </div> 
                    <div class="col-lg-6">
                        <div class="common_input mb_15">
                            <input  placeholder="CNI/passport/passport" type="file" name="photoCNI[]" id="photoCNI" accept="image/*" onchange="previewImage(event)" multiple>
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
            
@include('..footer')
