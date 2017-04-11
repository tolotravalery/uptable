<?php

/**

 * @file

 * Default theme implementation to display a node.

 */



	global $base_root, $base_url;



	if(!$page){ ?>



  	<?php } else { ?>

	  	<?php if ($node->type != 'page' && $node->type != 'homepage'): ?>

		<h3><?php print $title; ?></h3>

		<?php

			hide($content['links']);

			hide($content['field_tags']);

			hide($content['field_image']);

			hide($content['comments']);

			print render($content);

		?>

		<?php else: ?>

			<?php

			hide($content['links']);

			hide($content['field_tags']);

			hide($content['field_image']);

			hide($content['comments']);

			print render($content);

			?>

		<?php endif; ?>



  	<?php } ?>

