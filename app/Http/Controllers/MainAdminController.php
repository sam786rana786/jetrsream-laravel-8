<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Auth;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class MainAdminController extends Controller
{
    public function AdminProfile() {
        $admin = Admin::find(1);
        return view('admin.profile.view_profile', compact('admin'));
    }

    public function AdminProfileEdit() {
        $editData = Admin::find(1);
        return view('admin.profile.view_profile_edit', compact('editData'));
    }

    public function AdminProfileStore(Request $request) {
        $data = Admin::find(1);
        $data->name = $request->name;
        $data->email = $request->email;
        if ($request->file('profile_photo_path')) {
            $file = $request->file('profile_photo_path');
            @unlink(public_path('upload/admin_images/'.$data->profile_photo_path));
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/admin_images'), $filename);
            $data['profile_photo_path'] = $filename;
        }
        $data->save();
        $notification = array(
            'message' => 'Admin Profile Updated Successfully',
            'alert-type' => 'success',
        );
        return redirect()->route('admin.profile')->with($notification);
    }

    public function AdminPassword() {
        return view('admin.password.password');
    }

    public function AdminPasswordUpdate(Request $request){
        $this->validate($request, [
            'old_password' => 'required',
            'password' => 'required|confirmed'
        ]);

        $hashedPassword = Admin::find(1)->password;

        if (Hash::check($request->old_password, $hashedPassword)){
            $user = Admin::find(1);
            $user->password = Hash::make($request->password);
            $user->save();
            Auth::logout();
            $notification = array(
                'message' => 'Password changed successfully',
                'alert-type' => 'success'
            );
            return redirect()->route('admin.logout')->with($notification);
        }else{
            $notification = array(
                'message' => 'There was some problem with your password',
                'alert-type' => 'warning'
            );
            return redirect()->back()->with($notification);
        }
    }
}
