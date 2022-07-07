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
        // Zie https://laravel.com/docs/9.x/sanctum

        // Verwijder de actuele token
        $request->user()->currentAccessToken()->delete();

        try {
            if ($request->has('userId')) {
                $data = prestaties::where('userId', 'like', '%' . $request->userId . '%')->get();
            } else if ($request->has('sort')) {
                $data =  prestaties::orderBy($request->sort)->get();
            } else {
                $data = prestaties::all();
            }
            $content = [
                'success' => true,
                'data'    => $data,
                'access_token' => auth()->user()->createToken('API Token')->plainTextToken,
                'token_type' => 'Bearer',
            ];
            return response()->json($content, 200);
        } catch (\Throwable $th) {
            Log::emergency('prestaties', ['error' => $th->getMessage()]);

            $content = [
                'success' => false,
                'data'    => null,
                'foutmelding' => 'Gegegevens kunnen niet getoond worden',
                'access_token' => auth()->user()->createToken('API Token')->plainTextToken,
                'token_type' => 'Bearer'
            ];
            return response()->json($content, 500);
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
        // Verwijder de actuele token
        $request->user()->currentAccessToken()->delete();

        try {
            Log::info(
                'prestaties toevoegen', 
                ['ip' => $request->ip(), 
                'data' => $request->all(),
                'user' => $request->user()->email
            ]);
            $validator = Validator::make($request->all(), [
                'userId' => 'required',
                'excerciseId' => 'required'
            ]);
            if ($validator->fails()) {
                Log::error("prestaties toevoegen Fout");
                $content = [
                    'success' => false,
                    'data'    => $request->all(),
                    'foutmelding' => 'Data niet correct',
                    'access_token' => auth()->user()->createToken('API Token')->plainTextToken,
                    'token_type' => 'Bearer'
                ];
                return response()->json($content, 400);
            } else {
                $content = [
                    'success' => true,
                    'data'    => prestaties::create($request->all()),
                    'access_token' => auth()->user()->createToken('API Token')->plainTextToken,
                    'token_type' => 'Bearer'
                ];
                return response()->json($content, 201);
                return prestaties::create($request->all());
            }
        } catch (\Throwable $th) {
            Log::emergency('prestaties toevoegen', ['error' => $th->getMessage()]);
            $content = [
                'success' => false,
                'data'    => null,
                'foutmelding' => 'Gegegevens kunnen niet toegevoegd worden.',
                'access_token' => auth()->user()->createToken('API Token')->plainTextToken,
                'token_type' => 'Bearer'
            ];
            return response()->json($content, 500);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\prestaties  $prestaties
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, prestaties $prestaties)
    {
        // Verwijder de actuele token
        $request->user()->currentAccessToken()->delete();
        try {
            $content = [
                'success' => true,
                'data'    => $prestaties,
                'access_token' => auth()->user()->createToken('API Token')->plainTextToken,
                'token_type' => 'Bearer'
            ];
            return response()->json($content, 200);
        } catch (\Throwable $th) {
            Log::emergency('prestaties tonen', ['error' => $th->getMessage()]);
            $content = [
                'success' => false,
                'data'    => null,
                'foutmelding' => 'Gegegevens kunnen niet getoond worden',
                'access_token' => auth()->user()->createToken('API Token')->plainTextToken,
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
        // Verwijder de actuele token
        $request->user()->currentAccessToken()->delete();
        try {
            Log::info('prestaties wijzigen', ['ip' => $request->ip(), 'oud' => $prestaties, 'nieuw' => $request->all()]);

            $validator = Validator::make($request->all(), [
                'userId' => 'required',
                'password' => 'email',
            ]);
            if ($validator->fails()) {
                Log::error("prestaties wijzigen Fout");
                $content = [
                    'success' => false,
                    'data'    => $request->all(),
                    'foutmelding' => 'Gewijzigde data niet correct',
                    'access_token' => auth()->user()->createToken('API Token')->plainTextToken,
                    'token_type' => 'Bearer'
                ];
                return response()->json($content, 400);
            } else {
                $content = [
                    'success' => $prestaties->update($request->all()),
                    'data'    => $request->all(),
                    'access_token' => auth()->user()->createToken('API Token')->plainTextToken,
                    'token_type' => 'Bearer'
                ];
                return response()->json($content, 200);
            }
        } catch (\Throwable $th) {
            Log::emergency('prestaties wijzigen', ['error' => $th->getMessage()]);
            $content = [
                'success' => false,
                'data'    => null,
                'foutmelding' => 'Gegegevens kunnen niet gewijzigd worden.',
                'access_token' => auth()->user()->createToken('API Token')->plainTextToken,
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
    public function destroy(Request $request, prestaties $prestaties)
    {
        // Verwijder de actuele token
        $request->user()->currentAccessToken()->delete();
        try {
            Log::info('prestaties verwijderen', ['data' => $prestaties]);
            $prestaties->delete();

            $content = [
                'success' => true,
                'data'    => $prestaties,
                'access_token' => auth()->user()->createToken('API Token')->plainTextToken,
                'token_type' => 'Bearer'
            ];
            return response()->json($content, 202);
        } catch (\Throwable $th) {
            Log::emergency('prestaties verwijderen', ['error' => $th->getMessage()]);
            $content = [
                'success' => false,
                'data'    => null,
                'foutmelding' => 'Gegegevens kunnen niet verwijderd worden.',
                'access_token' => auth()->user()->createToken('API Token')->plainTextToken,
                'token_type' => 'Bearer'
            ];
            return response()->json($content, 500);
        }
    }

    public function indexUser(Request $request, $id)
    {
        try {
            if ($request->has('sort')) {
                $data =  prestaties::where('userId', $id)->orderBy($request->sort)->get();
            } else {
                $data = prestaties::where('userId', $id)->get();
            }

            $content = [
                'success' => true,
                'data'    => $data,
                'access_token' => auth()->user()->createToken('API Token')->plainTextToken,
                'token_type' => 'Bearer'
            ];
            return response()->json($content, 200);
        } catch (\Throwable $th) {
            Log::emergency('user per prestaties', ['error' => $th->getMessage()]);
            $content = [
                'success' => false,
                'data'    => null,
                'foutmelding' => 'Gegegevens kunnen niet getoond worden',
                'access_token' => auth()->user()->createToken('API Token')->plainTextToken,
                'token_type' => 'Bearer'
            ];
            return response()->json($content, 500);
        }
    }
}
