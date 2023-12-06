<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;

class PermissionController extends Controller
{

    protected $permission;

    public function __construct(Permission $permission)
    {
        $this->permission = $permission;
        $this->middleware('auth');
    }
    
    public function index()
    {
        $permissions = $this->permission->all();

        return view('Settings.Permissions.Permindex', compact('permissions'));
    }

    public function getAllPermissions()
    {
        $permissions = $this->permission->all();

        return response()->json([
            'permission' => $permissions,
        ], 200);
    }

    public function create()
    {
        return view('Settings.Permissions.Permcreate');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required'
        ]);
        
        $this->permission->create([
            'name' => $request->name
        ]);

        return redirect()->route('Permindex')->with('success', 'Permission created successfully');
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