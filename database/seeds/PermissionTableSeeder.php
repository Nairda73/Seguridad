<?php

use Illuminate\Database\Seeder;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Users
        Permission::create([
            'name'          =>  'Navegar usuarios',
            'slug'          =>  'user.index',
            'descripcion'   =>  'Lista y navega todos los usuarios del sistema',
        ]);

        Permission::create([
            'name'          =>  'Ver detalle de usuarios',
            'slug'          =>  'user.show',
            'descripcion'   =>  'Ver detalles de usuario del sistema',
        ]);

        Permission::create([
            'name'          =>  'Edicion de usuarios',
            'slug'          =>  'user.edit',
            'descripcion'   =>  'Editar datos de los usuarios del sistema',
        ]);

        Permission::create([
            'name'          =>  'Eliminar usuarios',
            'slug'          =>  'user.destroy',
            'descripcion'   =>  'Eliminar usuarios del sistema',
        ]);

        //Roles
        Permission::create([
            'name'          =>  'Navegar roles',
            'slug'          =>  'roles.index',
            'descripcion'   =>  'Lista y navega todos los roles del sistema',
        ]);

        Permission::create([
            'name'          =>  'Ver detalle de roles',
            'slug'          =>  'roles.show',
            'descripcion'   =>  'Ver detalles de roles del sistema',
        ]);

        Permission::create([
            'name'          =>  'Creacion de roles',
            'slug'          =>  'roles.create',
            'descripcion'   =>  'Crear roles para el sistema',
        ]);

        Permission::create([
            'name'          =>  'Edicion de roles',
            'slug'          =>  'roles.edit',
            'descripcion'   =>  'Editar datos de los roles del sistema',
        ]);

        Permission::create([
            'name'          =>  'Eliminar roles',
            'slug'          =>  'roles.destroy',
            'descripcion'   =>  'Eliminar roles del sistema',
        ]);


        //Products
        Permission::create([
            'name'          =>  'Navegar productos',
            'slug'          =>  'products.index',
            'descripcion'   =>  'Lista y navega todos los productos del sistema',
        ]);

        Permission::create([
            'name'          =>  'Ver detalle de productos',
            'slug'          =>  'products.show',
            'descripcion'   =>  'Ver detalles de productos del sistema',
        ]);

        Permission::create([
            'name'          =>  'Creacion de productos',
            'slug'          =>  'products.create',
            'descripcion'   =>  'Crear productos para el sistema',
        ]);

        Permission::create([
            'name'          =>  'Edicion de productos',
            'slug'          =>  'products.edit',
            'descripcion'   =>  'Editar datos de los productos del sistema',
        ]);

        Permission::create([
            'name'          =>  'Eliminar productos',
            'slug'          =>  'products.destroy',
            'descripcion'   =>  'Eliminar productos del sistema',
        ]);
    }
}
