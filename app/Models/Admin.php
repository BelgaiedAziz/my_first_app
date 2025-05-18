<?php

namespace App\Models;

class Admin extends User
{
    protected $table = 'admins';

    protected static function booted()
    {
        static::creating(function ($admin) {
            $admin->forceFill(['role' => 'ADMIN']);
        });
    }
}