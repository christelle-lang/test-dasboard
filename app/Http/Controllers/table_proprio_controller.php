<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Proprietaire;
use App\Models\Camion;
use App\Models\Conducteur;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;


class table_proprio_controller extends Controller
{


    public function table_proprio(){
        $table_proprio = DB::table('proprietaires')->get();
        return view('proprio.table_proprio', ['table_proprio' => $table_proprio]);
    }
    public function ajouter_proprio_form(){
       
      
        return view('proprio.ajouter_proprio');
    }

    public function recherche_proprio(Request $request)
    {
        $query = $request->input('recherche');
        $table_proprio = DB::table('proprietaires')
                ->where('nomProprio', 'like', "%$query%")
                ->orWhere('prenomProprio', 'like', "%$query%")
                ->orWhere('emailProprio', 'like', "%$query%")
                ->orWhere('numTelProprio', 'like', "%$query%")
                ->orWhere('numTelProprio2', 'like', "%$query%")
                ->orWhere('statut', 'like', "%$query%")
                ->get();
        return view('proprio.table_proprio', compact('table_proprio','query'));
}     
public function delete($id)
{
   $proprio= Proprietaire::where('id',$id)->first();
   
   $proprio->delete();
  return redirect()->route('table_proprio');
}

public function modifier_proprio($id){
    $proprio_modifie = Proprietaire::findOrFail($id);

    $table_proprio = DB::table('proprietaires')->get();
    return view('proprio.modifier_proprio',compact('proprio_modifie'));
   
    }



    
     public function ajouter_proprio(Request $request){
 
         $nomProprio =$request->input('nom');
         $prenomProprio =$request->input('prenom');
         $emailProprio=$request->input('email');
         $numtelProprio=$request->input('number1');
         $motDePasseProprio=bcrypt($request->input('password'));

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


    
         $statut=request('statut');
         $dateValidite=request('dateValidite');
         $proprioExist = Proprietaire::where('emailProprio', $emailProprio)->first();

        if ($proprioExist) {
            // L'enregistrement existe déjà, afficher une erreur
            return back()->with('error', 'L\'adresse e-mail est déjà utilisée.');
        }
     
         DB::table('proprietaires')->insert([
             'nomProprio' => $nomProprio,
             'prenomProprio' => $prenomProprio,
             'emailProprio' => $emailProprio,
             'numtelProprio' => $numtelProprio,
             'numTelProprio2' => $request->input('number2') ?: null,
             'motDePasseProprio' => $motDePasseProprio,
             'photoCNI' =>json_encode($data),
             'statut' => $statut,
             'dateValidite' => $dateValidite
         ]);
        
         return redirect()->route('table_proprio');
     }
    }

     public function modification_proprio(Request $request,$id) {

         $nom = $request->input('nom');
         $prenom = $request->input('prenom');
         $email = $request->input('email');
         $number1 = $request->input('number1');
         $number2 = $request->input('number2');
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

        $dateValidite=$request->input('dateValidite');

         $statut = $request->input('statut');

         DB::table('proprietaires')
             ->where('id', $id)
             ->update([
                 'nomProprio' => $nom,
                 'prenomProprio' => $prenom,
                 'emailProprio' => $email,
                 'numtelProprio' => $number1,
                 'numTelProprio2' => $number2,
                 'photoCNI' =>json_encode($data),
                 'statut' => $statut,
                 'dateValidite' => $dateValidite

            
             ]);

            return redirect()->route('table_proprios');

 }
     }



 public function modification_annuler(){

    return redirect()->route('table_conducteur');
   
    }
    public function detail_proprio($id){
        $proprio = Proprietaire::where('id', $id)->first();
        $camion = Camion::where('idProprio', $id)->get();
        $conducteur= Camion::where('idConducteur', $id)->get();
        $table_proprio =Proprietaire::where('id', $id)->first();
        return view('proprio.detail_proprio',compact('proprio', 'conducteur', 'camion','table_proprio'));
            

    }
    public function detail_camions_proprio($id){
        $proprio = Proprietaire::where('id', $id)->first();
        $camion = Camion::where('idProprio', $id)->get();
        $conducteur= Camion::where('idConducteur', $id)->get();
        $table_proprio =Proprietaire::where('id', $id)->first();
        return view('proprio.detail_camion',compact('proprio', 'conducteur', 'camion','table_proprio'));
            

    }

    public function detail_demande_proprio($id){
        $camion=Camion::where('idProprio',$id)->get();
      
        foreach($camion as $camions){
             $idconducteur=$camions->idConducteur;
             $conducteur=Conducteur::where('id',$idconducteur);
             $idCamion=Camion::where('id',$conducteur);
             
              

        }
      
        $proprio = Proprietaire::where('id', $id)->first();
        $camion = Camion::where('idProprio', $id)->get();
        $conducteur= Camion::where('idConducteur', $id)->get();
        $table_proprio =Proprietaire::where('id', $id)->first();
        return view('proprio.detail_camion',compact('proprio', 'conducteur', 'camion','table_proprio'));
            

    }
    
       
}
