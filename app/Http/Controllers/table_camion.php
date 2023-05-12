<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class table_camion extends Controller
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
            ->orWhere('motDePasseClient', 'like', "%$query%")
            ->orWhere('numTelClient', 'like', "%$query%")
            ->get();
    return view('camion.table_camion', compact('table_camion','query'));
   
}
public function delete($id)
{
   $client= Client::where('id',$id)->first();
   
  $client->delete();
  return redirect()->route('table_client');
}

public function modifier_client($id){
    $client_modifie = Client::findOrFail($id);
    $table_client = DB::table('clients')->get();
    return view('client.modifier_client',compact('client_modifie'));
   
    }

    public function ajouter_client(){
        $nom = request('nom');
        $prenom = request('prenom');
        $email=request('email');
        $num1=request('number1');
        $num2=request('number2');
        $pass=bcrypt(request('password'));
        DB::table('clients')->insert([
            'nomClient' => $nom,
            'prenomClient' => $prenom,
            'emailClient' => $email,
            'MotDePasseClient' => $pass,
            'numTelClient' => $num1,
            'numTelClient2' => $num2
        ]);
        
        return redirect()->route('table_camion');
    }


    public function modification_camion(Request $request,$id) {

        $nom = $request->input('nom');
        $prenom = $request->input('prenom');
        $email = $request->input('email');
        $number1 = $request->input('number1');
        $number2 = $request->input('number2');
        $pass = $request->input('password');
        DB::table('clients')
            ->where('id', $id)
            ->update([
                'nomClient' => $nom,
                'prenomClient' => $prenom,
                'emailClient' => $email,
                'numTelClient' => $number1,
                'numTelClient2' => $number2,
                'motDePasseClient' =>bcrypt($pass) ,
            
            ]);

           return redirect()->route('table_client');

}
}
