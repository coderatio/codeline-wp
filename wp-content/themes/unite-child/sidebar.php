<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package unite
 */
?>
<div id="secondary" class="widget-area col-sm-12 col-md-4" role="complementary">
	<?php do_action( 'before_sidebar' ); ?>
    <aside id="search" class="widget widget_search">
		<?php get_search_form(); ?>
        <br/>
        <?=do_shortcode("[last_added_films]")?>
    </aside>
</div><!-- #secondary -->
