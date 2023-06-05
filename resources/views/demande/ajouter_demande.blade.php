@include('..header')
<div class="main_content_iner ">
  <div class="container-fluid p-0">
  <div class="row justify-content-center">
  <div class="col-lg-12">
      <div class="page_title_left d-flex align-items-center">
  <h3 class="f_s_25 f_w_700 dark_text mr_30">Demande</h3>
  <ol class="breadcrumb page_bradcam mb-0">
  <li class="breadcrumb-item"><a href="javascript:void(0);">Ajout</a></li>
  <li class="breadcrumb-item active">demande</li>
  </ol>
  </div><br>
  <div class="white_card card_height_100 mb_30">
  <div class="white_card_header">
  <div class="box_header m-0">
  <div class="main-title  d-flex justify-content-between w-100">
  <h5 class="m-0">Ajouter des demandes</h5>
  </div>
</div>
</div>
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
            <option value="citerne">camion citerne</option>
            <option value="benne">camion benne</option>
            <option value="fourgon">camion fourgon</option>
            <option value="plateau">camion plateau</option>
            <option value="frigorifique">camion frigorifique</option>
            <option value="sémi-remorque">camion sémi-remorque</option>

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
            <option selected value="">Statut</option>
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