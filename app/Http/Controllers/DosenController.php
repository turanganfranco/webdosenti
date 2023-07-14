<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use Illuminate\Http\Request;

class DosenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.dosen.index', [
            'dosen' => Dosen::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.dosen.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $validatedData = $request->validate([
            'username' => 'required|max:255',
            'password' => 'required|min:5|max:255',
            'nama' => 'required',
            'nip' => 'required',
            'jenis_kelamin' => 'required',
            'pendidikan_tertinggi' => 'required',
            'foto' => 'image|file|max:2048',
        ]);
        $data = $request->except(['_token']);
        
        if ($request->hasfile('foto')) {
            $fileName = time().'_'.$request->foto->getClientOriginalName();
            $request->foto->move('gambar', $fileName);
            $data['foto'] = $fileName;
        }
        // $validatedData['foto'] = $request->file('foto')->store('foto-dosen'); 
        
        $data['password'] = bcrypt($validatedData['password']);
        
        Dosen::create($data);

        return redirect('/dosen')->with('success', 'Data dosen berhasil ditambah!');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return view('dashboard.dosen.show', ['dosen' => Dosen::find($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        return view('dashboard.dosen.edit', ['dosen' => Dosen::find($id)]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'username' => 'required|max:255',
            'nama' => 'required',
            'nip' => 'required',
            'jenis_kelamin' => 'required',
            'pendidikan_tertinggi' => 'required',
        ]);
        $oldData = Dosen::find($id);
        $data = $request->except(['_token', '_method']);

        if ($request->password) {
            $data['password'] = bcrypt($data['password']);
        }else{
            $data['password'] = $oldData->password;
        }

        if ($request->hasfile('foto')) {
            $fileName = time().'_'.$request->foto->getClientOriginalName();
            $request->foto->move('gambar', $fileName);
            $data['foto'] = $fileName;
        }
        
        Dosen::where('id', $id)->update($data);

        return redirect('/dosen')->with('success', 'Data dosen berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data = Dosen::destroy($id);
        return redirect()->route('dosen.index')->with('deleted', 'Data dosen terhapus!');
    }
}
