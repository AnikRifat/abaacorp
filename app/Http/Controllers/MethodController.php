<?php

namespace App\Http\Controllers;

use App\Models\Method;
use Illuminate\Http\Request;

class MethodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $method = Method::all();
        return view('admin.pages.methods.index', compact('method'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     * @param  \App\Models\Method  $method
     * @return \Illuminate\Http\Response
     */
    public function edit(Method $method)

    {
        // $data = Method::all();

        // dd($method);

        return view('admin.pages.methods.edit_method', compact('method'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Method  $method
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Method $method)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'color' => 'required',
            'icon' => 'required',
        ]);

        $input = $request->all();

        $method->update($input);

        return redirect()->route('method')->with('success', 'Portfolio uploaded Scueesfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
