<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\App;

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
    public function logout()
    {
        return redirect()->route('homepage');
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
        return  view('admin.duyurular.index');

    }
    public function duyuruEkle()
    {
        return  view('admin.duyurular.add');

    }
    public function duyuru1Edit()
    {
        return  view('admin.duyurular.edit');

    }
    public function duyuru1detay()
    {
        return  view('admin.duyurular.detay');

    }
    public function haberler()
    {
        return  view('admin.haberler.index');

    }
    public function haberEkle()
    {
        return  view('admin.haberler.add');

    }
    public function haber1Edit()
    {
        return  view('admin.haberler.edit');

    }
    public function haber1Detay()
    {
        return  view('admin.haberler.detay');

    }

    public function etkinlikler()
    {
        return  view('admin.etkinlikler.index');

    }
    public function etkinlikEkle()
    {
        return  view('admin.etkinlikler.add');

    }
    public function etkinlik1Edit()
    {
        return  view('admin.etkinlikler.edit');

    }
    public function etkinlik1Detay()
    {
        return  view('admin.etkinlikler.detay');

    }
    public function akademik()
    {
        return  view('admin.akademik.index');

    }
    public function akademikEkle()
    {
        return  view('admin.akademik.add');

    }
    public function akademikEdit()
    {
        return  view('admin.akademik.edit');

    }
    public function adminList()
    {
        return  view('admin.adminler.index');

    }
    public function adminEkle()
    {
        return  view('admin.adminler.add');

    }
    public function adminEdit()
    {
        return  view('admin.adminler.edit');

    }
    public function okullarDetay()
    {
        return  view('admin.okullar.detay');

    }
    public function okullarHaber()
    {
        return  view('admin.okullar.haber');

    }
    public function okullarDuyuru()
    {
        return  view('admin.okullar.duyuru');

    }
    public function okullarAkademik()
    {
        return  view('admin.okullar.akademik');

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
