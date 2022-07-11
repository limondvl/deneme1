<?php

namespace App\Models\Pages;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Muracaat extends Model
{
    use HasFactory;
    protected $table = "muracaats";
    protected $fillable = [
      'name',
      'email',
      'contac',
      'subject',
      'messages',
    ];
}
