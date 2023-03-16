<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RetrieveUrlController extends Controller
{
    public function retrieve(string $id)
    {
        return response()->redirectTo(
            'https://google.com',
            Response::HTTP_PERMANENTLY_REDIRECT
        );
    }
}
