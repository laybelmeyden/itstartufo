<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Thenews;
use File;

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
    $result = array();
    $dirs  = File::Files(public_path('assets/img/light'));
    foreach ($dirs as $item) {
      array_push($result, basename($item));
    }
    return view('pages.photo', compact('result'));
  }

  public function contact()
  {
    return view('pages.contact');
  }

  public function infos()
  {
    return view('pages.infos');
  }
  public function programm()
  {
    return view('pages.programm');
  }


  public function thenewsolo(Thenews $solo)
  {
    isset($solo->seo_title) ? $new_title = $solo->seo_title : $new_title = "AIR";
    isset($solo->image) ? $img = $solo->image : $img = 'storage/{{ $allnew->new_img }}';

    return view('pages.thenewsolo', compact('solo'));
  }
  public function footer(Request $request)
  {
    // $data = array(
    //   'phone' => request('phone'),
    //   'contact_email' => request('contact_email'),
    //   'text_contact' => request('text_contact'),
    // );

    //    \Mail::send('email.mailcontact', $data, function($message_contact) use ($data)
    // {
    //     $mail_admin = env('MAIL_ADMIN_CONTACT');
    //     $message_contact->from($data['contact_email'],$data['phone'], $data['text_contact']);
    //     $message_contact->to($mail_admin, 'For Admin')->subject('Message from site');
    //  });
    back()->with('message_1', 'Сообщение успешно отправлено');
    return redirect('/')->with('message', 'Большое спасибо!');
  }
}
