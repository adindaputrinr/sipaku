<?php

namespace App\Http\Controllers;

use App\Models\Penyakit;
use Illuminate\Http\Request;

class PenyakitController extends Controller
{
    public function index()
    {
        $datapenyakit = Penyakit::latest()->get();
        return view('admin.page.datapenyakit', compact('datapenyakit'));
    }

    public function create()
    {
        
        return view('admin.page.create_penyakit');
    }

    public function store(Request $request)
    {
        $request->validate([
            'kodePenyakit' => 'required',
            'penyakit' => 'required'
        ]);

        Penyakit::create($request->all());

        return redirect()->route('penyakit.index')
            ->with('success', 'Data penyakit berhasil ditambahkan.');
    }

    public function destroy($id)
    {
        $penyakit = Penyakit::find($id);
        $penyakit->delete();

        return redirect()->route('penyakit.index');
    }
}
