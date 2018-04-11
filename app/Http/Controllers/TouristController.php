<?php

namespace App\Http\Controllers;

use App\Tourist;
use App\Destination;
use App\Hotel;
use App\Country;
use App\Nationality;
use Illuminate\Http\Request;

class TouristController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tourist = Tourist::all();
        $country = Country::all();
        $nationality = Nationality::all();
        $hotel = Hotel::all();
        $destination = Destination::all();

        return view('tourists.index', compact('tourist', 'country', 'nationality', 'hotel', 'destination'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $country = Country::all();
        $nationality = Nationality::all();
        $hotel = Hotel::all();
        $destination = Destination::all();
        return view('tourists.create', compact('country', 'nationality', 'hotel', 'destination'));
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
            'gender' => 'required',
            'age' => 'required',
            'country_id' => 'required',
            'nationality_id' => 'required',
            'destination_id' => 'required',
            'hotel_id' => 'required',
        ]);

        Tourist::create([
            'name' => request('name'),
            'gender' => request('gender'),
            'age' => request('age'),
            'country_id' => request('country_id'),
            'nationality_id' => request('nationality_id'),
            'destination_id' => request('destination_id'),
            'hotel_id' => request('hotel_id'),
        ]);

        return redirect()->route('tourists.index')->withSuccess('Data Di Tambahkan !!!');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Tourist $tourist
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Tourist $tourist)
    {
        return view('tourists.show', compact('tourist'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Tourist $tourist
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Tourist $tourist)
    {
        $tourists = Tourist::all();

        return view('tourists.edit', compact('tourist', 'tourists'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Tourist             $tourist
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tourist $tourist)
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

        Tourist::create([
            'name' => request('name'),
            'gender' => request('gender'),
            'age' => request('age'),
            'country_id' => request('country_id'),
            'nationality_id' => request('nationality_id'),
            'destination_id' => request('destination_id'),
            'hotel_id' => request('hotel_id'),
        ]);

        return redirect()->route('tourists.index')->withInfo('Data Di Ubah !!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Tourist $tourist
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tourist $tourist)
    {
        $tourist->delete();

        return redirect()->route('tourists.index')->withDanger('Data Di Tambahkan !!!');
    }
}
