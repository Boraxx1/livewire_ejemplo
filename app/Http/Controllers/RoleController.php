<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\View\View;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('roles.index', [
            'roles' => Role::orderBy('nombre', 'asc')->get(),
                      #SELECT * FROM roles order by name asc;
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('roles.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        # insert into roles (name, description) values ('admin', 'Administrator role');
        Role::create($this->validateData($request));
        
        return redirect()->route('roles.index')->with('success', 'Role creado exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Role $role)
    {
        #select * from roles where id = $role->id;
               return view('roles.show', compact('role'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Role $role)
    {
        return view('roles.edit', compact('role'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Role $role): RedirectResponse
    {
        # insert into roles (name, description) values ('admin', 'Administrator role');
        $role->update($this->validateData($request, $role));

        return redirect()->route('roles.index')
            ->with('success', 'El rol fue actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Role $role)
    {
        #delete from roles where id = $role->id;
        $role->delete();
        return redirect()->route('roles.index')->with('success', 'El rol ha sido eliminado exitosamente.');
    }

    private function validateData(Request $request, ?Role $role = null): array
    {
        return $request->validate([
            'nombre' => [
                'required',
                'string',
                'max:50',
                Rule::unique('roles', 'nombre')->ignore($role),
            ],
            'descripcion' => [
                'nullable',
                'string',
                'max:255',
            ],
        ]);
    }
}