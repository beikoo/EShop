<?php

namespace App\Http\Controllers\Admin;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function registered()
    {
        $users = User::all();
        return view('admin.register')->with('Users',$users);
    }

    public function EditUser($id)
    {
        $users = User::FindOrFail($id);
        return view('admin.EditUser')->with('users',$users);
    }
    public function UpdateUser(Request $request, $id)
    {
        $users = User::find($id);
        $users->name = $request->input('username');
        $users->usertype = $request->input('usertype');
        $users->update();
        return redirect('/UsersList')->with('status','Update Successfully');
    }
    public function DeleteUser($id)
    {
        $users = User::findorfail($id);
        $users->delete();

        return redirect('/UsersList')->with('status','The user is deleted successfully');
    }
}
