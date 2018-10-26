<?php
get_header();
?>
<div id="primary" class="content-area col-sm-12 col-md-8 <?php echo of_get_option( 'site_layout' ); ?>">
	<main id="main" class="site-main" role="main">

		<div class="r">
			<?php
			while ( have_posts() ) : the_post();
				$taxonomies = get_the_taxonomies($post->ID);
				$releaseDate = get_post_meta($post->ID, 'Release Date', true);
				$ticketPrice = get_post_meta($post->ID, 'Ticket Price', true);
				?>
				<div class="col-md-12">
					<div class="single-film">
                        <h3 class="film-title"><?=the_title()?></h3>
                        <div class="single-film-body">
							<?=the_content()?>
						</div>
						<div class="divider"></div>
						<div class="single-film-meta">
							<div class="meta">
								<span class="glyphicon glyphicon-usd meta-icon"></span>
								<span class="meta-text"><b>Ticket: </b><?=$ticketPrice?></span>
							</div>
							<div class="meta">
								<span class="glyphicon glyphicon-calendar meta-icon"></span>
								<span class="meta-text"><b>Released: </b><?=$releaseDate?></span>
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
						</div>
					</div>
				</div>

			<?php endwhile; wp_reset_postdata(); ?>
		</div>

	</main><!-- #main -->
</div><!-- #primary -->
<?=get_sidebar()?>
<?=get_footer()?>
