<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Drinks;

class ServiceDrinksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services_drinks = Drinks::orderBy('created_at','desc')->get();

        return view('service/service_drinks.index', compact('services_drinks'))
        ->with('i', (request()->input('services_drinks', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('service/service_drinks.create');
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
            'drinks_name' => 'required',
            'quantity' => 'required',
            'price' => 'required',
        ]);
        Drinks::create($request->all());

        return redirect()->route('service_drinks.index')
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
        $service = Drinks::find($id);
        return view('service/service_drinks.edit',compact('service'));
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
            'drinks_name' => 'required',
            'quantity' => 'required',
            'price' => 'required',
        ]);

        
        Drinks::find($id)->update($request->all());
        return redirect()->route('service_drinks.index')
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
        $serviceid = Drinks::find($service);
        $serviceid->delete();

        return redirect()->route('service_drinks.index')
            ->with('success', 'Data Berhasil Hapus !');
    }
}
