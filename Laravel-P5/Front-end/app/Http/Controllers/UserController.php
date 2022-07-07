<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $response = [
            'success' => true,
            'data'    => User::All(),
            // 'data'    => Functie::with('prestaties')->get(),
            'access_token' => auth()->user()->createToken('API Token')->plainTextToken,
            'token_type' => 'Bearer'
        ];
        return response()->json($response, 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Log::info('create user', ['ip'=>$request->ip(), 'data'=> $request->all()]);
        $validator = Validator::make($request->all(), [
            'email' => 'email',
            'name' => 'required',
            'password' => 'required'
        ]);
        if($validator->fails()){
            Log::error("create user error");
            return response('{"Error":"Wrong data entry"}',400)->header('Content-Type','application/json');
        }
        else return User::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        $response = [
            'success' => true,
            'data'    =>  $user,
            'access_token' => auth()->user()->createToken('API Token')->plainTextToken,
            'token_type' => 'Bearer'
        ];
        return response()->json($response, 200);  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        Log::info('Update user', ['ip' => $request->ip(), 'old' => $user, 'new' => $request->all()]);
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email'=> 'email',
            'password'=> 'required',
        ]);
        if($validator->fails())
        {
            Log::error("Update user error");
            return response('{"Error":"Data entry error"}', 400)->header('Content-Type','application/json');
        }

        $user->update($request->all());
        return $user;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        Log::info('delete user', ['data'=>$user]);
        $user->delete();
    }
}
