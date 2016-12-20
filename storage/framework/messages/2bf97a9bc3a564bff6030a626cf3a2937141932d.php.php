<?php

namespace App\Http\Controllers;

use App\Role;
use Auth;
use Request;
use Hashids;

class RoleController extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        $roles = Role::all();
        return view('backend.roles.index', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $role    = new Role;
        $formAction = action('RoleController@store');
        return view("backend.roles.form", compact('role', 'formAction'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        $this->saveData();
        return redirect("admin/roles")->with('status', 'Registro guardado correctamente');
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
        $role = Role::find($decode);

        $formAction = action('RoleController@update', $id);
        return view("backend/roles/form", compact('role', 'formAction'));
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
        return redirect("admin/roles/" . $id . "/edit")->with('status', 'Registro guardado correctamente');
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
        $roles = Role::findOrFail($decode);
        $roles->delete();
        return redirect("admin/roles")->with('status', 'Registro borrado correctamente');
    }

    /**
     * Save the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function saveData($id = null)
    {
        $roles          = ($id) ? Role::find($id) : new Role;
        $roles->name    = Request::get('name');
        $roles->description = Request::get('description');
        $roles->save();
    }
}
