<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Cart;

class StoreController extends Controller
{
  public function category($category){
      $cartItems = Cart::content();
      $totalWireplus = 0;
      $totalLedplus = 0;
      $totalmetalnet = 0;
      $totalpkcell = 0;
      $totalRCG = 0;
      $totalMVTEAM = 0;
      $totalNETVISION = 0;
      $totalCAPITAL = 0;
      $total3M = 0;
      $total3MPremium = 0;
      $totalRCGPremium = 0;
      $totalMVTEAMPremium = 0;
      $totalNETVISIONPremium = 0;
      $totalCAPITALPremium = 0;
      $totalWireplusPremium = 0;
      $totalLedplusPremium = 0;
      $totalmetalnetPremium = 0;
      $totalpkcellPremium = 0;
      $totalASGPremium = 0;
      $totalASG = 0;
      $totalECOGREENPremium = 0;
      $totalECOGREEN = 0;
      $totalCHUANGOPremium = 0;
      $totalCHUANGO = 0;
      $totalHIKVISIONPremium = 0;
      $totalHIKVISION = 0;
      $variable = $category;
    foreach($cartItems as $cartItem) {
      if($cartItem->options["company"] == 'wireplus'){
          $wireplusPrice = $cartItem->price * $cartItem->qty;
          $wireplusPremium = $cartItem->options["premium"] * $cartItem->qty;
          $totalWireplus = $totalWireplus + $wireplusPrice;
          $totalWireplusPremium = $totalWireplusPremium + $wireplusPremium;
      }//endif
      if($cartItem->options["company"] == 'ledplus'){
          $ledplusPrice = $cartItem->price * $cartItem->qty;
          $ledplusPremium = $cartItem->options["premium"] * $cartItem->qty;
          $totalLedplus = $totalLedplus + $ledplusPrice;
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
        if($cartItem->options["company"] == '3M'){
            $Price3M = $cartItem->price * $cartItem->qty;
            $total3M = $total3M + $Price3M;
            $Premium3M = $cartItem->options["premium"] * $cartItem->qty;
            $total3MPremium = $total3MPremium + $Premium3M;
         }//endif
        if($cartItem->options["company"] == 'ECOGREEN'){
            $ECOGREENPrice = $cartItem->price * $cartItem->qty;
            $totalECOGREEN = $totalECOGREEN + $ECOGREENPrice;
            $ECOGREENPremium = $cartItem->options["premium"] * $cartItem->qty;
            $totalECOGREENPremium = $totalECOGREENPremium + $ECOGREENPremium;
         }//endif
        if($cartItem->options["company"] == 'HIKVISION'){
            $HIKVISIONPrice = $cartItem->price * $cartItem->qty;
            $totalHIKVISION = $totalHIKVISION + $HIKVISIONPrice;
            $HIKVISIONPremium = $cartItem->options["premium"] * $cartItem->qty;
            $totalHIKVISIONPremium = $totalHIKVISIONPremium + $HIKVISIONPremium;
         }//endif
        if($cartItem->options["company"] == 'CHUANGO'){
            $CHUANGOPrice = $cartItem->price * $cartItem->qty;
            $totalCHUANGO = $totalCHUANGO + $CHUANGOPrice;
            $CHUANGOPremium = $cartItem->options["premium"] * $cartItem->qty;
            $totalCHUANGOPremium = $totalCHUANGOPremium + $CHUANGOPremium;
         }//endif
    }//endforeach
      $subtotalPremium = $totalCHUANGOPremium + $totalHIKVISIONPremium + $totalECOGREENPremium + $totalASGPremium + $totalLedplusPremium + $totalWireplusPremium + $totalpkcellPremium + $totalmetalnetPremium + $totalRCGPremium + $totalMVTEAMPremium + $totalNETVISIONPremium + $totalCAPITALPremium + $total3MPremium;
      $subtotal = $totalCHUANGO + $totalHIKVISION + $totalECOGREEN + $totalASG + $totalLedplus + $totalWireplus + $totalpkcell + $totalmetalnet + $totalRCG + $totalMVTEAM + $totalNETVISION + $totalCAPITAL + $total3M;
      $iva = ($subtotal * 16)/100;
      $ivaPremium = ($subtotalPremium * 16)/100;
    $products = Product::where('category','LIKE', $category)->orderBy('position')->get();
    return view('store.index',['products' => $products,
        'cartItems' => $cartItems,
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
        'total3MPremium'=>$total3MPremium,
        'total3M'=>$total3M,
        'totalRCGPremium'=>$totalRCGPremium,
        'totalASG' => $totalASG,
        'totalASGPremium' => $totalASGPremium,
        'totalECOGREEN' => $totalECOGREEN,
        'totalECOGREENPremium' => $totalECOGREENPremium,
        'totalHIKVISION' => $totalHIKVISION,
        'totalHIKVISIONPremium' => $totalHIKVISIONPremium,
        'totalCHUANGO' => $totalCHUANGO,
        'totalCHUANGOPremium' => $totalCHUANGOPremium,
        'subtotal' => $subtotal,
        'count' => Cart::count(),
        'iva' => $iva,
        'ivaPremium' => $ivaPremium,
        'totalReal' => $subtotal + $iva,
        'totalRealPremium' => $subtotalPremium + $ivaPremium,
        'variable' => $variable
  ]);
  }//category
  
  public function company($company){
      $cartItems = Cart::content();
      $totalWireplus = 0;
      $totalLedplus = 0;
      $totalmetalnet = 0;
      $totalpkcell = 0;
      $totalRCG = 0;
      $totalMVTEAM = 0;
      $totalNETVISION = 0;
      $totalCAPITAL = 0;
      $total3M = 0;
      $total3MPremium = 0;
      $totalRCGPremium = 0;
      $totalMVTEAMPremium = 0;
      $totalNETVISIONPremium = 0;
      $totalCAPITALPremium = 0;
      $totalWireplusPremium = 0;
      $totalLedplusPremium = 0;
      $totalmetalnetPremium = 0;
      $totalpkcellPremium = 0;
      $totalASGPremium = 0;
      $totalASG = 0;
      $totalECOGREENPremium = 0;
      $totalECOGREEN = 0;
      $totalCHUANGOPremium = 0;
      $totalCHUANGO = 0;
      $totalHIKVISIONPremium = 0;
      $totalHIKVISION = 0;
      $variable = $company;
     foreach($cartItems as $cartItem) {
      if($cartItem->options["company"] == 'wireplus'){
          $wireplusPrice = $cartItem->price * $cartItem->qty;
          $wireplusPremium = $cartItem->options["premium"] * $cartItem->qty;
          $totalWireplus = $totalWireplus + $wireplusPrice;
          $totalWireplusPremium = $totalWireplusPremium + $wireplusPremium;
      }//endif
      if($cartItem->options["company"] == 'ledplus'){
          $ledplusPrice = $cartItem->price * $cartItem->qty;
          $ledplusPremium = $cartItem->options["premium"] * $cartItem->qty;
          $totalLedplus = $totalLedplus + $ledplusPrice;
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
        if($cartItem->options["company"] == '3M'){
            $Price3M = $cartItem->price * $cartItem->qty;
            $total3M = $total3M + $Price3M;
            $Premium3M = $cartItem->options["premium"] * $cartItem->qty;
            $total3MPremium = $total3MPremium + $Premium3M;
         }//endif
        if($cartItem->options["company"] == 'ECOGREEN'){
            $ECOGREENPrice = $cartItem->price * $cartItem->qty;
            $totalECOGREEN = $totalECOGREEN + $ECOGREENPrice;
            $ECOGREENPremium = $cartItem->options["premium"] * $cartItem->qty;
            $totalECOGREENPremium = $totalECOGREENPremium + $ECOGREENPremium;
         }//endif
        if($cartItem->options["company"] == 'HIKVISION'){
            $HIKVISIONPrice = $cartItem->price * $cartItem->qty;
            $totalHIKVISION = $totalHIKVISION + $HIKVISIONPrice;
            $HIKVISIONPremium = $cartItem->options["premium"] * $cartItem->qty;
            $totalHIKVISIONPremium = $totalHIKVISIONPremium + $HIKVISIONPremium;
         }//endif
        if($cartItem->options["company"] == 'CHUANGO'){
            $CHUANGOPrice = $cartItem->price * $cartItem->qty;
            $totalCHUANGO = $totalCHUANGO + $CHUANGOPrice;
            $CHUANGOPremium = $cartItem->options["premium"] * $cartItem->qty;
            $totalCHUANGOPremium = $totalCHUANGOPremium + $CHUANGOPremium;
         }//endif
    }//endforeach
      $subtotalPremium = $totalCHUANGOPremium + $totalHIKVISIONPremium + $totalECOGREENPremium + $totalASGPremium + $totalLedplusPremium + $totalWireplusPremium + $totalpkcellPremium + $totalmetalnetPremium + $totalRCGPremium + $totalMVTEAMPremium + $totalNETVISIONPremium + $totalCAPITALPremium + $total3MPremium;
      $subtotal = $totalCHUANGO + $totalHIKVISION + $totalECOGREEN + $totalASG + $totalLedplus + $totalWireplus + $totalpkcell + $totalmetalnet + $totalRCG + $totalMVTEAM + $totalNETVISION + $totalCAPITAL + $total3M;
      $iva = ($subtotal * 16)/100;
      $ivaPremium = ($subtotalPremium * 16)/100;
    $products = Product::where('company','LIKE',"%$company%")->orderBy('position')->get();
    return view('store.index',['products' => $products,
        'cartItems' => $cartItems,
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
        'total3MPremium'=>$total3MPremium,
        'total3M'=>$total3M,
        'totalECOGREEN' => $totalECOGREEN,
        'totalECOGREENPremium' => $totalECOGREENPremium,
        'totalHIKVISION' => $totalHIKVISION,
        'totalHIKVISIONPremium' => $totalHIKVISIONPremium,
        'totalCHUANGO' => $totalCHUANGO,
        'totalCHUANGOPremium' => $totalCHUANGOPremium,
        'subtotalPremium' => $subtotalPremium,
        'subtotal' => $subtotal,
        'count' => Cart::count(),
        'iva' => $iva,
        'ivaPremium' => $ivaPremium,
        'totalReal' => $subtotal + $iva,
        'totalRealPremium' => $subtotalPremium + $ivaPremium,
        'totalASG' => $totalASG,
        'totalASGPremium' => $totalASGPremium,
        'company' => $company,
        'variable' => $variable
  ]);
}//company






public function search(Request $request){
      $cartItems = Cart::content();
      $totalWireplus = 0;
      $totalLedplus = 0;
      $totalmetalnet = 0;
      $totalpkcell = 0;
      $totalRCG = 0;
      $totalMVTEAM = 0;
      $totalNETVISION = 0;
      $totalCAPITAL = 0;
      $total3M = 0;
      $total3MPremium = 0;
      $totalRCGPremium = 0;
      $totalMVTEAMPremium = 0;
      $totalNETVISIONPremium = 0;
      $totalCAPITALPremium = 0;
      $totalWireplusPremium = 0;
      $totalLedplusPremium = 0;
      $totalmetalnetPremium = 0;
      $totalpkcellPremium = 0;
      $totalASGPremium = 0;
      $totalASG = 0;
      $totalECOGREENPremium = 0;
      $totalECOGREEN = 0;
      $totalCHUANGOPremium = 0;
      $totalCHUANGO = 0;
      $totalHIKVISIONPremium = 0;
      $totalHIKVISION = 0;
      $variable = $request->search;
     foreach($cartItems as $cartItem) {
      if($cartItem->options["company"] == 'wireplus'){
          $wireplusPrice = $cartItem->price * $cartItem->qty;
          $wireplusPremium = $cartItem->options["premium"] * $cartItem->qty;
          $totalWireplus = $totalWireplus + $wireplusPrice;
          $totalWireplusPremium = $totalWireplusPremium + $wireplusPremium;
      }//endif
      if($cartItem->options["company"] == 'ledplus'){
          $ledplusPrice = $cartItem->price * $cartItem->qty;
          $ledplusPremium = $cartItem->options["premium"] * $cartItem->qty;
          $totalLedplus = $totalLedplus + $ledplusPrice;
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
        if($cartItem->options["company"] == '3M'){
            $Price3M = $cartItem->price * $cartItem->qty;
            $total3M = $total3M + $Price3M;
            $Premium3M = $cartItem->options["premium"] * $cartItem->qty;
            $total3MPremium = $total3MPremium + $Premium3M;
         }//endif
        if($cartItem->options["company"] == 'ECOGREEN'){
            $ECOGREENPrice = $cartItem->price * $cartItem->qty;
            $totalECOGREEN = $totalECOGREEN + $ECOGREENPrice;
            $ECOGREENPremium = $cartItem->options["premium"] * $cartItem->qty;
            $totalECOGREENPremium = $totalECOGREENPremium + $ECOGREENPremium;
         }//endif
        if($cartItem->options["company"] == 'HIKVISION'){
            $HIKVISIONPrice = $cartItem->price * $cartItem->qty;
            $totalHIKVISION = $totalHIKVISION + $HIKVISIONPrice;
            $HIKVISIONPremium = $cartItem->options["premium"] * $cartItem->qty;
            $totalHIKVISIONPremium = $totalHIKVISIONPremium + $HIKVISIONPremium;
         }//endif
        if($cartItem->options["company"] == 'CHUANGO'){
            $CHUANGOPrice = $cartItem->price * $cartItem->qty;
            $totalCHUANGO = $totalCHUANGO + $CHUANGOPrice;
            $CHUANGOPremium = $cartItem->options["premium"] * $cartItem->qty;
            $totalCHUANGOPremium = $totalCHUANGOPremium + $CHUANGOPremium;
         }//endif
    }//endforeach
      $subtotalPremium = $totalCHUANGOPremium + $totalHIKVISIONPremium + $totalECOGREENPremium + $totalASGPremium + $totalLedplusPremium + $totalWireplusPremium + $totalpkcellPremium + $totalmetalnetPremium + $totalRCGPremium + $totalMVTEAMPremium + $totalNETVISIONPremium + $totalCAPITALPremium + $total3MPremium;
      $subtotal = $totalCHUANGO + $totalHIKVISION + $totalECOGREEN + $totalASG + $totalLedplus + $totalWireplus + $totalpkcell + $totalmetalnet + $totalRCG + $totalMVTEAM + $totalNETVISION + $totalCAPITAL + $total3M;
      $iva = ($subtotal * 16)/100;
      $ivaPremium = ($subtotalPremium * 16)/100;
      $search = ucwords(strtolower($request->search));
      $variable = $search;
    $products = Product::where('title','LIKE',"%$search%")->orWhere('details','LIKE',"%$search%")->orWhere('brand','LIKE',"%$search%")
  ->orWhere('company','LIKE',"%$search%")->orWhere('category','LIKE',"%$search%")->get();
  
    return view('store.index',['products' => $products,
        'cartItems' => $cartItems,
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
        'totalASGPremium' => $totalASGPremium,
        'totalASG' => $totalASG,
        'total3MPremium'=>$total3MPremium,
        'total3M'=>$total3M,
        'totalECOGREEN' => $totalECOGREEN,
        'totalECOGREENPremium' => $totalECOGREENPremium,
        'totalHIKVISION' => $totalHIKVISION,
        'totalHIKVISIONPremium' => $totalHIKVISIONPremium,
        'totalCHUANGO' => $totalCHUANGO,
        'totalCHUANGOPremium' => $totalCHUANGOPremium,
        'subtotalPremium' => $subtotalPremium,
        'subtotal' => $subtotal,
        'count' => Cart::count(),
        'iva' => $iva,
        'ivaPremium' => $ivaPremium,
        'totalReal' => $subtotal + $iva,
        'totalRealPremium' => $subtotalPremium + $ivaPremium,
        'variable' => $variable
  ]);
  }//search

}//endclass
