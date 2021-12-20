<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\items;
use App\Models\categories;
use App\Models\units;
use Validator;
use Illuminate\Support\Facades\DB;
use Auth;

class ItemsController extends Controller
{
       /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = items::all();
        $msg = [
            'data' =>  view('items.items_list', compact('data'))->render()
           
        ];
        return response($msg);
    }


    public function categories()
    {
        $categories = categories::all();
        return response($categories);
    }


    public function units()
    {
        $units = units::all();
        return response($units);
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
        $rules = [
            'barcode' => 'required',
            'name' => 'required',
            'price' => 'required',
            'stock' => 'required'
        ];

        $messages = [
            'barcode.required' => 'Barcode wajib diisi.',
            'name.required' => 'Nama wajib diisi.',
            'price.required' => 'Price wajib diisi.',
            'stock.required' => 'Stock wajib diisi.'
        ];

        $validator = Validator::make($request->all(), $rules, $messages);
         
        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()]);
        }

        $data = [
            'barcode' => $request->barcode,
            'name' => $request->name,
            'category' => $request->category,
            'unit' => $request->unit,
            'price' => $request->price,
            'stock' => $request->stock,
            'supplier' => Auth::user()->id
    ];

    
    $items = items::create($data);

    if($items) {
        return response()->json([
            'success' => true,
            'message' => 'Items Created',
            'data'    => $items  
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
    public function update(Request $request)
    {
        $rules = [
            'barcode' => 'required',
            'name' => 'required',
            'price' => 'required',
            'stock' => 'required'
        ];

        $messages = [
            'barcode.required' => 'Barcode wajib diisi.',
            'name.required' => 'Nama wajib diisi.',
            'price.required' => 'Price wajib diisi.',
            'stock.required' => 'Stock wajib diisi.'
        ];

        $validator = Validator::make($request->all(), $rules, $messages);
         
        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()]);
        }

        $data = [
            'barcode' => $request->barcode,
            'name' => $request->name,
            'category' => $request->category,
            'unit' => $request->unit,
            'price' => $request->price,
            'stock' => $request->stock,
            'supplier' => Auth::user()->id  
    ];

    $items =  DB::table('items')->where('id',$request->id)->update([
        'barcode' => $request->barcode,
        'name' => $request->name,
        'category' => $request->category,
        'unit' => $request->unit,
        'price' => $request->price,
        'stock' => $request->stock,
        'supplier' => Auth::user()->id 
    ]);

    if($items) {
        return response()->json([
            'success' => true,
            'message' => 'items Updated',
            'data'    => $items  
        ], 201);

    } 
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
      $hapus =  DB::table('items')->where('id',$id)->delete();
        return response($hapus);
    }
}
