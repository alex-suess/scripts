<?php

namespace App\Services;

use League\HTMLToMarkdown\HtmlConverter;

class Html
{
    public function convertToMarkup($text = '')
    {
        $converter = new HtmlConverter();
        $converter->getConfig()->setOption('strip_tags', true);
        $converter->getConfig()->setOption('use_autolinks', true);
        $converter->getConfig()->setOption('header_style', 'atx');

        return $converter->convert($text);
    }
}
