<?php
/**
 *Template Name: Wall2
 *
 * @package OnePress
 */

get_header();
<main id="main" class="site-main grid" 
<?php if ( has_post_thumbnail() ) { the_post_thumbnail('medium'); 
} 
the_title(); 
?> 
 div class="wall-card grid-item"> 


<?php get_footer(); ?>