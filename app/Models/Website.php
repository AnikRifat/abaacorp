<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Website extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'slogan',
        'slogan_image',
        'about',
        'about_image',
        'massage',
        'logo',
        'favicon',
        'customer',
        'worker',
        'project',
        'phone',
        'email',
        'address',
        'facebook',
        'twitter',
        'linkedin',
        'youtube',
        'section_1',
        'section_2',
        'section_3',
        'section_4',
        'section_5',
        'section_6',
        'header_color',
        'header_text_color',
        'footer_color',
        'footer_text_color',
        'primary_color',
        'footer_link_hover_color',
        'header_link_hover_color',
    ];
}
