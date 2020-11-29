<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Maintext;
use App\Condidat;
use App\Status;
use App\Catalog;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $objs = Condidat::where('user_id', Auth::user()->id)->orderBy('id','DESC')->paginate(20);
        $statuses = Status::all();
        $catalogs = Catalog::whereNull('type')->get();
        return view('home', compact('objs', 'statuses', 'catalogs'));
    }
    public function getPage(Request $request){
        //$res = resource_path('lang/'.$request['lang'].'page');
        //$cats = __('page.catalogs');
        return view('home.page');
    }
    public function postPage(){
        $obj = new Maintext;
        $obj->name = $_POST['name'];
        $obj->body = $_POST['body'];
        $obj->picture = \App::make('\App\Libs\Imag')->url($_FILES['picture2']['tmp_name']);
        $obj->url = time();
        $obj->user_id = Auth::user()->id;
        $obj->save();
        return redirect()->back();
    }
}
