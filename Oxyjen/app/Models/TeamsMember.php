<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeamsMember extends Model
{
    protected $fillable = [
        'name',
        'image',
        'facebook',
        'twitter',
        'linkedin',
        'email',
    ];
    use HasFactory;
}
