<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\HasMany;

class Donneur extends User
{
    protected $table = 'donneurs';

    protected $fillable = [
        'groupe_sanguin',
        'date_dernier_don',
        'date_prochain_don'
    ];

    protected $casts = [
        'date_dernier_don' => 'datetime',
        'date_prochain_don' => 'datetime',
    ];

    public function rendezVous(): HasMany
    {
        return $this->hasMany(RendezVous::class, 'donneur_id');
    }

    protected static function booted()
    {
        static::creating(function ($donneur) {
            $donneur->forceFill(['role' => 'DONNEUR']);
        });
    }
}