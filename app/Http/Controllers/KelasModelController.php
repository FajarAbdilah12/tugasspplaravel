<?php

namespace App\Http\Controllers;

use App\Models\KelasModel;
use App\Http\Requests\StoreKelasModelRequest;
use App\Http\Requests\UpdateKelasModelRequest;

class KelasModelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kelases = KelasModel::all();
        return view('kelas.index', compact('kelases'));//
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('kelas.create');//
    }

    /**
     * Store a newly created resource in storage.
     */ 
    public function store(StoreKelasModelRequest $request, KelasModel $kela)
    {
        $kela->create($request->all());
       return redirect()->route('kelas.index')->with(['success' => 'Data berhasil disimpan']); //
    }

    /**
     * Display the specified resource.
     */
    public function show(KelasModel $kela)
    {
        return view('kelas.show', compact('kela'));//
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(KelasModel $kela)
    {
        return view('kelas.edit', compact('kela'));//
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateKelasModelRequest $request, KelasModel $kela)
    {
       $kela->update($request->all());
       return redirect()->route('kelas.index')->with(['success' => 'Data berhasil diupdate']); //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(KelasModel $kela)
    {
       $kela->delete();
        return redirect()->route('kelas.index')->with(['success' => 'Data Telah Dihapus']);//
    }
}
