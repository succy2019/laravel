<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users =User::all();
        return view('admin.index',['users'=>$users]);
    }


    public function detail($id)
    {

        $users= User::find($id);
        return view('admin.detail',['users'=>$users]);
        
    }

    public function updateuser(Request $request,$id)
    {

        $users= User::find($id);
        $users->name = $request->input('fname');
        $users->phone = $request->input('phone');
        $users->email = $request->input('email');
        $users->country = $request->input('country');
        $users->update();
         return redirect('admin/')->with('status','USER DATA HAS BEEN UPDATED SUCCESSFULLY');


    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function createuser(Request $request)
    {
        $users = new User();
        $users->name = $request->input('fname');
        $users->phone = $request->input('phone');
        $users->email = $request->input('email');
        $users->country = $request->input('country');
        $users->save();
        return redirect('admin/')->with('status','USER DATA HAS BEEN CREATED SUCCESSFULLY');
    }
    
    public function store(Request $request)
    {
        $users = new User();
        $users->name = $request->input('fname');
        $users->phone = $request->input('phone');
        $users->email = $request->input('email');
        $users->country = $request->input('country');
        $users->save();
        return redirect('admin/')->with('status','USER DATA HAS BEEN CREATED SUCCESSFULLY');
    }

    /**
     * Display the specified resource.
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Admin $admin)
    {
        //
    }
}
