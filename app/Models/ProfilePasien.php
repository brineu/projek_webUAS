<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfilePasien extends Model
{
    use HasFactory;
    protected $table = "profile_pasien";
    protected $fillable = ['profilePasien_key', 'profilePasien_value'];
}