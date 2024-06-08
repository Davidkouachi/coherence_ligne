<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Adresse;
use App\Models\Type;
use App\Models\Secteur;
use App\Models\Entreprise;
use App\Models\Logo;

use App\Models\Type_plan;

class AbonnementController extends Controller
{
    public function add_type_plan(Request $request)
    {
        $type_plan = $request->input('type_plan');

        $rech = Type_plan::where('nom', $request->type_plan)->first();

        if ($rech) {
            return back()->with('warning', 'Ce Type déjà.');
        }else {

            $insert = new Type_plan();
            $insert->nom = $type_plan;
            $insert->save();

            if ($insert) {
                return back()->with('success', 'Enregistrement éffectuée.');
            }
        }
    }

    public function update_type_plan(Request $request)
    {
        $rech = Type_plan::where('id', $request->type_plan_id)->first();
        
        if ($rech) {

            $rech->nom = $request->type_plan_update;
            $rech->update();

            return back()->with('success', 'Mise à jour éffectuée.');
        }

        return back()->with('error', 'Echec de la mise à jour.');
    }
}
