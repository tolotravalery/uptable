<?php
global $base_url;

function barg_preprocess_html(&$variables) {
	
	if (arg(0) == 'node' && is_numeric(arg(1))) {
      $node = entity_load_unchanged('node', arg(1));

      if (isset($node -> field_body_class['und'][0]['value']) && $node -> field_body_class['und'][0]['value']) {
        $variables['body_class'] = $node -> field_body_class['und'][0]['value'];
      }
    }
}

// Add css font icon
$font_icon = theme_get_setting('font_icon_style', 'barg');
if(!empty($font_icon)){
	$font_style = '/fonts/'.$font_icon;
} else {
	$font_style = '/fonts/basic/flaticon.css';
}
$css_font = array(
		'#tag' => 'link', // The #tag is the html tag - <link />
		'#attributes' => array( // Set up an array of attributes inside the tag
		'href' => $base_url.'/'.path_to_theme().$font_style,
		'rel' => 'stylesheet',
		'type' => 'text/css',
		'id' => 'font-icon',
		'data-baseurl'=>$base_url.'/'.path_to_theme()
		),
		'#weight' => 1,
	);
	drupal_add_html_head($css_font, 'font');


// Add css skin
$setting_skin = theme_get_setting('built_in_skins', 'barg');
if(!empty($setting_skin)){
	$skin_color = '/css/skins/'.$setting_skin;
}else{
	$skin_color = '/css/skins/default.css';
}
$css_skin = array(
	'#tag' => 'link', // The #tag is the html tag - <link />
	'#attributes' => array( // Set up an array of attributes inside the tag
	'href' => $base_url.'/'.path_to_theme().$skin_color,
	'rel' => 'stylesheet',
	'type' => 'text/css',
	'id' => 'skin',
	'data-baseurl'=>$base_url.'/'.path_to_theme()
	),
	'#weight' => 1,
);
//drupal_add_html_head($css_skin, 'skin');

function barg_form_comment_form_alter(&$form, &$form_state) {
  $form['comment_body']['#after_build'][] = 'barg_customize_comment_form'; 
}

function barg_customize_comment_form(&$form) {
  $form[LANGUAGE_NONE][0]['format']['#access'] = FALSE;
  return $form;
}

function barg_preprocess_page(&$vars) {

	if (isset($vars['node'])) {
		$vars['theme_hook_suggestions'][] = 'page__'. $vars['node']->type;
	}

	//404 page
	$status = drupal_get_http_header("status");
	if($status == "404 Not Found") {
		$vars['theme_hook_suggestions'][] = 'page__404';
	}

	//Taxonomy page
	if (arg(0) == 'taxonomy') {
    	$vars['theme_hook_suggestions'][] = 'page__taxonomy';
  	}

  	//View portfolio template
  	$views_page = views_get_page_view();
  	if(isset($views_page) && $views_page->name =='_barg_portfolio')   {
    	$vars['theme_hook_suggestions'][] = 'page__portfolio';
	}

	//View shop template

  	if(isset($views_page) && $views_page->name =='_barg_shop_catalog')   {
    	$vars['theme_hook_suggestions'][] = 'page__shop';
	}

}


// Remove superfish css files.
function barg_css_alter(&$css) {
	unset($css[drupal_get_path('module', 'system') . '/system.menus.css']);
	unset($css[drupal_get_path('module', 'system') . '/system.theme.css']);

//	unset($css[drupal_get_path('module', 'system') . '/system.base.css']);
}

function barg_form_alter(&$form, &$form_state, $form_id) {
	if ($form_id == 'search_block_form') {
		$form['search_block_form']['#title_display'] = 'invisible'; 
		$form['search_block_form']['#default_value'] = t('Search');
		$form['search_block_form']['#attributes']['id'] = array("mod-search-searchword");
		unset($form['search_block_form']['#title']);
		$form['search_block_form']['#attributes']['onblur'] = "if (this.value == '') {this.value = 'Search';}";
		$form['search_block_form']['#attributes']['onfocus'] = "if (this.value == 'Search') {this.value = '';}";
	}
	if($form_id == 'contact_site_form'){
		$form['mail']['#attributes']['class'] = array("input-contact-form");
		$form['name']['#attributes']['class'] = array("input-contact-form");
		$form['subject']['#attributes']['class'] = array("input-contact-form");
		$form['message']['#attributes']['class'] = array("message-contact-form");
		$form['actions']['submit']['#attributes']['class'] = array('btn btn-success contact-form-button');
	}
	if ($form_id == 'comment_form') {
		$form['comment_filter']['format'] = array(); // nuke wysiwyg from comments
	}

}
function barg_textarea($variables) {
  $element = $variables['element'];
  $element['#attributes']['name'] = $element['#name'];
  $element['#attributes']['id'] = $element['#id'];
  $element['#attributes']['cols'] = $element['#cols'];
  $element['#attributes']['rows'] = $element['#rows'];
  _form_set_class($element, array('form-textarea'));

  $wrapper_attributes = array(
    'class' => array('form-textarea-wrapper'),
  );

  // Add resizable behavior.
  if (!empty($element['#resizable'])) {
    $wrapper_attributes['class'][] = 'resizable';
  }

  $output = '<div' . drupal_attributes($wrapper_attributes) . '>';
  $output .= '<textarea' . drupal_attributes($element['#attributes']) . '>' . check_plain($element['#value']) . '</textarea>';
  $output .= '</div>';
  return $output;
}
function barg_breadcrumb($variables) {
	$crumbs ='';
	$breadcrumb = $variables['breadcrumb'];
	if (!empty($breadcrumb)) {
		$crumbs .= '<div class="breadcrumbs">';
		foreach($breadcrumb as $value) {

			$crumbs .= $value;
		}
		$crumbs .= drupal_get_title();
		return $crumbs .'</div>';
	}else{
		return NULL;
	}
}
//custom main menu
function barg_menu_tree__main_menu(array $variables) {
	$str = '';
	$str .= '<ul>';
		$str .= $variables['tree'];
	$str .= '</ul>';

	return $str;
}


