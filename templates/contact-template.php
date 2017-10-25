<?php
/*
Template Name: About Us Template
*/

get_header(); ?>

<div class="content">

	<div class="inner-content grid-x grid-padding-x">

	    <main class="main small-12 cell" role="main">

			<?php if (have_posts()) : ?>

				<?php while (have_posts()) : the_post(); ?>

				<?php endwhile; ?>

			<?php endif; ?>

		</main> <!-- end #main -->

	</div> <!-- end #inner-content -->

</div> <!-- end #content -->

<?php get_footer(); ?>
