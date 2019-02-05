<?php

namespace Theme\ComingSoon;

use PHPTheme;
use PHPTheme\Widget;

class LayoutFooterButton extends Widget
{

	public $label;

	public $url;

	public $icon; // twitter facebook-f instagram

    public $options = [];

	public function render()
	{
        $options = $this->options;

        $options['href'] = $this->url;

		return PHPTheme::view('layout-footer-button', [
			'label' => $this->label,
			'url' => $this->url,
			'icon' => $this->icon,
            'options' => $options
		]);
	}

}
