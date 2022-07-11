<?php

namespace App\Models\Pages;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Footer extends Model
{
    use HasFactory;
    protected $table = "footers";
    protected $fillable = [
      'description',
      'title',
      'menu_1',
      'menu_2',
      'menu_3',
      'menu_4',
      'menu_5',
      'menu_6',
      'helpful_link',
      'name',
      'tel',
      'email',
      'link_title',
      'link',
      'facebook',
      'twitter',
      'instagram',
      'linkledin',
    ];
}
