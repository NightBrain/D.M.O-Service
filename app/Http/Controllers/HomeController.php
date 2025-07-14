<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\comment;
use App\Models\mrepair;
use Illuminate\Support\Facades\Auth;
use App\Models\work;

class HomeController extends Controller
{
    public function index()
    {
        if (Auth::id()) {

            $usertype = Auth::user()->usertype;

            if ($usertype == 'user') {
                $user = Auth::user();

                $phonenumber = $user->phonenumber;
                $nickname = $user->nickname;

                // คิวรี่ฐานข้อมูล
                $mrepair = Mrepair::where('phonenumber_c', $phonenumber)
                    ->where('status_t', '<', 8)
                    ->get();


                // ส่งข้อมูลไปยัง View
                return view('user.dashboard', ['mrepair' => $mrepair, 'user' => $user, 'nickname' => $nickname]);

            } else if ($usertype == 'admin') {

                $user = Auth::user();


                $id = $user->id;
                $nickname = $user->nickname;

                // คิวรี่ฐานข้อมูล
                $mrepair = Mrepair::where('status_t', '1')->get();

                $user = User::find($id); // ดึง user 

                $user->activate = "1"; // ตั้งค่าชื่อใหม่

                $user->save(); // บันทึกการเปลี่ยนแปลง


                return view('admin.dashboard', ['mrepair' => $mrepair, 'nickname' => $nickname]);

            } else {
                return redirect()->back();
            }
        }
    }
    public function work()
    {
        $user = Auth::user();

        $phonenumber = $user->phonenumber;

        // คิวรี่ฐานข้อมูล
        $mrepair = Mrepair::where('phonenumber_t', $phonenumber)
            ->where('status_t', '<', 8)
            ->get();

        // ส่งข้อมูลไปยัง View
        return view('admin.work', ['mrepair' => $mrepair]);
    }
    public function history()
    {
        $user = Auth::user();

        $phonenumber = $user->phonenumber;
        $user = $user->phonenumber;

        // คิวรี่ฐานข้อมูล
        $mrepair = Mrepair::where('phonenumber_t', $phonenumber)
            ->where('status_t', '>', 7)
            ->get();

        // ส่งข้อมูลไปยัง View
        return view('admin.history', ['mrepair' => $mrepair, 'user' => $user ]);
    }
    public function edit()
    {
        return view("admin.edit");
    }
    public function hisrepair()
    {
        return view("admin.hisrepair");
    }
  


    //User
    public function user_add()
    {
        return view("user.add");
    }
    public function user_history()
    {
        $user = Auth::user();

        $phonenumber = $user->phonenumber;

        // คิวรี่ฐานข้อมูล
        $mrepair = Mrepair::where('phonenumber_c', $phonenumber)
            ->where('status_t', '>', 7)
            ->get();

        // ส่งข้อมูลไปยัง View
        return view('user.history', ['mrepair' => $mrepair]);
    }
    public function user_edit()
    {
        return view("user.edit");
    }
    public function user_hisrepair()
    {
        return view("user.hisrepair");
    }
    public function password()
    {
        return view('admin.password');
    }
    public function showuser()
    {
        $users = User::all();
        return view('admin.role', ['users' => $users]);
    }
    public function showcomment()
    {

        $user = Comment::all();
        return view('admin.comment', ['user' => $user]);
    }

    
    public function comment(Comment $user)
    {
        $user->delete();
        return redirect(route('comment.show'))->with('del', 'Demo Updated Successfully');
    }
    public function profile()
    {
        $user = Auth::user();

        return view('user.profile', ['user' => $user]);
    }
    public function profilea()
    {
        $user = Auth::user();

        return view('admin.profile', ['user' => $user]);
    }
    public function welcome()
    {
        $users = Comment::all();
        $user = User::where('usertype', 'admin')
            ->where('activate', '<', 3)
            ->get();
        return view('welcome', ['user' => $user, 'users' => $users]);


    }
    public function working()
    {
        $users = Work::all();
        return view('working', ['users' => $users]);
    }
    public function ourteam()
    {
        $user = User::where('usertype', 'admin')
            ->get();
        return view('ourteam', ['user' => $user]);
    }
}
