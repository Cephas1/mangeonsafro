<?php

namespace Database\Seeders;

use App\Models\CategorieShop;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        if (Role::count() == 0) {
            app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();
            Role::create(['name' => 'super-admin']);
            Role::create(['name' => 'admin']);
            Role::create(['name' => 'client']);
            Role::create(['name' => 'livreur']);
            Role::create(['name' => 'responsable-commerce']);
            Role::create(['name' => 'vendeur']);
        }
        if(CategorieShop::count() == 0){
            CategorieShop::create(['name' => 'restaurant']);
            CategorieShop::create(['name' => 'fait maison']);
            CategorieShop::create(['name' => 'traiteur']);
            CategorieShop::create(['name' => 'epicerie']);
        }
        // \App\Models\User::factory(10)->create();
        \App\Models\Shop::factory(10)->create();
        \App\Models\Products::factory(10)->create();
        \App\Models\CategorieProduct::factory(10)->create();
        \App\Models\Categories_has_products::factory(10)->create();
        //\App\Models\CategorieShop::factory(10)->create();
        \App\Models\Image::factory(10)->create();
    }
}
