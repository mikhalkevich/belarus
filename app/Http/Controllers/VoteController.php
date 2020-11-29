<?php

namespace App\Http\Controllers;

use App\Condidat;
use App\VoteUser;
use Auth;
use Carbon\Carbon;


class VoteController extends Controller
{

    public function getIndex()
    {
        return view('welcome');
    }

    public function getVote(){
        $elements = Condidat::where('status', 3)->orderBy('counts', 'DESC')->limit(7)->get();
        $votes = new VoteUser;
        if(isset($_COOKIE['ip'])){
            $votes = VoteUser::where('ip', $_SERVER['REMOTE_ADDR'])->get();
        }
        return view('vote', compact('elements', 'votes'));
    }

    public function getOne(){
        $one = Condidat::where('status', 3)->orderBy('counts')->limit(1)->first();
        return view('president', compact('one'));
    }

    public function addVote($id)
    {
        setcookie('ip', $_SERVER['REMOTE_ADDR'], time() + 3600 * 24, '/');

        $test = VoteUser::where('ip', $_SERVER['REMOTE_ADDR'])->where('cookie', '+')->whereDate('created_at', '=', Carbon::today()->toDateString())->where('condidat_id', $id)->first();

        if ($test) {
            if (isset($_COOKIE['ip'])) {
                return redirect('/')->with('error', 'Вы уже голосовали');
            }
        }
        $this->voteUser($id, '+');

        return redirect()->back()->with('success', 'Ваш голос учтен');
    }
    public function minusVote($id = null){
        $test = VoteUser::where('ip', $_SERVER['REMOTE_ADDR'])->where('cookie', '-')->whereDate('created_at', '=', Carbon::today()->toDateString())->where('condidat_id', $id)->first();
        if ($test) {
            if (isset($_COOKIE['ip'])) {
                return redirect('/')->with('error', 'Вы уже голосовали');
            }
        }
        $this->voteUser($id, '-');
        return redirect()->back()->with('success', 'Ваш голос учтен');
    }
    private function voteUser($id, $mark){
        $vote = new VoteUser();
        $vote->condidat_id = $id;
        $vote->cookie = $mark;
        $vote->ip = $_SERVER['REMOTE_ADDR'];
        $vote->user_id = Auth::guest() ? 0 : Auth::id();
        $vote->save();
        $countVotes = Condidat::find($id);
        if($mark == '-'){
            $add = $countVotes->counts - 1;
        }else{
            $add = $countVotes->counts + 1;
        }
        $countVotes->counts = $add;
        $countVotes->update();
    }
}
