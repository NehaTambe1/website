<?php
/**
 * Template Name: Page Template Home
 */
get_header(); ?>
<div class="banner"> 
  <img src="http://localhost/mysite_neha/wp-content/uploads/2020/01/apple-clean-containers-205316-scaled-e1581658282116.jpg">
  <div class="banner-content">
  
  <?php
echo do_shortcode('[smartslider3 slider=4]');
?></div></div>
<main id="content">

	<div class="container" id="custom-a-tag">
		<div id="primary" class="content-area entry-content">
			<main id="main" class="site-main" role="main">

				<?php
				while ( have_posts() ) : the_post();

					get_template_part( 'template-parts/page/content', 'page' );

					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;

				endwhile; // End of the loop.
				?>

			</main>
		</div>
	</div>
</main>

<?php get_footer();
