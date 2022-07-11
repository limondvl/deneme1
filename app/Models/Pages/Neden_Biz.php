<?php

namespace App\Models\Pages;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Neden_Biz extends Model
{
    use HasFactory;
    protected $table = "neden__bizs";
    protected $fillable = [
        'title',
        'description',
        'name_1',
        'name_desc_1',
        'name_2',
        'name_desc_2',
        'name_3',
        'name_desc_3',
        'name_4',
        'name_desc_4',
    ];
}
