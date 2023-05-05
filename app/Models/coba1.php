<?php

namespace App\Models;

class History1
{

    private static $history_user1 = [
        [
            "tanggal" => "18 Maret 2023",
            "invoice" => "INV/20230318/MPL/671029871",
            "coffee_name" => "Espresso Con Panna",
            "gambar" => "espresso-con-panna.jpg",
            "coffee_desc" => "The delicate dollop of whipped cream softens the rich and caramelly espresso",
            "coffee_price" => "Rp 40.000"
        ],
    
        [
            "tanggal" => "19 Maret 2023",
            "invoice" => "INV/20230319/MPL/934012843",
            "coffee_name" => "Flat White",
            "gambar" => "flat-white.jpg",
            "coffee_desc" => "Expertly steamed milk poured over a double shot of our signature espresso and finished with a thin layer of velvety microfoam.",
            "coffee_price" => "Rp 30.000"
        ],
    
        [
            "tanggal" => "21 Maret 2023",
            "invoice" => "INV/20230321/MPL/730182301",
            "coffee_name" => "Caramel Macchiato",
            "gambar" => "caramel-macchiato.jpg",
            "coffee_desc" => "Espresso combined with vanilla-flavoured syrup, milk and caramel sauce over ice",
            "coffee_price" => "Rp 50.000"
        ],
    ];

    public static function all()
    {
        return self::$history_user1;
    }
}