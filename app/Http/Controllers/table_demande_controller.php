<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Demande;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;


class table_demande_controller extends Controller
{
    public function table_demande(){
        $table_demande = DB::table('demandes')->get();
        $data =['table_demande' => $table_demande
    ];
        return view('demande.table_demande', $data);
    }


     public function recherche_demande(Request $request)
 {
     $query = $request->input('recherche');
     $table_demande = DB::table('demandes')
             ->where('id', 'like', "%$query%")
             ->orWhere('idClient', 'like', "%$query%")
             ->orWhere('idCamion', 'like', "%$query%")
             ->orWhere('poidsMarchandise', 'like', "%$query%")
             ->orWhere('lieuEnlevement', 'like', "%$query%")
             ->orWhere('lieuDestination', 'like', "%$query%")
             ->orWhere('dateEnlevement', 'like', "%$query%")
             ->orWhere('typeMarchandise', 'like', "%$query%")
             ->orWhere('descriptionMarchandise', 'like', "%$query%")
             ->orWhere('statut', 'like', "%$query%")
             ->get();
     return view('demande.table_demande', compact('table_demande','query'));
   
 }
 public function delete($id)
 { 
  ;
    $demande= Demande::where('id',$id)->first();
   
     $demande->delete();
    return redirect()->route('table_demande');

 }

 public function modifier_demande($id){
     $demande_modifie = Demande::findOrFail($id);     $table_client = DB::table('demandes')->get();
     return view('demande.modifier_demande',compact('demande_modifie'));
   
     } 

     public function ajouter_demande(){
         $idClient = request('idClient');
         $idCamion = request('idCamion');
         $poidsMarchandise=request('poidsMarchandise');
        $lieuEnlevement=request('lieuEnlevement');
        $lieuDestination=request('lieuDestination');                  
         $typeMarchandise=request('typeMarchandise');
         $dateEnlevement=request('dateEnlevement');
         $descriptionMarchandise=request('descriptionMarchandise');
         $statut=request('statut');
         DB::table('demandes')->insert([
             'idClient' => $idClient,
             'idCamion' => $idCamion,
             'poidsMarchandise' => $poidsMarchandise,
             'lieuEnlevement' => $lieuEnlevement,
             'lieuDestination' => $lieuDestination,
             'dateEnlevement' => $dateEnlevement,
             'typeMarchandise' => $typeMarchandise,
             'descriptionMarchandise' => $descriptionMarchandise,
             'statut' => $statut,
           
       ]);      
         return redirect()->route('table_demande');
     }


//     public function modification_client(Request $request,$id) {

//         $nom = $request->input('nom');
//         $prenom = $request->input('prenom');
//         $email = $request->input('email');
//         $number1 = $request->input('number1');
//         $number2 = $request->input('number2');
//         $pass = $request->input('password');
//         DB::table('clients')
//             ->where('id', $id)
//             ->update([
//                 'nomClient' => $nom,
//                 'prenomClient' => $prenom,
//                 'emailClient' => $email,
//                 'numTelClient' => $number1,
//                 'numTelClient2' => $number2,
//                 'motDePasseClient' =>bcrypt($pass) ,
            
//             ]);

//            return redirect()->route('table_client');

// }

}
