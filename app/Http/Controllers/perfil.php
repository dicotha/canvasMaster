<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Image;

class perfil extends Controller
{
    //
    public function updadeAvatar(Request $request){
        if ($request->hasFile('avatar')) {
            
            $avatar = $request->file('avatar');
            $path = '/img/avatar/';
            $filename = time().('.').$avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(160,160)->save(public_path('/img/avatar/'.$filename));
            $user = Auth::user();
            $user->avatar = $path.$filename;
            $user->save();
        }
        if ($request->has('name')) {
        	$name = $request->input('name');
        	$user = Auth::user();
            $user->name = $name;
            $user->save();
        }

        if ($request->has('email')) {
        	$email = $request->input('email');
        	$user = Auth::user();
            $user->email = $email;
            $user->save();
        }
        if ($request->has('password')) {
        	$password = bcrypt($request->input('password'));
        	$user = Auth::user();
            $user->password = $password;
            $user->save();
        }
        if ($request->has('telefone')) {
        	$telefone = $request->input('telefone');
        	$user = Auth::user();
            $user->telefone = $telefone;
            $user->save();
        }
        if ($request->has('cep')) {
        	$cep = $request->input('cep');
        	$user = Auth::user();
            $user->cep = $cep;
            $user->save();
        }
        if ($request->has('bairro')) {
        	$bairro = $request->input('bairro');
        	$user = Auth::user();
            $user->bairro = $bairro;
            $user->save();
        }
        if ($request->has('estado')) {
        	$estado = $request->input('estado');
        	$user = Auth::user();
            $user->estado = $estado;
            $user->save();
        }

        if ($request->has('cpf')) {
        	$cpf = $request->input('cpf');
        	$user = Auth::user();
            $user->cpf = $cpf;
            $user->save();
        }

        if ($request->has('numero')) {
        	$numero = $request->input('numero');
        	$user = Auth::user();
            $user->numero = $numero;
            $user->save();
        }
        if ($request->has('complemento')) {
        	$complemento = $request->input('complemento');
        	$user = Auth::user();
            $user->complemento = $complemento;
            $user->save();
        }
        if ($request->has('cidade')) {
        	$cidade = $request->input('cidade');
        	$user = Auth::user();
            $user->cidade = $cidade;
            $user->save();
        }


        return view('perfil');


    }
}
