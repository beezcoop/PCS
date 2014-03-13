<?php
/**
 * Return a themed breadcrumb trail.
 *
 * @param $breadcrumb
 *   An array containing the breadcrumb links.
 * @return
 *   A string containing the breadcrumb output.
 */
function tophit_breadcrumb($variables){
  $breadcrumb = $variables['breadcrumb'];
  if (!empty($breadcrumb)) {
    $breadcrumb[] = drupal_get_title();
    return '<div class="breadcrumb">' . implode(' <span class="breadcrumb-separator">/</span> ', $breadcrumb) . '</div>';
  }
}
function tophit_preprocess_block(&$variables) {
	
  $variables['classes_array'][]='clearfix';

}

/**
 * Override or insert variables into the html template.
 */
function tophit_preprocess_html(&$variables) {

	if (empty($variables['page']['banner'])) {
		$variables['classes_array'][] = 'no-banner';
	}
	
	if (!theme_get_setting('banner_background')) {
		$variables['classes_array'][] = 'no-banner-bg';
	}
	
	$color_scheme = theme_get_setting('color_scheme');
	
	if ($color_scheme != 'default') {
	drupal_add_css(drupal_get_path('theme', 'tophit') . '/style-' .$color_scheme. '.css', array('group' => CSS_THEME, 'type' => 'file'));
	}

	if (theme_get_setting('sitename_font_family')=='sff-1'  || 
		theme_get_setting('slogan_font_family')=='slff-1'  || 
		theme_get_setting('headings_font_family')=='hff-1'  ||
		theme_get_setting('footer_headings_font_family')=='hoff-1'  ||
		theme_get_setting('paragraph_font_family')=='pff-1' || 
		theme_get_setting('slideshow_font_family')=='sdff-1' ) {
		drupal_add_css(drupal_get_path('theme', 'tophit') . '/fonts/ptsans-font.css', array('group' => CSS_THEME, 'type' => 'file'));
	}
	
	if (theme_get_setting('sitename_font_family')=='sff-2'  || 
		theme_get_setting('slogan_font_family')=='slff-2'  || 
		theme_get_setting('headings_font_family')=='hff-2'  ||
		theme_get_setting('footer_headings_font_family')=='hoff-2'  ||
		theme_get_setting('paragraph_font_family')=='pff-2' || 
		theme_get_setting('slideshow_font_family')=='sdff-2'||
		theme_get_setting('headings_font_family')=='hff-10'  ||
		theme_get_setting('footer_headings_font_family')=='hoff-10'  ||
		theme_get_setting('paragraph_font_family')=='pff-10' || 
		theme_get_setting('slideshow_font_family')=='sdff-10' || 
		theme_get_setting('slogan_font_family')=='slff-10' ) {
		drupal_add_css(drupal_get_path('theme', 'tophit') . '/fonts/opensans-font.css', array('group' => CSS_THEME, 'type' => 'file'));
	}
	
	if (theme_get_setting('sitename_font_family')=='sff-3'  || 
		theme_get_setting('slogan_font_family')=='slff-3'  || 
		theme_get_setting('headings_font_family')=='hff-3'  ||
		theme_get_setting('footer_headings_font_family')=='hoff-3'  ||
		theme_get_setting('paragraph_font_family')=='pff-3' || 
		theme_get_setting('slideshow_font_family')=='sdff-3' ) {
		drupal_add_css(drupal_get_path('theme', 'tophit') . '/fonts/ptsansnarrow-font.css', array('group' => CSS_THEME, 'type' => 'file'));
	}
	
	if (theme_get_setting('sitename_font_family')=='sff-4'  || 
		theme_get_setting('slogan_font_family')=='slff-4'  || 
		theme_get_setting('headings_font_family')=='hff-4'  ||
		theme_get_setting('footer_headings_font_family')=='hoff-4'  ||
		theme_get_setting('paragraph_font_family')=='pff-4' || 
		theme_get_setting('slideshow_font_family')=='sdff-4' ) {
		drupal_add_css(drupal_get_path('theme', 'tophit') . '/fonts/lato-font.css', array('group' => CSS_THEME, 'type' => 'file'));
	}
	
	if (theme_get_setting('sitename_font_family')=='sff-5'  || 
		theme_get_setting('slogan_font_family')=='slff-5'  || 
		theme_get_setting('headings_font_family')=='hff-5'  ||
		theme_get_setting('footer_headings_font_family')=='hoff-5'  ||
		theme_get_setting('paragraph_font_family')=='pff-5' || 
		theme_get_setting('slideshow_font_family')=='sdff-5' ) {
		drupal_add_css(drupal_get_path('theme', 'tophit') . '/fonts/quattrocentosans-font.css', array('group' => CSS_THEME, 'type' => 'file'));
	}
	
	if (theme_get_setting('sitename_font_family')=='sff-6'  || 
		theme_get_setting('slogan_font_family')=='slff-6'  || 
		theme_get_setting('headings_font_family')=='hff-6'  ||
		theme_get_setting('footer_headings_font_family')=='hoff-6'  ||
		theme_get_setting('paragraph_font_family')=='pff-6' || 
		theme_get_setting('slideshow_font_family')=='sdff-6' ) {
		drupal_add_css(drupal_get_path('theme', 'tophit') . '/fonts/asap-font.css', array('group' => CSS_THEME, 'type' => 'file'));
	}
	
	if (theme_get_setting('sitename_font_family')=='sff-9'  || 
		theme_get_setting('slogan_font_family')=='slff-9'  || 
		theme_get_setting('headings_font_family')=='hff-9'  ||
		theme_get_setting('footer_headings_font_family')=='hoff-9'  ||
		theme_get_setting('paragraph_font_family')=='pff-9' || 
		theme_get_setting('slideshow_font_family')=='sdff-9' ) {
		drupal_add_css(drupal_get_path('theme', 'tophit') . '/fonts/merriweather-font.css', array('group' => CSS_THEME, 'type' => 'file'));
	}
	
	drupal_add_css(drupal_get_path('theme', 'tophit') . '/fonts/ptserif-font.css', array('group' => CSS_THEME, 'type' => 'file'));
	
	drupal_add_css(path_to_theme() . '/ie.css', array('group' => CSS_THEME, 'browsers' => array('IE' => '(lt IE 9)&(!IEMobile)', '!IE' => FALSE), 'preprocess' => FALSE));
	
}

