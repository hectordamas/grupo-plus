<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
class SaintController extends Controller
{
    public function update(Request $request){
        
      $datosDelSaint = unserialize($request->input('datos'));
    /**foreach ($products as $product) {
        foreach ($datosDelSaint as $dsaint) {
          if($product->sku == $dsaint["CodProd"]){
            $product->stock = $dsaint["Existen"];
            $product->premium = $dsaint["Precio1"];
            $product->regular = $dsaint["Precio3"];
            $product->ref = number_format(($dsaint["Pvpdolar1"] / 1.16) , 2, '.', ',');
            $product->save();
          }//endif
        }//endforeach
      }//endforeach**/
      foreach($datosDelSaint as $d){
          $product = Product::where('sku', $d["CodProd"])->first();
          if($product){
          $product->stock = $d["Existen"];
          $product->premium = $d["Precio1"]; 
          $product->regular = $d["Precio3"];
          $product->ref = number_format(($d["Pvpdolar1"] / 1.16) , 2, '.', ',');   
          $product->save();
          }//endif
      }//endforeach
      
    $products = Product::all();
    return view('exit', ['products' => $products]);
    }//endupdate
}
