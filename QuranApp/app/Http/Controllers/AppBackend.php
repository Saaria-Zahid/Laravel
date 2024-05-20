<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class AppBackend extends Controller
{
    //
    function getData()
    {
        $data = Http::get("https://api.alquran.cloud/v1/meta");
    
        return view("quran", ["surahdata" => $data["data"]["surahs"]["references"]]);
    }
    function ayahData($idNum) {
        // $ayahs = Http::get("https://api.alquran.cloud/v1/surah/{$idNum}");
        $ayahs = Http::get("https://api.alquran.cloud/v1/surah/{$idNum}/ar.alafasy");

        return view("ayah", ["ayat" => $ayahs["data"]]);
    }

}



