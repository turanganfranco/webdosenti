<?php

namespace App\Http\Controllers;

use App\Models\{Penelitian, Dosen};
use Illuminate\Http\Request;

class PenelitianController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.penelitian.index', [
            'penelitian' => Penelitian::leftJoin('dosens', 'penelitians.id_dosen','dosens.id')
                            ->select('penelitians.*', 'dosens.nama as nama_dosen')
                            ->orderBy('penelitians.created_at','desc')
                            ->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.penelitian.create',[
            'dosen' => Dosen::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'id_dosen' => 'required',
            'judul' => 'required',
            'tahun' => 'required',
            'berkas' => 'required'
        ]);
        $data = $request->except(['_token']);
        
        if ($request->hasfile('berkas')) {
            $fileName = time().'_'.$request->berkas->getClientOriginalName();
            $request->berkas->move('file_penelitian', $fileName);
            $data['berkas'] = $fileName;
        }

        // dd($data);
        
        Penelitian::create($data);

        return redirect('/penelitian')->with('success', 'Data penelitian berhasil ditambah!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Penelitian $penelitian)
    {
        return view('dashboard.penelitian.show', ['penelitian' => Penelitian::find($penelitian->id)]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Penelitian $penelitian)
    {
        return view('dashboard.penelitian.edit', [
            'penelitian' => Penelitian::find($penelitian->id),
            'dosen' => Dosen::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Penelitian $penelitian)
    {
        $validatedData = $request->validate([
            'id_dosen' => 'required',
            'judul' => 'required',
            'tahun' => 'required',
        ]);
        $data = $request->except(['_token','_method']);
        
        if ($request->hasfile('berkas')) {
            $fileName = time().'_'.$request->berkas->getClientOriginalName();
            $request->berkas->move('file_penelitian', $fileName);
            $data['berkas'] = $fileName;
        }
    
        Penelitian::where('id', $penelitian->id)->update($data);

        return redirect('/penelitian')->with('success', 'Data penelitian berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Penelitian $penelitian)
    {
        $data = Penelitian::destroy($penelitian->id);
        return redirect()->route('penelitian.index')->with('deleted', 'Data penelitian terhapus');
    }
    
}
