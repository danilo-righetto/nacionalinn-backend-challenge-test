<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class RolePlayingGameClasses extends Model
{
    /** @use HasFactory<\Database\Factories\RolePlayingGameClassesFactory> */
    use HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'function'
    ];
}
