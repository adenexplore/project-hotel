<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Typekamar;
class TypekamarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $typekamars = TypeKamar::orderBy('created_at','desc')->get();

        return view('type_kamar.index', compact('typekamars'))
        ->with('i', (request()->input('typekamar', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.   
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('type_kamar.create'); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'type_kamar' => 'required',
            'harga' => 'required',
            'deskripsi' => 'required',
        ]);
        Typekamar::create($request->all());

        return redirect()->route('type_kamar.index')
            ->with('success', 'Berhasil Menyimpan !');
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
        $typekamar = Typekamar::find($id);
        return view('type_kamar.edit',compact('typekamar'));
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
        $request->validate([
            'type_kamar' => 'required',
            'harga' => 'required',
            'deskripsi' => 'required',
        ]);

        
        Typekamar::find($id)->update($request->all());
        return redirect()->route('type_kamar.index')
            ->with('success', 'Berhasil Di Edit !');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($typekamars)
    {   
        $typekamarid = Typekamar::find($typekamars);
        $typekamarid->delete();

        return redirect()->route('type_kamar.index')
            ->with('success', 'Data Berhasil Hapus !');
    }
}
