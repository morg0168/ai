<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section class="row middle-xs center-xs">

			<!-- article -->
			<article id="post-404" class="col-xs-12 404">

				<h1><?php _e( 'Page not found', 'wpblank' ); ?></h1>
				<h2>
					<a href="<?php echo home_url(); ?>"><?php _e( 'Return home?', 'wpblank' ); ?></a>
				</h2>

			</article>
			<!-- /article -->

		</section>
		<!-- /section -->
	</main>

<?php //get_sidebar(); ?>

<?php get_footer(); ?>
