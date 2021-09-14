<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class product
{
    private static $CSC = [
        [
            "judul" => "Coconut Shell Charcoal",
            "slug" => "coconut-shell-charcoal",
            "desc" => "Arang berbahan dasar tempurung kelapa yg dibakar,arang ini menggunakan kelapa yg sudah tua dan
            mempunyai tekstur lebih padat,kandungan air sedikit,serta mempunyai nilai jual yg tinggi maka arang batok
            kelapa ini sangat dicari dan dibutuhkan sbg bahan dasar dalam industri arang briket."
        ],
        [
            "judul" => "Crude Coconut Oil",
            "slug" => "crude-coconut-oil",
            "desc" => "produk minyak nabati yg diekstraksi tanpa melalui proses filtrasi dari inti kelapa dengan kandungan lemak jenuh yg tinggi dan lambat teroksidasi dengan demikian minyak ini tahan terhadap tengik dan bebas dari pencampuran minyak atau benda asing lainnya."
        ]
    ];

    public static function all()
    {
        return self::$CSC;
    }
    public static function find($slug)
    {
        $konten = self::$CSC;
        $new_konten = [];
        foreach ($konten as $k) {
            if ($k["slug"] === $slug) {
                $new_konten = $k;
            }
        }

        return $new_konten;
        // $product = static::all();
        // return $product->firstWhere('slug', $slug = Str::slug('Laravel 5 Framework', '-'));
    }
}
