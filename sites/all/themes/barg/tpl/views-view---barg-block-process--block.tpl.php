<?php print render($title_prefix); ?>

<div class="row">
    <div class="col-md-12 bordered_block grey_border">
        <div class="container">
		<h3 class="text-center">Our Process</h3>
<p style="text-align:center;">We're all about collaboration, preffering to work with you, rather than you. Our clients become part of the team. Our collaborative approach allows us to create immensive experiences, that engage the audience.</p>
		<?php if ($rows): ?>
			<?php print $rows; ?>
		<?php endif; ?>
		</div>
	</div>
</div>