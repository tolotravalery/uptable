<?php require_once(drupal_get_path('theme','barg').'/tpl/header.tpl.php');?>
<?php
	if (isset($_GET['style']) && !empty($_GET['style'])) {
		$portfolio_style = $_GET['style'];
	} else $portfolio_style = theme_get_setting('portfolio_style', 'barg');
	if (empty($portfolio_style)) $portfolio_style = 'masonry_two';
?>
<!-- Inside Title -->
<div class="inside_title image_bck grey_border" data-color="#f8f8f8">
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
					<?php if ($portfolio_style == 'left') { ?>
                    	<?php if ($page['content']): ?>
						<div class="col-md-9 col-md-push-3 col-xs-12">
							<?php
								if (!empty($tabs['#primary']) || !empty($tabs['#secondary'])):
									print render($tabs);
								endif;
								print $messages;
							?>
							<div class="masonry row">
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
                    <?php } elseif ($portfolio_style == 'right') { ?>
						<?php if ($page['content']): ?>
						<div class="col-md-9 col-xs-12">
							<?php
								if (!empty($tabs['#primary']) || !empty($tabs['#secondary'])):
									print render($tabs);
								endif;
								print $messages;
							?>
							<div class="masonry row">
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
                            <div class="masonry row">
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