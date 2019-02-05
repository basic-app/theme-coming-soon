<?php if($message):?>

<div style="height: 58px;">

	<p><?= PHPTheme::escape($message);?></p>

</div>

<?php else:?>

<?= PHPTheme::tagOpen('form', $options);?>

	<div class="input-group input-group-newsletter">

		<?php foreach($fields as $field):?>

			<?= PHPTheme::widget('field', $field);?>

		<?php endforeach;?>

		<div class="input-group-append">
		
			<button class="btn btn-secondary" type="submit"><?= $submit;?></button>
		
		</div>

	</div>

<?= PHPTheme::tagClose('form');?>

<script type="text/javascript">

	<?php foreach($errors as $key => $error):?>

		alert("<?= PHPTheme::escape($error);?>");

		<?php break;?>

	<?php endforeach;?>

</script>

<?php endif;?>