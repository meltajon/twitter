<!DOCTYPE html>
<html lang="en-US" prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb#" data-theme="A07 ">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1"/>

<link rel="stylesheet" media="all" href="assets/normalize.css"/>
<link rel="stylesheet" media="all" href="assets/style.css"/>
<link rel="stylesheet" media="all" href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600" />

<title>Twitter Concept</title>
<meta name="description" content="_______"/>


</head>
<body>

<?php include('module-header.php'); ?>

<main id="main">

	<section class="main-panel" id="panel1">

		<?php include('module-profile.php'); ?>

		<?php include('module-media.php'); ?>

		<?php include('module-activities.php'); ?>

	</section>

	<section class="main-panel" id="panel2">

		<?php include('module-tweets-nav.php'); ?>

		<?php include('module-tweets.php'); ?>

	</section><!-- panel2 -->

	<section class="main-panel" id="panel3">

		<div id="asides">

			<?php include('module-trending-topics.php'); ?>

			<?php include('module-follow.php'); ?>

		</div><!-- asides -->

	</section><!-- panel3 -->

</main>

<?php include('module-credits.php'); ?>

</body>
</html>