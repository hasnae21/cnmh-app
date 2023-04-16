<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
 use Illuminate\Database\Eloquent\Factories\HasFactory;
class Employe extends Model
{
    use HasFactory;    public $table = 'employes';

    public $fillable = [
        'nom',
        'prenom',
        'email',
        'telephone',
        'adresse',
        'date_naissance',
        'cin',
        'fonction_id',
        'date_embauche',
    ];

    protected $casts = [
        'nom' => 'string',
        'prenom' => 'string',
        'email' => 'string',
        'telephone' => 'string',
        'adresse' => 'string',
        'date_naissance' => 'date',
        'cin' => 'string',
        'fonction_id'=>"int",
        'date_embauche' => 'date',
    ];

    public static array $rules = [
        'nom' => 'required|string|max:255',
        'prenom' => 'required|string|max:255',
        'email' => 'required|string|max:255',
        'telephone' => 'required|string|max:255',
        'adresse' => 'required|string|max:255',
        'date_naissance' => 'required',
        'cin' => 'required|string|max:255',
        'fonction_id' => 'required',
        'date_embauche' => 'required',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];
}
