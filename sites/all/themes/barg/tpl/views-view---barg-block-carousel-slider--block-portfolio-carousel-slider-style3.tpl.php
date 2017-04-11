<?php print render($title_prefix); ?>
<?php if ($header): ?>
	<?php print $header; ?>
<?php endif; ?>
<?php if ($rows): ?>
<!-- Wrapper -->
<div class="mid_wrapper_two">
	<?php print $rows; ?>
</div>
<?php endif; ?>
<!-- Wrapper End -->