<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\App;
use App\Models\User;
use DateTime;
use Illuminate\Support\Facades\Auth;
use App\Models\Duyurular;
use App\Models\Etkinlik;
use App\Models\Haber;
use App\Models\Yerleske;
use App\Models\AkademikKadro;


class AdminController extends Controller
{
    public function login()
    {
        return view('admin.login');
    }
    public function redirectToLogin()
    {
        return redirect()->route('adminLoginPage');
    }
    public function loginProcess(Request $request)
    {
        if (Auth::attempt(['userName' => $request->userName, 'password' => $request->password, 'status' => 'active'])) {
            $userRow = User::where('userName', '=', $request->userName)->first();
            //dd($userRow);
            if ($userRow->userType == 'Admin' || $userRow->userType == 'SuperAdmin' || $userRow->userType == 'GuideAdmin') {
                User::where('userName', '=', $request->userName)->update([
                    'lastLoginDate' =>  new DateTime(),
                    'lastLoginIP' => $request->ip()
                ]);
                return redirect()->route('adminDashboardPage');
            }
        } else {
            return redirect()->route('adminLoginPage')->withErrors('Kullanıcı adı veya şifre yanlış');
        }
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('adminLoginPage');
    }
    public function dashboard()
    {
        return  view('admin.dashboard');

    }
    public function okullar()
    {
        return  view('admin.okullar.index');

    }
    public function fakulteler()
    {
        return  view('admin.fakulteler.index');

    }
    public function enstituler()
    {
        return  view('admin.enstituler.index');

    }
    public function duyurular()
    {
        $duyurular =  Duyurular::where('konum','=','ana_sayfa')->get();
      
        return  view('admin.duyurular.index',['duyurular'=>$duyurular]);

    }
    public function duyuruEkle()
    {
        return  view('admin.duyurular.add');

    }
    public function processDuyuruEkle(Request $request)
    {
      
        $validated = $request->validate([
            'slug' => 'required|max:255',
            'baslik' => 'required|max:255',
            'metin' => 'required|max:1000',
            'kategori' => 'required',
            'konum' => 'required',
            'statu' => 'required'
        ]);
        Duyurular::create([
            'slug' => $request['slug'], 'metin' => $request['metin'],
            'baslik' => $request['baslik'], 'kategori' => $request['kategori'],
            'konum' => $request['konum'],'statu' => $request['statu']
        ]);

        session()->flash('message', 'Duyuru Başarı ile Eklendi! ');
       
        return  redirect()->route('duyurular');

    }
    public function duyuruEdit($id)
    {
        $duyuru =  Duyurular::where('id','=',$id)->first();

        return  view('admin.duyurular.edit',['duyuru'=>$duyuru]);

    }
    public function processDuyuruEdit(Request $request){

        Duyurular::where("id", "=", $request->id)->update([
            'slug' => $request['slug'], 
            'metin' => $request['metin'],
            'baslik' => $request['baslik'], 
            'kategori' => $request['kategori'],
            'konum' => $request['konum'], 
            'statu' => $request['statu'],
            
        ]);
        session()->flash('message', 'Duyuru Başarı ile güncellendi!');
        return redirect()->route('duyurular');
    }
    public function duyuruDetay($id)
    {
        $duyuru =  Duyurular::where('id','=',$id)->first();
        return  view('admin.duyurular.detay',['duyuru'=>$duyuru]);

    }
    public function haberler()
    {
        $haberler =  Haber::where('konum','=','ana_sayfa')->get();
        return  view('admin.haberler.index',['haberler'=>$haberler]);

    }
    public function haberEkle()
    {
        return  view('admin.haberler.add');

    }
    public function processHaberEkle(Request $request)
    {

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = $file->getClientOriginalName();
            $file->move('site/images/haberler/', $fileName);
        }
    
        
        $validated = $request->validate([
            'slug' => 'required|max:255',
            'baslik' => 'required|max:255',
            'metin' => 'required|max:1000',
            'kategori' => 'required',
            'konum' => 'required',
            'statu' => 'required'
        ]);
        $resim = "site/images/haberler/".$fileName;       

        Haber::create([
            'slug' => $request['slug'], 'metin' => $request['metin'],
            'baslik' => $request['baslik'], 'kategori' => $request['kategori'],
            'konum' => $request['konum'],'statu' => $request['statu'],'resim' => $resim
        ]);

        session()->flash('message', 'Haber Başarı ile Eklendi! ');
       
