<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class MainUserController extends Controller
{
    public function Logout() {
        Auth::logout();
        return Redirect()->route('login');
    }

    public function UserProfile() {
        $id = Auth::user()->id;
        $user = User::find($id);
        return view('user.profile.view_profile', compact('user'));
    }

    public function EditProfile() {
        $id = Auth::user()->id;
        $editData = User::find($id);
        return view('user.profile.view_profile_edit', compact('editData'));
    }

    public function UpdateProfile(Request $request) {
        $data = User::find(Auth::user()->id);
        $data->name = $request->name;
        $data->email = $request->email;
        if ($request->file('profile_photo_path')) {
            $file = $request->file('profile_photo_path');
            @unlink(public_path('upload/user_images/'.$data->profile_photo_path));
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/user_images'), $filename);
            $data['profile_photo_path'] = $filename;
        }
        $data->save();
        $notification = array(
            'message' => 'User Profile Updated Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('user.profile')->with($notification);
    }

    public function UserPassword() {
        return view('user.password.edit_password');
    }

    public function PasswordUpdate(Request $request){
        $this->validate($request, [
            'old_password' => 'required',
            'password' => 'required|confirmed'
        ]);
        $hashedPassword = Auth::user()->password;
        if (Hash::check($request->old_password, $hashedPassword)){
            $user = User::find(Auth::user()->id);
            $user->password = Hash::make($request->password);
            $user->save();
            Auth::logout();
            $notification = array(
                'message' => 'Password changed successfully'
            );
            return redirect()->route('login')->with($notification);
        }else{
            $notification = array(
                'message' => 'There was some problem with your password',
                'alert-type' => 'warning'
            );
            return redirect()->back()->with($notification);
        }
    }
}
