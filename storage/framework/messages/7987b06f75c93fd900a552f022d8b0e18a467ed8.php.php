<?php

namespace App\Http\Controllers;

use App\Role;
use App\User;
use App\RoleUser;
use Auth;
use Request;
use Hashids;

class UserController extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        $users = User::all();
        return view('backend.users.index', compact('users'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */

    public function edit($id)
    {
    	$decode = Hashids::decode($id)[0];
        $user = User::find($decode);
        $roles        = Role::all();

        $formAction = action('UserController@update', $id);
        return view("backend/users/form", compact('user', 'formAction','roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
    	$decode = Hashids::decode($id)[0];
        $this->saveData($decode);
        return redirect("admin/users/" . $id . "/edit")->with('status', 'Registro guardado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
    	$decode = Hashids::decode($id)[0];
        $users = User::findOrFail($decode);
        $users->delete();
        return redirect("admin/users")->with('status', 'Registro borrado correctamente');
    }

    /**
     * Save the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function saveData($id = null)
    {

        $users          = ($id) ? User::find($id) : new User;
        $users->name    = Request::get('name');
        $users->detachRoles($users->roles);
        $users->save();

        $roles = Request::get('role');
        if ($roles) {
            $users->attachRoles($roles);
        }
    }
}
