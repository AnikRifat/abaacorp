<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Website extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'slogan', 'slogan_image', 'about', 'about_image', 'massage', 'logo', 'favicon', 'customer', 'worker', 'project', 'phone', 'email', 'address', 'facebook', 'twitter', 'linkedin', 'youtube'];
}
