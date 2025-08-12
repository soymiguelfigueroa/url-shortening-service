<?php

namespace App\Http\Controllers;

use App\Models\Url;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class UrlController extends Controller
{
    public function store(Request $request): JsonResponse
    {
        $validated = $request->validate([
            'url' => 'required|url'
        ]);

        $url = new Url();
        $url->url = $validated['url'];
        $url->setShortenUrl();
        $url->save();

        return Response()->json([$url], 201);
    }
}
