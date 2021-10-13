<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Role;
use App\Permission;
use Illuminate\Support\Facades\Gate;

class AdminRolesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        Gate::authorize('haveaccess','role.index');
        $roles =Role::orderBy('id','desc')->paginate(5);
        return view('admin.roles.index',compact('roles'));
    }
    
    public function create()
    {
        Gate::authorize('haveaccess','role.create');
        $permissions = Permission::get();
        return view('admin.roles.create',compact('permissions'));
    }

    
    public function store(Request $request)
    {
        Gate::authorize('haveaccess','role.create');
        $request->validate([
            'name'          => 'required|max:50|unique:roles,name',
            'slug'          => 'required|max:50|unique:roles,slug',
            'full-access'   => 'required|in:yes,no'
        ]);
        $role = Role::create($request->all());
        if ($request->get('permission')) {
            $role->permissions()->sync($request->get('permission'));
        }
        return redirect()->route('admin.roles.index')
            ->with('status_success','Role saved successfully');
    }

    
    public function show(Role $role)
    {
        $this->authorize('haveaccess','role.show');
        $permission_role=[];

        foreach($role->permissions as $permission) {
            $permission_role[]=$permission->id; 
        }
        $permissions = Permission::get();
        return view('admin.roles.view', compact('permissions','role','permission_role'));
    }

    
    public function edit(Role $role)
    {
        $this->authorize('haveaccess','role.edit');
        $permission_role=[];

        foreach($role->permissions as $permission) {
            $permission_role[]=$permission->id; 
        }
        $permissions = Permission::get();
        return view('admin.roles.edit', compact('permissions','role','permission_role'));
    }

    
    public function update(Request $request, Role $role)
    {
        $this->authorize('haveaccess','role.edit');
        $request->validate([
            'name'          => 'required|max:50|unique:roles,name,'.$role->id,
            'slug'          => 'required|max:50|unique:roles,slug,'.$role->id,
            'full-access'   => 'required|in:yes,no'
        ]);

        $role->update($request->all());      
        
        $role->permissions()->sync($request->get('permission'));
        
        return redirect()->route('admin.roles.index')
            ->with('status_success','Role updated successfully'); 
    }
    
    public function destroy(Role $role)
    {
        $this->authorize('haveaccess','role.destroy');
        $role->delete();

        return redirect()->route('admin.roles.index')
            ->with('status_success','Role successfully removed'); 
        
    }
}
