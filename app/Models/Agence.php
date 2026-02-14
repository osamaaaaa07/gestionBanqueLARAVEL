<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;

class Agence extends Model
{
    protected $fillable = [
        'nom',
        'ville',
        'adresse',
    ];

    public function clients(): HasMany
    {
        return $this->hasMany(Client::class, 'id_agence');
    }
}
