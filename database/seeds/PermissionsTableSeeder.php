<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission;

class PermissionsTableSeeder extends Seeder
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
            'description'   =>  'Lista y navega todos los usuarios del sistema',
        ]);

        Permission::create([
            'name'          =>  'Ver detalle de usuarios',
            'slug'          =>  'user.show',
            'description'   =>  'Ver detalles de usuario del sistema',
        ]);

        Permission::create([
            'name'          =>  'Edicion de usuarios',
            'slug'          =>  'user.edit',
            'description'   =>  'Editar datos de los usuarios del sistema',
        ]);

        Permission::create([
            'name'          =>  'Eliminar usuarios',
            'slug'          =>  'user.destroy',
            'description'   =>  'Eliminar usuarios del sistema',
        ]);

        //Roles
        Permission::create([
            'name'          =>  'Navegar roles',
            'slug'          =>  'roles.index',
            'description'   =>  'Lista y navega todos los roles del sistema',
        ]);

        Permission::create([
            'name'          =>  'Ver detalle de roles',
            'slug'          =>  'roles.show',
            'description'   =>  'Ver detalles de roles del sistema',
        ]);

        Permission::create([
            'name'          =>  'Creacion de roles',
            'slug'          =>  'roles.create',
            'description'   =>  'Crear roles para el sistema',
        ]);

        Permission::create([
            'name'          =>  'Edicion de roles',
            'slug'          =>  'roles.edit',
            'description'   =>  'Editar datos de los roles del sistema',
        ]);

        Permission::create([
            'name'          =>  'Eliminar roles',
            'slug'          =>  'roles.destroy',
            'description'   =>  'Eliminar roles del sistema',
        ]);


        //Products
        Permission::create([
            'name'          =>  'Navegar productos',
            'slug'          =>  'products.index',
            'description'   =>  'Lista y navega todos los productos del sistema',
        ]);

        Permission::create([
            'name'          =>  'Ver detalle de productos',
            'slug'          =>  'products.show',
            'description'   =>  'Ver detalles de productos del sistema',
        ]);

        Permission::create([
            'name'          =>  'Creacion de productos',
            'slug'          =>  'products.create',
            'description'   =>  'Crear productos para el sistema',
        ]);

        Permission::create([
            'name'          =>  'Edicion de productos',
            'slug'          =>  'products.edit',
            'description'   =>  'Editar datos de los productos del sistema',
        ]);

        Permission::create([
            'name'          =>  'Eliminar productos',
            'slug'          =>  'products.destroy',
            'description'   =>  'Eliminar productos del sistema',
        ]);

    }
}
