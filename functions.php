<?php
/**
 * Register widgetized areas
 * @uses register_sidebar
 */
function skin_widgets_init() {
	register_sidebar( array(
		'name' => __( 'Right Column Widgets', 'skin' ),
		'id' => 'right_widgets',
		'description' => __( 'Right column widget area', 'skin' ),
		'before_widget' => '<div class="widget_container %2$s">',
		'after_widget' => '</div></div>',
		'before_title' => '<h3 class="widget_title">',
		'after_title' => '</h3><div class="widget_content">'
	) );
}
/** Register sidebars by running twentyten_widgets_init() on the widgets_init hook. */
add_action('widgets_init', 'skin_widgets_init');