<?php

namespace App\Http\Controllers;

use Symfony\Component\DomCrawler\Crawler;

class NewsController extends Controller
{

    public $crawler;

    public function __construct()
    {
        set_time_limit(0);
        header('Content-Type: text/html; charset=utf-8');
    }

    public function getIndex()
    {
        $ff = 'https://news.google.com/search?q=Belarus&hl=ru&gl=RU&ceid=RU%3Aru';
        if(isset($_GET['lang'])){
            if($_GET['lang'] == 'en'){
                $ff = 'https://news.google.com/search?q=Belarus&hl=en-US&gl=US&ceid=US%3Aen';
            }
        }

        $file = file_get_contents($ff);
        $this->crawler = new Crawler($file);
        $body=$this->crawler->filter('.lBwEZb')->html();
        return view('news', compact('body'));
    }
}
