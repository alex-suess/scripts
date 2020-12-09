<?php

namespace App\Services;

use Illuminate\Support\Str;

class LoremIpsum
{
    public function getText($chars = null)
    {
        return Str::substr(config('services.lorem.string'), 0, $chars ?? config('services.lorem.chars'));
    }
}
