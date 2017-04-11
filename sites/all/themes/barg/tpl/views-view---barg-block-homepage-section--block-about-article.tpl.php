<?php print render($title_prefix); ?>
<?php if ($header): ?>
	<?php print $header; ?>
<?php endif; ?>
<?php if ($rows): ?>
<!-- Wrapper -->
<div class="row">
	<?php print $rows; ?>
	<?php if ($attachment_after): ?>
		<?php print $attachment_after; ?>
	<?php endif; ?>
</div>
<?php endif; ?>
<!-- Wrapper End -->