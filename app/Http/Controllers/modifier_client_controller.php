<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Client;


class modifier_client_controller extends Controller
{
    public function modifier_client($id){
        $client = Client::findOrFail($id);
        return view('client.table_client',['client' => $client]);
       
        }
//         public function modifCours(Request $request) {
//         $id = $request->input('id');
//         $nom = $request->input('nom');
//         $info = $request->input('info');
//         $imagePath = $request->input('image'); 
//         DB::table('cours')
//             ->where('id', $id)
//             ->update([
//                 'nom' => $nom,
//                 'info' => $info,
//                 'image' => $imagePath
//             ]);
//         return redirect('afficherCours');
// }
}