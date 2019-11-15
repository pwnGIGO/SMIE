<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;

use App\User;
use Input;
use Validator;
use Hash;
use Auth;
/*
    Clase que maneja las vistas del Administrador
*/

class AdministradorController extends Controller
{
    // Home
    public function Home(){
        return view('administradores/home');
    }

    /* Configuracion de la cuenta xD*/

    // Vista que muestra el formulario para cambiar contraseña
    public function miCuenta(){
        return view('administradores/cuenta/index');
    }
    // Metodo que recibe los datos del formulario para cambio de contraseña
    public function updatePass(Request $request){

        $rules =[
            'mypassword' => 'required',
            'password' => 'required|confirmed|min:6|max:18',
        ];

        $messages = [
            'mypassword.required' => 'Este campo es requerido',
            'password.required' => 'Este campo es requerido',
            'password.confirmed' => 'Las contraseñas no coinciden',
            'password.min' => 'La contraseña debe tener minimo 6 caracteres',
            'password.max' => 'El maximo permitido es de 18 caracteres',
        ];


        $validator = Validator::make($request->all(), $rules, $messages);

        if($validator->fails()){

            // Regresa al formulario mostrando los errores
            return redirect()->route('configuration')->withErrors($validator);
        }else{
            // Si la contraseña actual coincide con el formulario se cambia a la nueva contraseña
            if(Hash::check($request->mypassword, Auth::user()->password)){

                $user =new User;
                $user->where('email','=', Auth::user()->email)
                    ->update(['password' => bcrypt($request->password)]);
                return redirect()->route('usuarios.inicio')->with('status', 'Password cambiado con exito');
            }
            else{
                // La contraseña actual es incorrecta
                return redirect()->route('configuration')->with('message', 'Las credenciales incorrectas');
            }
        }
    }// Fin del metodo updatepass
}