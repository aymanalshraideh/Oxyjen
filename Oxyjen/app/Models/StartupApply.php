<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StartupApply extends Model
{
    use HasFactory;
    protected $fillable = ['companyName', 'email', 'phone', 'location', 'description', 'status'];
}
