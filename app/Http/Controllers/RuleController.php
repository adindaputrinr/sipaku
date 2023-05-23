<?php

namespace App\Http\Controllers;

use App\Models\Rule;
use App\Models\Penyakit;
use Illuminate\Http\Request;

class RuleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datarule = Rule::latest()->get();
        return view('admin.page.rule', compact('datarule'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //$datarule = Penyakit::pluck('kodePenyakit', 'kodePenyakit');
        // $datarule = Rule::all();
        $penyakit = Penyakit::all();
        //dd($rules);
        return view('admin.page.create_rule', compact('penyakit'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'kodeRule' => 'required',
            'kodeGejala' => 'required',
            'kodePenyakit' => 'required',
            'tindakan' => 'required'
        ]);

        $datarule = new Rule();
        $datarule->kodeGejala = $request->kodeGejala;
        $datarule->kodePenyakit = $request->kodePenyakit;
        $datarule->tindakan = $request->tindakan;
        $datarule->save();


        // Rule::create($request->all());

        return redirect()->route('rule.index')
            ->with('success', 'Data penyakit berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $rule = Rule::findOrFail($id);

        return view('admin.page.edit_rule', compact('rule'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'kodeRule' => 'required|max:255',
            'kodeGejala' => 'required|max:255',
            'kodePenyakit' => 'required|max:255',
            'tindakan' => 'required|max:255'
            
    ]);

        Rule::whereId($id)->update($validatedData);

        return redirect()->route('rule.index')->with('success', 'Data rule berhasil diupdate.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $rule = Rule::find($id);
        $rule->delete();

        return redirect()->route('rule.index');
    }
}
