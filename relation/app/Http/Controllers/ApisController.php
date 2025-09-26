<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Api;
class ApisController extends Controller
{
   public function addApi(Request $req)
{
    try {
    $validated = $req->validate([
        'name'    => 'required|string|max:255',
        'address' => 'required|string|max:500',
    ]);
    $new = Api::create($validated);
        return response()->json([
            'success' => true,
            'data' => $new
        ], 201);

    } catch (\Exception $e) {
        return response()->json([
            'success' => false,
            'error'   => $e->getMessage(),   // মূল error message
            'line'    => $e->getLine(),      // কোন লাইনে error হলো
            'file'    => $e->getFile()       // কোন ফাইলে হলো
        ], 500);
    }
}

 public function update(Request $req, $id)
{
    try {
        $user = Api::find($id);

        if (!$user) {
            return response()->json([
                'success' => false,
                'message' => 'User not found'
            ], 404);
        }

        // Validation
        $validated = $req->validate([
            'name'    => 'required|string|max:255',
            'address' => 'required|string|max:500',
        ]);

        // Update user
        $user->update($validated);

        return response()->json([
            'success' => true,
            'data'    => $user
        ], 200);

    } catch (\Exception $e) {
        return response()->json([
            'success' => false,
            'error'   => $e->getMessage(),
            'line'    => $e->getLine(),
            'file'    => $e->getFile()
        ], 500);
    }
}

 public function delete($id)
{
    $item = Api::find($id);
    if (!$item) {
        return response()->json([
            'success' => false,
            'message' => 'User not found'
        ], 404);
    }

    $item->delete();
    return response()->json([
        'success' => true,
        'message' => 'User deleted successfully',
        'user' => $item
    ]);
}

 public function index()
{
    $allData = Api::all();

    return response()->json([
        'success' => true,
        'data' => $allData
    ]);
}


}
