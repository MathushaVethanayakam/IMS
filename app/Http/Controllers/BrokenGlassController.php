<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BrokenGlass;

class BrokenGlassController extends Controller
{
    public function index()
    {
        // Fetch the glasses data from the database
        $glasses = BrokenGlass::all();
        //dd($glasses);
        // Pass the $glasses variable to the view
        return view('Broken_glass.index', compact('glasses'));
    }
    public function index2()
    {
        // Fetch the glasses data from the database
        $glasses = BrokenGlass::all();
        //dd($glasses);
        // Pass the $glasses variable to the view
        return view('Broken_glass.index2', compact('glasses'));
    }
    public function index3()
    {
        // Fetch the glasses data from the database
        $glasses = BrokenGlass::all();
        //dd($glasses);
        // Pass the $glasses variable to the view
        return view('Broken_glass.index3', compact('glasses'));
    }
    public function create()
    {
        return view('Broken_glass.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'student_name' => 'required|string',
            'reg_no' => 'required|string',
            'date' => 'required|date',
            'recorded_person' => 'required|string',
            'description' => 'required|string',
            'amount_to_pay' => 'required|numeric',
            'compensation' => 'required|in:OK,Pending',
        ]);

        BrokenGlass::create($request->all());

        return redirect()->route('broken_glass.index')->with('success', 'Broken Glass entry created successfully');
    }

    public function edit($id)
    {
        $glass = BrokenGlass::findOrFail($id);
        return view('Broken_glass.edit', compact('glass'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'student_name' => 'required|string',
            'reg_no' => 'required|string',
            'date' => 'required|date',
            'recorded_person' => 'required|string',
            'description' => 'required|string',
            'amount_to_pay' => 'required|numeric',
            'compensation' => 'required|in:OK,Pending',
        ]);

        $glass = BrokenGlass::findOrFail($id);
        $glass->update($request->all());

        return redirect()->route('broken_glass.index')->with('success', 'Broken Glass entry updated successfully');
    }

    public function destroy($id)
    {
        $glass = BrokenGlass::findOrFail($id);
        $glass->delete();

        return redirect()->route('broken_glass.index')->with('success', 'Broken Glass entry deleted successfully');
    }
}
