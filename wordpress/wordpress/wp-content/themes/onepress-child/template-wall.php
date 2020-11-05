<?php
/**
 *Template Name: Page-Wall
 *
 * @package OnePress
 */

get_header();
// function include_masonry() { if ( is_page_template('page-wall.php') ) {  wp_enqueue_script('masonry', get_stylesheet_directory_uri() . 
// '/assets/js/masonry.pkgd.min.js', array( 'jquery' )); } }  add_action('wp_enqueue_scripts', 'include_masonry'); 

wp_enqueue_script('wplab', get_stylesheet_directory_uri() . 
'/assets/js/wplab.js',  array( 'jquery', 'masonry' ));
/**
 * @since 2.0.0
 * @see onepress_display_page_title
 */
do_action( 'onepress_page_before_content' );
?>

	<div id="content" class="site-content">
        <?php
        onepress_breadcrumb();
        ?>
		<div id="content-inside" class="container no-sidebar">
			<div id="primary" class="content-area">
#masonry
					<main id="main" class="site-main grid" data-masonry='{ "itemSelector": ".grid-item"}'>
						<?php $query = new WP_Query( array('post_type' => 'card', 'posts_per_page' => -1) ); 
							while ( $query->have_posts() ) :
								$query->the_post();
							?>
 							<div class="wall-card grid-item ">
 								<div class="container">
								<?php	
									if ( has_post_thumbnail() ) { ?>
										<a href=<?php the_permalink(); ?>>
										<?php the_post_thumbnail(); ?></a> 
								<?php		
									}
									the_content();
								?>
								<div class="overlay"> </div>
								</div>
								<div class="wall-card-details">
								<h3><a href=<?php the_permalink(); ?>><?php the_title(); ?> </a></h3>
								<a> 
									<p>	<?php the_tags(); ?> <p>
									<p> <?php the_time('F j, y ') ?> </p>
								</a>
								</div>
								</div>
								<?php endwhile; ?>
				</main><!-- #main -->
			</div><!-- #primary -->
		</div><!--#content-inside -->
	</div><!-- #content -->
	<?php get_footer(); ?>
