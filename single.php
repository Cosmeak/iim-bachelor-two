<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Ping_Passion
 */

get_header();

$color = get_field('couleur');
$thickness = get_field('epaisseur');
$fast_boi = get_field('rapidite');
$control = get_field('controle');
$grip = get_field('adherence');
$hardness = get_field('durete');
$power = get_field('energie');

?>

	<main id="primary" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();
		?>

			<section class="singles">
				<!-- Information about -->
				<div>
					<?php the_post_thumbnail() ?>
					
					<div>
							<h1> <?php the_title(); ?> </h1>
							<p>Couleur: <span><?= $color ?> </span></p>
							<p>Épaisseur: <span><?= $thickness ?></span></p>
							<p>Rapidité: <span><?= $fast_boi ?></span></p>
							<p>Contrôle: <span><?= $control ?></span></p>
							<p>Adhérence: <span><?= $grip ?></span></p>
							<p>Dureté:<span><?= $hardness ?></span></p>
							<p>Énergie: <span><?= $power ?></span></p>
					</div>
				</div>
				<!-- Description -->
				<div>
					<?php the_content() ?>
				</div>

			</section>

			<?php
			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->
<?php 
get_footer();