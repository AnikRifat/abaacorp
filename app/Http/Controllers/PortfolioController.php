<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;
use Image;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.pages.portfolio.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.portfolio.add_portfolio');
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
            'url' => 'required',
            'image' => 'required|image|mimes:jpg,jpeg,png',
        ]);

        $input = $request->all();
        if ($image = $request->file('image')) {

            $filePath = 'images/';
            $setImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $img = Image::make($image)->resize(400, 520);

            $img->save($filePath . "/" . $setImage, 40, "jpg");
            $input['image'] = $setImage;
        }

        Portfolio::create($input);

        return redirect()->route('portfolio')->with('success', 'Portfolio uploader Scueesfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function show(Portfolio $portfolio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function edit(Portfolio $portfolio)
    {
        return view('admin.pages.portfolio.edit_portfolio', compact('portfolio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Portfolio $portfolio)
    {
        $request->validate([
            'url' => 'required',
            'image' => 'required|image|mimes:jpg,jpeg,png',
        ]);

        $input = $request->all();
        if ($image = $request->file('image')) {

            $filePath = 'images/';
            $setImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $img = Image::make($image)->resize(400, 520);
            $img->save($filePath . "/" . $setImage, 40, "jpg");
            $input['image'] = $setImage;
        } else {

            unset($input['image']);
        }

        $portfolio->update($input);

        return redirect()->route('portfolio')->with('success', 'Portfolio uploaded Scueesfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Portfolio $portfolio)
    {
        $portfolio->delete();

        return redirect()->route('portfolio')->with('success', 'portfolio Deleted Scueesfully.');
    }
}
