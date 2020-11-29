<?php

namespace App\Http\Controllers;

use App\Condidat;
use App\Comment;
use App\Http\Requests\CondidatRequest;
use Illuminate\Support\Facades\Auth;

class CondidatController extends Controller
{
    public function index()
    {
        $all = Condidat::orderBY('id', 'DESC')->where('status', 3)->paginate(30);

        return view('candidats', compact('all'));
    }

    public function getNarod(){
        $all = Condidat::where('status', '!=', 2)->orderBy('id', 'DESC')->paginate(30);
        return view('candidats', compact('all'));
    }
    public function getParlament(){
        $all = Condidat::where('status', 4)->orderBy('id', 'DESC')->paginate(30);
        return view('candidats', compact('all'));
    }

    public function getAll(){
        $all = Condidat::orderBy('id', 'DESC')->paginate(30);
        return view('candidats', compact('all'));
    }
    public function show($id)
    {
        $elem = Condidat::find($id);
        $comments = Comment::where('candidat_id', $id)->orderBy('id', 'DESC')->paginate(30);
        return view('candidat', compact('elem', 'comments'));
    }
    public function getBlack(){
        $blacks = Condidat::where('status', 2)->get();
        return view('black', compact('blacks'));
    }
    public function getPrisoner(){
        $blacks = Condidat::where('status', 5)->get();
        return view('prisoner', compact('blacks'));
    }

    public function create(CondidatRequest $req)
    {

        $condidat = new Condidat();
        $condidat->name = $req->input('name');
        $condidat->date_rod = $req->input('date_rod');
        $condidat->status = $req->input('status');
        $condidat->user_id = Auth::user()->id;
        $condidat->picture = \App::make('\App\Libs\Imag')->url($_FILES['picture2']['tmp_name']);
        $condidat->who_is = $req->input('who_is');
        $condidat->how_is = $req->input('how_is');

        $condidat->save();

        return redirect('all')->with('success', 'Ваш кондидат добавлен');

    }
}
