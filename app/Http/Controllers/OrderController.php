<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\User;
use Auth;
use Cart;
use PDF;
class OrderController extends Controller
{
  public function pdf($id){
    $order = Order::find($id);
    $user = User::find(Auth::id());
      $totalWireplus = 0;
      $totalLedplus = 0;
      $totalmetalnet = 0;
      $totalpkcell = 0;
      $totalRCG = 0;
      $totalMVTEAM = 0;
      $totalNETVISION = 0;
      $totalCAPITAL = 0;
      $totalRCGPremium = 0;
      $totalMVTEAMPremium = 0;
      $totalNETVISIONPremium = 0;
      $totalCAPITALPremium = 0;
      $totalWireplusPremium = 0;
      $totalLedplusPremium = 0;
      $totalmetalnetPremium = 0;
      $totalASGPremium = 0;
      $totalASG = 0;
      $totalECOGREENPremium = 0;
      $totalECOGREEN = 0;
      $totalHIKVISIONPremium = 0;
      $totalHIKVISION = 0;
      $totalCHUANGOPremium = 0;
      $totalCHUANGO = 0;
      $total3MPremium = 0;
      $total3M = 0;
      $totalpkcellPremium = 0;
      $cartItems = Cart::content();
      foreach($cartItems as $cartItem) {
        if($cartItem->options["company"] == 'wireplus'){
          $wireplusPrice = $cartItem->price * $cartItem->qty;
          $totalWireplus = $totalWireplus + $wireplusPrice;
          $wireplusPremium = $cartItem->options["premium"] * $cartItem->qty;
          $totalWireplusPremium = $totalWireplusPremium + $wireplusPremium;
        }//endif
        if($cartItem->options["company"] == 'ledplus'){
          $ledplusPrice = $cartItem->price * $cartItem->qty;
          $totalLedplus = $totalLedplus + $ledplusPrice;
          $ledplusPremium = $cartItem->options["premium"] * $cartItem->qty;
          $totalLedplusPremium = $totalLedplusPremium + $ledplusPremium;
        }//endif
        if($cartItem->options["company"] == 'pkcell'){
            $pkcellPrice = $cartItem->price * $cartItem->qty;
            $totalpkcell = $totalpkcell + $pkcellPrice;
            $pkcellPremium = $cartItem->options["premium"] * $cartItem->qty;
            $totalpkcellPremium = $totalpkcellPremium + $pkcellPremium;
          }//endif
        if($cartItem->options["company"] == 'metalnet'){
            $metalnetPrice = $cartItem->price * $cartItem->qty;
            $totalmetalnet = $totalmetalnet + $metalnetPrice;
            $metalnetPremium = $cartItem->options["premium"] * $cartItem->qty;
            $totalmetalnetPremium = $totalmetalnetPremium + $metalnetPremium;
          }//endif
        if($cartItem->options["company"] == 'RCG'){
            $RCGPrice = $cartItem->price * $cartItem->qty;
            $totalRCG = $totalRCG + $RCGPrice;
            $RCGPremium = $cartItem->options["premium"] * $cartItem->qty;
            $totalRCGPremium = $totalRCGPremium + $RCGPremium;
          }//endif
        if($cartItem->options["company"] == 'MVTEAM'){
            $MVTEAMPrice = $cartItem->price * $cartItem->qty;
            $totalMVTEAM = $totalMVTEAM + $MVTEAMPrice;
            $MVTEAMPremium = $cartItem->options["premium"] * $cartItem->qty;
            $totalMVTEAMPremium = $totalMVTEAMPremium + $MVTEAMPremium;
          }//endif
        if($cartItem->options["company"] == 'NETVISION'){
            $NETVISIONPrice = $cartItem->price * $cartItem->qty;
            $totalNETVISION = $totalNETVISION + $NETVISIONPrice;
            $NETVISIONPremium = $cartItem->options["premium"] * $cartItem->qty;
            $totalNETVISIONPremium = $totalNETVISIONPremium + $NETVISIONPremium;
          }//endif
        if($cartItem->options["company"] == 'CAPITAL'){
            $CAPITALPrice = $cartItem->price * $cartItem->qty;
            $totalCAPITAL = $totalCAPITAL + $CAPITALPrice;
            $CAPITALPremium = $cartItem->options["premium"] * $cartItem->qty;
            $totalCAPITALPremium = $totalCAPITALPremium + $CAPITALPremium;
          }//endif
        if($cartItem->options["company"] == 'ASG'){
            $ASGPrice = $cartItem->price * $cartItem->qty;
            $totalASG = $totalASG + $ASGPrice;
            $ASGPremium = $cartItem->options["premium"] * $cartItem->qty;
            $totalASGPremium = $totalASGPremium + $ASGPremium;
          }//endif
        if($cartItem->options["company"] == 'ECOGREEN'){
            $ECOGREENPrice = $cartItem->price * $cartItem->qty;
            $totalECOGREEN = $totalECOGREEN + $ECOGREENPrice;
            $ECOGREENPremium = $cartItem->options["premium"] * $cartItem->qty;
            $totalECOGREENPremium = $totalECOGREENPremium + $ECOGREENPremium;
          }//endif
        if($cartItem->options["company"] == 'CHUANGO'){
            $CHUANGOPrice = $cartItem->price * $cartItem->qty;
            $totalCHUANGO = $totalCHUANGO + $CHUANGOPrice;
            $CHUANGOPremium = $cartItem->options["premium"] * $cartItem->qty;
            $totalCHUANGOPremium = $totalCHUANGOPremium + $CHUANGOPremium;
          }//endif
        if($cartItem->options["company"] == 'HIKVISION'){
            $HIKVISIONPrice = $cartItem->price * $cartItem->qty;
            $totalHIKVISION = $totalHIKVISION + $HIKVISIONPrice;
            $HIKVISIONPremium = $cartItem->options["premium"] * $cartItem->qty;
            $totalHIKVISIONPremium = $totalHIKVISIONPremium + $HIKVISIONPremium;
          }//endif
        if($cartItem->options["company"] == '3M'){
            $Price3M = $cartItem->price * $cartItem->qty;
            $total3M = $total3M + $Price3M;
            $Premium3M = $cartItem->options["premium"] * $cartItem->qty;
            $total3MPremium = $total3MPremium + $Premium3M;
          }//endif
      }//endforeach
      
      $subtotalPremium = $totalCHUANGOPremium + $totalHIKVISIONPremium + $totalECOGREENPremium + $totalASGPremium + $totalLedplusPremium + $totalWireplusPremium + $totalpkcellPremium + $totalmetalnetPremium + $totalRCGPremium + $totalMVTEAMPremium + $totalNETVISIONPremium + $totalCAPITALPremium + $total3MPremium;
      $subtotal = $totalCHUANGO + $totalHIKVISION + $totalECOGREEN + $totalASG + $totalLedplus + $totalWireplus + $totalpkcell + $totalmetalnet + $totalRCG + $totalMVTEAM + $totalNETVISION + $totalCAPITAL + $total3M;
      $iva = ($subtotal * 16)/100;
      $ivaPremium = ($subtotalPremium * 16)/100;
      
    $data = [
      'order' => $order,
      'user' => $user,
      'total' => Cart::subtotal(),
      'cartItems' => Cart::content(),
         'totalLedplus' => $totalLedplus,
        'totalWireplus' => $totalWireplus,
        'totalRCG' => $totalRCG,
        'totalMVTEAM' => $totalMVTEAM,
        'totalNETVISION'=> $totalNETVISION,
        'totalCAPITAL' => $totalCAPITAL,
        'totalRCGPremium' => $totalRCGPremium,
        'totalMVTEAMPremium' => $totalMVTEAMPremium,
        'totalNETVISIONPremium' => $totalNETVISIONPremium,
        'totalCAPITALPremium' => $totalCAPITALPremium,
        'ledplusPremium'=> $totalLedplusPremium,
        'wireplusPremium'=> $totalWireplusPremium,
        'totalpkcell' => $totalpkcell,
        'totalmetalnet' => $totalmetalnet,
        'totalpkcellPremium'=> $totalpkcellPremium,
        'totalmetalnetPremium'=> $totalmetalnetPremium,
        'subtotalPremium' => $subtotalPremium,
        'totalASGPremium' => $totalASGPremium,
        'totalASG' => $totalASG,
        'totalECOGREENPremium' => $totalECOGREENPremium,
        'totalECOGREEN' => $totalECOGREEN,
        'totalCHUANGOPremium' => $totalCHUANGOPremium,
        'totalCHUANGO' => $totalCHUANGO,
        'totalHIKVISIONPremium' => $totalHIKVISIONPremium,
        'totalHIKVISION' => $totalHIKVISION,
        'total3MPremium' => $total3MPremium,
        'total3M' => $total3M,
        'subtotal' => $subtotal,
        'count' => Cart::count(),
        'iva' => $iva,
        'ivaPremium' => $ivaPremium,
        'totalReal' => $subtotal + $iva,
        'totalRealPremium' => $subtotalPremium + $ivaPremium,
    ];
    Cart::destroy();
    $pdf = PDF::loadView('pdf.invoice', $data);
    return $pdf->stream();
  }
}
