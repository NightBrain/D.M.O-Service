<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\mrepair;
use App\Models\user;
use App\Models\comment;
use Illuminate\Support\Facades\Auth;

class MrepairController extends Controller
{
    public function create()
    {
        $user = Auth::user();
        return view('user.create', ['user' => $user]);
    }
    public function store(Request $request)
    {
        $data = $request->validate([
            'nickname_c' => 'required',
            'phonenumber_c' => 'required',
            'devices_c' => 'required',
            'problem_c' => 'required',
            'status_t' => 'required',
            'time_receive_t' => 'required',
            'time_return_t' => 'required',
            'nickname_t' => 'required',
            'phonenumber_t' => 'required',
            'advice_t' => 'required',
        ]);
        $newMrepair = Mrepair::create($data);
        return redirect(route('home'))->with('success','Demo Updated Successfully');
    }
    public function destroy(Mrepair $user)
    {
        $user->delete();
        return redirect(route('home'))->with('del','Demo Updated Successfully');
    }
    
    public function update(Mrepair $user, Request $request)
    {
        
        $data = $request-> validate([
            'problem_c' => 'required',
        ]);
        $user->update($data);

        return redirect(route('home'))->with('update','ooooDemo Updated Successfully');
    }
    public function upacce(Request $request)
    {
        $id = $request->input('id');

        $user = Auth::user();

            $phonenumber = $user->phonenumber;
            $nickname = $user->nickname;

        $users = Mrepair::find($id); // ดึง user 
        $users->phonenumber_t = $phonenumber; // ตั้งค่าชื่อใหม่
        $users->nickname_t = $nickname; // ตั้งค่าชื่อใหม่
        $users->status_t = 2; // ตั้งค่าชื่อใหม่
        $users->save(); // บันทึกการเปลี่ยนแปลง

        return redirect(route('admin.work'))->with('success','ooooDemo Updated Successfully');
    }
    
    public function updateuser(Request $request)
    {
        
        $id = $request->input('id');

        $users = User::find($id); // ดึง user 
        $users->usertype = "user"; // ตั้งค่าชื่อใหม่
        $users->save(); // บันทึกการเปลี่ยนแปลง


        return redirect(route('admin.role'))->with('success','ooooDemo Updated Successfully');
    }
    public function updateadmin(Request $request)
    {
        
        $id = $request->input('id');

        $users = User::find($id); // ดึง user 
        $users->usertype = "admin"; // ตั้งค่าชื่อใหม่
        $users->save(); // บันทึกการเปลี่ยนแปลง

        return redirect(route('admin.role'))->with('success','Demo Updated Successfully');
    }
    public function destroyr(Mrepair $user)
    {
        $user->delete();
        return redirect(route('admin.work'))->with('del','Demo Updated Successfully');
    }
    public function editr(Mrepair $user)
    {
        return view('admin.edit', ['user'=>$user]);
    }
    public function edit(Mrepair $user)
    {
        return view('user.edit', ['user'=>$user]);
    }
    public function updater(Mrepair $user, Request $request)
    {
        
        $data = $request-> validate([
            'status_t' => 'required',
            'time_receive_t' => 'required',
            'time_return_t' => 'required',
            'advice_t' => 'required',
        ]);
        $user->update($data);

        return view('admin.edit', ['user'=>$user]);
    }
    public function comment(Request $request)
    {
        $request->validate([
            'imageuser' => 'required|image|mimes:jpeg,png,jpg,gif|max:5120',
            'nickname_c' => 'required',
            'comment' => 'required',
            'imagereview' => 'required|image|mimes:jpeg,png,jpg,gif|max:5120',
        ]);
        $requestData = $request->all();
        $fileName = time() . $request->file('imageuser')->getClientOriginalName();
        $path = $request->file('imageuser')->storeAs('imageuser', $fileName, 'public');
        $requestData["imageuser"] = '/public/storage/' . $path;
        $fileName = time() . $request->file('imagereview')->getClientOriginalName();
        $path = $request->file('imagereview')->storeAs('imagereview', $fileName, 'public');
        $requestData["imagereview"] = '/public/storage/' . $path;
        Comment::create($requestData);
        return redirect(route('welcome'))->with('success','Demo Updated Successfully');
    }
}
