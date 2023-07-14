<?php

namespace App\Http\Controllers;

use App\Models\{Penunjang, Dosen};
use Illuminate\Http\Request;

class PenunjangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.penunjang.index', [
            'penunjang' => Penunjang::leftJoin('dosens', 'penunjangs.id_dosen','dosens.id')
                            ->select('penunjangs.*', 'dosens.nama as nama_dosen')
                            ->orderBy('penunjangs.created_at','desc')
                            ->get()
            // 'penunjang' => Penunjang::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.penunjang.create',['dosen' => Dosen::all()]);
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
        // dd($data);
        
        if ($request->hasfile('berkas')) {
            $fileName = time().'_'.$request->berkas->getClientOriginalName();
            $request->berkas->move('file_penunjang', $fileName);
            $data['berkas'] = $fileName;
        }
        
        Penunjang::create($data);

        return redirect('/penunjang')->with('success', 'Data penunjang berhasil ditambah!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Penunjang $penunjang)
    {
        return view('dashboard.penunjang.show', ['penunjang' => Penunjang::find($penunjang->id)]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Penunjang $penunjang)
    {
        return view('dashboard.penunjang.edit', [
            'penunjang' => Penunjang::find($penunjang->id),
            'dosen' => Dosen::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Penunjang $penunjang)
    {
        $validatedData = $request->validate([
            'id_dosen' => 'required',
            'perihal' => 'required',
        ]);
        $data = $request->except(['_token','_method']);
        
        if ($request->hasfile('berkas')) {
            $fileName = time().'_'.$request->berkas->getClientOriginalName();
            $request->berkas->move('file_penunjang', $fileName);
            $data['berkas'] = $fileName;
        }
    
        Penunjang::where('id', $penunjang->id)->update($data);

        return redirect('/penunjang')->with('success', 'Data penunjang berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Penunjang $penunjang)
    {
        $data = Penunjang::destroy($penunjang->id);
        return redirect()->route('penunjang.index')->with('deleted', 'Data penunjang terhapus');
    }
}
