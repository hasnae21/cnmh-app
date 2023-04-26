<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateProjectRequest;
use App\Http\Requests\UpdateProjectRequest;
use App\Http\Controllers\AppBaseController;
use App\Models\DossierPatient;
use App\Repositories\ProjectRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use Flash;

class StatistiquesController extends AppBaseController
{
    public function index(): View
    {
        // $nbrs = DossierPatient::withCount(' ')->get();
        $nbrs = DB::select('select * from dossier_patient_type_handicap where active = ?', [1]);

        // $nbrs = DB::table('')->count();
        return view('statistiques.index', ['nbrs' => $nbrs]);
    }

}