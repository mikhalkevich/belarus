<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Condidat;
use App\Catalog;
class CatalogController extends Controller
{
    public function getCat($id = null){
        $all = Condidat::where('date_rod', $id)->orderBy('id', 'DESC')->paginate(30);
        $cat = Catalog::find($id);
        return view('catalog', compact('all', 'cat'));
    }
}
