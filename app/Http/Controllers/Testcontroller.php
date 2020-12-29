<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class Testcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $test = User::latest()->paginate(10);
        return view('index',compact('test'))->with('i',(request()->input('page',1)-1)*5);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'full_name'=>'required',
            'email_id'=>'required',
            'gender'=>'required',
            'phone_number'=>'required',
            'department'=>'required',
            'joining_date'=>'required',

        ]);
    User::create($request->all());
    return redirect()->route('index')->with('success','Student created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Test  $test
     * @return \Illuminate\Http\Response
     */
    public function show(User $test)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Test  $test
     * @return \Illuminate\Http\Response
     */
    public function edit(User $test)
    {
        return view('edit',compact('test'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Test  $test
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $test)
    {
        $request->validate([
            'full_name'=>'required',
            'email_id'=>'required',
            'gender'=>'required',
            'phone_number'=>'required',
            'department'=>'required',
            'joining_date'=>'required',
            ]);
            $test->update($request->all());
            return redirect()->route('index')->with('success','Student updated successfully');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Test  $test
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $test)
    {
        
        $test->delete();
        return redirect()->route('test.index')->with('success','Student deleted successfully');
 
    }
}
