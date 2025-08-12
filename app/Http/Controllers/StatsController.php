<?php

namespace App\Http\Controllers;

use App\Models\Url;
use Illuminate\Http\Request;

class StatsController extends Controller
{
    public function showStats(string $shorten)
    {
        $url = Url::where('shorten', $shorten)->firstOrFail();

        return Response()->json(['access_count' => $url['access_count']], 200);
    }
}
