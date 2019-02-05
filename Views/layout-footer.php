<div class="social-icons">
	<ul class="list-unstyled text-center mb-0">
		<?php foreach($buttons as $button):?>
			<?= PHPTheme::widget('layoutFooterButton', $button);?>
		<?php endforeach;?>
	</ul>
</div>