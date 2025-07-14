<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;
use App\Models\mrepair;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('admin.role', ['users'=>$users]);
    }
    //admin
    //user 
    public function updatep(User $user, Request $request)
    {
        
        $data = $request-> validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'nickname' => 'required',
            'phonenumber' => 'required|numeric',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:5120',
            'usertype' => 'required',
            'email' => 'required',
        ]);
        if ($request->hasFile('image')) {
            $imageRemovePath = str_replace('/public/storage/image/','', $request->input('oldimage'));
            Storage::disk('public')->delete('image/storage/' . $imageRemovePath);

            $requestData = $request->all();
            $fileName = time() . $request->file('image')->getClientOriginalName();
            $path = $request->file('image')->storeAs('image', $fileName, 'public');
            $requestData["image"] = '/public/storage/' . $path;
            $user->update($requestData);
        } else {
            $requestData = $request->all();
            $user->update($requestData);
        }


        return redirect(route('user.profile'))->with('success','Demo Updated Successfully');
    }
    public function updatepa(User $user, Request $request)
    {
        
        $data = $request-> validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'nickname' => 'required',
            'phonenumber' => 'required|numeric',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:5120',
            'usertype' => 'required',
            'email' => 'required',
        ]);
        if ($request->hasFile('image')) {
            $imageRemovePath = str_replace('/public/storage/image/','', $request->input('oldimage'));
            Storage::disk('public')->delete('image/storage/' . $imageRemovePath);

            $requestData = $request->all();
            $fileName = time() . $request->file('image')->getClientOriginalName();
            $path = $request->file('image')->storeAs('image', $fileName, 'public');
            $requestData["image"] = '/public/storage/' . $path;
            $user->update($requestData);
        } else {
            $requestData = $request->all();
            $user->update($requestData);
        }


        return redirect(route('admin.profile'))->with('success','Demo Updated Successfully');
    }
}
