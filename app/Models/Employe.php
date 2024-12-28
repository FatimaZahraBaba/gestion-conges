<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

class Employe extends Model
{
    protected $fillable = [
        'nom',
        'email',
        'password',
        'poste',
        'solde_conge',
        'date_embauche',
        'is_admin'
    ];

    public function setPasswordAttribute($value)
    {
        return $this->attributes['password'] = Hash::make($value);
    }

    public function demandes_conges() {
        return $this->hasMany(DemandeConge::class);
    }

    public function notifications() {
        return $this->hasMany(Notification::class);
    }

}
