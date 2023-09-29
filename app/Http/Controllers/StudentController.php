<?php

namespace App\Http\Controllers;

use App\Models\student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data=student::get();
        return view('welcome',compact('data'));
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
        dd($request->all());
        $request->validate([
            'name'=>"required",
        ]);
        $stu=new student();
        $stu->name=$request->name;
        $stu->save();
        return view('welcome');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data=student::where('id','=',$id)->first();
        rewturn view('edit',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(student $student)
    {
        $request->validate([
            'name' => 'required',
        ]);
        student::where('id','=',$request->id)->update
        name=$request->name
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(student $student)
    {
        student::destroy($id);
    }
}
