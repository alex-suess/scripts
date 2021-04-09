<?php

namespace App\Http\Controllers;

use App\Services\HtmlMarkdown;
use Illuminate\Http\Request;

class HtmlController extends Controller
{
    public function showMarkdown()
    {
        return view('html.to-markdown', [
            'convertedResult' => '',
            'input'           => '',
        ]);
    }

    public function convertToMarkdown(Request $request)
    {
        $service = new HtmlMarkdown();
        return view('html.to-markdown', [
            'convertedResult' => $service->convertToMarkup($request->input('html')),
            'input'           => $request->input('html'),
        ]);
    }

    public function showHtml()
    {
        return view('html.to-html', [
            'convertedResult' => '',
            'input'           => '',
        ]);
    }

    public function convertToHtml(Request $request)
    {
        $service = new HtmlMarkdown();
        return view('html.to-html', [
            'convertedResult' => $service->convertToHtml($request->input('html')),
            'input'           => $request->input('html'),
        ]);
    }
}
