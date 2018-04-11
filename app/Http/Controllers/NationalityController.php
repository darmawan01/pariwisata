<?php

namespace App\Http\Controllers;

use App\Nationality;
use Illuminate\Http\Request;

class NationalityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nationality = Nationality::all();

        return view('nationalities.index', compact('nationality'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('nationalities.create');
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

        Nationality::create([
            'name' => request('name'),
        ]);

        return redirect()->route('nationalities.index')->withSuccess('Data Di Tambahkan !!!');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Nationality $nationality
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Nationality $nationality)
    {
        return view('nationalities.show', compact('nationality'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Nationality $nationality
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Nationality $nationality)
    {
        $nationalitys = Nationality::all();

        return view('nationalities.edit', compact('nationality', 'na$nationalitys'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Nationality         $nationality
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Nationality $nationality)
    {
        $this->validate(request(), [
            'name' => 'required',
        ]);

        Nationality::create([
            'name' => request('name'),
        ]);

        return redirect()->route('nationalities.index')->withInfo('Data Di Ubah !!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Nationality $nationality
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Nationality $nationality)
    {
        $nationality->delete();

        return redirect()->route('nationalities.index')->withDanger('Data Di Tambahkan !!!');
    }
}
