<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;
use App\Permission;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class MySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //truncate tables
        DB::statement("SET foreign_key_checks=0");
            DB::table('role_user')->truncate();
            DB::table('permission_role')->truncate();
            Permission::truncate();
            Role::truncate();
        DB::statement("SET foreign_key_checks=1");
        //user admin
        $useradmin= User::where('email','admin@admin.com')->first();
        if ($useradmin) {
            $useradmin->delete();
        }
        $useradmin= User::create([
            'name'      => 'admin',
            'lastname'  => 'admin',
            'email'     => 'admin@admin.com',
            'password'  => Hash::make('admin')    
        ]);
        //rol admin
        $roladmin=Role::create([
            'name' => 'Admin',
            'slug' => 'admin',
            'description' => 'Administrator',
            'full-access' => 'yes'
    
        ]);

         //rol Registered User
         $roluser=Role::create([
            'name' => 'Registered User',
            'slug' => 'registereduser',
            'description' => 'Registered User',
            'full-access' => 'no'
    
        ]);
        
        //table role_user
        $useradmin->roles()->sync([ $roladmin->id ]);
      
        
        //permission
        $permission_all = [];        
        //permission role
        $permission = Permission::create([
            'name' => 'List role',
            'slug' => 'role.index',
            'description' => 'A user can list role',
        ]);

        $permission_all[] = $permission->id;
                
        $permission = Permission::create([
            'name' => 'Show role',
            'slug' => 'role.show',
            'description' => 'A user can see role',
        ]);

        $permission_all[] = $permission->id;
                
        $permission = Permission::create([
            'name' => 'Create role',
            'slug' => 'role.create',
            'description' => 'A user can create role',
        ]);

        $permission_all[] = $permission->id;
                
        $permission = Permission::create([
            'name' => 'Edit role',
            'slug' => 'role.edit',
            'description' => 'A user can edit role',
        ]);

        $permission_all[] = $permission->id;
                
        $permission = Permission::create([
            'name' => 'Destroy role',
            'slug' => 'role.destroy',
            'description' => 'A user can destroy role',
        ]);

        $permission_all[] = $permission->id;


        //permission user
        $permission = Permission::create([
            'name' => 'Create user',
            'slug' => 'user.create',
            'description' => 'A user can create user',
        ]);
        
        $permission_all[] = $permission->id;

        $permission = Permission::create([
            'name' => 'List user',
            'slug' => 'user.index',
            'description' => 'A user can list user',
        ]);
        
        $permission_all[] = $permission->id;
        
        $permission = Permission::create([
            'name' => 'Show user',
            'slug' => 'user.show',
            'description' => 'A user can see user',
        ]);        
        
        $permission_all[] = $permission->id;
        
        $permission = Permission::create([
            'name' => 'Edit user',
            'slug' => 'user.edit',
            'description' => 'A user can edit user',
        ]);
        
        $permission_all[] = $permission->id;
        
        $permission = Permission::create([
            'name' => 'Destroy user',
            'slug' => 'user.destroy',
            'description' => 'A user can destroy user',
        ]);
        
        $permission_all[] = $permission->id;



        //permission normative
        $permission = Permission::create([
            'name' => 'List normative',
            'slug' => 'normative.index',
            'description' => 'A user can list normative',
        ]);
        
        $permission_all[] = $permission->id;

        $permission = Permission::create([
            'name' => 'Create normative',
            'slug' => 'normative.create',
            'description' => 'A user can create normative',
        ]);
        
        $permission_all[] = $permission->id;
        
        $permission = Permission::create([
            'name' => 'Show normative',
            'slug' => 'normative.show',
            'description' => 'A user can see normative',
        ]);        
        
        $permission_all[] = $permission->id;
        
        $permission = Permission::create([
            'name' => 'Edit normative',
            'slug' => 'normative.edit',
            'description' => 'A user can edit normative',
        ]);
        
        $permission_all[] = $permission->id;
        
        $permission = Permission::create([
            'name' => 'Destroy normative',
            'slug' => 'normative.destroy',
            'description' => 'A user can destroy normative',
        ]);
        
        $permission_all[] = $permission->id;

        $permission = Permission::create([
            'name' => 'Showfile normative',
            'slug' => 'normative.showfile',
            'description' => 'A user can show file normative',
        ]);
        
        $permission_all[] = $permission->id;

        //new
        $permission = Permission::create([
            'name' => 'Show own user',
            'slug' => 'userown.show',
            'description' => 'A user can see own user',
        ]);        
        
        $permission_all[] = $permission->id;
        
        $permission = Permission::create([
            'name' => 'Edit own user',
            'slug' => 'userown.edit',
            'description' => 'A user can edit own user',
        ]);
        
        
        
        
        
        //table permission_role
       // $roladmin->permissions()->sync( $permission_all);
    }
}