        return  redirect()->route('haberler');

    }

    public function haberEdit($id)
    {
        $haber =  Haber::where('id','=',$id)->first();

        return  view('admin.haberler.edit',['haber'=>$haber]);

    }
    public function processHaberEdit(Request $request){

        if ($request->hasFile('newImage')) {
            $file = $request->file('newImage');
            $fileName = $file->getClientOriginalName();
            $file->move('site/images/haberler/', $fileName);
            $resim = "site/images/haberler/".$fileName; 
        } else {
            $fileName = $request->input('oldImage');
            $resim = $fileName; 
        }

           
        Haber::where("id", "=", $request->id)->update([
            'slug' => $request['slug'], 
            'metin' => $request['metin'],
            'baslik' => $request['baslik'], 
            'kategori' => $request['kategori'],
            'konum' => $request['konum'], 
            'statu' => $request['statu'],
            'resim' => $resim
        ]);

        session()->flash('message', 'Haber Başarı ile güncellendi!');
        return redirect()->route('haberler');
    }
    public function haberDetay($id)
    {
        $haber =  Haber::where('id','=',$id)->first();
        return  view('admin.haberler.detay',['haber'=>$haber]);

    }

    public function etkinlikler()
    {
        $etkinlikler =  Etkinlik::where('konum','=','ana_sayfa')->get();
        return  view('admin.etkinlikler.index',['etkinlikler'=>$etkinlikler]);

    }
    public function etkinlikEkle()
    {
        return  view('admin.etkinlikler.add');

    }
    public function processEtkinlikEkle(Request $request)
    {

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = $file->getClientOriginalName();
            $file->move('site/images/etkinlikler/', $fileName);
        }
    
        
        $validated = $request->validate([
            'slug' => 'required|max:255',
            'baslik' => 'required|max:255',
            'metin' => 'required|max:1000',
            'kategori' => 'required',
            'konum' => 'required',
            'statu' => 'required'
        ]);
        $resim = "site/images/etkinlikler/".$fileName;       

        Etkinlik::create([
            'slug' => $request['slug'], 'metin' => $request['metin'],
            'baslik' => $request['baslik'], 'kategori' => $request['kategori'],
            'konum' => $request['konum'],'statu' => $request['statu'],'resim' => $resim
        ]);

        session()->flash('message', 'Etkinlik Başarı ile Eklendi! ');
       
        return  redirect()->route('etkinlikler');

    }
    public function etkinlikEdit($id)
    {
        $etkinlik =  Etkinlik::where('id','=',$id)->first();

        return  view('admin.etkinlikler.edit',['etkinlik'=>$etkinlik]);

    }
    public function processEtkinlikEdit(Request $request){

        if ($request->hasFile('newImage')) {
            $file = $request->file('newImage');
            $fileName = $file->getClientOriginalName();
            $file->move('site/images/etkinlik/', $fileName);
            $resim = "site/images/etkinlik/".$fileName; 
        } else {
            $fileName = $request->input('oldImage');
            $resim = $fileName; 
        }

           
        Etkinlik::where("id", "=", $request->id)->update([
            'slug' => $request['slug'], 
            'metin' => $request['metin'],
            'baslik' => $request['baslik'], 
            'kategori' => $request['kategori'],
            'konum' => $request['konum'], 
            'statu' => $request['statu'],
            'resim' => $resim
        ]);

        session()->flash('message', 'Etkinlik Başarı ile güncellendi!');
        return redirect()->route('etkinlikler');
    }
    public function etkinlikDetay($id)
    {
        $etkinlik =  Etkinlik::where('id','=',$id)->first();
        return  view('admin.etkinlikler.detay',['etkinlik'=>$etkinlik]);

    }
    public function akademik()
    {
        $personeller = AkademikKadro::where('konum','=','ana_sayfa')->get();
    
        return  view('admin.akademik.index',['personeller'=>$personeller]);

    }
    public function akademikEkle()
    {
        return  view('admin.akademik.add');

    }
    public function processAkademikEkle(Request $request)
    {
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = $file->getClientOriginalName();
            $file->move('site/images/about/yonetim/', $fileName);
        }
    
       
        $resim = "site/images/about/yonetim/".$fileName;       

        AkademikKadro::create([
            'unvan' => $request['unvan'], 'tel' => $request['tel'],
            'ad_soyad' => $request['ad_soyad'], 'sosyal_medya' => $request['sosyal_medya'],
            'mail' => $request['mail'],'avesis' => $request['avesis'],
            'egitim_bilgileri' => $request['egitim_bilgileri'], 'konum' => $request['konum'],'statu' => $request['statu'],
            'resim' => $resim
        ]);

        session()->flash('message', 'Personel Başarı ile Eklendi! ');
       
        return  redirect()->route('akademikPanel');

    }
    public function akademikEdit($id)
    {
        $personel =  AkademikKadro::where('id','=',$id)->first();
        return  view('admin.akademik.edit',['personel'=>$personel]);

    }
    public function processAkademikEdit(Request $request){

        if ($request->hasFile('newImage')) {
            $file = $request->file('newImage');
            $fileName = $file->getClientOriginalName();
            $file->move('site/images/about/yonetim/', $fileName);
            $resim = "site/images/about/yonetim/".$fileName; 
        } else {
            $fileName = $request->input('oldImage');
            $resim = $fileName; 
        }

           
        AkademikKadro::where("id", "=", $request->id)->update([
            'unvan' => $request['unvan'], 
            'ad_soyad' => $request['ad_soyad'],
            'mail' => $request['mail'], 
            'tel' => $request['tel'],
            'sosyal_medya' => $request['sosyal_medya'], 
            'avesis' => $request['avesis'],
            'sosyal_medya' => $request['sosyal_medya'], 
            'egitim_bilgileri' => $request['egitim_bilgileri'],
            'statu' => $request['statu'],
            'konum' =>$request['konum'],
            'resim' => $resim
        ]);
        session()->flash('message', 'Personel Başarı ile güncellendi!');
        return redirect()->route('akademikPanel');
    }
    public function personelSil($id){
        AkademikKadro::where('id', '=', $id)->delete();
        return back()->withInput();
    }
    public function adminList()
    {
        $adminler = User :: all(); 
        return  view('admin.adminler.index',['adminler'=>$adminler]);

    }
    public function adminEkle()
    {
        return  view('admin.adminler.add');

    }
    public function adminEkleProcess(Request $request)
    {

        $userName = $request->input('userName');
        $password = bcrypt($request->input('password'));
        $phone = $request->input('phone');
        $email = $request->input('email');
        $userType = $request->input('userType');
        $status = $request->input('status');

        if (User::where("userName", $userName)->count() == 0 && User::where("email", $email)->count() == 0) {
            User::create([
                'userName' => $userName, 'password' => $password, 'phone' => $phone, 'email' => $email,
                'userType' => $userType, 'status' => $status
            ]);
            session()->flash('message', 'Admin Başarı ile Eklendi!');
            return redirect()->route('adminList');
        } else {
            session()->flash('message', 'Aynı Kullanıcı adı veya email ile kayıt yapılamaz');
            return back()->withInput();
        }


    }
    public function adminEdit($id)
    {
        $user =  User::where('id','=',$id)->first();
        return  view('admin.adminler.edit',['admin'=>$user]);

    }
    public function adminEditProcess(Request $request)
    {
-
        $id = $request->input('id');
        $userName = $request->input('userName');
        $password = bcrypt($request->input('password'));
        $phone = $request->input('phone');
        $email = $request->input('email');
        $userType = $request->input('userType');
        $status = $request->input('status');
        $user = User::where("id", $id)->first();
        $allUser = User::all();
        $countUser = 0;
        for ($i = 0; $i < $allUser->count(); $i++) {
            if ($allUser[$i]->userName == $userName) {
                $countUser++;
            }
        }
        if ($user->userName == $userName && $user->email == $email) {
            User::where('id', $id)->update([
                'userName' => $userName, 'password' => $password, 'phone' => $phone, 'email' => $email,
                'userType' => $userType, 'status' => $status
            ]);
            session()->flash('message', 'Admin Başarı ile güncellendi.');
            return redirect()->route('adminList');
        } else if ($countUser == 0) {
            User::where('id', $id)->update([
                'userName' => $userName, 'password' => $password, 'phone' => $phone, 'email' => $email,
                'userType' => $userType, 'status' => $status
            ]);
            session()->flash('message', 'Admin Başarı ile güncellendi.');
            return redirect()->route('adminList');
        } else {
            session()->flash('message', 'Aynı Kullanıcı adı veya email ile kayıt yapılamaz');
            return redirect()->route('adminEdit', ["id" => $id]);
        }


        return  view('admin.adminler.edit',['user'=>$user]);

    }
    public function okullarDetay()
    {
        return  view('admin.okullar.detay');

    }
    public function okullarHaber()
    {
        $haberler = Haber :: where('konum','=','yabanci_diller')->get();
        return  view('admin.okullar.haber',['haberler'=>$haberler]);

    }
    public function okullarDuyuru()
    {
        $duyurular = Duyurular :: where('konum','=','yabanci_diller')->get();
        return  view('admin.okullar.duyuru',['duyurular'=>$duyurular]);

    }
    public function okullarAkademik()
    {
        $personeller = AkademikKadro::where('konum','=','yabanci_diller')->get();
    
        return  view('admin.okullar.akademik',['personeller'=>$personeller]);

    }
    public function fakulteDetay()
    {
        return  view('admin.fakulteler.detay');

    }
    public function fakulteBolumler()
    {
        return  view('admin.fakulteler.bolumler');

    }
    public function fakulteBolumlerBilMuh()
    {
        return  view('admin.fakulteler.bilmuh');

    }
}
