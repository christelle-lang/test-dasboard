<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Demande;
use App\Models\Camion;
use Illuminate\Pagination\Paginator;


class table_client_controller extends Controller
{
    public function table_client(){
        $table_client = DB::table('clients')->get();
        $data =['table_client' => $table_client
    ];
        return view('client.table_client', $data);
    }


    public function recherche_client(Request $request)
{
    $query = $request->input('recherche');
    $table_client = DB::table('clients')
            ->where('nomClient', 'like', "%$query%")
            ->orWhere('prenomClient', 'like', "%$query%")
            ->orWhere('emailClient', 'like', "%$query%")
            ->orWhere('adresseClient', 'like', "%$query%")
            ->orWhere('motDePasseClient', 'like', "%$query%")
            ->orWhere('numTelClient', 'like', "%$query%")
            ->get();
    return view('client.table_client', compact('table_client','query'));
   
}
// public function delete($id)
// {
//    $client= Client::where('id',$id)->first();
   
//   $client->delete();
//   return redirect()->route('table_client');
// }

// public function modifier_client($id){
//     $client_modifie = Client::findOrFail($id);
//     $table_client = DB::table('clients')->get();
//     return view('client.modifier_client',compact('client_modifie'));
   
//     }
    

//     public function ajouter_client(){
     
//         $nom = request('nom');
//         $prenom = request('prenom');
//         $email=request('email');
//         $num1=request('number1');
//         $num2=request('number2');
//         $pass=bcrypt(request('password'));
//         $statut=request('statut');
       
//         // Vérifier si l'enregistrement existe déjà
//         $clientExist = Client::where('emailClient', $email)->first();

//         if ($clientExist) {
//             // L'enregistrement existe déjà, afficher une erreur
//             return back()->with('error', 'L\'adresse e-mail est déjà utilisée.');
//         }
//         DB::table('clients')->insert([
//             'nomClient' => $nom,
//             'prenomClient' => $prenom,
//             'emailClient' => $email,
//             'MotDePasseClient' => $pass,
//             'numTelClient' => $num1,
//             'numTelClient2' => $num2,
//             'statut' =>$statut
//         ]);
        
//         return redirect()->route('table_client');
//     }



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
// public function modification_annuler(){

//     return redirect()->route('table_client');
   
//     }
public function detail_client($id){
    $table_client = Client::where('id', $id)->first();
    $idClient = $table_client->id;
    $client = Client::find($idClient);

    return view("client.detail_client",compact('client'));
}

    
    public function detail_client_demandes($id){
        $table_client = Client::where('id', $id)->first();
        $idClient = $table_client->id;
        $client = Client::find($idClient);
    $table_client = DB::table('clients')->get();
    $demande = Demande::where('idClient', $id)->get();
        if ($demande) {
            $informations = [];
            foreach ($demande as $demandes) {
        
                $informations[] = [
                    'lieuEnlevement' => $demandes->lieuEnlevement,
                    'lieuDestination' => $demandes->lieuDestination,
                    'dateEnlevement' => $demandes->dateEnlevement,
                    'typeMarchandise' => $demandes->typeMarchandise,

                ];
               
            
            
            $idCamion = $demandes->idCamion;
            $camion = Camion::find($idCamion);

        
            if ($camion) {
                $typeCamion = $camion->typeCamion;
       
                return view('client.detail_demande', compact('informations', 'typeCamion','table_client','client'));

            }
           
        }
           
    
        // Faites ce que vous voulez avec les informations de la demande
   
        return view('client.detail_demande', compact('informations','client'));
    }
        else {
            // Gérez le cas où aucune demande n'est trouvée pour l'ID du client donné
            return redirect()->route('detail_demandes',['id' => $id])->with('error', 'Aucune demande trouvée pour l\'ID du client donné.');
        }
    
}
}