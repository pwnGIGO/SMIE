<?php

namespace App\Http\Controllers\Administrador;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Caffeinated\Shinobi\Models\Role;
use Caffeinated\Shinobi\Models\Permission;
use App\User;
use App\rol_usuario;
use Auth;

class UserController extends Controller
{
    // Vista que muestra todos los usuario registrados
    public function index(){

        $users = User::paginate();
        return view('administradores/users/index', compact('users'));
    }

    // Vista que muestra los detalles del usuario
    public function show(User $user){

        return view('administradores/users.show', compact('user'));
    }

    // Vista que muestra el formulario para editar un usuario
    public function edit(User $user){
        $id=Auth::user()->id;
        if($id==$user->id){
            return redirect()->route('users.index')->with('status', 'No puedes editar tu propio usuario');
        }else{
        //Obtiene todos los roles del sistema
            $roles = Role::get();
            return view('administradores/users.edit', compact('user', 'roles'));
        }
    }

    // Actualiza la informacion del formulario para editar un usuario
    public function update(Request $request, User $user){

        // se actualiza el usuario
        $user->update($request->all());
        // Se actualizan los roles
        $user->roles()->sync($request->get('roles'));
        return redirect()->route('users.index')->with('status', 'Usuario actualizado con éxito');
    }

    // Elimina un usuario
    public function destroy(User $user){
        
        $roles_usuario = rol_usuario::get()
            ->where('user_id', '=', $user->id)->first();

        if($roles_usuario->role_id=='1'){
           
            return back()->with('status', 'No se puede eliminar al super administrador');
        }else{
            $user->delete();
            return back()->with('status', 'Usuario eliminado correctamente');
        }
    }
}