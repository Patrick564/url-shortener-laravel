<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CreateController extends Controller
{
    public function create(Request $request)
    {
        $url = $request->json()->all();

        return response()->json([
            'short_url' => $url['url']
        ]);
    }
}
