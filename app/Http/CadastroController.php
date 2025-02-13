<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class CadastroController extends Controller {
     public function create(Request $request){
       if(!empty($request->all())){
               $user = new User;

               $user->name = $request->name;
               $user->email = $request->email;
               $user->password = bcrypt($request->password);

               $user->save();

               dd('Cadastro realizado com sucesso');
       }else{
          dd('não foi possivel cadastrar.');
       }    
          
     }
}

class LoginController extends Controller {
     public function (){
          return view('Login');
     }
     public function loginAttempt(Request $request){
          $acess = $request->validate([
               'email' => 'required',
               'password' => 'required'
          ]);

          if (Auth::attempt($acess)){
               $request->session()->regenerate();

         return redirect()->route('Home');
     }
         return back()->with('status', 'e-mail e senha iválidos');
  }
}






?>