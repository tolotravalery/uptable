<?php
/**
 * @file
 * Default theme implementation to display a node.
 */

	global $base_root, $base_url;
	$user = user_load($uid); // Make sure the user object is fully loaded
	$display_name = field_get_items('user', $user, 'field_display_name');
	if(!empty($node->field_image)){
	    $imageone = $node->field_image['und'][0]['uri'];
	    $ni = count($node->field_image['und']);
	    $image_url = file_create_url($imageone);
	    $image_url_style = image_style_url('image_960x540',$imageone);
  	}else{
	    $imageone = '';
	    $ni = 0;
  	}
  	
  	if (isset($node->field_sidebar) && !empty($node->field_sidebar)) {
		$sidebar = $node->field_sidebar['und'][0]['value'];
	} else $sidebar = 'right';

	if(!$page){ ?> 

		<!--Item-->
        <div class="post-snippet">
			<?php if (isset($node->field_video_embed) && !empty($node->field_video_embed)): ?>
			<div class="embed-video-container embed-responsive">
				<?php print render($content['field_video_embed']); ?>
			</div>
			<?php elseif (isset($node->field_soundcloud_url) && !empty($node->field_soundcloud_url)): ?>
			<?php print render($content['field_soundcloud_url']); ?>
			<?php elseif (isset($node->field_image) && !empty($node->field_image)): ?>
			<a href="<?php print $node_url; ?>">
				<img alt="<?php print $title; ?>" src="<?php print $image_url_style; ?>" />
			</a>
			<?php else: ?>
			<blockquote>
			<?php
	          hide($content['links']);
	          hide($content['field_tags']);
	          hide($content['comments']);
	          hide($content['field_categories']);
	          hide($content['field_image']);
	          hide($content['field_soundcloud_url']);
	          hide($content['field_video_embed']);
	          print render($content);
          	?>
			</blockquote>
			<?php endif; ?>
			<div class="post-title">
				<span class="label"><?php print format_date($node->created, 'custom', 'd M') ?></span>
				<a href="<?php print $node_url; ?>">
					<h4 class="inline-block"><?php print $title; ?></h4>
				</a>
			</div>
			<ul class="post-meta list-unstyled list-inline">
				<li>
					<i class="fa fa-user"></i>
					<span><?php print t('by') ?>
						<?php print $name; ?>
					</span>
				</li>
				<?php if (!empty($node->field_tags)): ?>
				<li>
					<i class="ti-tag"></i>
					<span>
						<?php print strip_tags(render($content['field_tags']),'<a>'); ?>
					</span>
				</li>
				<?php endif; ?>
			</ul>
			<?php if ((isset($node->field_video_embed) && !empty($node->field_video_embed) || (isset($node->field_soundcloud_url) && !empty($node->field_soundcloud_url)) || empty($node->field_image))): ?>
			<?php else: ?>
			<p>
				<?php
		          	hide($content['links']);
					hide($content['field_tags']);
					hide($content['comments']);
					hide($content['field_featured']);
					hide($content['field_image']);
					hide($content['field_sub_title']);
					hide($content['field_topic']);
					hide($content['field_sidebar']);
		          print render($content);
	          	?>
			</p>
			<a class="btn btn-default no-margin" href="<?php print $node_url; ?>"><?php print t('Read More') ?></a>
			<?php endif; ?>
        </div>
		
	<?php } else { ?>
		<!--Item-->
		<div class="post-snippet">
			<a href="<?php print $node_url; ?>">
				<img alt="<?php print $title; ?>" src="<?php print $image_url_style; ?>" />
			</a>
			<div class="post-title">
				<span class="label"><?php print format_date($node->created, 'custom', 'd M') ?></span>
				<a href="<?php print $node_url; ?>">
					<h4 class="inline-block"><?php print $title; ?></h4>
				</a>
			</div>
			<ul class="post-meta list-unstyled list-inline">
				<li>
					<i class="fa fa-user"></i>
					<span><?php print t('by'); ?>
						<?php print $name; ?>
					</span>
				</li>
				<?php if (!empty($node->field_tags)): ?>
				<li>
					<i class="ti-tag"></i>
					<span>
						<?php print strip_tags(render($content['field_tags']),'<a>'); ?>
					</span>
				</li>
				<?php endif; ?>
			</ul>
			<?php
				hide($content['links']);
				hide($content['field_tags']);
				hide($content['comments']);
				hide($content['field_featured']);
				hide($content['field_image']);
				hide($content['field_sub_title']);
				hide($content['field_topic']);
				hide($content['field_sidebar']);
				print render($content);
			?>
		</div>
		<?php print render($content['comments']);?>
	<?php } ?>