<?php

include('defs.php');

if (isset($_GET['p']) && in_array($_GET['p'], array('home','performance','teaching','translation_editing')))
	$page = $_GET['p'];
else
	$page = 'home';

?>
<!DOCTYPE html>
<html
	<head>
		<title>Alexandra Grabarchuk</title>
		<style data-file="main.css">
			<?php readfile(MAINCSS); ?>
			<?php readfile(FANCYBOX_CSS); ?>
		</style>
		<script type="text/javascript" data-file="jquery-1.8.3.min.js"><?php readfile(JQUERY); ?></script>
		<script type="text/javascript" data-file="jquery-colors.min.js"><?php readfile(JCOLOR); ?></script>
		<script type="text/javascript" data-file="main.js"><?php readfile(MAINJS); ?></script>
		<script type="text/javascript" data-file="fancybox.2.1.4.js"><?php readfile(FANCYBOX_JS); ?></script>
	</head>
	<body page="<?php echo $page; ?>">
		<div id="left">
			<div class="img" page="home">
				<img src="<?php echo IMG; ?>/home.png" page="home" />
			</div>
			<div class="img" page="performance">
				<img src="<?php echo IMG; ?>/performance.png" page="performance" />
			</div>
			<div class="img" page="teaching">
				<img src="<?php echo IMG; ?>/academe.png" page="teaching" />
			</div>
			<div class="img" page="translation_editing">
			</div>
		</div>
		<div id="right">
			<?php include(TEMPLATE_NAV); ?>
			<?php include(TEMPLATE_HOME); ?>
			<?php include(TEMPLATE_MUSIC); ?>
			<?php include(TEMPLATE_TEACHING); ?>
			<?php include(TEMPLATE_TRANSLATION_EDITING); ?>
		</div>
		<div id="contactInfo">
			<span>&copy; <?= date('Y') ?> Alexandra Grabarchuk</span> |
			<span>contact <a href="mailto:shoora84@gmail.com">shoora84@gmail.com</a></span> |
			<span>construction <a href="http://baxterross.com/tautology">Tautology</a>
		</div>
	</body>
</html>
