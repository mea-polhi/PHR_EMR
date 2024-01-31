<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;


class RoleController extends Controller
{

    protected $role;

    public function __construct(Role $role)
    {
        $this->role = $role;
    }
    
    public function index()
    {
        $roles = $this->role::all();

        return view('Settings.Role.roleindex', ['roles' => $roles]);
    }

    public function create()
    {
        $permissions = Permission::all();
        return view('Settings.Role.rolecreate', compact('permissions'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|unique:roles',
            'permissions' => 'nullable',
        ]);

        $role = $this->role->create([
            'name' => $request->name,
        ]);

        if($request->has('permissions')){
            $role->givePermissionTo($request->permissions);
        }

        return response()->json("Role created successfully", 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}