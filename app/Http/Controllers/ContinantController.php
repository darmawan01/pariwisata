<?php

namespace App\Http\Controllers;

use App\Continant;
use Illuminate\Http\Request;

class ContinantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $continant = Continant::all();

        return view('post.create', compact('continant'));
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

        Continant::create([
            'name' => request('name'),
        ]);

        return redirect()->route('post.index')->withSuccess('Data Di Tambahkan !!!');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Continant $continant
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Continant $continant)
    {
        return view('post.show', compact('continant'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Continant $continant
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Continant $continant)
    {
        $continants = Continant::all();

        return view('post.edit', compact('continant', 'continants'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Continant           $continant
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Continant $continant)
    {
        $this->validate(request(), [
            'name' => 'required',
        ]);

        Continant::create([
            'name' => request('name'),
        ]);

        return redirect()->route('post.index')->withInfo('Data Di Ubah !!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Continant $continant
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Continant $continant)
    {
        $continant->delete();

        return redirect()->route('post.index')->withDanger('Data Di Tambahkan !!!');
    }
}
