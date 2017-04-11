<?php require_once(drupal_get_path('theme','barg').'/tpl/header.tpl.php');?>
<?php
	if (isset($_GET['style']) && !empty($_GET['style'])) {
		$shop_style = $_GET['style'];
	} else $shop_style = theme_get_setting('shop_style', 'barg');
	if (empty($shop_style)) $shop_style = 'right';
	$image_id = theme_get_setting('shop_background_breadcrumb','barg');
	if (!empty($image_id)) {
        $shop_bread_background = file_create_url(file_load($image_id)->uri);
    } else $shop_bread_background = base_path().path_to_theme().'/images/shop1.jpg';
?>
<!-- Inside Title -->
<div class="inside_title image_bck bordered_wht_border white_txt" data-image="<?php print $shop_bread_background; ?>">
    <!-- Over -->
    <div class="over" data-opacity="0.2" data-color="#000"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-6"><h1><?php print drupal_get_title(); ?></h1></div>
            <?php if($breadcrumb): ?>
            <div class="col-md-6 text-right"><?php print $breadcrumb; ?></div>
        	<?php endif; ?>
        </div>
    </div>
</div>
<!-- Inside Title End -->
<!-- Content -->
<div class="content">
	<div class="container-fluid">
		
		<div class="row">
			<div class="bordered_block col-md-12 grey_border">				
				<div class="container">
					<div class="row">
					<?php if ($shop_style == 'left') { ?>
                    	<?php if ($page['content']): ?>
						<div class="col-md-9 col-md-push-3 col-xs-12">
							<?php
								if (!empty($tabs['#primary']) || !empty($tabs['#secondary'])):
									print render($tabs);
								endif;
								print $messages;
							?>
							<div class="row masonry">
							<?php print render($page['content']) ?>
							</div>
						</div>
						<?php endif; ?>
						<?php if ($page['sidebar']): ?>
						<!--Sidebar-->
                        <div class="col-md-3 col-md-pull-9 hidden-xs hidden-sm">
                        <?php print render($page['sidebar']) ?>
                        </div>
                    	<?php endif; ?>
                    <?php } elseif ($shop_style == 'right') { ?>
						<?php if ($page['content']): ?>
						<div class="col-md-9 col-xs-12">
							<?php
								if (!empty($tabs['#primary']) || !empty($tabs['#secondary'])):
									print render($tabs);
								endif;
								print $messages;
							?>
							<div class="row masonry">
							<?php print render($page['content']) ?>
							</div>
						</div>
						<?php endif; ?>
						<?php if ($page['sidebar']): ?>
						<!--Sidebar-->
                        <div class="col-md-3 hidden-xs hidden-sm">
                        <?php print render($page['sidebar']) ?>
                        </div>
                    	<?php endif; ?>
                    <?php } else { ?>
						<?php if ($page['content']): ?>
						<div class="col-md-12 col-xs-12">
							<?php
								if (!empty($tabs['#primary']) || !empty($tabs['#secondary'])):
									print render($tabs);
								endif;
								print $messages;
							?>
                            <div class="row masonry">
							<?php print render($page['content']) ?>
							</div>
						</div>
						<?php endif; ?>

                    <?php } ?>

                    </div>
                    <!--Row End-->
                </div>
            </div>
        </div>
        <!-- Row End -->
    </div>
</div>
<!-- Content End -->
<?php require_once(drupal_get_path('theme','barg').'/tpl/footer.tpl.php');?>