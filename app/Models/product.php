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
            "slug" => "Coconut-Shell-Charcoal",
            "thumbnail" => "cp1.jpg",
            "desc" => "Arang berbahan dasar tempurung kelapa yang dibakar, arang ini menggunakan kelapa yang sudah tua dan
            mempunyai tekstur lebih padat, kandungan air sedikit, serta mempunyai nilai jual yang tinggi maka arang
            batok
            kelapa ini sangat dicari dan dibutuhkan sbg bahan dasar dalam industri arang briket.",
            "img" => ["1.jpg", "2.jpg", "3.jpg", "4.jpg"],
            "header" => ["Parameter", "Unit", "Result", "Method"],
            "specs" => [
                [
                    "param" => "Moisture Content",
                    "unit" => "%",
                    "result" => "2.72",
                    "method" => "ASTM D 1762-84 (REAPPROVED 203)"
                ],
                [
                    "param" => "Ash Content",
                    "unit" => "%",
                    "result" => "5.58",
                    "method" => "ASTM D 1762-84 (REAPPROVED 203)"
                ],
                [
                    "param" => "Volatile Matter",
                    "unit" => "%",
                    "result" => "8.42",
                    "method" => "ASTM D 1762-84 (REAPPROVED 203)"
                ],
                [
                    "param" => "Fixed Carbon",
                    "unit" => "%",
                    "result" => "83.28",
                    "method" => "By Calculation"
                ],
                [
                    "param" => "Sulfur",
                    "unit" => "%",
                    "result" => "0.08",
                    "method" => "ASTM D 4239-14"
                ],
                [
                    "param" => "Carbon",
                    "unit" => "%",
                    "result" => "83.20",
                    "method" => "ASTM D 5373-08"
                ],
                [
                    "param" => "Hydrogen",
                    "unit" => "%",
                    "result" => "1.63",
                    "method" => "ASTM D 5373-08"
                ],
                [
                    "param" => "Nitrogen",
                    "unit" => "%",
                    "result" => "0.88",
                    "method" => "ASTM D 5373-08"
                ],
                [
                    "param" => "Oxigen",
                    "unit" => "%",
                    "result" => "5.91",
                    "method" => "ASTM D 3176-15"
                ]
            ]
        ],
        [
            "judul" => "Coconut Fiber",
            "slug" => "Coconut-Fiber",
            "thumbnail" => "cf1.jpg",
            "desc" => "Sabut kelapa adalah serat alami yang di ekstrasksi dari cangkang kelapa bagian dalam dan bagian luar lapisan
            kelapa,biasa digunakan sbg bahan dalam pembuatan produk kerajinan seperti keset
            lantai,kasur,sikat,karung,dan tali.",
            "img" => ["cf1.jpg", "cf2.jpg"],
            "header" => ["Parameter", "Unit", "Result",],
            "specs" => [
                [
                    "param" => "Moisture Content",
                    "unit" => "%",
                    "result" => "2.72",
                ],
                [
                    "param" => "Ash Content",
                    "unit" => "%",
                    "result" => "5.58",
                ],
                [
                    "param" => "Volatile Matter",
                    "unit" => "%",
                    "result" => "8.42",
                ],
                [
                    "param" => "Fixed Carbon",
                    "unit" => "%",
                    "result" => "83.28",
                ],
                [
                    "param" => "Sulfur",
                    "unit" => "%",
                    "result" => "0.08",
                ],
                [
                    "param" => "Carbon",
                    "unit" => "%",
                    "result" => "83.20",
                ],
                [
                    "param" => "Hydrogen",
                    "unit" => "%",
                    "result" => "1.63",
                ],
                [
                    "param" => "Nitrogen",
                    "unit" => "%",
                    "result" => "0.88",
                ],
                [
                    "param" => "Oxigen",
                    "unit" => "%",
                    "result" => "5.91",
                ]
            ]
        ],
        [
            "judul" => "Coconut Shell Charcoal Briquettes",
            "slug" => "Coconut-Shell-Charcoal-Briquettes",
            "thumbnail" => "copra.png",
            "desc" => "Arang berbentuk compact yang terbuat dari batok kelapa granular yang dihaluskan dan dicetak menggunakan
            bahan
            pengikat alami yang dapat bertahan lebih lama dari arang biasa ketika dibakar.Sering digunakan untuk
            keperluan
            rumah tangga,industri makanan,industri metalurgi dan barbeque.",
            "img" => ["1.jpg", "2.jpg", "3.jpg", "4.jpg"],
            "header" => ["Parameter", "Unit", "Result,Method"],
            "specs" => [
                [
                    "param" => "Moisture Content",
                    "unit" => "%",
                    "result" => "2.72",
                    "method" => "ASTM D 1762-84 (REAPPROVED 203)"
                ],
                [
                    "param" => "Ash Content",
                    "unit" => "%",
                    "result" => "5.58",
                    "method" => "ASTM D 1762-84 (REAPPROVED 203)"
                ],
                [
                    "param" => "Volatile Matter",
                    "unit" => "%",
                    "result" => "8.42",
                    "method" => "ASTM D 1762-84 (REAPPROVED 203)"
                ],
                [
                    "param" => "Fixed Carbon",
                    "unit" => "%",
                    "result" => "83.28",
                    "method" => "By Calculation"
                ],
                [
                    "param" => "Sulfur",
                    "unit" => "%",
                    "result" => "0.08",
                    "method" => "ASTM D 4239-14"
                ],
                [
                    "param" => "Carbon",
                    "unit" => "%",
                    "result" => "83.20",
                    "method" => "ASTM D 5373-08"
                ],
                [
                    "param" => "Hydrogen",
                    "unit" => "%",
                    "result" => "1.63",
                    "method" => "ASTM D 5373-08"
                ],
                [
                    "param" => "Nitrogen",
                    "unit" => "%",
                    "result" => "0.88",
                    "method" => "ASTM D 5373-08"
                ],
                [
                    "param" => "Oxigen",
                    "unit" => "%",
                    "result" => "5.91",
                    "method" => "ASTM D 3176-15"
                ]
            ]
        ],
        [
            "judul" => "Cocopeat",
            "slug" => "Cocopeat",
            "thumbnail" => "cp1.jpg",
            "desc" => "sabut dikenal karena hormon rooting alami dan sifat anti jamurnya yang sangat efektif untuk berbagai
            kebutuhan
            penanaman.cocopeat yang kami peroleh melalui proses r&d yang sangat ketat sejak proses penyaringan,
            pencucian,hingga pengeringan.kami juga menyediakan pengemasan berbentuk block sbg media tanam yang ideal.",
            "img" => ["cp1.jpg", "cp2.jpg", "cp3.jpg", "4.jpg"],
            "header" => ["Parameter", "Unit", "Result"],
            "specs" => [
                [
                    "param" => "Moisture Content",
                    "unit" => "%",
                    "result" => "2.72",
                    "method" => "ASTM D 1762-84 (REAPPROVED 203)"
                ],
                [
                    "param" => "Ash Content",
                    "unit" => "%",
                    "result" => "5.58",
                    "method" => "ASTM D 1762-84 (REAPPROVED 203)"
                ],
                [
                    "param" => "Volatile Matter",
                    "unit" => "%",
                    "result" => "8.42",
                    "method" => "ASTM D 1762-84 (REAPPROVED 203)"
                ],
                [
                    "param" => "Fixed Carbon",
                    "unit" => "%",
                    "result" => "83.28",
                    "method" => "By Calculation"
                ],
                [
                    "param" => "Sulfur",
                    "unit" => "%",
                    "result" => "0.08",
                    "method" => "ASTM D 4239-14"
                ],
                [
                    "param" => "Carbon",
                    "unit" => "%",
                    "result" => "83.20",
                    "method" => "ASTM D 5373-08"
                ],
                [
                    "param" => "Hydrogen",
                    "unit" => "%",
                    "result" => "1.63",
                    "method" => "ASTM D 5373-08"
                ],
                [
                    "param" => "Nitrogen",
                    "unit" => "%",
                    "result" => "0.88",
                    "method" => "ASTM D 5373-08"
                ],
                [
                    "param" => "Oxigen",
                    "unit" => "%",
                    "result" => "5.91",
                    "method" => "ASTM D 3176-15"
                ]
            ]
        ],
        [
            "judul" => "Crude Coconut Oil",
            "slug" => "Crude Coconut-Oil",
            "thumbnail" => "cco.jpg",
            "desc" => "produk minyak nabati yang diekstraksi tanpa melalui proses filtrasi dari inti kelapa dengan kandungan lemak
            jenuh yang tinggi dan lambat teroksidasi dengan demikian minyak ini tahan terhadap tengik dan bebas dari
            pencampuran minyak atau benda asing lainnya.",
            "img" => ["cco.jpg", "2.jpg", "3.jpg", "4.jpg"],
            "header" => ["Parameter", "Unit", "Result"],
            "specs" => [
                [
                    "param" => "Moisture & Impurities",
                    "unit" => "%",
                    "result" => "Max 0.5"
                ],
                [
                    "param" => "Free Fatty Acid",
                    "unit" => "%",
                    "result" => "Max 4"
                ],
                [
                    "param" => "Color",
                    "unit" => "%",
                    "result" => "4-12 Red"
                ],
                [
                    "param" => "Iodine Value",
                    "unit" => "Wijs",
                    "result" => "7.5-10.5"
                ],
                [
                    "param" => "Saponification Value",
                    "unit" => "mg KOH/g oil sample",
                    "result" => "250-264"
                ]
            ]
        ],
        [
            "judul" => "Virgin Coconut Oil",
            "slug" => "Virgin-Coconut-Oil",
            "thumbnail" => "vco.jpg",
            "desc" => "Minyak yang dibuat dari kelapa segar yang diolah melalui proses pemanasan tanpa bahan kimia untuk diambil
            minyaknya,memiliki kandungan esensial asam laurat membuat vco ini memiliki sifat antibiotik,anti bakterim
            dan jamur yang sangat baik untuk kesehatan.penggunaan optimal minyak ini dikembangkan menjadi produk
            pangan,farmasi,maupun kosmetik.",
            "img" => ["vco.jpg", "2.jpg", "3.jpg", "4.jpg"],
            "header" => ["Parameter", "Unit", "Result"],
            "specs" => [
                [
                    "param" => "Moisture",
                    "unit" => "%",
                    "result" => "Max 0.1"
                ],
                [
                    "param" => "Volatile Matters at 120<sup>o</sup>C",
                    "unit" => "%",
                    "result" => "Max 0.2"
                ],
                [
                    "param" => "Free Fatty Acid",
                    "unit" => "%",
                    "result" => "Max 0.2"
                ],
                [
                    "param" => "Peroxide Value meq/kg",
                    "unit" => "-",
                    "result" => "Max 3"
                ],
                [
                    "param" => "Relative Density",
                    "unit" => "-",
                    "result" => "0.915-0.920"
                ],
                [
                    "param" => "Relative index at 40<sup>o</sup>C",
                    "unit" => "-",
                    "result" => "1.4480-1.4492"
                ],
                [
                    "param" => "Insoluble impurities per cent by mass",
                    "unit" => "-",
                    "result" => "Max 0.05"
                ],
                [
                    "param" => "Saponification Value",
                    "unit" => "Mg KOH/g oil",
                    "result" => "250-260 min"
                ],
                [
                    "param" => "Iodine Value",
                    "unit" => "Wijs",
                    "result" => "7.5-10.5"
                ],
                [
                    "param" => "Unsaponifiable matter % by mass, max",
                    "unit" => "-",
                    "result" => "0.2-0.5"
                ],
                [
                    "param" => "Specific gravity at 30 deg./30<sup>o</sup>C",
                    "unit" => "-",
                    "result" => "0.915-0.920"
                ],
                [
                    "param" => "Polenske Value, min",
                    "unit" => "-",
                    "result" => "13"
                ],
                [
                    "param" => "Total Plate Count",
                    "unit" => "-",
                    "result" => "&#60;0.5"
                ],
                [
                    "param" => "Color",
                    "unit" => "-",
                    "result" => "Water Clear"
                ],
                [
                    "param" => "Odor and Taste",
                    "unit" => "-",
                    "result" => "Natural fresh coconut scent, free of sediment, free from rancid odor and taste"
                ]
            ]
        ],
        [
            "judul" => "RBD Coconut Oil",
            "slug" => "RBD-Coconut-Oil",
            "thumbnail" => "co1.jpg",
            "desc" => "Coconut oil is processed with a given compound to purify, clarify and eliminate the less savory aroma that
            this product is quite durable and has many benefits. This product contains triglyceride fatty acids, has a
            bland taste, and is also odorless so that it can be used as a mixture of raw materials for making soap,
            cosmetics, and processed foods on a food industry scale.",
            "img" => ["rbd.jpg", "2.jpg", "3.jpg", "4.jpg"],
            "header" => ["Parameter", "Unit", "Result"],
            "specs" => [
                [
                    "param" => "Moisture",
                    "unit" => "%",
                    "result" => "Max 0.1"
                ],

                [
                    "param" => "Free Fatty Acid",
                    "unit" => "%",
                    "result" => "Max 0.2"
                ],

                [
                    "param" => "Saponification Value",
                    "unit" => "Mg KOH/g oil",
                    "result" => "250-260 min"
                ],
                [
                    "param" => "Iodine Value",
                    "unit" => "Wijs",
                    "result" => "7.5-10.5"
                ],
                [
                    "param" => "Color",
                    "unit" => "-",
                    "result" => "Water Clear"
                ],
                [
                    "param" => "Odor",
                    "unit" => "-",
                    "result" => "Odorless"
                ]
            ]
        ],
    ];



    public static function all()
    {
        return collect(self::$CSC);
    }

    public static function find($slug)
    {
        $product = static::all();
        return $product->firstWhere('slug', $slug);
    }


    public static function url()
    {
        $product = static::all();
        return $product->get('slug');
    }
}
