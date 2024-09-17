<?php

namespace App\Http\Controllers;

use App\Models\Auther;
use Illuminate\Http\Request;

class AutherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $authers = Auther::paginate(10);

        return view('authers.index', compact('authers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('authers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'auther_name' => 'required|string|min:8|max:100',
            'bio' => 'nullable|string'
        ]);

        Auther::create([
            'auther_name' => $request->auther_name,
            'bio' => $request->bio
        ]);

        return redirect()->route('auther.index')->with('message','Created Successfully');
    }
        
    /**
     * Display the specified resource.
     */
    public function show(Auther $auther)
    {

        return view('authers.show',compact('auther')); 
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Auther $auther)
    {
        return view('authers.edit',compact('auther'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Auther $auther)
    {
        $request->validate([
            'auther_name' => 'required|string|min:8|max:100',
            'bio' => 'nullable|string'
        ]);

        $auther->update([
            'auther_name'=>$request->auther_name,
            'bio'=>$request->bio,
        ]);

        return redirect()->route('auther.index')->with('message','Updated Successfully'); 
       }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Auther $auther)
    {
        $auther->delete();
        return redirect()->route('auther.index')->with('message','deleted successfully !');
    }
}
