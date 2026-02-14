<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [
        'nom',
        'prenom',
        'age',
        'solde',
        'id_agence',
    ];

    public function agence(): BelongsTo
    {
        return $this->belongsTo(Agence::class, 'id_agence');
    }

    public function virements(): HasMany
    {
        return $this->hasMany(Virement::class, 'id_client');
    }
}
