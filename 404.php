<?php
/**
 * The template for displaying 404 (page not found) pages.
 *
 * For more info: https://codex.wordpress.org/Creating_an_Error_404_Page
 */

get_header(); ?>

	<div class="content">

		<div class="inner-content grid-x grid-margin-x grid-padding-x">

			<main class="main small-12 medium-8 large-8 cell" role="main">

				<div class="grid-container page_notfound_container wow fadeIn">
					<div class="grid-x">
						<div class="cell small-12 medium-8 medium-offset-2 text-center">
							<h1>Helaas deze pagina bestaat niet...</h1>
						</div>
						<div class="cell small-12 medium-8 medium-offset-2 large-6 large-offset-3 text-center">
							<p>Onze excuses, maar deze pagina kunnen we helaas niet vinden. Waarschijnlijk is de link aangepast of de pagina verwijderd.</p>
						</div>

						<div class="cell small-12 medium-8 medium-offset-2 text-center">
							<a class="custom_btn" onclick="window.history.back();">Ga terug naar de vorige pagina</a>
						</div>
					</div>
				</div>

			</main> <!-- end #main -->

		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>
