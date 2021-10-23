<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{
    public function index()
    {
        $data = User::all();
        $msg = [
            'data' =>  view('users.users_list', compact('data'))->render()
           
        ];
        return response($msg);
    }

    public function store(Request $request)
    {
        $rules = [
            'name' => 'required',
            'email' => 'required|unique:users,email',
            'password' => 'required|min:8',
            'password_again' => 'required|same:password'
        ];

        $messages = [
            'name.required' => 'Nama wajib diisi.',
            'email.required' => 'Email wajib diisi.',
            'email.unique' => 'Email Sudah digunakan',
            'password.required' => 'Password wajib diisi.',
            'password.min' => 'Password Harus lebih dari 7 karakter',
            'password_again.required' => 'Password wajib diisi',
            'password_again.same' => 'Password Tidak sama',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);
         
        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()]);
        }

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'role' => $request->role,
            'password' => Hash::make($request->password),
    ];

    
    $user = User::create($data);

    if($user) {
        return response()->json([
            'success' => true,
            'message' => 'User Created',
            'data'    => $user  
        ], 201);

    } 
    }

    public function update(Request $request)
    {
        $rules = [
            'name' => 'required',
            'email' => 'required',
            'password' => 'required|min:8',
            'password_again' => 'required|same:password'
        ];

        $messages = [
            'name.required' => 'Nama wajib diisi.',
            'email.required' => 'Email wajib diisi.',
            'email.unique' => 'Email Sudah digunakan',
            'password.required' => 'Password wajib diisi.',
            'password.min' => 'Password Harus lebih dari 7 karakter',
            'password_again.required' => 'Password wajib diisi',
            'password_again.same' => 'Password Tidak sama',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);
         
        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()]);
        }

        $password = DB::table('users')->where('id',$request->id)->value('password');
        if( ! Hash::check( $request->password , $password) )
        {
            $user = DB::table('users')->where('id',$request->id)->update([
                'name' => $request->name,
                'email' => $request->email,
                'role' => $request->role,
                'password' => Hash::make($request->password),
            ]);   
        }else{
           $user =  DB::table('users')->where('id',$request->id)->update([
                'name' => $request->name,
                'email' => $request->email,
                'role' => $request->role,
                'password' => Hash::make($request->password),
            ]);
        }

    if($user) {
        return response()->json([
            'success' => true,
            'message' => 'User Updated',
            'data'    => $user  
        ], 201);

    } 
    }

    public function destroy(Request $request)
    {
        $id = $request->id;
      $hapus =  DB::table('users')->where('id',$id)->delete();
        return response($hapus);
    }

}
