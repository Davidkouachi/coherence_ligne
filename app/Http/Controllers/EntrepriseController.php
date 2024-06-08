<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Adresse;
use App\Models\Type;
use App\Models\Secteur;
use App\Models\Entreprise;
use App\Models\Logo;

class EntrepriseController extends Controller
{
    public function add_type(Request $request)
    {
    	$type = $request->input('type');
    	$code = $request->input('code');

    	$rech = Type::where('nom', $request->type)
    				->Orwhere('code', $request->code)
    				->first();

    	if ($rech) {
            return back()->with('warning', 'Ce Type déjà.');
        }else {

	        $insert = new Type();
	        $insert->nom = $type;
	        $insert->code = $code;
	        $insert->save();

	        if ($insert) {
	            return back()->with('success', 'Enregistrement éffectuée.');
	        }
	    }
    }

    public function update_type(Request $request)
    {
    	$rech = Type::where('id', $request->type_id)->first();
        
        if ($rech) {

            $rech->nom = $request->type_update;
            $rech->code = $request->code_update;
            $rech->update();

            return back()->with('success', 'Mise à jour éffectuée.');
        }

        return back()->with('error', 'Echec de la mise à jour.');
    }

    public function add_secteur(Request $request)
    {
    	$secteur = $request->input('secteur');
    	$rech = Secteur::where('nom', $request->secteur)->first();

    	if ($rech) {

            return back()->with('warning', 'Ce secteur déjà.');
        }else {

	        $insert = new Secteur();
	        $insert->nom = $secteur;
	        $insert->save();

	        if ($insert) {
	            return back()->with('success', 'Enregistrement éffectuée.');
	        }
	    }
    }

    public function update_secteur(Request $request)
    {
    	$rech = Secteur::where('id', $request->secteur_id)->first();
        
        if ($rech) {

            $rech->nom = $request->secteur_update;
            $rech->update();

            return back()->with('success', 'Mise à jour éffectuée.');
        }

        return back()->with('error', 'Echec de la mise à jour.');
    }
}
