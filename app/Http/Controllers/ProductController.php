<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Auth;
use PDF;
use App\Http\Requests\CreateProductRequest;

class ProductController extends Controller
{
    public function index(){
      $products = Product::orderBy('id', 'DESC')->get();
      $inventarioWireplus = 0;
      $inventarioLedplus = 0;
      $inventarioPkcell = 0;
      $inventarioMetalnet = 0;
      $inventarioRCG = 0;
      $inventarioMVTEAM = 0;
      $inventarioNETVISION = 0;
      $inventarioCAPITAL = 0;
      $inventarioASG = 0;
      $inventario3M = 0;
      $inventarioECOGREEN = 0;
      foreach($products as $product){
          if($product->company == 'wireplus'){
              $inventarioWireplus = $inventarioWireplus + ($product->ref * $product->stock);
          }if($product->company == 'ledplus'){
              $inventarioLedplus = $inventarioLedplus + ($product->ref * $product->stock);
          } if($product->company == 'ASG'){
              $inventarioASG = $inventarioASG + ($product->ref * $product->stock);
          } if($product->company == 'metalnet'){
              $inventarioMetalnet = $inventarioMetalnet + ($product->ref * $product->stock);
          }if($product->company == 'RCG'){
             $inventarioRCG = $inventarioRCG + ($product->ref * $product->stock);
          }if($product->company == 'MVTEAM'){
             $inventarioMVTEAM = $inventarioMVTEAM + ($product->ref * $product->stock);
          }if($product->company == 'NETVISION'){
             $inventarioNETVISION = $inventarioNETVISION + ($product->ref * $product->stock);
          }if($product->company == 'CAPITAL'){
             $inventarioCAPITAL = $inventarioCAPITAL + ($product->ref * $product->stock);
          }if($product->company == '3M'){
             $inventario3M = $inventario3M + ($product->ref * $product->stock);
          }if($product->company == 'ECOGREEN'){
             $inventarioECOGREEN = $inventarioECOGREEN + ($product->ref * $product->stock);
          }
      }
      $inventarioTotal = $inventarioECOGREEN + $inventarioWireplus + $inventarioLedplus + $inventarioASG + $inventarioMetalnet + $inventarioRCG + $inventarioMVTEAM + $inventarioNETVISION + $inventarioCAPITAL + $inventario3M;
      return view('products.index', [
        'products'=> $products,
        'inventarioWireplus' => $inventarioWireplus,
        'inventarioLedplus' => $inventarioLedplus,
        'inventarioPkcell' => $inventarioASG,
        'inventarioMetalnet' => $inventarioMetalnet,
        'inventarioRCG' => $inventarioRCG,
        'inventarioMVTEAM' => $inventarioMVTEAM,
        'inventarioNETVISION' => $inventarioNETVISION,
        'inventarioCAPITAL' => $inventarioCAPITAL,
        'inventarioASG' => $inventarioASG,
        'inventario3M' => $inventario3M,
        'inventarioECOGREEN' => $inventarioECOGREEN,
        'inventarioTotal' => $inventarioTotal,
      ]);
    }
    public function edit($id){
      $product = Product::find($id);
      return view('products.edit',[
        'product'=>$product
      ]);
    }
    public function update(Request $request, $id){
      $product = Product::find($id);
      if ($request->hasFile('image')) {
        $file = $request->file('image');
        $name = time().$file->getClientOriginalName();
        $file->move(public_path().'/images/', $name);
        $fileName = "/images/".$name;
        $product->image = $fileName;
      }else{
        $product->image = $product->image;
      }
        $product->title = $request->input('title');
        $product->details = $request->input('details');
        $product->company = $request->input('company');
        $product->category = $request->input('category');
        $product->brand = $request->input('brand');
        $product->ref = $request->input('ref');
        $product->regular = $request->input('regular');
        $product->premium = $request->input('premium');
        $product->sku = $request->input('sku');
        $product->stock = $request->input('stock');
        $product->position = $request->input('position');
        $product->save();
      return redirect('/products')->with('message', 'El producto se ha actualizado correctamente!');
    }

    public function create(CreateProductRequest $request){
      if ($request->hasFile('image')) {
        $file = $request->file('image');
        $name = time().$file->getClientOriginalName();
        $file->move(public_path().'/images/', $name);
        $fileName = "/images/".$name;
      }
      Product::create([
        'image' => $fileName,
        'title' => $request->input('title'),
        'details' => $request->input('details'),
        'company' => $request->input('company'),
        'category' => $request->input('category'),
        'brand' => $request->input('brand'),
        'ref' => $request->input('ref'),
        'regular' => $request->input('regular'),
        'premium' => $request->input('premium'),
        'sku' => $request->input('sku'),
        'stock'=> $request->input('stock'),
        'position' => 0,
        'user_id'=>Auth::id(),
      ]);
      return redirect('/products')->with('message', 'El producto se ha creado correctamente!');
    }//create

    public function destroy($id){
      Product::destroy($id);
      return redirect()->back()->with('message', 'El producto se ha eliminado correctamente!');
    }//destroy

    public function search(Request $request){
      $search = ucwords(strtolower($request->search));
      $products = Product::where('title','LIKE',"%$search%")->orWhere('details','LIKE',"%$search%")->orWhere('brand','LIKE',"%$search%")
      ->orWhere('company','LIKE',"%$search%")->orWhere('category','LIKE',"%$search%")->get();
      return view('products.index', [
        'products' => $products,
      ]);
    }


    public function pdf($variable){
        set_time_limit(300);
        $products = Product::where('company', $variable)->orWhere('category', $variable)->get();
        
        $data = [
            'products' => $products,
            'variable' => $variable
            ];
        $pdf = PDF::loadView('pdf.products', $data);
        return $pdf->download('productos.pdf');
    }
}
