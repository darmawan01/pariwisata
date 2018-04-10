<?php

namespace App\Http\Controllers;

use App\Hotel;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hotel = Hotel::all();

        return view('post.create', compact('hotel'));
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
            'owner' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'fax' => 'required',
            'email' => 'required',
            'npwp' => 'required',
        ]);

        Hotel::create([
            'name' => request('name'),
            'owner' => request('owner'),
            'address' => request('address'),
            'phone' => request('phone'),
            'fax' => request('fax'),
            'email' => request('email'),
            'npwp' => request('npwp'),
        ]);

        return redirect()->route('post.index')->withSuccess('Data Di Tambahkan !!!');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Hotel $hotel
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Hotel $hotel)
    {
        return view('post.show', compact('hotel'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Hotel $hotel
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Hotel $hotel)
    {
        $hotels = Hotel::all();

        return view('post.edit', compact('hotel', 'hotels'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Hotel               $hotel
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Hotel $hotel)
    {
        $this->validate(request(), [
            'name' => 'required',
            'owner' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'fax' => 'required',
            'email' => 'required',
            'npwp' => 'required',
        ]);

        Hotel::create([
            'name' => request('name'),
            'owner' => request('owner'),
            'address' => request('address'),
            'phone' => request('phone'),
            'fax' => request('fax'),
            'email' => request('email'),
            'npwp' => request('npwp'),
        ]);
<<<<<<< HEAD
        return redirect()->back()->withSuccess('Data Berhasil di Simpan');
    }   
=======

        return redirect()->route('post.index')->withInfo('Data Di Ubah !!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Hotel $hotel
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hotel $hotel)
    {
        $hotel->delete();

        return redirect()->route('post.index')->withDanger('Data Di Tambahkan !!!');
    }
>>>>>>> c7c1cb404f531bf62947dfb381d21ddc79df8eea
}
