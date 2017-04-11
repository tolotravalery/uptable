<?php
	if (isset($_GET['style']) && !empty($_GET['style'])) {
		$shop_style = $_GET['style'];
	} else $shop_style = theme_get_setting('shop_style', 'barg');
	if (empty($shop_style)) $shop_style = 'right';
?>
<?php
	if ($shop_style == 'left' || $shop_style == 'right' || $shop_style == 'full_two') {
		print views_embed_view('_barg_shop_catalog','block_shop_two_columns');
	} elseif ($shop_style == 'full_three') {
		print views_embed_view('_barg_shop_catalog','block_shop_three_columns');
	} else {
		print views_embed_view('_barg_shop_catalog','block_shop_four_columns');
	}

?>