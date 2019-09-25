<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Thenews;

class MainController extends Controller
{
    public function index()
    {
      $thenews = Thenews::latest()
      ->limit(3)
    	->get();
    	
      isset($seos->title) ? $new_title = $seos->title : $new_title = "ITStartPFO";
      
      return view('pages.main', compact('thenews'));
    }
    
    public function about()
    {
      return view('pages.about');
    }
    
    public function news()
    {
      $thenews = Thenews::latest()
    	->get();
      
      return view('pages.news', compact('thenews'));
    }
    
    public function photo()
    {
      return view('pages.photo');
    }
    
    public function contact()
    {
      return view('pages.contact');
    }
    
    public function infos()
    {
      return view('pages.infos');
    }
    
    
    public function thenewsolo(Thenews $solo)
    {
      isset($solo->seo_title) ? $new_title = $solo->seo_title : $new_title = "AIR";
      isset($solo->image) ? $img = $solo->image: $img = 'storage/{{ $allnew->new_img }}';

      return view('pages.thenewsolo', compact('solo', 'new_title', 'new_img'));
    }
}
