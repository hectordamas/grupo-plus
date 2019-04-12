<?php

namespace App\Http\Controllers;
use App\User;
use App\Bill;
use Illuminate\Http\Request;
use Mail;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
class UsersController extends Controller
{
    public function index(){
      $users = User::orderBy('id', 'desc')->get();
      
      return view('admin.index', [
        'users'=> $users,
      ]);
    }//Endfunction index

    public function edit($id){
      $user = User::find($id);
      return view('admin.user.edit', ['user'=> $user]);
    }//edit

    public function update(Request $request, $id){
      $user = User::find($id);
      $user->companyName = $request->input('companyName');
      $user->telephoneNumber = $request->input('telephoneNumber');
      $user->address_fact = $request->input('address_fact');
      $user->address_send = $request->input('address_send');
      $user->name = $request->input('name');
      $user->cellphoneNumber = $request->input('cellphoneNumber');
      $user->email = $request->input('email');
      $user->city = $request->input('city');
      $user->rif = $request->input('rif');
      $user->role = $request->input('role');
      $user->date_expiration = $request->input('date_expiration');
      $user->email_seller = $request->input('email_seller');
      $user->name_seller = $request->input('name_seller');
      if($request->input('password')){
      $user->password = bcrypt($request->input('password'));
      }
      $user->save();
      return redirect()->back()->with('message', 'El usuario se ha actualizado correctamente!');
    }//update

    public function destroy(Request $request, $id){
      Bill::where('user_id', $id)->delete();
      User::destroy($id);
      return redirect()->back()->with('message', 'El usuario se ha eliminado correctamente!');
    }

    public function show(Request $request, $id){
      $user = User::find($id);
      return view('admin.user.show', ['user'=> $user]);
    }

    public function mail(Request $request){
      $data = [
        'companyName' => $request->input('companyName'),
        'telephoneNumber' => $request->input('telephoneNumber'),
        'name' => $request->input('name'),
        'cellphoneNumber' => $request->input('cellphoneNumber'),
        'email' => $request->input('email'),
        'city' => $request->input('city'),
        'listen' => $request->input('listen'),
        'rif' => $request->input('rif'),
      ];
      Mail::send('mail.user', $data, function($message){
        $subject = 'Mail para confirmar el registro de Usuario en grupoplus';
        $message->from('grupoplus.imagen361@gmail.com', $subject);
        $message->to('grupoplus.imagen361@gmail.com')->subject($subject)->cc('ventas@grupo-plus.com');
      });
      return redirect()->back()->with('message', 'Se ha enviado su información, nos pondremos en contacto con usted en las próximas 48h');
  }//mail

 public function search(Request $request)
  {
    $search = strtoupper($request->search);
    $users = User::where('name','LIKE',"%$search%")->orWhere('email','LIKE',"%$search%")->orWhere('rif','LIKE',"%$search%")
    ->orWhere('role','LIKE',"%$search%")->orWhere('companyName','LIKE',"%$search%")->get();
    return view('admin.index', [
      'users' => $users,
    ]);
  }//search

  public function searchForRif(Request $request){
    $search = ucwords(strtolower($request->rif));
    $user = User::where('rif', $search)->first();
    return response()->json([
      'user' => $user
    ]);
  }//searchForRif

}
