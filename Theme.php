<?php

namespace BasicApp\Themes\ComingSoon;

use PhpTheme\Core\HtmlHelper;

class Theme extends \PhpTheme\ComingSoonTheme\Theme
{

    public $baseUrl = '/themes/startbootstrap-coming-soon';

    public function __construct()
    {
        parent::__construct();

        $this->head .= HtmlHelper::linkCss($this->baseUrl . '/custom.css'); 
    }

}