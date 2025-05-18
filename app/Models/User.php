<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The table associated with the model.
     */
    protected $table = 'utilisateurs';

    /**
     * The primary key for the model.
     */
    protected $primaryKey = 'id';

    /**
     * The "type" of the primary key ID.
     */
    protected $keyType = 'string';

    /**
     * Indicates if the IDs are auto-incrementing.
     */
    public $incrementing = false;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'id',
        'nom',
        'prenom',
        'email',
        'password',
        'telephone',
        'adresse',
        'date_de_naissance',
        'role'
    ];

    /**
     * The attributes that should be hidden for serialization.
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'date_de_naissance' => 'date',
    ];

    /**
     * Determine if the user has a specific role.
     */
    public function hasRole($role)
    {
        return strtoupper($this->role) === strtoupper($role);
    }

    /**
     * Get the user's full name.
     */
    public function getFullNameAttribute()
    {
        return "{$this->prenom} {$this->nom}";
    }
}