<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Livre extends Model
{
    protected $fillable=[
        'auteur',
        'titre',
        'num_livre',
        'quantite'
    ];
    public function emprunts(){
        return $this->hasMany(Emprunt::class,'livre_id');
    }
}
