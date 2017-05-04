<!-- Footer -->
<?php
    $copyright = theme_get_setting('footer_copyright_message', 'barg');
    if (isset($node->field_footer_color) && !empty($node->field_footer_color))
    {
        $footer_color = $node->field_footer_color['und'][0]['rgb'];
    } elseif (isset($node->field_footer_color) && empty($node->field_footer_color)) {
        $footer_color = '';
    } else $footer_color = '#'.theme_get_setting('footer_color', 'barg');
    if (empty($footer_color)) $footer_color = '';
    if (isset($node->field_footer_end_color) && !empty($node->field_footer_end_color))
    {
        $footer_end_color = $node->field_footer_end_color['und'][0]['rgb'];
    } else $footer_end_color = '';
    if (isset($node->field_footer_image) && !empty($node->field_footer_image))
    {
        $footer_bg_image = $node->field_footer_image['und'][0]['uri'];
        $footer_background = file_create_url($footer_bg_image);
    } else {
        $footer_bg_image = theme_get_setting('footer_background_image','barg');
        if (!empty($footer_bg_image)) {
            $footer_background = file_create_url(file_load($footer_bg_image)->uri);
        } else $footer_background ='';
    }
    
    
    if (isset($node->field_footer_class) && !empty($node->field_footer_class))
    {
        $footer_class = $node->field_footer_class['und'][0]['value'];
    } else $footer_class = theme_get_setting('footer_class', 'barg');
    if (empty($footer_class) && $footer_background == '') $footer_class = 'white_txt bordered_wht_border';
    if (isset($node->field_font_icon_style) && !empty($node->field_font_icon_style))
    {
        $font_style = $node->field_font_icon_style['und'][0]['value'];
    } else $font_style = '';
    if (isset($node->field_footer_style) && !empty($node->field_footer_style))
    {
        $footer_style = $node->field_footer_style['und'][0]['value'];
    } else $footer_style = theme_get_setting('footer_style', 'barg');
    if (empty($footer_style)) $footer_style = 'footer1';

    if (isset($node->field_footer_overlay) && !empty($node->field_footer_overlay))
    {
        $footer_overlay = $node->field_footer_overlay['und'][0]['value'];
    } else $footer_overlay = theme_get_setting('footer_overlay', 'barg');
    if (empty($footer_overlay)) $footer_overlay = 'off';
    if ($footer_overlay == 'on') {
        if (isset($node->field_footer_overlay_image) && !empty($node->field_footer_overlay_image))
        {
            $footer_overlay_image = $node->field_footer_overlay_image['und'][0]['uri'];
            $footer_overlay_image = file_create_url($footer_overlay_image);
        } else {
            $img = theme_get_setting('footer_overlay_image','barg');
            if (!empty($img)) {
                $footer_overlay_image = file_create_url(file_load($img)->uri);
            } else $footer_overlay_image = base_path().path_to_theme().'/images/overlay.png';
        }
        if (isset($node->field_footer_overlay_background) && !empty($node->field_footer_overlay_background))
        {
            $footer_overlay_color = $node->field_footer_overlay_background['und'][0]['rgb'];
        } else $footer_overlay_color = theme_get_setting('footer_overlay_color','barg');
        if (empty($footer_overlay_color)) $footer_overlay_color = '#000000';
        if (isset($node->field_opacity) && !empty($node->field_opacity))
        {
            $footer_overlay_opacity = $node->field_opacity['und'][0]['value'];
        } else $footer_overlay_opacity = theme_get_setting('footer_overlay_opacity','barg');
        if (empty($footer_overlay_opacity)) $footer_overlay_opacity ='0.5';
    }
    
    
?>
<div class="footer <?php print $footer_class ?> <?php if ($footer_color != '' || $footer_background != '') print 'image_bck'; ?>" <?php if ($footer_color != '') print 'data-color="'.$footer_color.'"' ?>
 <?php if ($footer_background != '') print 'data-image="'.$footer_background.'"' ?> >
    <?php if ($footer_overlay == 'on'): ?>
    <!--Over-->
    <div class="over" data-opacity="<?php print $footer_overlay_opacity; ?>" data-image="<?php print $footer_overlay_image; ?>" data-color="<?php print $footer_overlay_color ?>"></div>
    <?php endif; ?>
    <div class="container">
        <?php if($page['footer']): ?>
        <div class="row">
            <?php print render($page['footer']); ?>
        </div>
        <?php endif; ?>
        <!--Row End-->
    </div>
    <!-- Container End -->
    <!-- Footer Copyrights -->
    <?php if($footer_style == 'footer1'): ?>
    <div class="footer_end <?php if ($footer_end_color != '') print 'image_bck white_txt'; ?>" <?php if ($footer_end_color != '') print 'data-color="'.$footer_end_color.'"' ?>>
        <div class="container">
            <div class="row">
                <?php if ($copyright): ?>
                <div class="col-sm-6">
                    <!--<span class="sub"><?php print $copyright; ?></span>-->
					<span class="sub">© Copyright 2017 - Uptables</span>
                </div>
                <?php endif; ?>
                <?php if($page['footer_end_right']): ?>
                <div class="col-sm-6 text-right">
                    <?php print render($page['footer_end_right']) ?>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <!-- Copyrights End -->
    <?php endif; ?>
</div>
<!-- Footer End -->
<input type="hidden" id="font-style" value="<?php print $font_style; ?>" />