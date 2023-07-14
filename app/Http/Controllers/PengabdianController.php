<?php

namespace App\Http\Controllers;

use App\Models\{Pengabdian, Dosen};
use Illuminate\Http\Request;

class PengabdianController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.pengabdian.index', [
            'pengabdian' => Pengabdian::leftJoin('dosens', 'pengabdians.id_dosen','dosens.id')
                            ->select('pengabdians.*', 'dosens.nama as nama_dosen')
                            ->orderBy('pengabdians.created_at','desc')
                            ->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.pengabdian.create', ['dosen' => Dosen::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'id_dosen' => 'required',
            'perihal' => 'required',
            'berkas' => 'required',
        ]);
        $data = $request->except(['_token']);
        
        if ($request->hasfile('berkas')) {
            $fileName = time().'_'.$request->berkas->getClientOriginalName();
            $request->berkas->move('file_pengabdian', $fileName);
            $data['berkas'] = $fileName;
        }

        Pengabdian::create($data);

        return redirect('/pengabdian')->with('success', 'Data pengabdian berhasil ditambah!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pengabdian $pengabdian)
    {
        return view('dashboard.pengabdian.show', ['pengabdian' => Pengabdian::find($pengabdian->id)]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pengabdian $pengabdian)
    {
        return view('dashboard.pengabdian.edit', [
            'pengabdian' => Pengabdian::find($pengabdian->id),
            'dosen' => Dosen::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pengabdian $pengabdian)
    {
        $validatedData = $request->validate([
            'id_dosen' => 'required',
            'perihal' => 'required',
        ]);
        $data = $request->except(['_token','_method']);
        
        if ($request->hasfile('berkas')) {
            $fileName = time().'_'.$request->berkas->getClientOriginalName();
            $request->berkas->move('file_pengabdian', $fileName);
            $data['berkas'] = $fileName;
        }

        Pengabdian::where('id', $pengabdian->id)->update($data);

        return redirect('/pengabdian')->with('success', 'Data pengabdian berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pengabdian $pengabdian)
    {
        $data = Pengabdian::destroy($pengabdian->id);
        return redirect()->route('pengabdian.index')->with('deleted', 'Data pengabdian terhapus!');
    }
}
