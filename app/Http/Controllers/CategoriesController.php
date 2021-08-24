<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\categories;
use Validator;
use Illuminate\Support\Facades\DB;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = categories::all();
        $msg = [
            'data' =>  view('categories.categories_list', compact('data'))->render()
           
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
            'name' => $request->name
    ];

    
    $categories = categories::create($data);

    if($categories) {
        return response()->json([
            'success' => true,
            'message' => 'Categories Created',
            'data'    => $categories  
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
            'name' => $request->name
    ];

    $categories =  DB::table('categories')->where('id',$request->id)->update([
        'name' => $request->name
    ]);

    if($categories) {
        return response()->json([
            'success' => true,
            'message' => 'Categories Updated',
            'data'    => $categories  
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
      $hapus =  DB::table('categories')->where('id',$id)->delete();
        return response($hapus);
    }
}
