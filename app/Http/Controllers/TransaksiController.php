<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\items;
use App\Models\transaksi_sementara;
use Illuminate\Support\Facades\DB;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = items::all();
        return view('transaksi', compact('data'));
    }

    public function invoice(Request $request)
    {

        $barcode = $request->barcode;
        $qty = 2;
        $data = DB::table('items')
                ->where('barcode', $barcode)
                ->first();
        

        $data2 = [
                    'barcode' => $barcode,
                    'product' => $data->name,
                    'price' => $data->price,
                    'qty' => $qty,
                ];

        

        $transaksi_sementara = transaksi_sementara::create($data2);

        return $transaksi_sementara;
    }


    public function list_transaksi(Request $request)
    {
        $data = [
            'barcode' => $request->barcode,
            'product' => $request->product,
            'price' => $request->price,
            'qty' => $request->qty,
            'discount' => $request->discount,
            'total' => $request->total,
    ];

    
    $transaksi_sementara = transaksi_sementara::create($data);
    }





    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
