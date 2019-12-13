<?php

namespace BasicApp\ComingSoonTheme;

use PhpTheme\Html\HtmlHelper;

class Theme extends ThemeAbstract
{

    public function __construct()
    {
        parent::__construct();

        $this->head .= HtmlHelper::linkCss($this->baseUrl . '/custom.css'); 
    }

}