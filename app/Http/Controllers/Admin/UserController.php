<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Utils;
use App\Models\Phone;
use App\Models\User;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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



    public function index()
    {
        $users = User::all()->load('role');

        //dd($users);
        return view('stevie.backend.admin.admin-all-users.admin-all-users', [
            'users' => $users
        ]);
    }

    public function indexRoles()
    {
        $users = Role::all();

        //dd($users);
        return view('stevie.backend.admin.admin-categories-users.admin-categories-users', [
            'roles' => $users
        ]);
    }

    public function isActivated(int $id){
        $user = User::find($id);

        if ($user->active == 1){
            $prod = $user->update(['isActive' => 0]);
            return redirect()->back()->with('success', 'Utilisateur désactivé avec succès !');
        }else{
            $prod = $user->update(['isActive' => 1]);
            return redirect()->back()->with('success', 'Utilisateur activé avec succès !');
        }
        return redirect()->back()->with('error', 'Echec !!! Prière de bien vouloir réessayer !');
    }

    public function addRoles(Request $request){
        $role = new Role();

        if($role->create(['name' => $request->input('name')]))
            return redirect()->back()->with('success', 'Catégorie d\'utilisateur créée avec succès !');
        else
            return redirect()->back()->with('error', 'Echec !!! Prière de bien vouloir réessayer !');
    }

    public function editRoles(int $id, Request $request){
        $role = Role::find($id);

        if($role->update(['name' => $request->input('name')]))
            return redirect()->back()->with('success', 'Catégorie d\'utilisateur modifiéée avec succès !');
        else
            return redirect()->back()->with('error', 'Echec !!! Prière de bien vouloir réessayer !');
        //return redirect()->back()->with('error', 'Echec !!! Prière de bien vouloir réessayer !');
    }

    public function destroy(int $id){
        $user = User::find($id);

        if($user->delete()){
            return redirect()->back()->with('success', 'User deleted successfully')->withInput();
        }else{
            return redirect()->back()->with('Error', 'Impossible to delete this user, please retry !')->withInput();
        }
    }

    public function destroyRoles(int $id){
        $user = Role::find($id);

        if($user->delete()){
            return redirect()->back()->with('success', 'User level deleted successfully')->withInput();
        }else{
            return redirect()->back()->with('Error', 'Impossible to delete this user level, please retry !')->withInput();
        }
    }

    public function profil(){

        $client = User::find(Auth::user()->id)->load('image');
        //dd($client);
        return view('stevie.backend.admin.admin-profile.admin-profile', [
            'admin' => $client
        ]);
    }

    public function editProfil($id, Request $request) {
        $client = User::find($id);

        if($request->input('picture')){
            $url = Utils::saveOnePicture('users/', $request->input('picture'));
            $client->image()->save(['url' => $url]);
        }


        $client->name = $request->input('name');
        $client->first_name = $request->input('first_name');
        $client->email = $request->input('email');
        $client->gender = $request->input('gender');

        $client->birthday = $request->input('birthday');
        $client->phone = $request->input('phone');
        $client->address = $request->input('address');
        $client->city = $request->input('ville');
        $client->country = $request->input('pays');

        $client->update();

        return redirect()->back();
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
