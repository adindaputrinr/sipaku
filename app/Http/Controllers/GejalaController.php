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
}
