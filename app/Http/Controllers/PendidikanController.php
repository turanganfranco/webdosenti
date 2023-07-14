<?php

namespace App\Http\Controllers;

use App\Models\{Pendidikan, Dosen};
use Illuminate\Http\Request;

class PendidikanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        return view('dashboard.pendidikan.index', [
            'pendidikan' => Pendidikan::leftJoin('dosens', 'pendidikans.id_dosen','dosens.id')
                            ->select('pendidikans.*', 'dosens.nama as nama_dosen')
                            ->orderBy('pendidikans.created_at','desc')
                            ->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $dosen = Dosen::all();
        // dd($dosen);
        return view('dashboard.pendidikan.create', [
            'dosen' => $dosen
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'id_dosen' => 'required',
            'kategori' => 'required',
            'pendidikan' => 'required',
            'gelar',
            'tahun',
            'jenjang',
            'berkas',
        ]);
        $data = $request->except(['_token']);
        // dd($data);
        
        if ($request->hasfile('berkas')) {
            $fileName = time().'_'.$request->berkas->getClientOriginalName();
            $request->berkas->move('file_pendidikan', $fileName);
            $data['berkas'] = $fileName;
        }
        
        Pendidikan::create($data);

        return redirect('/pendidikan')->with('success', 'Data pendidikan berhasil ditambah!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pendidikan $pendidikan)
    {
        return view('dashboard.pendidikan.show', ['pendidikan' => Pendidikan::find($pendidikan->id)]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pendidikan $pendidikan)
    {
        return view('dashboard.pendidikan.edit', [
            'pendidikan' => Pendidikan::find($pendidikan->id),
            'dosen' => Dosen::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pendidikan $pendidikan)
    {
        $validatedData = $request->validate([
            'id_dosen' => 'required',
            'kategori' => 'required',
            'pendidikan' => 'required',
        ]);
        $data = $request->except(['_token','_method']);
        
        if ($request->hasfile('berkas')) {
            $fileName = time().'_'.$request->berkas->getClientOriginalName();
            $request->berkas->move('file_pendidikan', $fileName);
            $data['berkas'] = $fileName;
        }
    
        Pendidikan::where('id', $pendidikan->id)->update($data);

        return redirect('/pendidikan')->with('success', 'Data pendidikan berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pendidikan $pendidikan)
    {
        $data = Pendidikan::destroy($pendidikan->id);
        return redirect()->route('pendidikan.index')->with('deleted', 'Data pendidikan terhapus');
    }
}
