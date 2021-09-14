<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class product
{
    private static $CSC = [
        [
            "judul" => "Coconut Shell",
            "slug" => "Coconut-Shell",
            "desc" => "Arang berbahan dasar tempurung kelapa yg dibakar,arang ini menggunakan kelapa yg sudah tua dan
            mempunyai tekstur lebih padat,kandungan air sedikit,serta mempunyai nilai jual yg tinggi maka arang batok
            kelapa ini sangat dicari dan dibutuhkan sbg bahan dasar dalam industri arang briket."
        ],
        [
            "judul" => "Coconut oil",
            "slug" => "Coconut-oil",
            "desc" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis veritatis praesentium ad, cupiditate expedita a nam impedit dolores vel rerum!"
        ],
        [
            "judul" => "Coconut Water",
            "slug" => "Coconut-water",
            "desc" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea earum perspiciatis illo corrupti blanditiis odit in magnam, sed nihil facilis enim fugit dolore, quidem molestias voluptate tempore commodi laboriosam officiis assumenda facere quos aperiam impedit! Aspernatur eveniet soluta facilis aut?"
        ]
    ];



    public static function all()
    {
        return self::$CSC;
    }
    
    public static function find($slug)
    {
        $product = static::all();
        return $product->firstWhere('slug',$slug);
    }
    

    public static function url()
    {
        $product = static::all();
        return $product->get('slug');
    }
}
