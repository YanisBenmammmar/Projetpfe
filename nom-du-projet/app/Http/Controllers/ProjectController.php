<?php

namespace App\Http\Controllers;

use App\Models\Projet;
use Illuminate\Http\Request;

class ProjectController extends Controller
{

    //


    public function store(Request $request)
{
    // Validation des données du formulaire ici (vous pouvez utiliser $request->validate())

    // Création d'une nouvelle instance de projet avec les données du formulaire
    $project = new Projet();
    $project->titre = $request->titre;
    $project->prop = $request->prop;
    $project->lieu = $request->lieu;
    $project->commune = $request->commune;
    $project->wilaya = $request->wilaya;
    $project->desc = $request->desc;
    $project->datedeb = $request->datedeb;
    $project->datefin = $request->datefin;

    // Enregistrement du projet dans la base de données
    $project->save();

    // Gestion de l'upload de la photo ici (vous pouvez utiliser $request->file('photo'))

    // Redirection vers une page de succès ou une autre action
    return redirect('/dashbord');
}


}
