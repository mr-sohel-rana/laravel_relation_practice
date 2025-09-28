<?php

namespace App\Http\Controllers;

use App\Models\Sohel;
use Illuminate\Http\Request;

class SohelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try{
            $all=Sohel::get();
            if(!$all){
                return("data not found");
            }
            return response()->json([
                'success'=>true,
                'datas'=>$all
            ]);
        }catch(\Exception $e){
             return response()->json([
                'success'=>false,
                'error'=>$e->getMessage(),
                'line'=>$e->getLine(),
                'file'=>$e->getFile()

            ],500);

        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
     public function store(Request $request)
{
    try {
        $validated = $request->validate([
            'name'    => 'required|string',
            'address' => 'required|string',
            'age'     => 'required|integer',
        ]);

        $new = Sohel::create($validated);

        return response()->json([
            'success' => true,
            'data'    => $new
        ]);
    } catch (\Exception $e) {
        return response()->json([
            'success' => false,
            'error'   => $e->getMessage(),
            'line'    => $e->getLine(),
            'file'    => $e->getFile()
        ], 500);
    }
}


    /**
     * Display the specified resource.
     */
    public function show(Sohel $sohel)
    {
         try {
        if (!$sohel) {
            return response()->json([
                'success' => false,
                'message' => 'Data not found'
            ], 404);
        }

        return response()->json([
            'success' => true,
            'data'    => $sohel
        ]);
    } catch (\Exception $e) {
        return response()->json([
            'success' => false,
            'error'   => $e->getMessage(),
            'line'    => $e->getLine(),
            'file'    => $e->getFile()
        ], 500);
    }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sohel $sohel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Sohel $sohel)
    {
        try {
        $validated = $request->validate([
            'name'    => 'required|string',
            'address' => 'required|string',
            'age'     => 'required|integer',
        ]);

        $sohel->update($validated);

        return response()->json([
            'success' => true,
            'data'    =>  $sohel
        ]);
    } catch (\Exception $e) {
        return response()->json([
            'success' => false,
            'error'   => $e->getMessage(),
            'line'    => $e->getLine(),
            'file'    => $e->getFile()
        ], 500);
    }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sohel $sohel)
    {
       try {
        $sohel->delete();
        return response()->json([
            'success' => true,
            'data'    =>  $sohel
        ]);
    } catch (\Exception $e) {
        return response()->json([
            'success' => false,
            'error'   => $e->getMessage(),
            'line'    => $e->getLine(),
            'file'    => $e->getFile()
        ], 500);
    }
    }
}
