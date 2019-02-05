<?php

namespace Theme\ComingSoon;

use PHPTheme;
use PHPTheme\Widget;

class Layout extends Widget
{

	public $content;

	public $title;

	public $background;

	public $subscribeForm;

	public $footer;

    public $width = '40.5rem';

	public function render()
	{
		return PHPTheme::view('layout', [
			'content' => $this->content,
			'title' => $this->title,
			'background' => $this->background,
			'subscribeForm' => $this->subscribeForm,
			'footer' => $this->footer,
            'width' => $this->width
		]);
	}

}
