<?php
get_header();

$films = new WP_Query( ['post_type' => 'film'] );
?>
<div id="primary" class="content-area col-sm-12 col-md-8 <?php echo of_get_option( 'site_layout' ); ?>">
    <main id="main" class="site-main" role="main">

        <div class="r">
		    <?php
		    if ( $films->have_posts() ) : while ( $films->have_posts() ) : $films->the_post();
			    $releaseDate = get_post_meta($post->ID, 'Release Date', true);
			    $ticketPrice = get_post_meta($post->ID, 'Ticket Price', true);
			    $taxonomies = get_the_taxonomies($post->ID);
			    ?>
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title"><?=the_title()?></h3>
                        </div>
                        <div class="panel-body">
						    <?=substr(get_the_content(), 0, 150)?>
                        </div>
                        <div class="divider"></div>
                        <div class="panel-film-meta">
                            <div class="meta">
                                <span class="glyphicon glyphicon-usd meta-icon"></span>
                                <span class="meta-text"><?=$ticketPrice?></span>
                            </div>
                            <div class="meta">
                                <span class="glyphicon glyphicon-calendar meta-icon"></span>
                                <span class="meta-text"><?=$releaseDate?></span>
                            </div>
	                        <?php foreach ($taxonomies as $name => $taxonomy):
		                        if ($name != 'actor' && $name != 'year'):
			                        ?>
                                    <div class="meta">
                                        <div class="meta-text">
					                        <?=$taxonomy?>
                                        </div>
                                    </div>
		                        <?php endif; endforeach; ?>
                            <div class="text-right">
                                <a href="<?=get_the_permalink()?>" class="meta-read-more">Learn More <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
		    <?php endwhile; endif; wp_reset_postdata(); ?>
        </div>

    </main><!-- #main -->
</div><!-- #primary -->
<?=get_sidebar()?>
<?=get_footer()?>
