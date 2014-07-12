<?php
function et_widgets_init1() {

		register_sidebar( array(
		'name' => 'Sidebar Area #1',
		'id' => 'sidebar-4',
		'before_widget' => '<div id="%1$s" class="fwidget %2$s">',
		'after_widget' => '</div> <!-- end .fwidget -->',
		'before_title' => '<h4 class="widgettitle">',
		'after_title' => '</h4>',
	) );

}
add_action( 'widgets_init', 'et_widgets_init1' );