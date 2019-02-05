<?php

namespace Theme\ComingSoon;

use PHPTheme;
use PHPTheme\Widget;

class Page extends Widget
{

	public $content;

	public $title;

	public function render()
	{
		return PHPTheme::view('page', [
			'content' => $this->content,
			'title' => $this->title
		]);
	}

}
