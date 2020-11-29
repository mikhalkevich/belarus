<?php

namespace App\Http\Controllers;

use App\Maintext;

class PageController extends Controller
{
    public function getIndex($url = null)
    {
        $obj = Maintext::where('url', $url)->first();
        return view('page', compact('obj'));
    }

    public function getAll()
    {
        $objs = Maintext::whereNull('status')->orderBy('id', 'DESC')->paginate();
        return view('articles', compact('objs'));
    }
}
