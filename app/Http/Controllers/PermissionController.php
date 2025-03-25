<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;

class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $permissions = Permission::all();
        return view('permissions.index', compact('permissions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        return view('permissions.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    protected function sanitizeInput(array $data): array
    {
        return array_map(function ($value) {
            return is_string($value) ? strip_tags($value) : $value;  strip_tags($value);
        }, $data);
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'guard_name' => 'required'
        ]);

        $sanitized = $this->sanitizeInput($validated);
       
        Permission::create($sanitized);
        return redirect()->route('permissions.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Permission $permission)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Permission $permission)
    {
        return view('permissions.edit', compact('permission'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Permission $permission)
    {
        $validated = $request->validate([
            'name' => 'required',
            'guard_name' => 'required'
        ]);
       $sanitized = $this->sanitizeInput($validated);
        // Permission::create($validated);
        $permission->update($sanitized);
        return redirect()->route('permissions.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Permission $permission)
    {
        $permission->delete();
        return redirect()->route('permissions.index');
    }
}
