<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\RegisterRequest;
class AdminController extends Controller
{
   public function __construct()
   {
    $this->middleware(['role:superadmin']);

   }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::role('user')->paginate(10);
        $admin = User::role('admin')->paginate(10);
        return view('pages.user.index',[
            'users' => $users,
            'admin' => $admin
        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('pages.user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \user\index
     */
    public function store(RegisterRequest $request)
    {
        $request['is_active'] = 0;
        $request['password'] = password_hash($request->password,PASSWORD_DEFAULT);
        $request['email_verified_at'] = date('Y-m-d H:i:s');
        $user = User::create($request->all());
        $user->assignRole('admin');
        toast('Admin has been created','success');
        return redirect()->route('member.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {

        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }

    
}
