<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use App\Models\Siswa;
 
class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $siswa = Siswa::orderBy('created_at', 'DESC')->get();
  
        return view('siswas.index', compact('siswa'));
    }
  
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('siswas.create');
    }
  
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Siswa::create($request->all());
 
        return redirect()->route('siswas')->with('success', 'Berhasil Tambah Data Siswa');
    }
  
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $siswa = Siswa::findOrFail($id);
  
        return view('siswas.show', compact('siswa'));
    }
  
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $siswa = Siswa::findOrFail($id);
  
        return view('siswas.edit', compact('siswa'));
    }
  
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $siswa = Siswa::findOrFail($id);
  
        $siswa->update($request->all());
  
        return redirect()->route('siswas')->with('success', 'Berhasil Edit Data Siswa');
    }
  
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $siswa = Siswa::findOrFail($id);
        
  
        $siswa->delete();
  
        return redirect()->route('siswas')->with('danger', 'Berhasil Menghapus Data Siswa');
    }
}