<?php print render($title_prefix); ?>
<?php if ($header): ?>
	<?php print $header; ?>
<?php endif; ?>
<?php if ($rows): ?>
<!-- Down Arrow -->
<a href="#welcome" class="down_block go"><i class="fa fa-angle-down"></i></a>
	<?php print $rows; ?>
<?php endif; ?>
<!-- Wrapper End -->