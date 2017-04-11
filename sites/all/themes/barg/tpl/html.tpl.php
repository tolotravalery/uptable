<!DOCTYPE html>

<html lang="<?php print $language->language; ?>">

	<head>

		<meta charset="utf-8">

		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<title><?php print $head_title; ?></title>

		<?php print $styles; ?><?php print $head; ?>

		<?php

			//Tracking code

			$tracking_code = theme_get_setting('general_setting_tracking_code', 'barg');

			print $tracking_code;

			//Custom css

			$custom_css = theme_get_setting('custom_css', 'barg');

			if(!empty($custom_css)):

		?>

		<style type="text/css" media="all">

		<?php print $custom_css;?>

		</style>

		<?php

			endif;

		?>

	</head>
	
	<?php

		if(isset($body_class) && !empty($body_class)) {

			$classes = $classes .' '.$body_class;

		} else {

			$body_class = theme_get_setting('body_class', 'barg');

			$classes = $classes .' '.$body_class;

		}

		$bd_class = strpos($body_class, 'no_passpartu');

	?>

	<body class="<?php print $classes;?>"  <?php print $attributes;?> <?php print $body_class ?>>

		<div id="skip-link">

			<a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>

		</div>

	<?php if (empty($body_class) || $bd_class === False): ?>

		<!-- Passpartu -->

		<div class="passpartu passpartu_left"></div>

		<div class="passpartu passpartu_right"></div>

		<div class="passpartu passpartu_top"></div>

		<div class="passpartu passpartu_bottom"></div>

	<?php endif; ?>

		<div class="page" id="page">

			<?php print $page_top; ?><?php print $page; ?><?php print $page_bottom; ?>

		</div>

		<!-- Page End -->

		<?php print $scripts; ?>

	</body>

</html>