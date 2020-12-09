<?php

namespace App\Http\Controllers;

use App\Services\TextManipulation;
use Illuminate\Http\Request;

class TextsController extends Controller
{
    public function showRemoveSlashes()
    {
        return view('texts-slashes-remove', [
            'removedResult' => '',
            'input'         => '',
        ]);
    }

    public function showAddSlashes()
    {
        return view('texts-slashes-add', [
            'addedResult' => '',
            'input'         => '',
        ]);
    }

    public function addSlashes(Request $request)
    {
        $service = new TextManipulation();
        return view('texts-slashes-add', [
            'addedResult' => $service->removeEscapes($request->input('html')),
            'input'         => $request->input('html'),
        ]);
    }

    public function removeSlashes(Request $request)
    {
        $service = new TextManipulation();
        return view('texts-slashes-remove', [
            'removedResult' => $service->removeEscapes($request->input('html')),
            'input'         => $request->input('html'),
        ]);
    }
}
