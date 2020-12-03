<?php

class MyFunction
{
    public function convertMultilineHtmlToString($html)
    {
        $html = trim(preg_replace('/\s+/', ' ', $html));
        return $html;
    }
}
