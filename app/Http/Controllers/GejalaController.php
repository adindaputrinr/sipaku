<?php

namespace App\Http\Controllers;

use App\Models\Gejala;
use Illuminate\Http\Request;

class GejalaController extends Controller
{
    public function index()
    {
        $datagejala = Gejala::latest()->get();
        return view('admin.page.datagejala', compact('datagejala'));
    }

    public function create()
    {
        
        return view('admin.page.create_gejala');
    }

    public function store(Request $request)
    {
        $request->validate([
            'kodeGejala' => 'required',
            'gejala' => 'required'
        ]);

        Gejala::create($request->all());

        return redirect()->route('gejala.index')
            ->with('success', 'Data gejala berhasil ditambahkan.');
    }

    public function destroy($id)
    {
        $gejala = Gejala::find($id);
        $gejala->delete();

        return redirect()->route('gejala.index');
    }
}