/**Override Menu theme */

function barg_menu_tree__menu_onepage_menu($variables) {
	$str = '';
	$str .= '<ul class="nav navbar-nav navbar-right">';
		$str .= $variables['tree'];
	$str .= '</ul>';

	return $str;
}

function barg_theme() {
  return array(
    'comment_form' => array(
      'arguments' => array('form' => NULL),
      'template' => 'tpl/comment-form',
      'render element' => 'form'
    ),
  );
}

function hook_preprocess_page(&$variables) {
       if (arg(0) == 'node' && is_numeric($nid)) {
    if (isset($variables['page']['content']['system_main']['nodes'][$nid])) {
      $variables['node_content'] =& $variables['page']['content']['system_main']['nodes'][$nid];
      if (empty($variables['node_content']['field_show_page_title'])) {
        $variables['node_content']['field_show_page_title'] = NULL;
      }
    }
  }
}


function getRelatedPosts($ntype,$nid,$image){
	$nids = db_query("SELECT n.nid, title FROM {node} n WHERE n.status = 1 AND n.type = :type AND n.nid <> :nid ORDER BY RAND() LIMIT 0,6", array(':type' => $ntype, ':nid' => $nid))->fetchCol();
	$nodes = node_load_multiple($nids);
	$return_string = '' ;
	$i = 0;
	if (!empty($nodes)):
		foreach ($nodes as $node) :
			$field_image = field_get_items('node', $node, $image);
		if (!empty($field_image[0]) && $i < 3) {
			$i++;
			$return_string .= '<div class="col-md-4">';
			$return_string .= '<a href="'.url("node/" . $node->nid).'">';
			$return_string .= theme('image_style', array('style_name' => 'image_576x384', 'path' => $field_image[0]['uri'], 'attributes'=>array('alt'=>$node->title)));
			$return_string .= '<h4>'.$node->title.'</h4>';
			$return_string .= '</a></div>';
		}
		endforeach;
	endif;
	return $return_string;
}

	function barg_menu_link(array $variables) {
		$element = $variables['element'];
		$sub_menu = '';
		if($element['#original_link']['menu_name'] == 'main-menu') {

			if ($element['#below'] && $element['#original_link']['depth'] == 1) {
				unset($element['#below']['#theme_wrappers']);
				$element['#attributes']['class'][] = 'level-' . $element['#original_link']['depth'];
				$element['#localized_options']['attributes']['class'][] = 'parents';
				$sub_menu = '<ul class="mega_menu">'.drupal_render($element['#below']).'</ul>';
			} 
			elseif (count($element['#below'])>=1 && $element['#original_link']['depth'] == 1) {
				$element['#attributes']['class'][] = 'mega_sub';
				$sub_menu = drupal_render($element['#below']);
			} 
				elseif (count($element['#below'])>=1 && $element['#original_link']['depth'] == 2) {
					$element['#attributes']['id'][] = 'nouveau';
					$sub_menu =  drupal_render($element['#below']) ;
					
			}
			else {
				$element['#attributes']['class'][] = 'level-' . $element['#original_link']['depth'];
			}
			$output = l($element['#title'], $element['#href'], $element['#localized_options']);

		} else {
			if ($element['#below']) {
				$sub_menu = drupal_render($element['#below']);
			}
			$output = l($element['#title'], $element['#href'], $element['#localized_options']);
		}
		return '<li' . drupal_attributes($element ['#attributes']) . '>' . $output . $sub_menu . "</li>\n";

	}