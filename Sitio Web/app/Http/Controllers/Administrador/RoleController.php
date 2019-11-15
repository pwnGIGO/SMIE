<?php

namespace App\Http\Controllers\Administrador;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Caffeinated\Shinobi\Models\Role;
use Caffeinated\Shinobi\Models\Permission;

class RoleController extends Controller
{
    // Vista que muestra los roles
    public function index(){
        $roles = Role::paginate();
        return view('administradores/roles/index', compact('roles'));
    }

    // Vista para crear un rol
    public function create(){

        $permissions = Permission::get();
        return view('administradores/roles/create', compact('permissions'));
    }

    // Metodo que crea un rol
    public function store(Request $request){
        //verificar que no se duplique nombre y slug
        //$nombre=$request->
        //$slug=$request->
//        $coincidencias = Role::where()
        //Se actualizan los permisos
        if($request->special!= "all-access"){
            $role = Role::create($request->all());
            $role->permissions()->sync($request->get('permissions'));

            return redirect()->route('roles.index')->with('status', 'Rol guardado con éxito');
        }else{
            return redirect()->route('roles.index')->with('status', 'No se puede crear otro Super Administrador');
        }
    }

    // Muestra los detalles de un rol seleccionado
    public function show(Role $role){

        return view('administradores/roles/show', compact('role'));
    }

    // Vista que muestra los permisos 
    public function edit(Role $role)
    {
        //Obtiene todos los roles del sistema
        if($role->special!="all-access"){
            $permissions = Permission::get();
            return view('administradores/roles/edit', compact('role', 'permissions'));
        }else{
            return redirect()->route('roles.index')->with('status', 'No se puede editar el Rol de Super Administrador');
        }
    }

    // Guarda los cambios del rol
    public function update(Request $request, Role $role)
    {
        // se actualiza el rol
        $role->update($request->all());
        //Se actualizan los permisos
        $role->permissions()->sync($request->get('permissions'));
        return redirect()->route('roles.index')->with('status', 'Rol actualizado con éxito');
    }

    // Elimina un rol del sistema
    public function destroy(Role $role){
       if($role->special=="all-access"){
            return back()->with('status', 'No se puede eliminar el Rol de Super Administrador');
        }
        $role->delete();
        return back()->with('status', 'Rol eliminado correctamente');
    }
}