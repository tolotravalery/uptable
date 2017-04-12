<?php

$out = '';

if($block->region == 'section'){
	
	if(strcmp($block->subject,"Portfolio")==0){
		$out= '';
	}
	else{
		$out .= '<section class="boxes '.$classes.'" '.$attributes.'><div class="container-fluid">';
		$out .= render($title_suffix);
		if ($block->subject):
			$out .= '<h4 class="sml_abs_title wow fadeInUp">'.$block->subject.'</h4>';
		endif;
		$out .= $content;
		$out .= '</div></section>';
	}

} else if($block->region == 'footer_style1_col1'){

	$out .= '<div class="one_third animate '.$classes.'" '.$attributes.' data-anim-type="fadeInUp" data-anim-delay="300">';
	$out .= render($title_suffix);
	if ($block->subject):
		$out .= '<h4 class="gray"><strong>'.$block->subject.'</strong></h4>';
	endif;
	$out .= $content;
	$out .= '</div>';

} else if($block->region == 'intro'){

	$out .= '<section class="intro '.$classes.'" '.$attributes.'>';
	$out .= render($title_suffix);
	if ($block->subject):
		$out .= '<h2>'.$block->subject.'</h2>';
	endif;
	$out .= $content;
	$out .= '</section>';

} else if($block->region == 'footer'){

	$out .= '<div class="'.$classes.'" '.$attributes.'>';
	$out .= render($title_suffix);
	if ($block->subject):
		$out .= '<div class="widget"><h4>'.$block->subject.'</h4>';
		$out .= $content;
		$out .= '</div></div>';
	else:
		$out .= $content;
		$out .= '</div>';
	endif;
} else if($block->region == 'footer_style3'){

	$out .= '<div class="'.$classes.'" '.$attributes.'>';
	$out .= render($title_suffix);
	if ($block->subject):
		$out .= '<h4>'.$block->subject.'</h4><p class="clearfix margin_bottom1"></p>';
	endif;
	$out .= $content;
	$out .= '</div>';

}elseif($block->region == 'slider_wrap' || $block->region == 'footer'){
	$out .= '<div class="'.$classes.'"  '.$attributes.' >';
	$out .= render($title_suffix);
	if ($block->subject):
		$out .= '<h5 class="white">'.$block->subject.'</h5>';
	endif;
	$out .= $content;
	$out .= '</div>';

}elseif($block->region == 'slider' || $block->region == 'content'){
	$out .= '<div class="'.$classes.'"  '.$attributes.' >';
	$out .= render($title_suffix);
	if ($block->subject):
		$out .= '<h2>'.$block->subject.'</h2>';
	endif;
	$out .= $content;
	$out .= '</div>';

}elseif($block->region == 'sidebar'){

	$out .= '<div class="widget '.$classes.'" '.$attributes.'>';
	$out .= render($title_suffix);
    if ($block->subject)
		$out .= '<h6 class="title">'.$block->subject.'</h6>';
	$out .= $content;
	$out .= '</div>';

}elseif($block->region == 'related_portfolio'){
	$out .= '<section id="related_portfolio" '.$classes.'" '.$attributes.'>';
	$out .= '<div class="container">';
	$out .= render($title_suffix);
    if ($block->subject)
		$out .= '<h4 class="column_title_center">'.$block->subject.'</h4>';
	$out .= $content;
	$out .= '</div></section>';


}elseif($block->region == 'footer_top'){
	if(!empty($block->block_id)) {
		$id = 'id="'.$block->block_id.'"';
	} else $id = "";
	$out .= '<div '.$id. ' class="' .$classes.'" '.$attributes.'>';
	$out .= render($title_suffix);
	if ($block->subject):
		$out .= '<h4>'.$block->subject.'</h4>';
	endif;
	$out .= $content;
	$out .= '</div>';

}elseif($block->region == 'main_menu'){
	$out .= '<div class="sub_cont '.$classes.'"  '.$attributes.'>';
	$out .= render($title_suffix);
	$out .= $content;
	$out .= '</div>';

}elseif($block->region == 'sidebar_second'){
	$out .= '<aside class="'.$classes.'" '.$attributes.' >';
	$out .= render($title_suffix);
   if ($block->subject)
		$out .= '<h4>'.$block->subject.'</h4>';
	$out .= $content;
	$out .= '</aside>';


}else{
	$out .= '<div id="'.$block_html_id.'" class="'.$classes.'" '.$attributes.'>';
	$out .= render($title_suffix);
	 if ($block->subject)
		$out .= '<h5>'.$block->subject.'</h5>';
	$out .= $content;
	$out .= '</div>';
}
print $out;
?>