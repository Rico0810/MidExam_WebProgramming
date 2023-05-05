<?php

namespace App\Models;

class History2
{

    private static $history_user2 = [
        [
            "tanggal" => "19 Maret 2023",
            "invoice" => "INV/20230319/MPL/983102982",
            "coffee_name" => "Caffè Americano",
            "gambar" => "caffe-americano.jpg",
            "coffee_desc" => "HOT: Rich, full-bodied espresso with hot water.",
            "coffee_price" => "Rp 35.000"
        ],
    
        [
            "tanggal" => "20 Maret 2023",
            "invoice" => "INV/20230320/MPL/149250190",
            "coffee_name" => "Caffè Mocha",
            "gambar" => "caffe-mocha.jpg",
            "coffee_desc" => "Espresso with bittersweet mocha sauce and steamed milk, topped with sweetened whipped cream. Delightful.",
            "coffee_price" => "Rp 55.000"
        ],
    
        [
            "tanggal" => "21 Maret 2023",
            "invoice" => "INV/20230321/MPL/402940193",
            "coffee_name" => "Cappuccino",
            "gambar" => "cappuccino.jpg",
            "coffee_desc" => "Espresso with steamed milk, topped with a deep layer of foam.",
            "coffee_price" => "Rp 50.000"
        ],
    ];

    public static function all()
    {
        return self::$history_user2;
    }
}
