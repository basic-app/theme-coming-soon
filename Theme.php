<?php

namespace BasicApp\Themes\ComingSoon;

use BasicApp\Helpers\HtmlHelper;

class Theme extends \PhpTheme\Themes\ComingSoon\Theme
{

    public $baseUrl = '/themes/startbootstrap-coming-soon';

    public function __construct()
    {
        parent::__construct();

        $this->head .= HtmlHelper::linkCss($this->baseUrl . '/custom.css'); 
    }

}