<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class product
{
    private static $CCO = [
        [
            "judul" => "Coconut Shell",
            "slug" => "Coconut Shell",
            "desc"=> "Arang berbahan dasar tempurung kelapa yg dibakar,arang ini menggunakan kelapa yg sudah tua dan
            mempunyai tekstur lebih padat,kandungan air sedikit,serta mempunyai nilai jual yg tinggi maka arang batok
            kelapa ini sangat dicari dan dibutuhkan sbg bahan dasar dalam industri arang briket."
        ],
    ];

    public static function all()
    {
        return collect(self::$CCO);
    }
    // public static function find($slug)
    // {
    //     $product = static::all();
    //     return $product->firstWhere('slug', $slug = Str::slug('Laravel 5 Framework', '-'));
    // }


}
