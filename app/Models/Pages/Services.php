<?php

namespace App\Models\Pages;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    use HasFactory;
    protected $table = "services";
    protected $fillable = [
        'title',
        'sub_title',
        'button',
        'kazan_sistemleri_1',
        'kazan_sistemleri_2',
        'kombi_sistemleri_1',
        'kombi_sistemleri_2',
        'klima_sistemleri_1',
        'klima_sistemleri_2',
        'havalandırma_sistemleri_1',
        'havalandırma_sistemleri_2',
        'otomasyon_sistemleri_1',
        'otomasyon_sistemleri_2',
        'yangin_korumasi_1',
        'yangin_korumasi_2',
        'yalitim_1',
        'yalitim_2',
        'ozon_sistemleri_1',
        'ozon_sistemleri_2',
    ];
}
