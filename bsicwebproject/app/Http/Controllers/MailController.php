<?php

namespace App\Http\Controllers;
use App;
use Illuminate\Http\Request;
use Mail;
use PDF;
use App\Http\Requests;
use App\Http\Controllers\Controller;
class MailController extends Controller
{
  public function basic_email() {
    $data = array('name'=>"Virat Gandhi") ;

    Mail::send(['text'=>'mail'], $data, function($message)
    {
      $message->to('laravel.masi@gmail.com', 'Tutorials Point') ->subject('Laravel Basic Testing Mail') ;
      $message->from('masiar90@web.de','Virat Gandhi') ;
      // $message->to('masiar90@web.de', 'Tutorials Point') ->subject('Laravel Basic Testing Mail') ;
      // $message->from('laravel.masi@gamil.com','Virat Gandhi') ;
      });
      echo "Basic Email Sent. Check your inbox.";
    }

  public function html_email() {
    $data = array('name'=>"Aziziiii") ;
    Mail::send('mail', $data, function($message)
    {
      $message->to('masiar90@web.de', 'Tutorials Point') ->subject('Masi Testig Mail from Laravel') ;
     $message->from('laravel.masi@gamil.com','Masi') ;
    });

    //creat a pdf stream -> download funktioniert nicht!!!
    $pdf= App::make('dompdf.wrapper');
    $pdf->loadHTML('<h1>PDF TEST</h1>');
    $pdfStream = $pdf->stream();
    return $pdfStream;
  }

  public function attachment_email() {
    $data = array('name'=>"Virat Gandhi") ;
    Mail::send('mail', $data, function($message)
    {
    $message->to('masiar90@web.de', 'Tutorials Point') ->subject('Laravel Testing Mail with Attachment') ;
     $message->attach('C:\laravel-master\laravel\public\uploads\image.png') ;
    $message->attach('C:\laravel-master\laravel\public\uploads\test.txt') ;
    $message->from('laravel.masi@gamil.com','Virat Gandhi') ;
    });
    echo "Email Sent with attachment. Check your inbox.";
  }
}
