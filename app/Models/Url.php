<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Url extends Model
{
    protected $fillable = [
        'url',
        'shorten',
    ];

    public function setShortenUrl(): void
    {
        $shorten = Str::random(10);

        $this->shorten = $shorten;
    }
}
