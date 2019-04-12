<?php

namespace App\Http\Controllers;
use Cart;
use Auth;
use App\Order;
use Mail;
use App\Product;
use App\User;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function add(Request $request){
      $product = Product::find($request->id);
      $error = '';
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
      $totalpkcellPremium = 0;
      $totalASG = 0;
      $totalASGPremium = 0;
      $totalECOGREEN = 0;
      $totalECOGREENPremium = 0;
      $totalHIKVISION = 0;
      $totalHIKVISIONPremium = 0;
      $totalCHUANGO = 0;
      $totalCHUANGOPremium = 0;
      $total3M = 0;
      $total3MPremium = 0;
      $cartItems = Cart::content();
      if($request->qty > $product->stock){
        $error = 'Disculpe, cantidad solicitada excede <br/> inventario disponible';
      }else{
        Cart::add($product->id, $product->title, $request->qty, $product->ref,['company'=>$product->company, 'premium'=>$product->premium, 'sku' => $product->sku]);
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
        if($cartItem->options["company"] == '3M'){
            $Price3M = $cartItem->price * $cartItem->qty;
            $total3M = $total3M + $Price3M;
            $Premium3M = $cartItem->options["premium"] * $cartItem->qty;
            $total3MPremium = $total3MPremium + $Premium3M;
         }//endif
        }//endforeach
      }//else
      $subtotalPremium = $totalHIKVISIONPremium + $totalCHUANGOPremium + $totalECOGREENPremium + $totalASGPremium + $totalLedplusPremium + $totalWireplusPremium + $totalpkcellPremium + $totalmetalnetPremium + $totalRCGPremium + $totalMVTEAMPremium + $totalNETVISIONPremium + $totalCAPITALPremium + $total3MPremium;
      $subtotal = $totalHIKVISION + $totalCHUANGO + $totalECOGREEN + $totalASG + $totalLedplus + $totalWireplus + $totalpkcell + $totalmetalnet + $totalRCG + $totalMVTEAM + $totalNETVISION + $totalCAPITAL + $total3M;
      $iva = ($subtotal * 16)/100;
      $ivaPremium = ($subtotalPremium * 16)/100;
       return response()->json([
        'success'=>'Has añadido este producto al carrito',
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
        'totalASG' => $totalASG,
        'totalASGPremium' => $totalASGPremium,
        'totalECOGREEN' => $totalECOGREEN,
        'totalECOGREENPremium' => $totalECOGREENPremium,
        'totalCHUANGO' => $totalCHUANGO,
        'totalCHUANGOPremium' => $totalCHUANGOPremium,
        'totalHIKVISION' => $totalHIKVISION,
        'totalHIKVISIONPremium' => $totalHIKVISIONPremium,
        'total3MPremium'=>$total3MPremium,
        'total3M'=>$total3M,
        'subtotalPremium' => $subtotalPremium,
        'subtotal' => $subtotal,
        'count' => Cart::count(),
        'iva' => $iva,
        'ivaPremium' => $ivaPremium,
        'totalReal' => $subtotal + $iva,
        'totalRealPremium' => $subtotalPremium + $ivaPremium,
        'count' => Cart::count(),
        'singleProduct' => $product,
        'products' => $cartItems,
        'error' => $error,
      ]);
    }//endAdd

    public function destroy(){
        Cart::destroy();
        return redirect()->back();
    }
    public function remove(Request $request){
      $product = Cart::get($request->rowId);
      Cart::remove($request->rowId);
      $total3M = 0;
      $total3MPremium = 0;
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
      $totalpkcellPremium = 0;
      $totalASG = 0;
      $totalASGPremium = 0;
      $totalECOGREEN = 0;
      $totalECOGREENPremium = 0;
      $totalHIKVISION = 0;
      $totalHIKVISIONPremium = 0;
      $totalCHUANGO = 0;
      $totalCHUANGOPremium = 0;
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
      $subtotalPremium = $totalHIKVISIONPremium + $totalCHUANGOPremium + $totalECOGREENPremium + $totalASGPremium + $totalLedplusPremium + $totalWireplusPremium + $totalpkcellPremium + $totalmetalnetPremium + $totalRCGPremium + $totalMVTEAMPremium + $totalNETVISIONPremium + $totalCAPITALPremium + $total3MPremium;
      $subtotal = $totalHIKVISION + $totalCHUANGO + $totalECOGREEN + $totalASG + $totalLedplus + $totalWireplus + $totalpkcell + $totalmetalnet + $totalRCG + $totalMVTEAM + $totalNETVISION + $totalCAPITAL + $total3M;
      $iva = ($subtotal * 16)/100;
      $ivaPremium = ($subtotalPremium * 16)/100;
       return response()->json([
        'success'=>'Has añadido este producto al carrito',
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
        'totalASG' => $totalASG,
        'totalASGPremium' => $totalASGPremium,
        'totalECOGREEN' => $totalECOGREEN,
        'totalECOGREENPremium' => $totalECOGREENPremium,
        'totalCHUANGO' => $totalCHUANGO,
        'totalCHUANGOPremium' => $totalCHUANGOPremium,
        'totalHIKVISION' => $totalHIKVISION,
        'totalHIKVISIONPremium' => $totalHIKVISIONPremium,
        'total3MPremium'=>$total3MPremium,
        'total3M'=>$total3M,
        'subtotalPremium' => $subtotalPremium,
        'subtotal' => $subtotal,
        'count' => Cart::count(),
        'iva' => $iva,
        'ivaPremium' => $ivaPremium,
        'totalReal' => $subtotal + $iva,
        'totalRealPremium' => $subtotalPremium + $ivaPremium,
        'count' => Cart::count(),
        'singleProduct' => $product,
        'products' => $cartItems,
      ]);
    }//endRemove

    public function index(){
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
      $totalpkcellPremium = 0;
      $totalASG = 0;
      $totalASGPremium = 0;
      $totalECOGREEN = 0;
      $totalECOGREENPremium = 0;
      $totalHIKVISION = 0;
      $totalHIKVISIONPremium = 0;
      $totalCHUANGO = 0;
      $totalCHUANGOPremium = 0;
      $total3M = 0;
      $total3MPremium = 0;
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
        if($cartItem->options["company"] == '3M'){
            $Price3M = $cartItem->price * $cartItem->qty;
            $total3M = $total3M + $Price3M;
            $Premium3M = $cartItem->options["premium"] * $cartItem->qty;
            $total3MPremium = $total3MPremium + $Premium3M;
         }//endif
      }//endforeach
      
      $subtotalPremium = $totalHIKVISIONPremium + $totalCHUANGOPremium + $totalECOGREENPremium + $totalASGPremium + $totalLedplusPremium + $totalWireplusPremium + $totalpkcellPremium + $totalmetalnetPremium + $totalRCGPremium + $totalMVTEAMPremium + $totalNETVISIONPremium + $totalCAPITALPremium + $total3MPremium;
      $subtotal = $totalHIKVISION + $totalCHUANGO + $totalECOGREEN + $totalASG + $totalLedplus + $totalWireplus + $totalpkcell + $totalmetalnet + $totalRCG + $totalMVTEAM + $totalNETVISION + $totalCAPITAL + $total3M;
      $iva = ($subtotal * 16)/100;
      $ivaPremium = ($subtotalPremium * 16)/100;
      
      return view('cart.index',[
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
        'totalASG' => $totalASG,
        'totalASGPremium' => $totalASGPremium,
        'totalECOGREEN' => $totalECOGREEN,
        'totalECOGREENPremium' => $totalECOGREENPremium,
        'totalCHUANGO' => $totalCHUANGO,
        'totalCHUANGOPremium' => $totalCHUANGOPremium,
        'totalHIKVISION' => $totalHIKVISION,
        'totalHIKVISIONPremium' => $totalHIKVISIONPremium,
        'total3MPremium'=>$total3MPremium,
        'total3M'=>$total3M,
        'subtotalPremium' => $subtotalPremium,
        'subtotal' => $subtotal,
        'count' => Cart::count(),
        'iva' => $iva,
        'ivaPremium' => $ivaPremium,
        'totalReal' => $subtotal + $iva,
        'totalRealPremium' => $subtotalPremium + $ivaPremium,
        'count' => Cart::count(),
        'products' => $cartItems,
      ]);
    }//endindex

    public function mail(){
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
      $totalpkcellPremium = 0;
      $totalASG = 0;
      $totalASGPremium = 0;
      $totalECOGREEN = 0;
      $totalECOGREENPremium = 0;
      $totalHIKVISION = 0;
      $totalHIKVISIONPremium = 0;
      $totalCHUANGO = 0;
      $totalCHUANGOPremium = 0;
      $total3M = 0;
      $total3MPremium = 0;
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
      
      $subtotalPremium = $totalHIKVISIONPremium + $totalCHUANGOPremium + $totalECOGREENPremium + $totalASGPremium + $totalLedplusPremium + $totalWireplusPremium + $totalpkcellPremium + $totalmetalnetPremium + $totalRCGPremium + $totalMVTEAMPremium + $totalNETVISIONPremium + $totalCAPITALPremium + $total3MPremium;
      $subtotal = $totalHIKVISION + $totalCHUANGO + $totalECOGREEN + $totalASG + $totalLedplus + $totalWireplus + $totalpkcell + $totalmetalnet + $totalRCG + $totalMVTEAM + $totalNETVISION + $totalCAPITAL + $total3M;
      $iva = ($subtotal * 16)/100;
      $ivaPremium = ($subtotalPremium * 16)/100;
        $order = Order::create([
        'premium' => $subtotalPremium + $ivaPremium,
        'ref' => $subtotal + $iva,
        'pdf' => "Me equivoqué :'''v",
      ]);
      $data = [
        'cartItems' => $cartItems,
        'cartTotal'=> Cart::subtotal(),
        'user'=> User::find(Auth::user()->id),
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
        'subtotalPremium' => $subtotalPremium,
        'subtotal' => $subtotal,
        'count' => Cart::count(),
        'iva' => $iva,
        'ivaPremium' => $ivaPremium,
        'totalReal' => $subtotal + $iva,
        'totalRealPremium' => $subtotalPremium + $ivaPremium,
        'count' => Cart::count(),
        'products' => $cartItems,
        'order_id' => $order->id,
        'totalASG' => $totalASG,
        'totalASGPremium' => $totalASGPremium,
        'totalCHUANGO' => $totalCHUANGO,
        'totalCHUANGOPremium' => $totalCHUANGOPremium,
        'totalHIKVISION' => $totalHIKVISION,
        'totalHIKVISIONPremium' => $totalHIKVISIONPremium,
      ];

      Mail::send('mail.cart', $data, function($message){
        $subject = 'Pedido de GrupoPlus ('.Auth::user()->companyName.')';
        $message->from('grupoplus.imagen361@gmail.com', $subject);
        if(Auth::user()->email_seller){
            $message->to('grupoplus.imagen361@gmail.com')->subject($subject)->cc([Auth::user()->email, Auth::user()->email_seller,'ventas@grupo-plus.com']);
        }else{
            $message->to('grupoplus.imagen361@gmail.com')->subject($subject)->cc([Auth::user()->email,'ventas@grupo-plus.com']);
        }
      });
      return view('cart.enviado', ['order' => $order]);
    }//endMail




    public function update(Request $request){
      $product = Cart::get($request->rowId);
      Cart::update($request->rowId, $request->qty);
      $total3M = 0;
      $total3MPremium = 0;
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
      $totalpkcellPremium = 0;
      $totalASG = 0;
      $totalASGPremium = 0;
      $totalECOGREEN = 0;
      $totalECOGREENPremium = 0;
      $totalHIKVISION = 0;
      $totalHIKVISIONPremium = 0;
      $totalCHUANGO = 0;
      $totalCHUANGOPremium = 0;
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
        if($cartItem->options["company"] == '3M'){
            $Price3M = $cartItem->price * $cartItem->qty;
            $total3M = $total3M + $Price3M;
            $Premium3M = $cartItem->options["premium"] * $cartItem->qty;
            $total3MPremium = $total3MPremium + $Premium3M;
         }//endif
      }//endforeach
      
      $subtotalPremium = $totalHIKVISIONPremium + $totalCHUANGOPremium + $totalECOGREENPremium + $totalASGPremium + $totalLedplusPremium + $totalWireplusPremium + $totalpkcellPremium + $totalmetalnetPremium + $totalRCGPremium + $totalMVTEAMPremium + $totalNETVISIONPremium + $totalCAPITALPremium + $total3MPremium;
      $subtotal = $totalHIKVISION + $totalCHUANGO + $totalECOGREEN + $totalASG + $totalLedplus + $totalWireplus + $totalpkcell + $totalmetalnet + $totalRCG + $totalMVTEAM + $totalNETVISION + $totalCAPITAL + $total3M;
      $iva = ($subtotal * 16)/100;
      $ivaPremium = ($subtotalPremium * 16)/100;
      
      $multiqty = $product->price * $product->qty;
      $multiqtyPremium = $product->options['premium'] * $product->qty;
      return response()->json([
        'success'=>'Has actualizado el producto del carrito',
        'cartItem'=>$product,
        'cartCount' => Cart::count(),
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
        'totalASG' => $totalASG,
        'totalASGPremium' => $totalASGPremium,
        'total3MPremium'=>$total3MPremium,
        'total3M'=>$total3M,
        'totalECOGREEN' => $totalECOGREEN,
        'totalECOGREENPremium' => $totalECOGREENPremium,
        'totalCHUANGO' => $totalCHUANGO,
        'totalCHUANGOPremium' => $totalCHUANGOPremium,
        'totalHIKVISION' => $totalHIKVISION,
        'totalHIKVISIONPremium' => $totalHIKVISIONPremium,
        'subtotalPremium' => $subtotalPremium,
        'subtotal' => $subtotal,
        'count' => Cart::count(),
        'iva' => $iva,
        'ivaPremium' => $ivaPremium,
        'totalReal' => $subtotal + $iva,
        'totalRealPremium' => $subtotalPremium + $ivaPremium,
        'multiqty' => $multiqty,
        'multiqtyPremium' => $multiqtyPremium,
      ]);
    }//endUpdate

}
