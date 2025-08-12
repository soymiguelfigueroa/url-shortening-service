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

    public function show(string $shorten): JsonResponse
    {
        $url = Url::where('shorten', $shorten)->firstOrFail();

        return Response()->json([$url], 200);
    }

    public function update(string $shorten, Request $request): JsonResponse
    {
        $validated = $request->validate([
            'url' => 'required|url'
        ]);
        
        $url = Url::where('shorten', $shorten)->firstOrFail();
        $url->url = $validated['url'];
        $url->update();

        return Response()->json([$url], 200);
    }
}
