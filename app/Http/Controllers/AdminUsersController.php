<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;
use Illuminate\Support\Facades\Hash;

class AdminUsersController extends Controller
{
    public function __construct()
    {
       $this->middleware('auth'); 
    }
    public function index()
    {
        $this->authorize('haveaccess','user.index');
        $users = User::all();
        return view('admin.users.index',compact('users'));
    }

    
    public function create()
    {
        $this->authorize('haveaccess','user.create');
        $roles = Role::get();
        return view('admin.users.create',compact('roles'));
    }

    
    public function store(Request $request)
    {    
        $this->authorize('haveaccess','user.create');
        $request->validate([
            'name'          => 'required|max:50,name',
            'lastname'      => 'required|max:50,lastname',
            'email'         => 'required|max:50|unique:users,email',
            'password'      => 'required|min:8|max:16,password'
        ]);    
        //User::create($request->all());
        $data = $request->all(); 
        $user =User::create([            
            'name' => $data['name'],
            'lastname'=>$data['lastname'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]); 
        if ($request->get('roles')) {            
            $user->roles()->sync($request->get('roles'));
        }
        return redirect()->route('admin.users.index')
            ->with('status_success','user saved successfully');
            
    }

    
    public function show(User $user)
    {
        $this->authorize('view', [$user, ['user.show','userown.show'] ]);
        $roles= Role::orderBy('name')->get();
        return view('admin.users.view', compact('roles', 'user'));
    }

    
    public function edit(User $user)
    {
        $this->authorize('update', [$user, ['user.edit','userown.edit'] ]);
        $roles= Role::orderBy('name')->get();
        return view('admin.users.edit', compact('roles', 'user'));        
    }

    
    public function update(Request $request, User $user)
    {
        $this->authorize('update', [$user, ['user.edit','userown.edit'] ]);
        $request->validate([
            'name'          => 'required|max:50,name,'.$user->id,
            'lastname'      => 'required|max:50,lastname,'.$user->id,
            'email'         => 'required|max:50|unique:users,email,'.$user->id
        ]);
        $user->update($request->all());

        $user->roles()->sync($request->get('roles'));
        
        return redirect()->route('admin.users.index')
            ->with('status_success','User updated successfully'); 
        //dd($request->all());

    }

    public function destroy(User $user)
    {
        $this->authorize('haveaccess','user.destroy');
        $user->delete();

        return redirect()->route('admin.users.index')
            ->with('status_success','User successfully removed'); 
    }
}
