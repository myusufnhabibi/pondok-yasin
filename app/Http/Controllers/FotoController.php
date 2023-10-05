<?php

namespace App\Http\Controllers;

use App\Models\Foto;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;

class FotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('admin.foto.index', [
            'fotos' => Foto::orderBy('id', 'DESC')->get(),
            'jumlah_foto' => Foto::get()->count()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('foto.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Image
        $fileName = time() . '.' . $request->foto->extension();
        // $request->file('image')->storeAs('public/artikel', $fileName);
        $storage_foto =  public_path() . '/storage/foto/' . $fileName;
        Image::make($request->file('foto')->getRealPath())->resize(770, 512)->save($storage_foto);

        Foto::create([
            'foto' => $fileName
        ]);

        return redirect('/foto')->with('success', 'Data berhasil di simpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Image
        $foto = Foto::find($id);

        if ($request->hasFile('foto')) {
            if (\File::exists('storage/foto/' . $foto->foto)) {
                \File::delete('storage/foto/' . $request->old_image);
            }
            $fileName = time() . '.' . $request->foto->extension();
            // $request->file('image')->storeAs('public/foto', $fileName);
            $storage_foto =  public_path() . '/storage/foto/' . $fileName;
            Image::make($request->file('foto')->getRealPath())->resize(770, 512)->save($storage_foto);
        }

        if ($request->hasFile('foto')) {
            $checkFileName = $fileName;
        } else {
            $checkFileName = $request->old_image;
        }

        $foto->update([
            'foto' => $checkFileName
        ]);

        return redirect('/foto')->with('success', 'Data berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $foto = Foto::find($id);
        if (\File::exists('storage/foto/' . $foto->foto)) {
            \File::delete('storage/foto/' . $foto->foto);
        }

        $foto->delete();
        return redirect('/foto')->with('success', 'Data berhasil di hapus');
    }
}
