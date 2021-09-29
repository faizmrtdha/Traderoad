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
            "thumbnail" => "charcoal.jpg",
            "desc" => "Arang berbahan dasar tempurung kelapa yang dibakar, arang ini menggunakan kelapa yang sudah tua dan
            mempunyai tekstur lebih padat, kandungan air sedikit, serta mempunyai nilai jual yang tinggi maka arang
            batok
            kelapa ini sangat dicari dan dibutuhkan sbg bahan dasar dalam industri arang briket.",
            "img" => ["charcoal.jpg", "2.jpg", "3.jpg", "4.jpg"],
            "header" => ["Parameter", "Unit", "Result", "Method"],
            "specs" => [
                [
                    "param" => "Moisture Content",
                    "unit" => "%",
                    "result" => "&#8804 5%",
                    "method" => "ASTM D 1762-84 (REAPPROVED 203)"
                ],
                [
                    "param" => "Ash Content",
                    "unit" => "%",
                    "result" => "&#8804 8%",
                    "method" => "ASTM D 1762-84 (REAPPROVED 203)"
                ],
                [
                    "param" => "Size",
                    "unit" => "%",
                    "result" => "18-35; 10-18; 5-10;&#8804 4",
                    "method" => "ASTM D 1762-84 (REAPPROVED 203)"
                ],
                [
                    "param" => "Material",
                    "unit" => "%",
                    "result" => "High quality coconut shell",
                    "method" => "By Calculation"
                ],
                [
                    "param" => "Iodine value",
                    "unit" => "%",
                    "result" => "800-1200 mg/g",
                    "method" => "ASTM D 4239-14"
                ],
                [
                    "param" => "Hardness",
                    "unit" => "%",
                    "result" => "&#8804 95%",
                    "method" => "ASTM D 5373-08"
                ],
                [
                    "param" => "Specific Surface Area",
                    "unit" => "%",
                    "result" => "1000 m/g",
                    "method" => "ASTM D 5373-08"
                ]
            ],
            "supply" => [
                [
                    "supp" => "Supply Capability",
                    "result" => "100 Ton/Tons per Month"
                ]
            ],
            "packaging" => [
                [
                    "package" => "Standar Package",
                    "result" => "25kg per bag"
                ],
                [
                    "package" => "Jumbo Bag",
                    "result" => "500kg per bag"
                ],
                [
                    "package" => "Following customer requirement",
                    "result" => ""
                ],
                [
                    "package" => "Port",
                    "result" => "Tanjung Priok"
                ]
            ]
        ],
        [
            "judul" => "Coconut Fiber",
            "slug" => "Coconut-Fiber",
            "thumbnail" => "cf3.jpg",
            "desc" => "Sabut kelapa adalah serat alami yang di ekstrasksi dari cangkang kelapa bagian dalam dan bagian luar lapisan
            kelapa,biasa digunakan sbg bahan dalam pembuatan produk kerajinan seperti keset
            lantai,kasur,sikat,karung,dan tali.",
            "img" => ["cf1.jpg", "cf2.jpg", "cf3.jpg"],
            "header" => ["Parameter", "Unit", "Result",],
            "specs" => [
                [
                    "param" => "Color",
                    "result" => "Natural Brown",
                ],
                [
                    "param" => "Style",
                    "result" => "Dried",
                ],
                [
                    "param" => "Impurity",
                    "result" => "Max 3%",
                ],
                [
                    "param" => "Moisture",
                    "result" => "Up to 20%",
                ],
                [
                    "param" => "Length",
                    "result" => "10 -30 cm",
                ]
            ],
            "supply" => [
                [
                    "supp" => "Supply Capability",
                    "result" => "100 Ton/Tons per Month"
                ]
            ],
            "packaging" => [
                [
                    "package" => "Plastic straps with weight/bale",
                    "result" => "100-125 kg"
                ],
                [
                    "package" => "20 FT Container",
                    "result" => "Max load 11-12 mt"
                ],
                [
                    "package" => "40 FT Container",
                    "result" => "Max load 16 -17 mt"
                ],
                [
                    "package" => "Following customer requirement",
                    "result" => ""
                ],
                [
                    "package" => "Port",
                    "result" => "Tanjung Priok"
                ]
            ]
        ],

        [
            "judul" => "Coconut Shell Charcoal Briquettes",
            "slug" => "Coconut-Shell-Charcoal-Briquettes",
            "thumbnail" => "briquette.jpg",
            "desc" => "Arang berbentuk compact yang terbuat dari batok kelapa granular yang dihaluskan dan dicetak menggunakan
            bahan
            pengikat alami yang dapat bertahan lebih lama dari arang biasa ketika dibakar.Sering digunakan untuk
            keperluan
            rumah tangga,industri makanan,industri metalurgi dan barbeque.",
            "img" => ["briquette.jpg", "2.jpg", "3.jpg", "4.jpg"],
            "header" => ["Parameter", "Unit", "Result,Method"],
            "specs" => [
                [
                    "param" => "Max Calories",
                    "result" => "7500",
                ],
                [
                    "param" => "Ash Content",
                    "result" => "2% - 3%",
                ],
                [
                    "param" => "Ash Colour",
                    "result" => "White",
                ],
                [
                    "param" => "Fixed Carbon",
                    "result" => "80%",
                ],
                [
                    "param" => "Volatile Matter",
                    "result" => "15%",
                ],
                [
                    "param" => "Moisture",
                    "result" => "5% - 6%",
                ],
                [
                    "param" => "Burning Time",
                    "result" => "120 - 150 Minutes",
                ],
                [
                    "param" => "Variant Size",
                    "result" => "20x20x20 mm, 25x25x25 mm"
                ]
            ],
            "supply" => [
                [
                    "supp" => "Supply Capability",
                    "result" => "100 Ton/Tons per Month"
                ]
            ],
            "packaging" => [
                [
                    "package" => "Inner plastic + Inner Box (1 kg) + Master Box",
                    "result" => ""
                ],
                [
                    "package" => "20 FT Container",
                    "result" => "Max load 17-18 mt"
                ],
                [
                    "package" => "40 FT Container",
                    "result" => "Max load 24-25 mt"
                ],
                [
                    "package" => "Following customer requirement",
                    "result" => ""
                ],
                [
                    "package" => "Port",
                    "result" => "Tanjung priok"
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
            "img" => ["cp1.jpg", "cp2.jpg", "cp3.jpg"],
            "header" => ["Parameter", "Unit", "Result"],
            "specs" => [
                [
                    "param" => "Dimension",
                    "result" => "30 x 30 x 13 cm",
                ],
                [
                    "param" => "Weight",
                    "result" => "5 kg",
                ],
                [
                    "param" => "Compression Ratio",
                    "result" => "5:1",
                ],
                [
                    "param" => "Moisture",
                    "result" => "16-18%",
                ],
                [
                    "param" => "Ph",
                    "result" => "5,2 - 6,8",
                ],
                [
                    "param" => "Expansion",
                    "result" => "70-80 litres",
                ]
            ],
            "supply" => [
                [
                    "supp" => "Supply Capability",
                    "result" => "100 Ton/Tons per Month"
                ]
            ],
            "packaging" => [
                [
                    "package" => "40 FT Container",
                    "result" => "Max load 20 pallete (Each Palletes = 280 blocks) / 28 MT (28,000 kg)"
                ],
                [
                    "package" => "Following customer requirement",
                    "result" => ""
                ],
                [
                    "package" => "Port",
                    "result" => "Tanjung priok"
                ]
            ]
        ],
        [
            "judul" => "Crude Coconut Oil",
            "slug" => "Crude-Coconut-Oil",
            "thumbnail" => "cco1.jpg",
            "desc" => "produk minyak nabati yang diekstraksi tanpa melalui proses filtrasi dari inti kelapa dengan kandungan lemak
            jenuh yang tinggi dan lambat teroksidasi dengan demikian minyak ini tahan terhadap tengik dan bebas dari
            pencampuran minyak atau benda asing lainnya.",
            "img" => ["cco1.jpg", "cco.jpg", "3.jpg", "4.jpg"],
            "header" => ["Parameter", "Unit", "Result"],
            "specs" => [
                [
                    "param" => "Moisture & Impurities",
                    "result" => "Max 0.5%"
                ],
                [
                    "param" => "Free Fatty Acid",
                    "result" => "Max 4%"
                ],
                [
                    "param" => "Color",
                    "result" => "4-12% Red"
                ],
                [
                    "param" => "Iodine Value",
                    "result" => "7.5-10.5 Wijs"
                ],
                [
                    "param" => "Saponification Value",
                    "result" => "250-264 mg KOH/g"
                ]
            ],
            "supply" => [
                [
                    "supp" => "Supply Capability",
                    "result" => "100 Ton/Tons per Month"
                ]
            ],
            "packaging" => [
                [
                    "package" => "20kg/carton or following customer requirement",
                    "result" => ""
                ],
                [
                    "package" => "20 FT Container",
                    "result" => "Max load 11-12 mt"
                ],
                [
                    "package" => "40 FT Container",
                    "result" => "Max load 16 -17 mt"
                ],
                [
                    "package" => "Port",
                    "result" => "Tanjung priok"
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
                    "result" => "Max 0.1%"
                ],
                [
                    "param" => "Volatile Matters at 120<sup>o</sup>C",
                    "result" => "Max 0.2%"
                ],
                [
                    "param" => "Free Fatty Acid",
                    "result" => "Max 0.2%"
                ],
                [
                    "param" => "Peroxide Value",
                    "result" => "Max 3 meq/kg"
                ],
                [
                    "param" => "Relative Density",
                    "result" => "0.915-0.920"
                ],
                [
                    "param" => "Color",
                    "result" => "Water Clear"
                ],
                [
                    "param" => "Odor and Taste",
                    "result" => "Natural fresh coconut scent, free of sediment, free from rancid odor and taste"
                ]
            ],
            "supply" => [
                [
                    "supp" => "Supply Capability",
                    "result" => "100 Ton/Tons per Month"
                ]
            ],
            "packaging" => [
                [
                    "package" => "Bottle in clear bottle and package in cartons",
                    "result" => ""
                ],
                [
                    "package" => "Following customer requirement",
                    "result" => ""
                ],
                [
                    "package" => "Port",
                    "result" => "Tanjung Priok"
                ]
            ]
        ],
        [
            "judul" => "RBD Coconut Oil",
            "slug" => "RBD-Coconut-Oil",
            "thumbnail" => "rbd1.jpg",
            "desc" => "Coconut oil is processed with a given compound to purify, clarify and eliminate the less savory aroma that
            this product is quite durable and has many benefits. This product contains triglyceride fatty acids, has a
            bland taste, and is also odorless so that it can be used as a mixture of raw materials for making soap,
            cosmetics, and processed foods on a food industry scale.",
            "img" => ["rbd1.jpg", "rbd.jpg", "3.jpg", "4.jpg"],
            "header" => ["Parameter", "Unit", "Result"],
            "specs" => [
                [
                    "param" => "Moisture",
                    "result" => "Max 0.1%"
                ],
                [
                    "param" => "Free Fatty Acid",
                    "result" => "Max 0.1%"
                ],
                [
                    "param" => "Iodine Value",
                    "result" => "6.2-11 Wijs"
                ],
                [
                    "param" => "Saponification Value",
                    "result" => "250 - 264 mg KOH/g"
                ],
                [
                    "param" => "Taste",
                    "result" => "Normal"
                ],
                [
                    "param" => "Color",
                    "result" => "Max 1.5 R"
                ],
                [
                    "param" => "Odor",
                    "result" => "Odorless"
                ]
            ],
            "supply" => [
                [
                    "supp" => "Supply Capability",
                    "result" => "100 Ton/Tons per Month"
                ]
            ],
            "packaging" => [
                [
                    "package" => "20 FT Container",
                    "result" => "Jerrycan/18 Litre/"
                ],
                [
                    "package" => "Flexitank",
                    "result" => "21,500 Kg"
                ],
                [
                    "package" => "Following customer requirement",
                    "result" => ""
                ],
                [
                    "package" => "Port",
                    "result" => "Tanjung Priok"
                ],
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