function tophit_preprocess_maintenance_page(&$variables) {
	$color_scheme = theme_get_setting('color_scheme');
	
	if ($color_scheme != 'default') {
		drupal_add_css(drupal_get_path('theme', 'tophit') . '/style-' .$color_scheme. '.css', array('group' => CSS_THEME, 'type' => 'file'));
	}
}


/**
 * Override or insert variables into the html template.
 */
function tophit_process_html(&$vars) {

  $classes = explode(' ', $vars['classes']);
  $classes[] = theme_get_setting('sitename_font_family');
  $classes[] = theme_get_setting('slogan_font_family');
  $classes[] = theme_get_setting('headings_font_family');
  $classes[] = theme_get_setting('footer_headings_font_family');
  $classes[] = theme_get_setting('paragraph_font_family');
  $classes[] = theme_get_setting('slideshow_font_family');
  $vars['classes'] = trim(implode(' ', $classes));
 
}

function tophit_page_alter($page) {
	// <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
	$viewport = array(
		'#type' => 'html_tag',
		'#tag' => 'meta',
		'#attributes' => array(
		'name' =>  'viewport',
		'content' =>  'width=device-width, initial-scale=1, maximum-scale=1'
		)
	);
	drupal_add_html_head($viewport, 'viewport');
}

function tophit_form_alter(&$form, &$form_state, $form_id) {
  if ($form_id == 'search_block_form') {
  
    unset($form['search_block_form']['#title']);
	
    $form['search_block_form']['#title_display'] = 'invisible';
	$form_default = t('Search...');
    $form['search_block_form']['#default_value'] = $form_default;
	
	$color_scheme = theme_get_setting('color_scheme');
	$color_folder = '';
	if ($color_scheme != 'default') { $color_folder = '/' . theme_get_setting('color_scheme'); }
	
    $form['actions']['submit'] = array('#type' => 'image_button', '#src' => base_path() . path_to_theme() . '/images'. $color_folder . '/search-button.png');

 	$form['search_block_form']['#attributes'] = array('onblur' => "if (this.value == '') {this.value = '{$form_default}';}", 'onfocus' => "if (this.value == '{$form_default}') {this.value = '';}" );
  }
}

