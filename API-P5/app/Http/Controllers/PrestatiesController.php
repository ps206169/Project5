<?php

namespace App\Http\Controllers;

use App\Models\prestaties;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class PrestatiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $request->user()->currentAccessToken()->delete();

        try {
            if($request->has('name')){
                $data = prestaties::where('name', 'like', '%'.$request->name.'%')->get();
            } else if($request->has('sort')){
                $data = prestaties::orderBy($request->sort)->get();
            } else {
                $data = prestaties::all();
            }
            $content = [
                'success' => true,
                'data'    => $data,
                'access_token' => auth()->user()->createToken('API Token')->plainTextToken,
                'token_type' => 'Bearer',
            ];
            return response()->json($content,200);
        } catch (\Throwable $th) {
            Log::emergency(('prestaties', ['error' => $th-getMessage()]));

            $content = [
                'success'   => false,
                'data'      => null,
                'foutmelding' => 'Gegevens kunnen niet getoond worden',
                'access_token' => auth()->user()->createToken('API Token')->plainTextToken,
                'token_type' => 'Bearer'
            ];
        }
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
     * @param  \App\Models\prestaties  $prestaties
     * @return \Illuminate\Http\Response
     */
    public function show(prestaties $prestaties)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\prestaties  $prestaties
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, prestaties $prestaties)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\prestaties  $prestaties
     * @return \Illuminate\Http\Response
     */
    public function destroy(prestaties $prestaties)
    {
        //
    }
}
