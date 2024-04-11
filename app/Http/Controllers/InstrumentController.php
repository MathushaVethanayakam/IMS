<?php

namespace App\Http\Controllers;
use App\Models\Instrument;
use Illuminate\Http\Request;

class InstrumentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $instruments = Instrument::all();
        return view('Instruments.index', compact('instruments'));
    }
    public function index2()
    {
        //
        $instruments = Instrument::all();
        return view('Instruments.index2', compact('instruments'));
    }
    public function index3()
    {
        //
        $instruments = Instrument::all();
        return view('Instruments.index3', compact('instruments'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Instruments.create');
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
        $validatedData = $request->validate([
            'instrument_id' => 'required|unique:instruments',
            'instrument_name' => 'required',
            'available' => 'required',
            'last_update' => 'required|date|after:2023-01-01',
        ]);

        Instrument::create($request->all());

        return redirect()->route('instruments.index')->with('success','Instrument success fully created');
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
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $instrument = Instrument::findOrFail($id);
        return view('Instruments.edit', compact('instrument'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $request->validate([
            'instrument_name' => 'required',
            'available' => 'required',
            'last_update' => 'required|date|after:2023-01-01',
        ]);

        $instrument = Instrument::findOrFail($id); // Corrected line
        $instrument->update($request->all());

        return redirect()->route('instruments.index')->with('success', 'Instrument entry updated successfully');
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
        $instrument = Instrument::findOrFail($id);
        $instrument->delete();

        return redirect()->route('instruments.index')->with('success', 'Instrument entry deleted successfully');
    }
}
