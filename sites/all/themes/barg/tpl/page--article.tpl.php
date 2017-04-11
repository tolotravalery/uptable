<?php require_once(drupal_get_path('theme','barg').'/tpl/header.tpl.php');?>
<?php
	if (isset($node->field_sidebar) && !empty($node->field_sidebar)) {
		$sidebar = $node->field_sidebar['und'][0]['value'];
	} else $sidebar = 'right';

	if ($sidebar == 'left' || $sidebar == 'right' ||$sidebar == 'full') {
		$blog_class = 'col-sm-12';
	} else $blog_class = 'col-md-12';
	
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
            <div class="bordered_block <?php print $blog_class; ?> grey_border">
                
                <div class="container">
                    <div class="row">
                    <?php if ($sidebar == 'left') { ?>
                    	<?php if ($page['content']): ?>
						<div class="col-md-9 col-md-push-3 col-xs-12">
							<?php
								if (!empty($tabs['#primary']) || !empty($tabs['#secondary'])):
									print render($tabs);
								endif;
								print $messages;
							?>
							<?php print render($page['content']) ?>
						</div>
						<?php endif; ?>
						<?php if ($page['sidebar']): ?>
						<!--Sidebar-->
                        <div class="col-md-3 col-md-pull-9 hidden-xs hidden-sm">
                        <?php print render($page['sidebar']) ?>
                        </div>
                    	<?php endif; ?>
                    <?php } elseif ($sidebar == 'right') { ?>
						<?php if ($page['content']): ?>
						<div class="col-md-9 col-xs-12">
							<?php
								if (!empty($tabs['#primary']) || !empty($tabs['#secondary'])):
									print render($tabs);
								endif;
								print $messages;
							?>
							<?php print render($page['content']) ?>
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
                            <div class="masonry row">
                            <?php
								if (!empty($tabs['#primary']) || !empty($tabs['#secondary'])):
									print render($tabs);
								endif;
								print $messages;
							?>
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
<div class="clear"></div>

<?php require_once(drupal_get_path('theme','barg').'/tpl/footer.tpl.php');?>