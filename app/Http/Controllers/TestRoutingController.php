<?php

namespace App\Http\Controllers;

use App\Models\TestRouting;
use Illuminate\Http\Request;

class TestRoutingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('viewd.index');
    }

    public function form()
    {
        return view('viewd.form');
    }


    public function store(Request $request)
    {
        // Kode Ini dibuat pake AI pa karna saya kurang paham jikalu form memerlukan data untuk action
        $request->validate([
            'first_name'  => 'required|string|max:255',
            'last_name'   => 'required|string|max:255',
            'gender'      => 'nullable|string',
            'nationality' => 'nullable|string',
            'language'    => 'nullable|string',
            'bio'         => 'nullable|string',
        ]);

        



        return redirect('/form/table');

    }
    public function table()
    {
        return view('viewd.table');
    }

    public function welcome()
    {
        return view('viewd.welcome');
    }
}
