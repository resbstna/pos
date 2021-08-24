<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\suppliers;
use Validator;
use Illuminate\Support\Facades\DB;

class SuppliersController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = suppliers::all();
        $msg = [
            'data' =>  view('suppliers.suppliers_list', compact('data'))->render()
           
        ];
        return response($msg);
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
            'name' => 'required'
        ];

        $messages = [
            'name.required' => 'Nama wajib diisi.'
        ];

        $validator = Validator::make($request->all(), $rules, $messages);
         
        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()]);
        }

        $data = [
            'name' => $request->name,
            'phone' => $request->phone,
            'address' => $request->address,
            'description' => $request->description,
    ];

    
    $suppliers = suppliers::create($data);

    if($suppliers) {
        return response()->json([
            'success' => true,
            'message' => 'suppliers Created',
            'data'    => $suppliers  
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
            'name' => 'required'
        ];

        $messages = [
            'name.required' => 'Nama wajib diisi.'
        ];

        $validator = Validator::make($request->all(), $rules, $messages);
         
        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()]);
        }

        $data = [
            'name' => $request->name,
            'phone' => $request->phone,
            'address' => $request->address,
            'description' => $request->description,
    ];

    $suppliers =  DB::table('suppliers')->where('id',$request->id)->update([
        'name' => $request->name
    ]);

    if($suppliers) {
        return response()->json([
            'success' => true,
            'message' => 'suppliers Updated',
            'data'    => $suppliers  
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
      $hapus =  DB::table('suppliers')->where('id',$id)->delete();
        return response($hapus);
    }
}
