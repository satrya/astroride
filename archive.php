<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Astroride
 */

get_header();
?>

	<div class="content__container">
		<div class="content__row">
			<main class="content__main">

			<?php
			if ( have_posts() ) : ?>

				<header class="content__archive-header">
					<?php
					the_archive_title( '<h1 class="content__archive-title">', '</h1>' );
					the_archive_description( '<div class="content__archive-desc">', '</div>' );
					?>
				</header><!-- .page-header -->

				<?php
				/* Start the Loop */
				while ( have_posts() ) :
					the_post();

					get_template_part( 'template-parts/content/content' );

				endwhile;

				the_posts_navigation();

			else :

				get_template_part( 'template-parts/content/content', 'none' );

			endif;
			?>

			</main><!-- .content__main -->

		</div><!-- .content__row -->
	</div><!-- .content__container -->

<?php
get_footer();
