<?php

namespace App\Http\Controllers;

use App\Services\Html;
use App\Services\TextManipulation;
use Illuminate\Http\Request;

class HtmlController extends Controller
{
    public function showMarkdown()
    {
        return view('html.markdown', [
            'convertedResult' => '',
            'input'         => '',
        ]);
    }

    public function convertToMarkdown(Request $request)
    {
        $service = new Html();
        return view('html.markdown', [
            'convertedResult' => $service->convertToMarkup($request->input('html')),
            'input'         => $request->input('html'),
        ]);
    }
}
