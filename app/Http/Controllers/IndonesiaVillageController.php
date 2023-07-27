<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\IndonesiaVillage;

class IndonesiaVillageController extends Controller
{
    public function index()
    {
        $desa = IndonesiaVillage::all();
        return response()->json($desa);
    }

    public function show($id)
    {
        $desa = IndonesiaVillage::findOrFail($id);
        return response()->json($desa);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), IndonesiaVillage::rules());

        if ($validator->fails()) {
            return response()->json([
                'message' => 'Error storing',
                'errors' => $validator->errors(),
            ], 422); // 422 Unprocessable Entity
        }

        $desa = IndonesiaVillage::create($request->all());
        return response()->json($desa, 201);
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), IndonesiaVillage::rules($id));

        if ($validator->fails()) {
            return response()->json([
                'message' => 'Error updating',
                'errors' => $validator->errors(),
            ], 422); // 422 Unprocessable Entity
        }
        $desa = IndonesiaVillage::findOrFail($id);
        $desa->update($request->all());
        return response()->json($desa, 200);
    }

    public function destroy($id)
    {
        $desa = IndonesiaVillage::findOrFail($id);
        $desa->delete();
        return response()->json('deleted successfully', 200);
    }
}
