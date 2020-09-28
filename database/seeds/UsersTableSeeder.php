<?php

use App\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::truncate();
        Role::truncate();
        User::truncate();

        $adminRole = Role::create(['name' => 'Admin', 'display_name' => 'Administrador']);
        $writerRole = Role::create(['name' => 'Writer', 'display_name' => 'Escritor']);

        $viewPostsPermission = Permission::create(['name' => 'View posts', 'display_name' => 'Ver publiaciones']);
        $createPostsPermission = Permission::create(['name' => 'Create posts', 'display_name' => 'Crear publiaciones']);
        $updatePostsPermission = Permission::create(['name' => 'Update posts', 'display_name' => 'Actualizar publiaciones']);
        $deletePostsPermission = Permission::create(['name' => 'Delete posts', 'display_name' => 'Eliminar publiaciones']);

        $viewUsersPermission = Permission::create(['name' => 'View users', 'display_name' => 'Ver Usuarios']);
        $createUsersPermission = Permission::create(['name' => 'Create users', 'display_name' => 'Crear Usuarios']);
        $updateUsersPermission = Permission::create(['name' => 'Update users', 'display_name' => 'Actualizar Usuarios']);
        $deleteUsersPermission = Permission::create(['name' => 'Delete users', 'display_name' => 'Eliminar Usuarios']);

        $viewRolesPermission = Permission::create(['name' => 'View permissions', 'display_name' => 'Ver permisos']);
        $updateRolesPermission = Permission::create(['name' => 'Update permissions', 'display_name' => 'Actualizar permisos']);

        $admin = new User;
        $admin->name = 'Administrador';
        $admin->email = 'admin@admin.com';
        $admin->password = '123123';
        $admin->save();

        $admin->assignRole($adminRole);


        $writer = new User;
        $writer->name = 'Fabian Alejandro';
        $writer->email = 'gallardofabianvcpz@gmail.com';
        $writer->password = '7284';
        $writer->save();

        $writer->assignRole($writerRole);
    }
}
