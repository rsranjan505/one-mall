<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\UserDataTable;
use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Services\UserService;
use Illuminate\Http\Request;

class UserController extends Controller
{
    protected UserService $userservice;
    public function __construct(UserService $userservice)
    {
        $this->userservice = $userservice;
    }
    /**
     * Display a listing of the resource.
     */
    public function index(UserDataTable $dataTable)
    {
        // if(request()->ajax()){
        //     return $dataTable->render('admin.pages.users.list');
        // }

        return $dataTable->render('admin.pages.users.list');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $roles = Role::all();
        return view('admin.pages.users.add',compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|unique:users,email',
            'role' => 'required',
            'mobile' => 'required',

        ]);

        $data = $request->all();
        $data['user_type'] = 'admin_user';
        $data['password'] = bcrypt($data['mobile']);
        $data['is_active'] = $request->is_active == '1' ? 1 : 0;
        $user = $this->userservice->createUser($data);
        return redirect()->route('users.index')->with('success','User created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //

    }

    public function changeStatus($id)
    {
        //
    }

    public function profile($userId)
    {
        $user = $this->userservice->getUserById($userId);
        return view('admin.pages.users.profile',compact('user'));
    }

    public function changePassword($userId)
    {
        $user = $this->userservice->getUserById($userId);
        return view('admin.pages.users.security',compact('user'));
    }

    public function updatePassword(Request $request, $userId)
    {
        $user = $this->userservice->getUserById($userId);
    }

    public function notifications($userId)
    {
        $user = $this->userservice->getUserById($userId);
        return view('admin.pages.users.notifications',compact('user'));
    }

}
