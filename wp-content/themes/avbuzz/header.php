<!DOCTYPE html>
<?php avbuzz_enqueue_assets();?>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset');?>" />
	<title><?php
		if (is_home()) {
			bloginfo('name');
			echo ' - ';
			bloginfo('description');
		} else {
			wp_title(' - ', true, 'right');
			bloginfo('name');
		} ?></title>
		<?php wp_head(); ?>
		<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">-->
		<!-- Optional theme -->
		<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">-->
		<!-- Latest compiled and minified JavaScript -->
		<!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>-->
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
		<!--<link href="<?php bloginfo('template_directory') ?>/style.css"	media="screen" rel="stylesheet" type="text/css" />-->
		<!-- Latest compiled and minified CSS -->

	</head>
	<body class="index-body">
