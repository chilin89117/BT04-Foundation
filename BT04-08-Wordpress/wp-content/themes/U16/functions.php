<?php
add_theme_support('menus');

register_sidebar(array(
	'name'						=> __('Right Hand Sidebar'),
	'id'							=> 'right-sidebar',
	'description'		=> __('Widgets will show in right sidebar'),
	'before_title'		=> '<h3>',
	'after_title'		=> '</h3>',
	'before_widget'	=> '<div id="%1$s" class="%2$s">',
	'after_widget'		=> '</div>' 
));
?>