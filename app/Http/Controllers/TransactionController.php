<?php

namespace App\Http\Controllers;
use App\Models\History1;
use App\Models\History2;

use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function index() 
    {
        return view('/fei-fei/transaction2',[
            "title" => "History",
            "username" => "Ms. Fei Fei Li",
            "rincian1" => History1::all()
        ]);
    }

    public function index2()
    {
        return view('/vico-lomar/transaction',[
            "title" => "History",
            "username" => "Mr. Vico Lomar",
            "rincian2" => History2::all()
        ]);
    }
}
