<?php


namespace App\Http\Controllers;
use App\Models\InorganicChemical;
use Illuminate\Http\Request;
 

class InorganicChemicalController extends Controller
{
    public function index()
    {
        $inorganicChemicals = InorganicChemical::all();
        return view('inorganic_chemicals.index', compact('inorganicChemicals'));
    }
    public function index2()
    {
        $inorganicChemicals = InorganicChemical::all();
        return view('inorganic_chemicals.index2', compact('inorganicChemicals'));
    }
    public function index3()
    {
        $inorganicChemicals = InorganicChemical::all();
        return view('inorganic_chemicals.index3', compact('inorganicChemicals'));
    }
    public function create()
    {
        return view('inorganic_chemicals.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'chemical_id' => 'required|numeric|digits_between:1,4|unique:inorganic_chemicals',
            'chemical_name' => 'required',
            'quantity' => 'required|numeric|regex:/^\d{1,5}(\.\d{1,3})?/',
            'last_update' => 'required|date|after:2023-01-01',
        ]);

        InorganicChemical::create($request->all());

        return redirect()->route('inorganic_chemicals.index')->with('success','Chemical success fully created');
        
        
    }

    public function show(InorganicChemical $inorganicChemical)
    {
      //  return view('inorganic_chemicals.show', compact('inorganicChemical'));
    }

    public function edit(InorganicChemical $inorganicChemical)
    {
        return view('inorganic_chemicals.edit', compact('inorganicChemical'));
    }


    public function inorganic_update(Request $request, InorganicChemical $inorganicChemical,$id)
    {
        //dd($id);
        $validatedData = $request->validate([
            'chemical_name' => 'required',
            'quantity' => 'required|numeric|regex:/^\d{1,5}(\.\d{1,3})?/',
            'last_update' => 'required|date|after:2023-01-01',
        ]);
        
        $data = InorganicChemical::find($id);
        $data->chemical_id = $request->get('chemical_id');
        $data->chemical_name = $request->get('chemical_name');
        $data->quantity = $request->get('quantity');
        $data->last_update = $request->get('last_update');
        $data->update();

        return redirect()->route('inorganic_chemicals.index')->with('success', 'Chemical successfully updated');
    }

    public function destroy(InorganicChemical $inorganicChemical)
    {
        $inorganicChemical->delete();
        return redirect()->route('inorganic_chemicals.index')->with('success','Chemical success fully deleted');
    }
   

}
