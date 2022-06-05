<?php
namespace App\Http\Controllers\Site;

use Illuminate\Support\Facades\Cache;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\App;
use App\Models\Duyurular;
use App\Models\Etkinlik;
use App\Models\Haber;
use App\Models\Yerleske;
use App\Models\AkademikKadro;

class PagesController extends Controller{
    public function index(){
        $haberler =  Haber::where('konum','=','ana_sayfa')->get();
        $duyurular =  Duyurular::where('konum','=','ana_sayfa')->get();
        $etkinlikler =  Etkinlik::where('konum','=','ana_sayfa')->get();

        $data=[
            'haberler'=>$haberler,
            'duyurular'=>$duyurular,
            'etkinlikler'=>$etkinlikler

        ];
       
        return view('site.home',$data);
    }
    public function haberDetay($slug){

        $haber =  Haber::where('slug','=',$slug)->first();
        return view('site.news.news1',['haber'=>$haber]);
       
    }
    public function duyuruDetay($slug){

        $duyuru =  Duyurular::where('slug','=',$slug)->first();
        return view('site.notices.notice1',['duyuru'=>$duyuru]);
       
    }
    public function etkinlikDetay($slug){

        $etkinlik =  Etkinlik::where('slug','=',$slug)->first();
        return view('site.attractions.attraction1',['etkinlik'=>$etkinlik]);
       
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

        $personeller = AkademikKadro::where('konum','=','ana_sayfa')->get();
        return view('site.about.administration',['personeller'=>$personeller]);

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
     public function yabanci(){

        $haberler =  Haber::where('konum','=','yabanci_diller')->get();
    
        $data=[
            'haberler'=>$haberler
           
        ];
        return view('site.okullar.yabanci-diller.yabanci',$data);
        
    }
   
    public function yabanciAkademik(){

        $personeller = AkademikKadro::where('konum','=','yabanci_diller')->get();
        return view('site.okullar.yabanci-diller.akademik',['personeller'=>$personeller]);
        
    }
    public function yabanciAbout(){
        return view('site.okullar.yabanci-diller.about');
        
    }
    public function yabanciDuyurular(){
        $duyurular =  Duyurular::where('konum','=','yabanci_diller')->get();
    
        $data=[
            'duyurular'=>$duyurular
           
        ];
        return view('site.okullar.yabanci-diller.duyurular',$data);
        
    }
    
    public function yabanciOgrenci(){
        return view('site.okullar.yabanci-diller.ogrenci');
        
    }
    public function muh(){
        $haberler =  Haber::where('konum','=','muhendislik_fak')->get();
    
        $data=[
            'haberler'=>$haberler
           
        ];
        return view('site.fakulteler.muh.muh',$data);
        
    }
   
    public function muhAbout(){
        return view('site.fakulteler.muh.about');
        
    }
    public function muhKadro(){
        $personeller = AkademikKadro::where('konum','=','muhendislik_fak')->get();
        return view('site.fakulteler.muh.kadro',['personeller'=>$personeller]);
        
    }
    public function muhBolumler(){
        return view('site.fakulteler.muh.bolumler');
        
    }
    public function muhDuyuru(){
        $duyurular =  Duyurular::where('konum','=','muhendislik_fak')->get();
    
        $data=[
            'duyurular'=>$duyurular
        ];
        return view('site.fakulteler.muh.duyurular',$data);
        
    }
    
    public function bilgisayar(){
        $haberler =  Haber::where('konum','=','bilgisayar_muh')->get();
    
        $data=[
            'haberler'=>$haberler
           
        ];
        return view('site.fakulteler.muh.bolumler.bil.bil',$data);
        
    }
    
    public function bilgisayarKadro(){
        $personeller = AkademikKadro::where('konum','=','bilgisayar_muh')->get();
        return view('site.fakulteler.muh.bolumler.bil.akademik',['personeller'=>$personeller]);
    }
    public function bilgisayarDuyuru(){
        $duyurular =  Duyurular::where('konum','=','bilgisayar_muh')->get();
    
        $data=[
            'duyurular'=>$duyurular
        ];
        return view('site.fakulteler.muh.bolumler.bil.duyurular',$data);
        
    }
   
    public function iletisim(){
        return view('site.other.iletisim');
        
    }
    public function yerleskeler(){
        return view('site.other.yerleske');
        
    }
}
?>