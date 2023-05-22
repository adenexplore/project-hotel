<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Seafood;

class ServiceSeafoodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services_seafood = Seafood::orderBy('created_at','desc')->get();

        return view('service/service_seafood.index', compact('services_seafood'))
        ->with('i', (request()->input('service', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('service/service_seafood.create');
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
            'seafood_name' => 'required',
            'quantity' => 'required',
            'price' => 'required',
        ]);
        Seafood::create($request->all());

        return redirect()->route('service_seafood.index')
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
        $service = Seafood::find($id);
        return view('service/service_seafood.edit',compact('service'));
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
            'seafood_name' => 'required',
            'quantity' => 'required',
            'price' => 'required',
        ]);

        
        Seafood::find($id)->update($request->all());
        return redirect()->route('service_seafood.index')
            ->with('success', 'Berhasil Di Edit !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($service)
    {   
        $serviceid = Seafood::find($service);
        $serviceid->delete();

        return redirect()->route('service_seafood.index')
            ->with('success', 'Data Berhasil Hapus !');
    }
}
