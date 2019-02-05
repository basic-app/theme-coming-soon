<!DOCTYPE html>
<html lang="<?= PHPTheme::lang();?>">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- Title Page-->
<?php if($title):?><title><?= PHPTheme::escape($title);?></title><?php endif;?>
<!-- Bootstrap core CSS -->
<link href="<?= PHPTheme::url('vendor/bootstrap/css/bootstrap.min.css');?>" rel="stylesheet">
<!-- Custom fonts for this template -->
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Merriweather:300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
<link href="<?= PHPTheme::url('vendor/fontawesome-free/css/all.min.css');?>" rel="stylesheet" type="text/css">
<!-- Custom styles for this template -->
<link href="<?= PHPTheme::url('css/coming-soon.min.css');?>" rel="stylesheet">
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="<?= PHPTheme::url('vendor/jquery/jquery.min.js');?>"></script>
<script type="text/javascript" src="<?= PHPTheme::url('vendor/bootstrap/js/bootstrap.bundle.min.js');?>"></script>
<script type="text/javascript" src="<?= PHPTheme::url('js/pjax2/jquery.pjax.js');?>"></script>
<?php PHPTheme::trigger('page_head');?>
</head>
<style type="text/css">
@media (min-width: 768px)
{
    .masthead {
        width: <?= $width;?>;
    }
}
</style>
<body>
<?php PHPTheme::trigger('page_body_begin');?>
<div class="overlay"></div>
<?php if($background):?>
	<img style="min-width: 100%; min-height: 100%; position: fixed; left: 0; top: 0;" src="<?= $background;?>">
<?php else:?>
	<video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop"><source src="<?= PHPTheme::url('mp4/bg.mp4');?>" type="video/mp4"></video>
<?php endif;?>
<div class="masthead">
	<div class="masthead-bg"></div>
	<div class="container h-100">
		<div class="row h-100">
			<div class="col-12 my-auto">
				<div class="masthead-content text-white py-5 py-md-0">
					<?= $content;?>
					<?php if($subscribeForm):?><?= PHPTheme::widget('layoutSubscribeForm', $subscribeForm);?><?php endif;?>
				</div>
			</div>
		</div>
	</div>
</div>
<?php if($footer):?><?= PHPTheme::widget('layoutFooter', $footer);?><?php endif;?>
<!-- Custom scripts for this template -->
<script src="<?= PHPTheme::url('js/coming-soon.min.js');?>"></script>
<?php PHPTheme::trigger('page_body_end');?>
</body>
</html>