<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Blade;

class HomeController extends Controller
{
    //
    function about() {
        return view('about');
    }

    function search(Request $request){
         //連想配列データ
        $data = [
            'keyword' => $request->q
        ];
        // Viewファイルにデータを渡す
        return view('search', $data);
    }
}
