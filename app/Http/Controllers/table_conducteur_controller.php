<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Conducteur;
use App\Models\Proprietaire;
use App\Models\Camion;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;

class table_conducteur_controller extends Controller
{
   
    public function table_conducteur(){
        $table_conducteur = DB::table('conducteurs')->get();
        return view('conducteur.table_conducteur', ['table_conducteur' => $table_conducteur]);
    }

    public function ajouter_conducteur_form(){
       
      
        return view('conducteur.ajouter_conducteur');
    }


    public function recherche_conducteur(Request $request)
    {
        $query = $request->input('recherche');
        $table_conducteur = DB::table('conducteurs')
                ->where('nomConducteur', 'like', "%$query%")
                ->orWhere('prenomConducteur', 'like', "%$query%")
                ->orWhere('emailConducteur', 'like', "%$query%")
                ->orWhere('numtelConducteur', 'like', "%$query%")
                ->orWhere('numTelConducteur2', 'like', "%$query%")
                ->orWhere('numPermis', 'like', "%$query%")
                ->orWhere('statut', 'like', "%$query%")
                ->get();
        return view('conducteur.table_conducteur', compact('table_conducteur','query'));
}     
public function delete($id)
{
   $conducteur= Conducteur::where('id',$id)->first();
   $conducteur->delete();
   return redirect()->route('table_conducteur');
}

public function modifier_conducteur($id){
    $conducteur_modifie = Conducteur::findOrFail($id);
    $table_conducteur = DB::table('conducteurs')->get();
    return view('conducteur.modifier_conducteur',compact('conducteur_modifie'));
   
    }


     public function ajouter_conducteur(Request $request){
         $nomConducteur = request('nom');
         $prenomConducteur = request('prenom');
         $emailConducteur=request('email');
         $numtelConducteur=request('number1');
         $numTelConducteur2=request('number2');
         $motDePasseConducteur=bcrypt(request('password'));
         $statut=request('statut');
         $dateValiditePermis=request('dateValiditePermis');
         $dateValiditeCNI=request('dateValiditeCNI');

         $images = $request->file('photoCNI');
// dd($request->all());
         $data = [];
         if ($images) {
            if (!is_array($images)) {
                $images = [$images]; // Convertir en tableau si une seule image est présente
            }
        
            foreach ($request->file('photoCNI') as $image) {
        $image_nom = $image->getClientOriginalName();
        $image_chemin = 'img/' . $image_nom;
        $image->move(public_path('img'), $image_nom);
        $data[] = $image_chemin;
        
    }
    $imagesConduc = $request->file('photoPermis');
    // dd($request->all());
             $dataConduc = [];
             if ($imagesConduc) {
                if (!is_array($imagesConduc)) {
                    $imagesConduc = [$imagesConduc]; // Convertir en tableau si une seule image est présente
                }
            
                foreach ($request->file('photoPermis') as $imageConduc) {
            $image_nomConduc = $imageConduc->getClientOriginalName();
            $image_cheminConduc = 'img/' . $image_nomConduc;
            $imageConduc->move(public_path('img'), $image_nomConduc);
            $dataConduc[] = $image_cheminConduc;
            
        }
         DB::table('conducteurs')->insert([
             'nomConducteur' => $nomConducteur,
             'prenomConducteur' => $prenomConducteur,
             'emailConducteur' => $emailConducteur,
             'numTelConducteur' => $numtelConducteur,
             'numTelConducteur2' => $numTelConducteur2,
             'photoPermis' =>json_encode($dataConduc),
             'photoCNI' =>json_encode($data),
             'motDePasseConducteur' => $motDePasseConducteur,
             'dateValiditeCNI' => $dateValiditeCNI,
             'dateValiditePermis' => $dateValiditePermis,
             'statut' => $statut
         ]);
        
         return redirect()->route('table_conducteur');
     }

}
     }
     public function modification_conducteur(Request $request,$id) {
        $nomConducteur = $request->input('nom');
        $prenomConducteur = $request->input('prenom');
        $emailConducteur=$request->input('email');
        $numtelConducteur=$request->input('number1');    
        $numPermis=$request->input('numPermis');
        $statut=$request->input('statut');
        
         DB::table('conducteurs')
             ->where('id', $id)
             ->update([
                 'nomConducteur' => $nomConducteur,
                 'prenomConducteur' => $prenomConducteur,
                 'emailConducteur' => $emailConducteur,
                 'numtelConducteur' => $numtelConducteur,
                 'numTelConducteur2' => $request->input('number2') ?: null,
                 'numPermis' => $numPermis,
                 'statut' => $statut,
            
             ]);

            return redirect()->route('table_conducteur');

 }

 public function modification_annuler(){

    return redirect()->route('table_conducteur');
   
    }
    public function detail_conducteur($id){

       

        $table_conducteur = Conducteur::where('id', $id)->first();
  
    
        $camion = Camion::where('idConducteur', $id)->get();
    
       
    
        $conducteur = Camion::where('idConducteur', $id)->get();
        foreach($conducteur as $conducteurs){
       
       
        $idProprio = $conducteurs['idProprio'];
       
        $proprio = Proprietaire::find($idProprio);
        $proprios[]=  $proprio;
   
        
      
    
        return view('conducteur.detail_conducteur', compact('camion', 'conducteur', 'proprios', 'table_conducteur'));
    }
    }
    public function detail_camions_conduc($id){

       

        $table_conducteur = Conducteur::where('id', $id)->first();
  
        $camion = Camion::where('idConducteur', $id)->first();
    
    
        $conducteur = Camion::where('idConducteur', $id)->get();
        foreach($conducteur as $conducteurs){
       
       
        $idProprio = $conducteurs['idProprio'];
       
        $proprio = Proprietaire::find($idProprio);
        $proprios[]=  $proprio;
   

    
        return view('conducteur.detail_camion', compact('camion', 'conducteur', 'proprios', 'table_conducteur'));
    }

    }
    public function detail_proprios_conduc($id){

       

        $table_conducteur = Conducteur::where('id', $id)->first();
  
       
        $camion = Camion::where('idConducteur', $id)->get();
      
      
        $conducteur = Camion::where('idConducteur', $id)->get();
        foreach($conducteur as $conducteurs){
       
       
        $idProprio = $conducteurs['idProprio'];
       
        $proprio = Proprietaire::find($idProprio);
        $proprios[]=  $proprio;
   
        
      
        return view('conducteur.detail_proprio', compact('camion', 'conducteur', 'proprios', 'table_conducteur'));
    }

    }
}
