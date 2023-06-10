<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use Illuminate\Http\Request;


class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     */


    public function index()
    {
        $posts = Posts::all();
        return view('posting.index')->with('posts', $posts);
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('posting.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $requestData = $request->all();
        $fileName = time() . $request->file('photo')->getClientOriginalName();
        $path = $request->file('photo')->storeAs('images', $fileName, 'public');
        $requestData["photo"] = '/storage/' . $path;
        Posts::create($requestData);
        return redirect('posting')->with('flash_message', 'Post Addedd!');
        
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
    public function destroy(string $id)
    {
     
    }
    
    
}

