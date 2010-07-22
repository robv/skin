<?php
/**
 * The Sidebar containing the primary and secondary widget areas
 */
?>

<?php if ( ! dynamic_sidebar( 'right_widgets' ) ) : // begin primary widget area ?>

	<div class="widget_container">
		<h3 class="widget_title">Search</h3>
		<div class="widget_content">
			<?php get_search_form(); ?>
		</div>
	</div>

	<div class="widget_container">
	
		<h3 class="widget_title"><?php _e( 'Archives', 'blockhead' ); ?></h3>
		<div class="widget_content">
			<ul>
				<?php wp_get_archives( 'type=monthly' ); ?>
			</ul>
		</div>
	</div>

	<div class="widget_container">
		<h3 class="widget_title"><?php _e( 'Meta', 'blockhead' ); ?></h3>
		<div class="widget_content">
			<ul>
				<?php wp_register(); ?>
				<li><?php wp_loginout(); ?></li>
				<?php wp_meta(); ?>
			</ul>
		</div>
	</div>
	
<?php endif; // end primary widget area ?>