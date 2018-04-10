<?php

namespace App\Http\Controllers;

use App\Country;
use Illuminate\Http\Request;

class DestinationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $country = Country::all();

        return view('post.create', compact('country'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('post.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(request(), [
            'name' => 'required',
            'continant_id' => 'required',
        ]);

        Country::create([
            'name' => request('name'),
            'continant_id' => request('continant_id'),
        ]);

        return redirect()->route('post.index')->withSuccess('Data Di Tambahkan !!!');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Country $country
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Country $country)
    {
        return view('post.show', compact('country'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Country $country
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Country $country)
    {
        $countrys = Country::all();

        return view('post.edit', compact('country', 'countrys'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Country             $country
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Country $country)
    {
        $this->validate(request(), [
            'name' => 'required',
            'continant_id' => 'required',
        ]);

        Country::create([
            'name' => request('name'),
            'continant_id' => request('continant_id'),
        ]);

        return redirect()->route('post.index')->withInfo('Data Di Ubah !!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Country $country
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Country $country)
    {
        $country->delete();

        return redirect()->route('post.index')->withDanger('Data Di Tambahkan !!!');
    }
}
