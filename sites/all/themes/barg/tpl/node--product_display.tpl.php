<?php
/**
 * @file
 * Default theme implementation to display a node.
 */
	global $base_root, $base_url;

  	if(isset($content['product:field_image'])) {
    	$ni = count($content['product:field_image']['#items']);
    	$img_uri  = $content['product:field_image']['#items'][0]['uri'];
	    $img_url = image_style_url('image_960x640', $img_uri);
  	} else{
  		$imageone = '';
  		$ni = 0;
  	}

  	if(!$page){ ?>
	<!-- Item -->
	<div class="col-sm-4 masonry-item">
		<a href="<?php print $node_url; ?>" class="product_item text-center">
			<span class="product_photo bordered_wht_border"><img src="<?php print $img_url; ?>" alt="<?php print $title; ?>"></span>
			<span class="product_title"><?php print $title; ?></span>
			<span class="product_price"><?php print strip_tags(render($content['product:commerce_price'])) ;?></span>
			<?php if ($content['product:field_sale']['#items'][0]['value'] != 0): ?>
			<span class="sale"><?php print t('Sale'); ?></span>
			<?php endif; ?>
			<?php if ($content['product:field_new']['#items'][0]['value'] != 0): ?>
			<span class="new"><?php print t('New'); ?></span>
			<?php endif; ?>
		</a>
	</div>
  	<?php } else { ?>
	<!-- Carousel and Anons -->
	<div class="row product_inside">
		<div class="col-md-6 col-xs-12">
			<!-- Carousel -->
			<div class="products_inside_wrapper <?php if ($ni > 1) print 'intro_wrapper';?>">
			<?php
	          	foreach($content['product:field_image']['#items'] as $key => $value){
	          		$image_uri  = $content['product:field_image']['#items'][$key]['uri'];
	          		$image_url = file_create_url($image_uri);
	           		print '<div class="classes_inside_item bordered_wht_border">'.theme('image_style', array('path' => $image_uri, 'style_name' => 'image_960x852', 'alt'=>$content['product:field_image']['#items'][$key]['alt'])).'</div>';
	          	}
	         ?>
			</div>
			<!-- Carousel End -->
		</div>
		<div class="col-md-6 col-xs-12">
			<h3 class="title"><?php print $title; ?></h3>
			<div class="meta-box clearfix">
				<div class="price-box">
					<span class="special-price"><?php print strip_tags(render($content['product:commerce_price'])) ;?></span>
					<?php if (!empty($content['product:field_old_price'])): ?>
					<del class="old-price"><?php print strip_tags(render($content['product:field_old_price'])) ;?></del>
					<?php endif; ?>
				</div>
				<div class="rating-box">
					<div class="rating">
						<?php print $node->rate_product_rating['#markup']; ?>
					</div>
				</div>
			</div>
			<p><?php print render($content['product:field_short_description']) ; ?></p>
			
			
			<div class="add-to-box">
			<?php
				hide($content['links']);
		      	hide($content['comments']);
		      	hide($content['product:field_short_description']);
		      	hide($content['product:field_image']);
		      	hide($content['product:commerce_price']);
		     	hide($content['product:field_sale']);
		     	hide($content['product:field_new']);
		     	hide($content['field_tags']);
		      	hide($content['field_product_category']);
		      	hide($content['body']);
		      	print render($content);
			?>
			</div>
			<div class="cat-list">
				<label><?php print t('Categories'); ?></label><span>:</span>
				<?php print strip_tags(render($content['field_product_category']), '<a>') ; ?>
			</div>
			<div class="tags-list">
				<label><?php print t('Tags'); ?></label><span>:</span>
				<?php print strip_tags(render($content['field_tags']), '<a>') ; ?>
			</div>
			<div class="social-icon">
				<ul class="list-unstyled list-inline">
					<li><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php print $base_root.$node_url; ?>"><i class="fa fa-facebook"></i></a></li>
					<li><a target="_blank" href="https://twitter.com/intent/tweet?source=webclient&amp;text=<?php print $title; ?>+<?php print $base_root.$node_url; ?>"><i class="fa fa-twitter"></i></a></li>
					<li><a target="_blank" href="https://plus.google.com/share?url=<?php print $base_root.$node_url; ?>&amp;title=<?php print $title; ?>"><i class="fa fa-google-plus"></i></a></li>
					<li><a target="_blank" href="http://www.pinterest.com/pin/create/button/?source_url=<?php print $base_root.$node_url; ?>&amp;media=<?php print image_style_url('', $content['product:field_image']['#items'][0]['uri']); ?>&amp;description=<?php print $title; ?>"><i class="fa fa-pinterest-p"></i></a></li>
				</ul>
			</div>
		</div>		
	</div>
	<ul id="myTab" class="nav nav-tabs" role="tablist">
		<li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">Description</a></li>
		<li role="presentation"><a href="#profile" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile">Reviews</a></li>
	</ul>
	<div id="myTabContent" class="tab-content">
		<div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledBy="home-tab">
			<p>
			<?php
				hide($content['links']);
		      	hide($content['comments']);
		      	hide($content['product:field_short_description']);
		      	hide($content['product:field_image']);
		      	hide($content['product:commerce_price']);
		     	hide($content['product:field_sale']);
		     	hide($content['product:field_new']);
		     	hide($content['field_tags']);
		      	hide($content['field_product_category']);
		      	print render($content['body']);
			?>	
			</p>
		</div>
		<div role="tabpanel" class="tab-pane fade" id="profile" aria-labelledBy="profile-tab">
			<!--  Comments -->
			<?php print render($content['comments']);?>
			<!-- End Comments -->
		</div>
		
	</div>
  	<?php } ?>