<?php

namespace App\Http\Controllers;

use App\DataTables\UserDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateUserRequest;
use App\Http\Requests\UpdateUserRequest;

use App\User;
use Spatie\Permission\Models\Role;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;
use Hash;

class UserController extends AppBaseController
{
    // function __construct()
    // {
    //      $this->middleware('permission:user-list|user-create|user-edit|user-delete', ['only' => ['index','show']]);
    //      $this->middleware('permission:user-create', ['only' => ['create','store']]);
    //      $this->middleware('permission:user-edit', ['only' => ['edit','update']]);
    //      $this->middleware('permission:user-delete', ['only' => ['destroy']]);
    // }
    /**
     * Display a listing of the User.
     *
     * @param UserDataTable $userDataTable
     * @return Response
     */
    public function index()
    {
        $users = User::withSearch()->latest()->paginate(10);

        return view('admin.users.index')
            ->with('users', $users);

        // return $userDataTable->render('admin.users.index');
    }

    /**
     * Show the form for creating a new User.
     *
     * @return Response
     */
    public function create()
    {
        $roles = Role::pluck('name','name')->all();
        return view('admin.users.create', compact('roles'));

    }

    /**
     * Store a newly created User in storage.
     *
     * @param CreateUserRequest $request
     *
     * @return Response
     */
    public function store(CreateUserRequest $request)
    {
        // dd($request->input('roles'));
        $input = $request->all();


        $input['password'] = Hash::make($input['password']);
        /** @var User $user */
        $user = User::create($input);

        $user->assignRole($request->input('roles'));

        Flash::success('User saved successfully.');

        return redirect(route('admin.users.index'));
    }

    /**
     * Display the specified User.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var User $user */
        $user = User::find($id);

        if (empty($user)) {
            Flash::error('User not found');

            return redirect(route('admin.users.index'));
        }

        return view('admin.users.show')->with('user', $user);
    }

    /**
     * Show the form for editing the specified User.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $roles = Role::pluck('name','name')->all();


        /** @var User $user */
        $user = User::find($id);
        $userRole = $user->roles->pluck('name','name')->all();

        if (empty($user)) {
            Flash::error('User not found');

            return redirect(route('admin.users.index'));
        }

        return view('admin.users.edit', compact('roles', 'userRole'))->with('user', $user);
    }

    /**
     * Update the specified User in storage.
     *
     * @param  int              $id
     * @param UpdateUserRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateUserRequest $request)
    {
        /** @var User $user */
        $user = User::find($id);


        if (empty($user)) {
            Flash::error('User not found');

            return redirect(route('admin.users.index'));
        }



        $user->fill($request->all());

        if(!empty($request->password)){ 
            $user->password = Hash::make($request->password);
        }

        $user->save();

        $user->assignRole($request->input('roles'));

        Flash::success('User updated successfully.');

        return redirect(route('admin.users.index'));
    }

    /**
     * Remove the specified User from storage.
     *
     * @param  int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var User $user */
        $user = User::find($id);

        if (empty($user)) {
            Flash::error('User not found');

            return redirect(route('admin.users.index'));
        }

        $user->delete();

        Flash::success('User deleted successfully.');

        return redirect(route('admin.users.index'));
    }

    
}
