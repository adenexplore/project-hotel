<?php

namespace App\Http\Controllers;
use App\Models\Checkin;
use Illuminate\Http\Request;

class CheckinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $checkins = Checkin::orderBy('created_at','desc')->get();

        return view('check_in.index', compact('checkins'))
        ->with('i', (request()->input('check_in', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('check_in.create');
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
            'payment' => 'required',
        ]);
        Checkin::create($request->all());

        return redirect()->route('check_in.index')
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
            $checkin = Checkin::find($id);
            return view('check_in.payment',compact('checkin'));
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
            'nama_tamu' => 'required',
            'jumlah_tamu' => 'required',
            'tgl_cekin' => 'required',
            'tgl_cekout' => 'required',
            'payment' => 'required',
        ]);

        
        Checkin::find($id)->update($request->all());
        return redirect()->route('check_in.index')
            ->with('success', 'Berhasil Di Edit !');
    }


    public function payment($id) 
    { 

    $checkin = Checkin::find($id);
    return view('check_in.payment', compact('checkin'));

    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($checkin)
    {   
        $checkinid = Checkin::find($checkin);
        $checkinid->delete();

        return redirect()->route('check_in.index')
            ->with('success', 'Data Berhasil Hapus !');
    }
}
