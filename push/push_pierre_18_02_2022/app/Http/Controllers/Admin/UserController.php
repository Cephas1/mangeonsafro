<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Phone;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    public function allUser()
    {
        $users = User::all();

        return view('backend.users.index', [
            'users' => $users
        ]);
    }
    public function superAdmin()
    {
        $users =  User::role('super-admin')->get();
        // dd(Phone::create([
        //     'phoneable_id' => $users->first()->id,
        //     'phoneable_type' => 'App\Models\User',
        //     'phone' => '0665555555'
        // ]));
        return view('backend.super-admin.index', [
            'users' => $users
        ]);
    }
    public function admin()
    {
        $users =  User::role('admin')->get();
        return view('backend.admin.index', [
            'users' => $users
        ]);
    }
    public function customer()
    {
        $users =  User::role('client')->get();
        return view('backend.customer.index', [
            'users' => $users
        ]);
    }
    public function deliveryman()
    {
        $users =  User::role('livreur')->get();
        return view('backend.deliveryman.index', [
            'users' => $users
        ]);
    }
    public function saleManager()
    {
        $users =  User::role('responsable-commerce')->get();
        // dd($users);
        return view('backend.sale-manager.index', [
            'users' => $users
        ]);
    }
    public function seller()
    {
        $users =  User::role('vendeur')->get();
        // dd($users);
        return view('backend.seller.index', [
            'users' => $users
        ]);
    }
    public function changerRole($id)
    {
        $user =  User::find($id);
        $roles = Role::all();
        return view('backend.users.change-role', [
            'user' => $user,
            'roles' => $roles
        ]);
    }
    public function changerRolePost(Request $request, $id)
    {
        if($request->roles == null){
            return redirect()->back()->with('error', 'Veuillez choisir au moins un rôle');
        }else{
            $user =  User::find($id);
            $user->syncRoles($request->roles);
            return redirect()->back()->with('success', 'Le rôle a été changé avec succès');
        }
    }
    public function userDetails($id)
    {
        $user =  User::find($id);
        return view('backend.users.details', [
            'user' => $user
        ]);
    }
}
