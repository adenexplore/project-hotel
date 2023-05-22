<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Food;

class ServicefoodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Food::orderBy('created_at','desc')->get();

        return view('service/service_food.index', compact('services'))
        ->with('i', (request()->input('services', 1) - 1) * 5);
    }
    // {
    //     return view('service/service_food.index');
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('service/service_food.create');
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
            'food_name' => 'required',
            'quantity' => 'required',
            'price' => 'required',
        ]);
        Food::create($request->all());

        return redirect()->route('service_food.index')
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
        $service = Food::find($id);
        return view('service/service_food.edit',compact('service'));
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
            'food_name' => 'required',
            'quantity' => 'required',
            'price' => 'required',
        ]);

        
        Food::find($id)->update($request->all());
        return redirect()->route('service_food.index')
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
        $serviceid = Food::find($service);
        $serviceid->delete();

        return redirect()->route('service_food.index')
            ->with('success', 'Data Berhasil Hapus !');
    }
}
