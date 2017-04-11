<?php print render($title_prefix); ?>
<?php if ($header): ?>
	<?php print $header; ?>
<?php endif; ?>
<?php if ($rows): ?>
<!-- Wrapper -->
<div class="row masonry">
	<?php print $rows; ?>
</div>
<?php endif; ?>
<!-- Wrapper End -->