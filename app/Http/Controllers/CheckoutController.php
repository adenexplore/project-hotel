<?php

namespace App\Http\Controllers;

use App\Models\Checkin;
use App\Models\Checkout;
use Illuminate\Http\Request;
class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $checkouts = Checkin::orderBy('created_at','desc')->get();

        return view('check_out.index', compact('checkouts'))
        ->with('i', (request()->input('check_out', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $checkin = Checkin::all();
        return view('check_out.hitung', compact('checkin'));
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
            'nama_tamu' => 'required',
            'jumlah_tamu' => 'required',
            'tgl_cekin' => 'required',
            'tgl_cekout' => 'required',
            'makanan' => '',
            'minuman' => '',
            'seafood' => '',
            'laundry' => '',
        ]);
        Checkout::create($request->all());
        return redirect()->route('check_out.index')
            ->with('success', 'Berhasil hitung !');
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
        // $checkout = Checkin::find($id);
        // return view('check_out.hitung',compact('checkout'));
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
        //
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($checkout)
    {
        $checkoutid = Checkin::find($checkout);
        $checkoutid->delete();

        return redirect()->route('check_out.index')
            ->with('success', 'Data Berhasil Hapus !');
    }

    public function payment($id)
    {
        $checkout = Checkin::find($id);
        return view('check_out.hitung',compact('checkout'));
    }
}
