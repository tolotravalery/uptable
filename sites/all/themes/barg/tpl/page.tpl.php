<?php require_once(drupal_get_path('theme','barg').'/tpl/header.tpl.php');?>
<?php
	if (isset($node->field_page_title_background) && !empty($node->field_page_title_background)) {
		$image_uri = $node->field_page_title_background['und'][0]['uri'];
		$backgorund_img = file_create_url($image_uri);
	} else $backgorund_img = '';
    if (arg(0) == 'cart' || arg(0) == 'checkout') {
        $image_id = theme_get_setting('shop_background_breadcrumb','barg');
        if (!empty($image_id)) {
            $backgorund_img = file_create_url(file_load($image_id)->uri);
        } else $backgorund_img = base_path().path_to_theme().'/images/shop1.jpg';
    }
?>
<!--test-->
<!-- Inside Title -->
<?php if ($backgorund_img != ''): ?>
<div class="inside_title image_bck bordered_wht_border white_txt" data-image="<?php print $backgorund_img; ?>">
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
<?php else: ?>
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
<?php endif; ?>
<!-- Inside Title End -->

<?php if($page['content'] && (!empty($node->body) || !isset($node))): ?>
<!-- Content -->
<div class="content">
    <div class="container-fluid">        
        <div class="row">
            <div class="bordered_block col-md-12 grey_border">                
                <div class="container">
                    <div class="row">                    
                        <!--Sidebar-->
                        <?php if (arg(0) == 'cart' || arg(0) == 'checkout') { ?>
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
                        <div class="col-md-12 col-xs-12">
						<?php
							if (!empty($tabs['#primary']) || !empty($tabs['#secondary'])):
								print render($tabs);
							endif;
							print $messages;
						?>
						<?php print render($page['content']) ?>
						</div>
                        <!--Sidebar End-->  
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
<?php else: ?>
	<?php
		if (!empty($tabs['#primary']) || !empty($tabs['#secondary'])):
		print render($tabs);
		endif;
		print $messages;
	?>
	<?php print render($page['content']) ?>
<?php endif; ?>
<?php if ($page['section']): ?>
		<?php print render($page['section']); ?>
<?php endif; ?>

<?php require_once(drupal_get_path('theme','barg').'/tpl/footer.tpl.php');?>