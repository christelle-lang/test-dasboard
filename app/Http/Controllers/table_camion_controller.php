<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Camion;
use App\Models\Proprietaire;
use App\Models\Conducteur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class table_camion_controller extends Controller
{ public function table_camion(){
    $table_camion = DB::table('camions')->get();
    $data =['table_camion' => $table_camion
];
    return view('camion.table_camion', $data);
}

public function ajouter_camion_form(){
       
      
    return view('camion.ajouter_camion');
}

public function recherche_camion(Request $request)
{
$query = $request->input('recherche');
$table_camion = DB::table('camions')
        ->where('idProprio', 'like', "%$query%")
        ->orWhere('idCamion', 'like', "%$query%")
        ->orWhere('typeCamion', 'like', "%$query%")
        ->orWhere('caractéristiqueCamion', 'like', "%$query%")
        ->orWhere('numImmatriculation', 'like', "%$query%")
        ->orWhere('capaciteDeCharge', 'like', "%$query%")
        ->orWhere('photoCamion', 'like', "%$query%")
        ->orWhere('statut', 'like', "%$query%")
        ->get();
return view('camion.table_camion', compact('table_camion','query'));

}
public function delete($id)
{
$camion= Camion::where('id',$id)->first();

$camion->delete();
return redirect()->route('table_camion');
}

public function modifier_camion($id){
$camion_modifie = Camion::findOrFail($id);
$table_camion = DB::table('camions')->get();
return view('camion.modifier_camion',compact('camion_modifie'));

}

public function ajouter_camion(){
    $idProprio = request('idProprio');
    $idConducteur = request('idConducteur');
    $typeCamion = request('typeCamion');
    $caractéristiqueCamion=request('caractéristiqueCamion');
    $numImmatriculation=request('numImmatriculation');
    $capaciteDeCharge=request('capaciteDeCharge');
    $photoCamion=request('photoCamion');
    $statut=request('password');

    DB::table('camions')->insert([
        'idProprio' => $idProprio,
        'idConducteur' => $idConducteur,
        'typeCamion' => $typeCamion,
        'caractéristiqueCamion' => $caractéristiqueCamion,
        'numImmatriculation' => $numImmatriculation,
        'capaciteDeCharge' => $capaciteDeCharge,
        'photoCamion' => $photoCamion,
        'statut' => $statut

    ]);
    
    return redirect()->route('table_camion');
}


public function modification_camion(Request $request,$id) {

    $idProprio = $request->input('idProprio');
    $idConducteur= $request->input('idConducteur');
    $typeCamion = $request->input('typeCamion');
    $caractéristiqueCamion = $request->input('caractéristiqueCamion');
    $numImmatriculation = $request->input('numImmatriculation');
    $capaciteDeCharge = $request->input('capaciteDeCharge');
    $photoCamion = $request->input('photoCamion');
    $statut = $request->input('statut');

    
    DB::table('camions')
        ->where('id', $id)
        ->update([
            'idProprio' => $idProprio,
            'idConducteur' => $idConducteur,
            'typeCamion' => $typeCamion,
            'caractéristiqueCamion' => $caractéristiqueCamion,
            'numImmatriculation' => $numImmatriculation,
            'capaciteDeCharge' => $capaciteDeCharge,
            'photoCamion' => $photoCamion,
            'statut' => $statut,

        
        ]);

       return redirect()->route('table_camion');

}
public function detail_camion($id){
    $table_camion = Camion::where('id', $id)->first();
    $idProprio=$table_camion->idProprio;
    $proprio=Proprietaire::where('id',$idProprio)->first();
    $idConducteur=$table_camion->idConducteur;
    $conducteur=Conducteur::where('id',$idConducteur)->first();
    return view("camion.detail_camion",compact('table_camion','proprio','conducteur'));
}
public function detail_proprios_camion($id){
    $table_camion = Camion::where('id', $id)->first();
    $idProprio=$table_camion->idProprio;
    $proprio=Proprietaire::where('id',$idProprio)->first();
    $idConducteur=$table_camion->idConducteur;
    $conducteur=Conducteur::where('id',$idConducteur)->first();
    return view("camion.detail_camion_proprio",compact('table_camion','proprio','conducteur'));
}
public function detail_conducteurs_camion($id){
    $table_camion = Camion::where('id', $id)->first();
    $idProprio=$table_camion->idProprio;
    $proprio=Proprietaire::where('id',$idProprio)->first();
    $idConducteur=$table_camion->idConducteur;
    $conducteur=Conducteur::where('id',$idConducteur)->first();
   
    return view("camion.detail_camion_conducteur",compact('table_camion','proprio','conducteur'));
}
}
