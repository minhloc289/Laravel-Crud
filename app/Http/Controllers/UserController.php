<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //Crud logic
    public function loadAll(){
        $user_data = User::all();
        return view('users', compact('user_data'));
    }

    public function loadUserForm(){
        return view('add_user');
    }

    public function addUser(Request $request){
        $request->validate([
            'full_name' => 'required|string',
            'email' => 'required|email|unique:users',
            'phone_number' => 'required',
            'password' => 'required|confirmed|min:4|max:10',
        ]);

        try {
            //add new user
            $new_user = new User;
            $new_user->name = $request->full_name;
            $new_user->email = $request->email;
            $new_user->phone_number = $request->phone_number;
            $new_user->password = Hash::make($request->password);
            $new_user->save();

            return redirect('/users')->with('success', 'User added successfully');
        } catch(\Exception $e){
            return redirect('/add/user')->with('failed', $e->getMessage());
        }
    }

    public function loadEditForm($id){
        $user = User::find($id);
        return view('edit_user', compact('user'));
    }

    public function editUser(Request $request) {
        $request->validate([
            'full_name' => 'required|string',
            'email' => 'required|email|unique:users',
            'phone_number' => 'required',
        ]);

        try {
            //update new user
            $update_user = User::where('id', $request->user_id)->update([
                'name' => $request->full_name,
                'email' => $request->email,
                'phone_number' => $request->phone_number,
            ]);

            return redirect('/users')->with('success', 'User updated successfully');
        } catch(\Exception $e){
            return redirect('/edit/user')->with('failed', $e->getMessage());
        }
    }

    public function deleteUser($id) {
        try {
            User::where('id', $id)->delete();
            return redirect('/users')->with('success', 'User deleted successfully');
        } catch (\Exception $e) {
            return redirect('/users')->with('failed', $e->getMessage());
        }
    }

    
}
