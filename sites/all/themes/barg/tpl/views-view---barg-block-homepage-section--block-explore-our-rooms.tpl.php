<?php print render($title_prefix); ?>
<?php if ($header): ?>
	<?php print $header; ?>
<?php endif; ?>
<?php if ($rows): ?>
<!-- Wrapper -->
<div class="row">
	<?php print $rows; ?>
</div>
<?php endif; ?>
<?php if ($attachment_after): ?>
<div class="row no-padding">
	<?php print $attachment_after; ?>
</div>
<?php endif; ?>