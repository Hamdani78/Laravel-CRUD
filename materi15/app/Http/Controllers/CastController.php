<?php

namespace App\Http\Controllers;

use App\Models\cast;
use Illuminate\Http\Request;


class CastController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // menampilkan data
        $casts = Cast::all();
        return view('cast.index', compact('casts'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cast.tambah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $casts = Cast::create([
            'nama' => $request->nama,
            'umur' => $request->umur,
            'bio' => $request->bio,
        ]);
        if ($casts) {
            return redirect()->route('cast.index')->with(['succes' => 'Data Berhasil Disimpan']);
        } else {
            return redirect()->route('cast.index')->with(['error' => 'Data Gagal Disimpan']);
        }
    }


    public function show($id)
    {
        $casts = Cast::findOrFail($id);
        return view('cast.show', compact('casts'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $casts = Cast::find($id);
        return view('cast.update', compact('casts'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $casts = Cast::findOrFail($id);
        if ($request) {
            $casts->update([
                'nama' => $request->nama,
                'umur' => $request->umur,
                'bio' => $request->bio,
            ]);
        } else {
            $casts->update([
                'nama' => $request->nama,
                'umur' => $request->umur,
                'bio' => $request->bio,
            ]);
        }
        if ($casts) {
            return redirect()->route('cast.index')->with(['success' => 'Data Berhasil Diubah!']);
        } else {
            return redirect()->route('cast.index')->with(['error' => 'Data Gagal Diubah!']);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $casts = Cast::findOrFail($id);
        $casts-> delete();
        if($casts){
            return redirect()->route('cast.index')->with(['success' => 'Data Berhasil Dihapus!']);
        }else{
            return redirect()->route('cast.index')->with(['error' => 'Data Gagal Dihapus!']);
        }
    }
}
