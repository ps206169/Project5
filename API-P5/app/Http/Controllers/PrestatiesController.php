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
            Log::emergency('werknemers', ['error' => $th->getMessage()]);

            $content = [
                'success'   => false,
                'data'      => null,
                'foutmelding' => 'Gegevens kunnen niet getoond worden',
                'access_token' => auth()->user()->createToken('API Token')->plainTextToken,
                'token_type' => 'Bearer',
            ];
            return response()->json($content,500);
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
        $request->user()->currentAccessToken()->delete();

        try{
            Log::info(
                'prestaties toevoegen',
                ['ip' => $request->ip(),
                'data' => $request->all(),
                'user' => $request->user()->email
            ]);
            $validator = Validator::make($request->all(), [
                'email' => 'email',
                'name' => 'required'
            ]);
            if ($validator->fails()){
                Log::error("Prestatie toevoegen fout");
                $content = [
                    'success'   => false,
                    'data'      => $request->all(),
                    'foutmelding' => 'Data niet correct',
                    'access_token' => auth()->user()->createToken('API Token')->plainTextToken,
                    'token_type' => 'Bearer'
                ];
                return response()->json($content,400);
            } else {
                $content = [
                    'success'   => true,
                    'data'      => prestaties::create($request->all()),
                    'access_token' => auth()->user()->createToken('API Token')->plainTextToken,
                    'token_type' => 'Bearer'
                ];
                return response()->json($content, 201);
            }
        } catch (\throwable $th){
            Log::emergency('Prestaties toevoegen', ['error' => $th->getMessage()]);
            $content = [
                'success'   => false,
                'data'      => null,
                'foutmelding' => 'Gegevens kunnen niet toegevoegd worden.',
                'access_token' => auth()->user()->createToken('API Token')->plainTextToken,
                'token_type' => 'Bearer'
            ];
            return response()->json($content,500);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\prestaties  $prestaties
     * @return \Illuminate\Http\Response
     */
    public function show(prestaties $prestaties)
    {
        $request->user()->currentAccessToken()->delete();
        try{
            $content = [
                'succes' => true,
                'data'   => $prestaties,
                'access_token' => auth()->user()->createToken('API Token')->plainTextToken,
                'token_type' => 'Bearer'
            ];
            return response()->json($content, 200);
        }catch (\Throwable $th){
            Log::emergency('Toon prestatie', ['error' => $th->getMessage()]);
            $content = [
                'succes' => false,
                'data'   => null,
                'foutmelding' => 'Gegevens kunnen niet getoond worden.',
                'acces_token' => auth()->user()->createToken('API Token')->plainTextToken,
                'token_type' => 'Bearer'
            ];
            return response()->json($content, 500);
        }
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
        $request->user()->currentAccessToken()->delete();
        try {
            Log::info('Prestatie wijziging', ['ip' => $request->ip(), 'oud' => $prestaties, 'nieuw' => $request->all()]);

            $validator = Validator::make($request->all(), [
                'name' => 'required',
                'email' => 'email',
            ]);
            if ($validator->fails()){
                Log::error("Prestatie wijziging fout");
                $content = [
                    'succes' => false,
                    'data'   => $request->all(),
                    'foutmelding' => 'Gewijzigde data niet correct',
                    'acces_token' => auth()->user()->createToken('API Token')->plainTextToken,
                    'token_type' => 'Bearer'
                ];
            }
            else {
                $content = [
                    'succes' => $prestaties->update($request->all()),
                    'data'   => $request->all(),
                    'acces_token' => auth()->user()->createToken('API Token')->plainTextToken,
                    'token_type' => 'Bearer'
                ];
                return response()->json($content, 400);
            }

        } catch (\Throwable $th){
            Log::emergency('Prestaties wijzigen', ['error' => $th->getMessages()]);
            $content = [
                'succes' => false,
                'data'   => null,
                'foutmelding' => 'Gegevens kunnen niet gewijzigd worden.',
                'acces_token' => auth()->user()->createToken('API Token')->plainTextToken,
                'token_type' => 'Bearer'

            ];
            return response()->json($content, 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\prestaties  $prestaties
     * @return \Illuminate\Http\Response
     */
    public function destroy(prestaties $prestaties)
    {
        $request->user()->currentAccessToken()->delete();
        try{
            Log::info('Prestaties verwijderen', ['data' => $prestaties]);
            $prestaties->delete();

            $content = [
                'succes' => true,
                'data'   => $prestaties,
                'access_token' => auth()->user()->createToken('API Token')->plainTextToken,
                'token_type' => 'Bearer'
            ];
            return response()->json($content, 202);
          }
          catch(\Throwable $th){
            Log::emergency('Prestaties verwijderen', ['error' => $th->getMessage()]);
            $content = [
                'succes' => false,
                'data'   => null,
                'foutmelding' => 'Gegevens kunnen niet verwijderd worden.',
                'acces_token' => auth()->user()->createToken('API Token')->plainTextToken,
                'token_type' => 'Bearer'
            ];
            return response()->json($content, 500);
          }
    }
}
