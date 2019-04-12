<?php

namespace App\Http\Controllers;
use Auth;
use App\User;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        $dateActual = '';
        $expiration = '';
        if(Auth::check()){
            if(Auth::user()->date_expiration){
            $dateActual = strtotime(date('Y-m-d'));
            $expiration = strtotime(Auth::user()->date_expiration);            
            }
        }

      /** if (Auth::check()) {
        if(Auth::user()->date_expiration){
        if ($expiration <= $dateActual) {

         }//endif
        }//endif
      }//endif **/
      return view('index', [
          'fechaActual' => $dateActual,
          'expiracion' => $expiration,
          ]);
    }//index
}
