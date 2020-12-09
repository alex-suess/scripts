<?php

namespace App\Services;

class TextManipulation
{
    public function convertMultilineHtmlToString($html)
    {
        $html = trim(preg_replace('/\s+/', ' ', $html));
        return $html;
    }

    public function removeEscapes($html)
    {
        $html = str_replace('\n', '', $html);
        $html = str_replace('\"', '"', $html);
        $html = str_replace('\/', '/', $html);
        return $this->convertMultilineHtmlToString($html);
    }

    public function addEscapes($html)
    {
        $html = str_replace('"', '\"', $html);
        $html = str_replace('/', '\/', $html);
        return $this->convertMultilineHtmlToString($html);
    }
}
