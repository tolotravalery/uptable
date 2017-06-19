<?php print render($title_prefix); ?>

<?php if ($header): ?>
	<?php print $header; ?>
<?php endif; ?>
<?php if ($rows): ?>
<!-- Wrappera -->
<div class=" owl-carousel owl-theme" style="opacity: 1; display: block;">
	<div class="owl-wrapper-outer">
		<div class="owl-wrapper" style="width: 4460px;  left: -10px; display: block; transform: translate3d(0px, 0px, 0px);">
				<?php print $rows; ?>
		</div>
	</div>	
</div>	
<?php endif; ?>
<!-- Wrapper End -->