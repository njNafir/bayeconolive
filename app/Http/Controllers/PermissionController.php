<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePermissionRequest;
use App\Http\Requests\UpdatePermissionRequest;
use App\Http\Controllers\AppBaseController;
use App\Models\Permission;
use Illuminate\Http\Request;
use Flash;
use Response;

class PermissionController extends AppBaseController
{
    // function __construct()
    // {
    //      $this->middleware('permission:role-permission-list|role-permission-create|role-permission-edit|role-permission-delete', ['only' => ['index','show']]);
    //      $this->middleware('permission:role-permission-create', ['only' => ['create','store']]);
    //      $this->middleware('permission:role-permission-edit', ['only' => ['edit','update']]);
    //      $this->middleware('permission:role-permission-delete', ['only' => ['destroy']]);
    // }

    /**
     * Display a listing of the Permission.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        /** @var Permission $permissions */
        $permissions = Permission::withSearch()->latest()->paginate(30);

        return view('admin.permissions.index')
            ->with('permissions', $permissions);
    }

    /**
     * Show the form for creating a new Permission.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.permissions.create');
    }

    /**
     * Store a newly created Permission in storage.
     *
     * @param CreatePermissionRequest $request
     *
     * @return Response
     */
    public function store(CreatePermissionRequest $request)
    {
        $input = $request->all();

        /** @var Permission $permission */
        $permission = Permission::create($input);

        Flash::success('Permission saved successfully.');

        return redirect(route('admin.permissions.index'));
    }

    /**
     * Display the specified Permission.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Permission $permission */
        $permission = Permission::find($id);

        if (empty($permission)) {
            Flash::error('Permission not found');

            return redirect(route('admin.permissions.index'));
        }

        return view('admin.permissions.show')->with('permission', $permission);
    }

    /**
     * Show the form for editing the specified Permission.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        /** @var Permission $permission */
        $permission = Permission::find($id);

        if (empty($permission)) {
            Flash::error('Permission not found');

            return redirect(route('admin.permissions.index'));
        }

        return view('admin.permissions.edit')->with('permission', $permission);
    }

    /**
     * Update the specified Permission in storage.
     *
     * @param int $id
     * @param UpdatePermissionRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePermissionRequest $request)
    {
        /** @var Permission $permission */
        $permission = Permission::find($id);

        if (empty($permission)) {
            Flash::error('Permission not found');

            return redirect(route('admin.permissions.index'));
        }

        $permission->fill($request->all());
        $permission->save();

        Flash::success('Permission updated successfully.');

        return redirect(route('admin.permissions.index'));
    }

    /**
     * Remove the specified Permission from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Permission $permission */
        $permission = Permission::find($id);

        if (empty($permission)) {
            Flash::error('Permission not found');

            return redirect(route('admin.permissions.index'));
        }

        $permission->delete();

        Flash::success('Permission deleted successfully.');

        return redirect(route('admin.permissions.index'));
    }
}
