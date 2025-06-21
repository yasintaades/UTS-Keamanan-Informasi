<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Supir;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class SupirApiController extends Controller
{
    public function index()
    {
        $supir = Supir::all();

        // encrypt full response
        $encryptedData = Crypt::encryptString($supir->toJson());

        return response()->json([
            'data' => $encryptedData,
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'no_hp' => 'required|string|max:20',
            'sim' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
        ]);

        $supir = Supir::create($validated);

        $responseData = [
            'message' => 'Supir berhasil dibuat',
            'data' => $supir,
        ];

        $encryptedResponse = Crypt::encryptString(json_encode($responseData));

        return response()->json([
            'data' => $encryptedResponse,
        ]);
    }
}
