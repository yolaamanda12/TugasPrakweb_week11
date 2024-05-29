<?php

namespace App\Http\Controllers;

use App\Models\unit_kerja; //tambahin ini
use Illuminate\Http\Request;

class unit_kerjaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $list_unit_kerja = unit_kerja::all();
// buat turunan model unit_kerja
        return view('unit_kerja.index', ['list_unit_kerja'=>$list_unit_kerja]);
// kirim array data ke view unit_kerja index menggunakan assosiatif array
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // kasih perintah hapus data
    }
}