/**
 * Add Javascript for flexslider
 */
$effect=theme_get_setting('slideshow_effect');
$effect_time=theme_get_setting('slideshow_effect_time')*1000;
$effect_direction=theme_get_setting('slideshow_effect_direction');

drupal_add_js('jQuery(document).ready(function($) { 

$(window).load(function() {
	$(".flexslider").flexslider({
		prevText : "",
		nextText : "",
		animation: "'.$effect.'", // Select your animation type, "fade" or "slide"
		slideDirection: "'.$effect_direction.'", // Select the sliding direction, "horizontal" or "vertical"
		slideshowSpeed: "'.$effect_time.'", // Set the speed of the slideshow cycling, in milliseconds
		pauseOnAction: false,
		controlsContainer: ".flexslider-wrapper"
	});
});

});',
array('type' => 'inline', 'scope' => 'header'));

drupal_add_css('.flex-caption { font-size: '. theme_get_setting('slideshow_fontsize') .'px; }',
		array(
		'group' => CSS_THEME,
		'type' => 'inline',
		'media' => 'all',
		'preprocess' => FALSE,
		)
    );
//EOF:Javascript

if (theme_get_setting('banner_background')) {

	drupal_add_js('jQuery(document).ready(function($) { 
	
		$(window).load(function() {
		var banner = document.getElementById("banner");
			if (banner != null) {
				document.getElementById("banner").className += " bg-shadow";
			}
		});
	
	});',
	array('type' => 'inline', 'scope' => 'footer'));

}

/**
 * Add Javascript for enable/disable scrollTop action
 */
if (theme_get_setting('scrolltop_display')) {

	drupal_add_js('jQuery(document).ready(function($) { 
	$(window).scroll(function() {
		if($(this).scrollTop() != 0) {
			$("#toTop").fadeIn();	
		} else {
			$("#toTop").fadeOut();
		}
	});
	
	$("#toTop").click(function() {
		$("body,html").animate({scrollTop:0},800);
	});	
	
	});',
	array('type' => 'inline', 'scope' => 'header'));

}
//EOF:Javascript

/**
 * Add Javascript for responsive mobile menu
 */
if (theme_get_setting('responsive_menu_state')) {

	if (theme_get_setting('responsive_menu_optgroups')) {
		drupal_add_js(drupal_get_path('theme', 'tophit') .'/js/jquery.mobilemenu.js');
	} else {
		drupal_add_js(drupal_get_path('theme', 'tophit') .'/js/jquery.mobilemenu-no-optgroups.js');
	}
	
	$responsive_menu_nested=theme_get_setting('responsive_menu_nested');
	$responsive_menu_switchwidth=theme_get_setting('responsive_menu_switchwidth');
	$responsive_menu_topoptiontext=theme_get_setting('responsive_menu_topoptiontext');
	$responsive_menu_nested=theme_get_setting('responsive_menu_nested');
	
	drupal_add_js('jQuery(document).ready(function($) { 
	
	$("#main-navigation ul.menu").mobileMenu({
		prependTo: "#main-navigation",
		combine: false,
		nested: '.$responsive_menu_nested.',
		switchWidth: '.$responsive_menu_switchwidth.',
		topOptionText: "'.$responsive_menu_topoptiontext.'"
	});
	
	});',
	array('type' => 'inline', 'scope' => 'header'));

}
//EOF:Javascript
?>