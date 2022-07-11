<?php

namespace App\Models\Pages;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Top_Header extends Model
{
    use HasFactory;
    protected $table='top_header';
    protected $fillable=[
      'adres',
      'tel_1',
      'tel_2',
      'facebook',
      'twitter',
      'linkledin'
    ];
}
