<?php

namespace App\Http\Controllers;

use App\Services\HtmlMarkdown;
use App\Services\Math;
use Illuminate\Http\Request;

class MathController extends Controller
{
    public function showPythagoras()
    {
        return view('math.triangle', [
            'length-a' => '',
            'length-b' => '',
            'length-c' => '',
            'alpha' => '',
            'beta' => '',
        ]);
    }

    public function calculatePythagoras(Request $request)
    {
        $service = new Math();
        $result = $service->pythagoras($request->all());
        return view('math.triangle', [
            'lengthA' => $result['length-a'],
            'lengthB' => $result['length-b'],
            'lengthC' => $result['length-c'],
            'alpha' => $result['alpha'],
            'beta' => $result['beta'],
        ]);
    }
}
