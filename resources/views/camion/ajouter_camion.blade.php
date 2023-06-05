@include('..header')
<div class="main_content_iner ">
  <div class="container-fluid p-0">
  <div class="row justify-content-center">
  <div class="col-lg-12">
      <div class="page_title_left d-flex align-items-center">
  <h3 class="f_s_25 f_w_700 dark_text mr_30">Camion</h3>
  <ol class="breadcrumb page_bradcam mb-0">
  <li class="breadcrumb-item"><a href="javascript:void(0);">Ajout</a></li>
  <li class="breadcrumb-item active">camion</li>
  </ol>
  </div><br>
  <div class="white_card card_height_100 mb_30">
  <div class="white_card_header">
  <div class="box_header m-0">
  <div class="main-title  d-flex justify-content-between w-100">
  <h5 class="m-0">Ajouter des camions</h5>
  </div>
</div>
</div>
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
