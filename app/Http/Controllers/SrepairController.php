<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\srepair;
use App\Models\mrepair;
use App\Models\user;

class SrepairController extends Controller
{
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
        $newSrepair = Srepair::create($data);
        return redirect(route('admin.work'))->with('update','Demo Updated Successfully');
    }
    public function show(Request $request)
    {
        // รับค่าที่ส่งมาจาก web.php
        $phonenumber_c = $request->input('phonenumber_c');
        $problem_c = $request->input('problem_c');

        // คิวรี่ฐานข้อมูล
        $results = Srepair::where('phonenumber_c', $phonenumber_c)
                        ->where('problem_c', $problem_c)
                        ->get();

        // ส่งข้อมูลไปยัง View
        return view('admin.hisrepair', ['results' => $results]);
    }
    public function showu(Request $request)
    {
        // รับค่าที่ส่งมาจาก web.php
        $phonenumber_c = $request->input('phonenumber_c');
        $problem_c = $request->input('problem_c');

        // คิวรี่ฐานข้อมูล
        $results = Srepair::where('phonenumber_c', $phonenumber_c)
                        ->where('problem_c', $problem_c)
                        ->get();

        // ส่งข้อมูลไปยัง View
        return view('user.hisrepair', ['results' => $results]);
    }
    public function destroy(User $user)
    {
        $user->delete();
        return redirect(route('admin.role'))->with('del', 'Demo Updated Successfully');
    }

}
