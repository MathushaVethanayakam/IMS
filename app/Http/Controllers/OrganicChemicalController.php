<?php


namespace App\Http\Controllers;
use App\Models\OrganicChemical;
use Illuminate\Http\Request;


class OrganicChemicalController extends Controller
{
    public function index()
    {
        $organicChemicals = OrganicChemical::all();
        return view('organic_chemicals.index', compact('organicChemicals'));
    }
    public function index2()
    {
        $organicChemicals = OrganicChemical::all();
        return view('organic_chemicals.index2', compact('organicChemicals'));
    }
    public function index3()
    {
        $organicChemicals = OrganicChemical::all();
        return view('organic_chemicals.index3', compact('organicChemicals'));
    }
    public function create()
    {
        return view('organic_chemicals.create');
       
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'chemical_id' => 'required|numeric|digits_between:1,4|unique:organic_chemicals',
            'chemical_name' => 'required',
            'quantity' => 'required|numeric|regex:/^\d{1,5}(\.\d{1,3})?/',
            'last_update' => 'required|date|after:2023-01-01',
        ]);

        OrganicChemical::create($request->all());

        return redirect()->route('organic_chemicals.index')->with('success','Chemical success fully created');
        
        
    }

    public function show(OrganicChemical $organicChemical)
    {
        //return view('organic_chemicals.show', compact('organicChemical'));
    }

    public function edit(OrganicChemical $organicChemical)
    {
        return view('organic_chemicals.edit', compact('organicChemical'));
    }

    public function organic_update(Request $request, OrganicChemical $organicChemical,$id)
    {
        //dd($id);
        $validatedData = $request->validate([
            'chemical_name' => 'required',
            'quantity' => 'required|numeric|regex:/^\d{1,5}(\.\d{1,3})?/',
            'last_update' => 'required|date|after:2023-01-01',
        ]);
        
        $data = OrganicChemical::find($id);
        $data->chemical_id = $request->get('chemical_id');
        $data->chemical_name = $request->get('chemical_name');
        $data->quantity = $request->get('quantity');
        $data->last_update = $request->get('last_update');
        $data->update();

        return redirect()->route('organic_chemicals.index')->with('success', 'Chemical successfully updated');
    }

    public function destroy(OrganicChemical $organicChemical)
    {
        $organicChemical->delete();
        return redirect()->route('organic_chemicals.index')->with('success','Chemical success fully deleted');
    }
}

