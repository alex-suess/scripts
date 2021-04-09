<?php

namespace App\Services;

use Illuminate\Support\Arr;

class Math
{
    public function pythagoras($input)
    {
        $lengthA = Arr::get($input, 'length-a');
        $lengthB = Arr::get($input, 'length-b');
        $lengthC = Arr::get($input, 'length-c');
        $alpha = Arr::get($input, 'alpha');
        $beta = Arr::get($input, 'beta');

        //   dd($lengthB);
        if (!$lengthA && $lengthB && $lengthC) {
            $lengthA = sqrt($lengthC * $lengthC - $lengthB * $lengthB);
        }

        if (!$lengthB && $lengthA && $lengthC) {
            $lengthB = sqrt($lengthC * $lengthC - $lengthA * $lengthA);
        }

        if (!$lengthC && $lengthA && $lengthB) {
            $lengthC = sqrt($lengthB * $lengthB + $lengthA * $lengthA);
        }

        if (!$alpha) {
            if ($beta) {
                $alpha = 90 - $beta;
            } elseif ($lengthA && $lengthC) {
                $alpha = asin($lengthA / $lengthC) * (180 / pi());
            } elseif ($lengthB && $lengthA) {
                $alpha = atan($lengthA / $lengthB) * (180 / pi());
            }
        }

        if (!$beta) {
            if ($alpha) {
                $beta = 90 - $alpha;
            } elseif ($lengthB && $lengthC) {
                $beta = asin($lengthB / $lengthC);
            } elseif ($lengthB && $lengthA) {
                $beta = atan($lengthB / $lengthA);
            }
        }

        return [
            'length-a' => $lengthA,
            'length-b' => $lengthB,
            'length-c' => $lengthC,
            'alpha' => $alpha,
            'beta' => $beta,
        ];
    }
}
