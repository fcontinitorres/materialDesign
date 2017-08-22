<!DOCTYPE html>
<html>

<?php $home = get_template_directory_uri(); ?>

<head>
	<meta charset="utf-8">
	<title>P03 Test</title>

	<!--Import Google Icon Font-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!--Import materialize.css-->
	<link type="text/css" rel="stylesheet" href="<?= $home ?>/css/materialize.min.css"  media="screen,projection"/>

	<!-- CSS -->
	<link rel="stylesheet" href="<?= $home ?>/style.css">

	<!--Let browser know website is optimized for mobile-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

	<?php wp_head(); ?>
</head>
<body>