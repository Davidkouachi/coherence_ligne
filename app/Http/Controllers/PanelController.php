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

use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class PanelController extends Controller
{
    public function index_panel()
    {
        return view('panel.accueil');
    }

    // --------------------------------------------

    public function index_add_entreprise()
    {
        return view('panel.entreprise.add');
    }

    public function index_list_entreprise()
    {
        return view('panel.entreprise.liste');
    }

    public function index_type_entreprise()
    {
        $list = Type::all();

        return view('panel.entreprise.type', ['list' => $list]);
    }

    public function index_secteur_entreprise()
    {
        $list = Type_plan::all();

        return view('panel.entreprise.secteur', ['list' => $list]);
    }

    // --------------------------------------------

    public function index_type_plan()
    {
        $list = Type_plan::all();

        return view('panel.entreprise.type_plan', ['list' => $list]);
    }
}
