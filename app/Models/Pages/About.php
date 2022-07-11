<?php

namespace App\Models\Pages;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;
    protected $table = "abouts";
    protected $fillable =[
      'title',
      'content',
      'option_1',
      'option_2',
      'option_3',
      'option_4'
    ];
}
