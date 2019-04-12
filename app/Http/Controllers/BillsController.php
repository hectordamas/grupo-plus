<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\BillsRequest;
use App\User;
use App\Bill;

class BillsController extends Controller
{
    public function index(){
      $bills = Bill::orderBy('id', 'DESC')->get();
      return view('bills.index',[
        'bills' => $bills,
      ]);
    }
    public function create(BillsRequest $request){
      $user = User::where('rif', strtoupper($request->rif))->first();
      $user_id = $user->id;
      if($request->hasFile('pdf')){
        $file = $request->file('pdf');
        $name = time().$file->getClientOriginalName();
        $file->move(public_path().'/pdf/', $name);
        $pdf = "/pdf/".$name;
      }
      Bill::create([
        'billNumber' => $request->input('billNumber'),
        'imponibleBill' => $request->input('imponibleBill'),
        'company_fact' => $request->input('company_fact'),
        'pdf' => $pdf,
        'iva'=> $request->input('iva'),
        'status'=> $request->input('status'),
        'destiny'=> $request->input('destiny'),
        'date_send'=> $request->input('date_send'),
        'total'=>$request->input('total'),
        'send_with' => $request->input('send_with'),
        'cost_send'=> $request->input('cost_send'),
        'percent_send'=> $request->input('percent_send'),
        'status_flete'=> $request->input('status_flete'),
        'data_send'=> $request->input('data_send'),
        'user_id' => $user_id,
      ]);
      return redirect()->back()->with('message', 'La factura se ha creado correctamente!');
    }//endcreate

    public function search(Request $request){
      $search = ucwords(strtolower($request->search));
      $bills = Bill::where('billNumber','LIKE',"%$search%")->orWhere('imponibleBill','LIKE',"%$search%")->orWhere('company_fact','LIKE',"%$search%")
      ->orWhere('destiny','LIKE',"%$search%")->orWhere('status','LIKE',"%$search%")->orWhere('data_send','LIKE',"%$search%")->orWhere('total','LIKE',"%$search%")
      ->orWhere('send_with','LIKE',"%$search%")->get();
      return view('bills.index', [
        'bills' => $bills,
      ]);
    }

    public function userBills($id){
      $user = User::find($id);
      return view('bills.user',[
        'bills' => $user->bills,
      ]);
    }
    public function retention(Request $request, $id){
      $bill = Bill::find($id);
      if($request->hasFile('file')){
        $file = $request->file('file');
        $name = time().$file->getClientOriginalName();
        $file->move(public_path().'/retention/', $name);
        $retention = "/retention/".$name;
        $bill->retention = $retention;
        $bill->save();
      }
      return redirect()->back()->with('message', 'La retención se ha subido correctamente!');
    }//userBills
}
