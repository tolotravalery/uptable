<?php global $base_url; ?>

<?php
    $address = theme_get_setting('location_address', 'barg');

    $phone_contact = theme_get_setting('phone_contact', 'barg');

    $email_contact = theme_get_setting('contact_email', 'barg');

    if (isset($node->field_text_logo) && !empty($node->field_text_logo))

    {

        $text_logo = $node->field_text_logo['und'][0]['value'];

    } else {
        $text_logo = theme_get_setting('text_logo', 'barg');

    }

    if (isset($node->field_header_style) && !empty($node->field_header_style))

    {

        $header_style = $node->field_header_style['und'][0]['value'];

    } else {
        $header_style = theme_get_setting('header_style', 'barg');
    }

    if (empty($header_style)) {$header_style = 'header1';}

    if ($header_style == 'header1') {

        /*$class_header = 'white_bck';*/
		$class_header = 'white_bck black_bck';

    } elseif ($header_style == 'header1a') {

        $class_header = 'white_bck header_no_tl';

    } elseif ($header_style == 'header1b') {

        $class_header = 'white_bck black_bck';

    } elseif ($header_style == 'header1c') {

        $class_header = 'white_bck black_bck header_no_tl';

    } elseif ($header_style == 'header2') {

        $class_header = 'simple_menu';

    } elseif ($header_style == 'header3') {

        $class_header = 'no_border';

    } elseif ($header_style == 'header4') {

        $class_header = 'no_border green_hover';

    } else {

        $class_header = 'no_border closed_menu';

    }



    if (isset($node->field_menu_overlay) && !empty($node->field_menu_overlay))

    {

        $menu_overlay = $node->field_menu_overlay['und'][0]['value'];

    } else {
        $menu_overlay = theme_get_setting('menu_overlay', 'barg');
    }

    if (empty($menu_overlay)) {$menu_overlay = 'off';}

    if ($menu_overlay == 'on') {

        if (isset($node->field_menu_overlay_color) && !empty($node->field_menu_overlay_color))

        {

            $menu_overlay_color = $node->field_menu_overlay_color['und'][0]['rgb'];

        } else {
            $menu_overlay_color = '#'.theme_get_setting('menu_overlay_color', 'barg');
        }

        if (empty($menu_overlay_color)) {$menu_overlay_color = '#292929';}

        if (isset($node->field_menu_overlay_opacity) && !empty($node->field_menu_overlay_opacity))

        {

            $menu_overlay_opacity = $node->field_menu_overlay_opacity['und'][0]['value'];

        } else {
            $menu_overlay_opacity = theme_get_setting('menu_overlay_opacity', 'barg');
        }

        if (empty($menu_overlay_opacity)) {$menu_overlay_opacity = '0.5';}

    }
    
    if ( arg(0) == 'node') {
        $arg = arg(1);
        if (!empty($arg)) {
            $node = node_load($arg);
            $node_type = $node->type;
        } else $node_type = '';
    } else $node_type = '';


    if (drupal_is_front_page() || $node_type == 'homepage') {

        if (isset($node->field_homepage_style) && !empty($node->field_homepage_style))

        {

            $homepage_style = $node->field_homepage_style['und'][0]['value'];

        } else $homepage_style = theme_get_setting('homepage_style', 'barg');

        if (empty($homepage_style)) $homepage_style = 'multipage';

    } else $homepage_style = 'multipage';   



?>

<?php if ($header_style == 'header2' && $menu_overlay == 'on'): ?>

<div class="head_bck" data-color="<?php print $menu_overlay_color; ?>"  data-opacity="<?php print $menu_overlay_opacity; ?>"></div>

<?php endif; ?>

<!-- Header -->

<header class="<?php print $class_header; ?>">

<?php if($header_style == 'header1' || $header_style == 'header1b'): ?>

    <!-- Header Top Line -->

    <div class="top_line clearfix">

        <!-- Address -->

    <?php if (!empty($address)): ?>

        <span class="tl_item">

        <span class="ti ti-location-pin"></span> <?php print $address; ?>
		

        </span>

    <?php endif; ?>

        <!-- Mail -->

    <?php if (!empty($email_contact)): ?>

        <span class="tl_item">

       <span class="ti ti-email"></span> <a href="mailto:<?php print $email_contact; ?>"><?php print $email_contact; ?></a>
		
        </span>

    <?php endif; ?>

        <!-- Phone -->

    <?php if (!empty($phone_contact)): ?>

        <div class="pull-right">

            <span class="tl_item">

            <span class="ti ti-mobile"></span> <?php print $phone_contact; ?>
			

            </span>

        </div>

    <?php endif; ?>

    </div>

    <!-- Top Line End -->

<?php endif; ?>

    <!-- Logo -->

    <div class="logo pull-left">

        <a href="<?php print $base_url; ?>"><img src="<?php print $logo; ?>"></a>
		<!--<a href="<?php print $base_url; ?>"><img src="sites/all/themes/barg/logo.png" alt=""></a>-->

    </div>

    <!-- Header Buttons -->

    <div class="header_btns_wrapper">

        <!-- Main Menu Btn -->

        <div class="main_menu"><i class="ti-menu"></i><i class="ti-close"></i></div>

        <!-- Sub Menu -->

        <div class="sub_menu">

        <?php if ($homepage_style == 'multipage'){ ?>

            <?php if ($page['main_menu']): ?>

                <?php print render($page['main_menu']); ?>

            <?php endif; ?>

        <?php } else { ?>

            <div class="sub_cont"><ul class="one-menu"></ul></div>

        <?php } ?>

            <?php if ($page['header_search']): ?>

            <div class="sub_min_width mega_menu hide">

                <?php print render($page['header_search']); ?>

                <i class="ti-search"></i>

            </div>

            <?php endif; ?>

        </div>

        <!-- Sub Menu End -->

    </div>

    <!-- Header Buttons End -->

    <!-- Up Arrow -->

    <a href="#page" class="up_block go"><i class="fa fa-angle-up"></i></a>

</header>

<!-- Header End -->