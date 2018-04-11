<?php

namespace App\Http\Controllers;

use App\Hotel;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    public function index()
    {   
        $hotel = Hotel::all();

        return view('hotels.index', compact('hotel'));
    }
    public function create()
    {
        return view('hotels.create');
    }
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

        return redirect()->back()->withSuccess('Data Di Tambahkan !!!');
    }
    public function show(Hotel $hotel)
    {
        return view('hotel.show', compact('hotel'));
    }

    public function edit(Hotel $hotel)
    {
        $hotels = Hotel::all();

        return view('hotel.edit', compact('hotel', 'hotels'));
    }

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
        
        return redirect()->back()->withSuccess('Data Berhasil di Simpan');
    }   

    public function destroy(Hotel $hotel)
    {
        $hotel->delete();

        return redirect()->route('hotel.index')->withDanger('Data Di Tambahkan !!!');
    }
}
