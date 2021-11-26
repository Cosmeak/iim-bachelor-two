<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Ping_Passion
 */

get_header();
?>

	<main id="primary" class="site-main">

		<?php if ( have_posts() ) : ?>

			<div class="wrap">
			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();
				$content = strip_tags(get_the_content());
			?>
					<a href="<?= the_permalink() ?>">
						<article class="cards">
						<?= the_post_thumbnail() ?>
							<div>								
								<h3> <?= the_title() ?> </h3>
								<p> <?= substr($content, 0, 200) ?>...</p>
							</div>
						</article>
					</a>
				<?php

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>
		</div>

	</main><!-- #main -->


