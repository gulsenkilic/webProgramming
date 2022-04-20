<?php
namespace App\Http\Controllers\Site;

use Illuminate\Support\Facades\Cache;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\App;

class PagesController extends Controller{
    public function index(){
        return view('site.home');
    }
    public function news1(){
        return view('site.news.news1');
    }
    public function news2(){
        return view('site.news.news2');
    }
    public function news3(){
        return view('site.news.news3');
    }
    public function news4(){
        return view('site.news.news4');
    }
}
?>