<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class HomeController extends Controller
{
    public function __invoke()
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
        return view('frontend.home.home');
    }
}
