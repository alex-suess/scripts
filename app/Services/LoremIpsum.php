<?php

namespace App\Services;

use Illuminate\Support\Str;

class LoremIpsum
{
    public function getDummyText($chars = null)
    {
        if ($chars && $chars < config('services.lorem.chars')) {
            return Str::substr(config('services.lorem.text'), 0, $chars);
        }
        return config('services.lorem.text');
    }
}
