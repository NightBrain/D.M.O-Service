<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\work;

class WorkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Work::all();
        return view('admin.working', ['user' => $user]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'imageadmin' => 'required|image|mimes:jpeg,png,jpg,gif|max:5120',
            'imagework' => 'required|image|mimes:jpeg,png,jpg,gif|max:5120',
            'title' => 'required',
        ]);
        $requestData = $request->all();
        $fileName = time() . $request->file('imageadmin')->getClientOriginalName();
        $path = $request->file('imageadmin')->storeAs('imageadmin', $fileName, 'public');
        $requestData["imageadmin"] = '/public/storage/' . $path;
        $fileName = time() . $request->file('imagework')->getClientOriginalName();
        $path = $request->file('imagework')->storeAs('imagework', $fileName, 'public');
        $requestData["imagework"] = '/public/storage/' . $path;
        Work::create($requestData);
        return redirect(route('admin.working'))->with('success','Demo Updated Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Work $user)
    {
        $user->delete();
        return redirect(route('admin.working'))->with('del','Demo Updated Successfully');
    }
}
