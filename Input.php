<?php

namespace Theme\ComingSoon;

use PHPTheme;
use PHPTheme\Widget;

class Input extends Widget
{

	public $name;

	public $label;

	public $value;

	public $error;

	public $options;

	public $type = 'text';

	public function render()
	{
		$options = $this->options;

		if ($this->error)
		{
			$options['style'] = 'background-color: LightPink;';
		}

		$options['class'] = 'form-control';

		$options['aria-describedby'] = 'basic-addon';

		$options['aria-label'] = $this->label;

		$options['placeholder'] = $this->label;

		return PHPTheme::view('input', [
			'name' => $this->name,
			'value' => $this->value,
			'error' => $this->error,
			'label' => $this->label,
			'type' => $this->type,
			'options' => $this->options
		]);
	}

}
