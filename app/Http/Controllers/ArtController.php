<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use File;

class ArtController extends Controller
{
    public function getMusic()
    {
        $dirs = File::directories(public_path() . '/arts/misic/');
        $files = [];
        foreach ($dirs as $dir) {
            $d_arr = explode('/', $dir);
            $files_obj = File::files($dir);
            foreach ($files_obj as $f) {
                $files[] = [$f->getRelativePathname(), end($d_arr)];
            }
        }
        return view('arts.music', compact('files'));
    }
}
