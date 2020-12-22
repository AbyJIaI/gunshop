<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Exception;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Validation\ValidationException;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View|Response
     */
    public function index()
    {
        $roles = Role::all();
        return view('roles.index', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View|Response
     */
    public function create()
    {
        $roles = Role::all();
        return view('roles.index', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     * @throws ValidationException
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required|min:2|unique:roles'
        ]);
        Role::create($request->all());
        return redirect()->route('roles.index')->with('success', 'Role is added');
    }

    /**
     * Display the specified resource.
     *
     * @param Role $role
     * @return Application|Factory|View|Response
     */
    public function show(Role $role)
    {
        return view('roles.index', compact('role'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Role $role
     * @return Application|Factory|View|Response
     */
    public function edit(Role $role)
    {
        return view('roles.edit', compact('role'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Role $role
     * @return RedirectResponse
     * @throws ValidationException
     */
    public function update(Request $request, Role $role)
    {
        $this->validate($request,[
            'name' => 'required|min:2|unique:roles'
        ]);
        $role->update($request->all());
        return redirect()->route('roles.index')->with('success', 'Role has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Role $role
     * @return RedirectResponse
     * @throws Exception
     */
    public function destroy(Role $role)
    {
        $role->delete();
        return redirect()->route('roles.index')->with('success', 'Role has been deleted');
    }
}
