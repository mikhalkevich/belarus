<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
class CommentController extends Controller
{
    public function postIndex($id = null){
        if($_POST['body']){
            $obj = new Comment;
            $obj->candidat_id = $id;
            $obj->body = $_POST['body'];
            $obj->save();
            return redirect()->back();
        }
    }
}
