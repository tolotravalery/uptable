<?php print render($title_prefix); ?>
<?php if ($header): ?>
	<?php print $header; ?>
<?php endif; ?>
<?php if ($rows): ?>
<!-- Down Arrow -->
<a href="#welcome" class="down_block go"><i class="fa fa-angle-down"></i></a>
<!-- Wrappera -->
<div class="intro_wrapper">
	<?php print $rows; ?>
</div>
<?php endif; ?>
<!-- Wrapper End -->