<?php
	global $base_url;
	$text_logo = theme_get_setting('text_logo', 'barg');
	if (isset($node->field_image) && !empty($node->field_image))
    {
    	$bg = $node->field_image['und'][0]['uri'];
    	$bg_image = file_create_url($bg);
    } else $bg_image = '';

    if (isset($node->field_opacity) && !empty($node->field_opacity)) {
    	$opacity = $node->field_opacity['und'][0]['value'];
    } else $opacity = "0.5";
    if (isset($node->field_over_background) && !empty($node->field_over_background)) {
    	$over_bg = $node->field_over_background['und'][0]['rgb'];
    } else $over_bg = '#000000';
?>

<!-- Header -->
<header class="no_border">
	<!-- Logo -->
	<div class="logo pull-left">
		<a href="<?php print $base_url; ?>"><b><?php print $text_logo; ?></b></a>
	</div>	
</header>
<!-- Header End -->
<!--Intro-->
<section class="intro" >	
	<div class="intro_item">
		<!-- Over -->
		<div class="over" data-opacity="<?php print $opacity; ?>" data-color="<?php print $over_bg; ?>"></div>
		<div class="into_back image_bck"  data-image="<?php print $bg_image; ?>"></div>
		<?php if($page['content']): ?>
		<div class="inside_intro_block inside_no_header">
			<div class="ins_int_item white_txt bordered_wht_border text-center">
				<div class="simple_block simple_block_sml">
					<?php print render($page['content']); ?>
				</div>
			</div>
		</div>
		<?php endif; ?>
	</div>
</section>
<!-- Intro End -->