<?php
/**
 *Template Name: Titles
 *
 * @package OnePress
 */

get_header();

/**
 * @since 2.0.0
 * @see onepress_display_page_title
 */
do_action( 'onepress_page_before_content' );
?>
<style>
p {text-align: center;}
</style>
<p><strong>Ranked by users at ranker.com, this is a list of the best  board games ever made.Card games and role playing games are excluded.  A board game is a game that involves counters<br>
 or pieces moved or placed on a pre-marked surface or "board", according to a set of rules. Games can be based on pure strategy, chance (e.g. rolling dice), or a mixture of the two, and usually <br>
 have a goal that a player aims to achieve.</strong></p>
 
	<div id="content" class="site-content">
        <?php
        onepress_breadcrumb();
        ?>
		<div id="content-inside" class="container no-sidebar">
			<div id="primary" class="content-area">
				<main id="main" class="site-main" role="main">
					<?php $query = new WP_Query( array('post_type' => 'card', 'posts_per_page' => -1) ); 
						while ( $query->have_posts() ) :
							$query->the_post();
					?>
						<p><a href=<?php the_permalink(); ?>><?php the_title(); ?></a></p>
					<?php
						endwhile;
					?>
				</main><!-- #main -->
			</div><!-- #primary -->
		</div><!--#content-inside -->
	</div><!-- #content -->

<?php get_footer(); ?>

