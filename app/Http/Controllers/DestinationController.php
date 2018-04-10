<?php

namespace App\Http\Controllers;

use App\Destination;
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
        $destination = Destination::all();

        return view('post.create', compact('destination'));
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
        ]);

        Destination::create([
            'name' => request('name'),
        ]);

        return redirect()->route('post.index')->withSuccess('Data Di Tambahkan !!!');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Destination $destination
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Destination $destination)
    {
        return view('post.show', compact('destination'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Destination $destination
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Destination $destination)
    {
        $destinations = Destination::all();

        return view('post.edit', compact('destination', '$destinations'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Destination         $destination
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Destination $destination)
    {
        $this->validate(request(), [
            'name' => 'required',
            'gender' => 'required',
            'age' => 'required',
            'country_id' => 'required',
            'nationality_id' => 'required',
            'destination_id' => 'required',
            'hotel_id' => 'required',
        ]);

        Destination::create([
            'name' => request('name'),
            'gender' => request('gender'),
            'age' => request('age'),
            'country_id' => request('country_id'),
            'nationality_id' => request('nationality_id'),
            'destination_id' => request('destination_id'),
            'hotel_id' => request('hotel_id'),
        ]);

        return redirect()->route('post.index')->withInfo('Data Di Ubah !!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Destination $destination
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Destination $destination)
    {
        $destination->delete();

        return redirect()->route('post.index')->withDanger('Data Di Tambahkan !!!');
    }
}
