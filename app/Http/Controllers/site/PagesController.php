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
   
    public function notice1(){
        return view('site.notices.notice1');
    }
    public function notice2(){
        return view('site.notices.notice2');
    }
    public function notice3(){
        return view('site.notices.notice3');
    }
    public function notice4(){
        return view('site.notices.notice4');
    }
    public function notice5(){
        return view('site.notices.notice5');
    }
    
    public function attraction1(){
        return view('site.attractions.attraction1');
    }
    public function attraction2(){
        return view('site.attractions.attraction2');
    }
    public function attraction3(){
        return view('site.attractions.attraction3');
    }
    public function attraction4(){
        return view('site.attractions.attraction4');
    }
    public function attraction5(){
        return view('site.attractions.attraction5');
    }
    public function about(){
        return view('site.about.aboutPage');
    }
    public function about2(){
        return view('site.about.vizyon-misyon');
    }
    public function about3(){
        return view('site.about.administration');
    }
    public function prospectiveSt(){
        return view('site.student.prospective');
        
    }
    public function capyandal(){
        return view('site.student.cap-yandal');
        
    }
    public function erasmus(){
        return view('site.student.erasmus');
        
    }
    public function mevlana(){
        return view('site.student.mevlana');
        
    }
    public function farabi(){
        return view('site.student.farabi');
        
    }

    public function akademik(){
        return view('site.akademik.index');
        
    }
}
?>