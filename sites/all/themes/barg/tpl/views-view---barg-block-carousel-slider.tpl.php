<?php print render($title_prefix); ?>

<?php if ($header): ?>
	<?php print $header; ?>
<?php endif; ?>
<?php if ($rows): ?>
<!-- Wrappera -->
<div class="mid_wrapper">
	
		<?php print $rows; ?>
	
</div>
<?php endif; ?>
<!-- Wrapper End -->