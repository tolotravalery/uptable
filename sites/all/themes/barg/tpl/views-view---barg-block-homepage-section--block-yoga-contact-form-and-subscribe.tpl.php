<?php print render($title_prefix); ?>
<?php
    $address = theme_get_setting('location_address', 'barg');
    $phone_contact = theme_get_setting('phone_contact', 'barg');
    $email_contact = theme_get_setting('contact_email', 'barg');
    $phone_contact2 = theme_get_setting('phone_contact_2', 'barg');
?>
<div class="row">
    <!-- Contacts -->
    <?php if ($header): ?>
     <div class="col-md-6 bordered_block image_bck white_txt" data-color="#5fc7ae">
		<div class="col-md-12 simple_block text-left">
			<h3><?php print t('Contacts'); ?></h3>
			<?php if (!empty($phone_contact)): ?>
			<span class="contacts_ti ti-mobile"></span><?php print $phone_contact; ?><br />
			<?php endif; ?>
			<?php if (!empty($phone_contact2)): ?>
			<span class="contacts_ti ti-mobile"></span><?php print $phone_contact2; ?><br />
			<?php endif; ?>
			<?php if (!empty($email_contact)): ?>
			<span class="contacts_ti ti-email"></span><a href="mailto:<?php print $email_contact; ?>"><?php print $email_contact; ?></a><br />
			<?php endif; ?>
			<?php if (!empty($address)): ?>
			<span class="contacts_ti ti-location-pin"></span><?php print $address; ?>
			<?php endif; ?>
			<?php print $header; ?>
		</div>
	</div>
	<?php endif; ?>

	<?php if ($rows): ?>
	<div class="col-md-6 bordered_block image_bck white_txt" data-color="#65ccb3">
		<?php print $rows; ?>
	</div>
	<?php endif; ?>
</div>