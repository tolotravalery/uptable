<?php
	if (isset($_GET['style']) && !empty($_GET['style'])) {
		$portfolio_style = $_GET['style'];
	} else $portfolio_style = theme_get_setting('portfolio_style', 'barg');
	if (empty($portfolio_style)) $portfolio_style = 'masonry_two';
	if (!empty($row->_field_data['nid']['entity']->field_url)) {
		$link = $row->_field_data['nid']['entity']->field_url['und'][0]['value'];
	} elseif (!empty($row->_field_data['nid']['entity']->field_image)) {
		$uri = $row->_field_data['nid']['entity']->field_image['und'][0]['uri'];
		$link = file_create_url($uri);
	} else $link = '#';
	if (!empty($row->_field_data['nid']['entity']->field_portfolio_format)) {
		$format = $row->_field_data['nid']['entity']->field_portfolio_format['und'][0]['value'];
	} else $format = 'lightbox';
	$image_uri = $row->_field_data['nid']['entity']->field_image['und'][0]['uri'];
	$image = file_create_url($image_uri);
	if ($format == 'video') {
		$icon = 'ti ti-control-play';
	} elseif ($format == 'link') {
		$icon = 'ti ti-link';
	} else {
		$icon = 'ti ti-zoom-in';
	}
?>
<?php if ($portfolio_style == 'masonry_three') { ?>
<div class="col-sm-4 post-snippet masonry-item">
	<a href="<?php print $link; ?>" class="<?php print $format; ?>">
		<img alt="<?php print $row->node_title; ?>" src="<?php print $image; ?>" />
		<span class="potfolio_txt">
			<span class="portfolio_cont text-center">
				<span class="portfolio_title"><?php print $row->node_title; ?> </span>
				<?php if (!empty($row->_field_data['nid']['entity']->field_topic)): ?>
				<span class="portfolio_subtitle"><?php print $row->_field_data['nid']['entity']->field_topic['und'][0]['value']; ?></span>
				<?php endif; ?>
				<span class="<?php print $icon; ?>"></span>
			</span>
		</span>
	</a>
</div>
<?php } else { ?>
<div class="col-sm-6 post-snippet masonry-item">
	<a href="<?php print $link; ?>" class="<?php print $format; ?>">
		<img alt="<?php print $row->node_title; ?>" src="<?php print $image; ?>" />
		<span class="potfolio_txt">
			<span class="portfolio_cont text-center">
				<span class="portfolio_title"><?php print $row->node_title; ?> </span>
				<?php if (!empty($row->_field_data['nid']['entity']->field_topic)): ?>
				<span class="portfolio_subtitle"><?php print $row->_field_data['nid']['entity']->field_topic['und'][0]['value']; ?></span>
				<?php endif; ?>
				<span class="<?php print $icon; ?>"></span>
			</span>
		</span>
	</a>
</div>
<?php } ?>