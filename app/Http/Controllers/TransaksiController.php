<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\items;
use App\Models\transaksi_sementara;
use App\Models\transaksi;
use Illuminate\Support\Facades\DB;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $data = items::all();
        $id_penjualan = $id;

        $data_transaksi = DB::table('transaksi_sementara')
                          ->where('id_penjualan', $id_penjualan)
                          ->get();
        return view('transaksi.transaksi', compact('data','data_transaksi','id_penjualan'));
    }

    public function index_transaksi(Request $request)
    {
        $id =  $request->id;
        $data_transaksi = DB::table('transaksi_sementara')
        ->where('id_penjualan', $id)
        ->get();

        $msg = [
            'data' => view('transaksi.transaksi_list',compact('data_transaksi'))->render(),
            'transaksi' => $data_transaksi
        ];

        return response($msg);
    }

    public function change_qty(Request $request)
    {
        $data_transaksi = DB::table('transaksi_sementara')
        ->where('id', $request->id)
        ->first();

        $jumlah = $data_transaksi->subtotal * $request->qty;
        $qty =  DB::table('transaksi_sementara')->where('id',$request->id)->update([
            'qty' => $request->qty,
            'subtotal' => $jumlah
        ]);

        return response($qty);
    }

    public function invoice(Request $request)
    {
        $barcode = $request->barcode;
        $id_penjualan = $request->id_penjualan;
        $data = DB::table('items')
                ->where('barcode', $barcode)
                ->first();
        

        $data2 = [
                    'id_penjualan' => $id_penjualan,
                    'barcode' => $barcode,
                    'nama' => $data->name,
                    'price' => $data->price,
                    'qty' => 0,
                    'diskon' => 0,
                    'subtotal' => $data->price
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


    public function id_penjualan()
    {
        $q=DB::table('transaksi_sementara')->select('id_penjualan')->orderBy('id_penjualan', 'desc')->limit(1)->get();
        foreach ($q as $no) {
        $id = $no->id_penjualan + 1;
        $id_penjualan = ['id_penjualan' => $id ];
        } 
        return response($id_penjualan);
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
        $data = [
            'date' => $request->date,
            'kasir' => $request->kasir,
            'customer' => $request->customer,
            'total' => $request->grand_total,
            'note' => $request->note,
            'id_penjualan' => $request->id_penjualan,
    ];

    $transaksi = transaksi::create($data);

    
         // Melakukan Pengurangan pada setiap transaksi

         $data_transaksi = DB::table('transaksi_sementara')
        ->where('id', $request->id_penjualan)
        ->first();



         $items = DB::table('items')
         ->where('barcode', $data_transaksi->barcode)
         ->first();
 
          $stock = ($items->stock - $data_transaksi->qty) ;
 
 
          $items =  DB::table('items')->where('barcode',$data_transaksi->barcode)->update([
                      'stock' => $stock,
                  ]);
 
 
         //##########################################################################

         

    if($transaksi) {
        return response()->json([
            'success' => true,
            'message' => 'transaksi Created',
            'data'    => $transaksi  
        ], 201);

    }

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
    public function destroy(Request $request)
    {
        $id = $request->id;
        $hapus =  DB::table('transaksi_sementara')->where('id',$id)->delete();
          return response($hapus);
    }
}
