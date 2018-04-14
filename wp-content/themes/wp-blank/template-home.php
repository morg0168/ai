<?php /* Template Name: Home */ get_header(); ?>

	<main role="main">
		<!-- section -->
		<?php if (have_posts()): while (have_posts()) : the_post(); ?>
          	<section>

			<h1><?php the_title(); ?></h1>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<?php the_content(); ?>

				<?php // comments_template( '', true ); ?>

			     <?php edit_post_link(); ?>
              </article>
              	</section>
		<!-- /section -->
        <?php 
        $home_block_1 = get_post_meta( get_the_ID(), 'home_block', true );
        if (! empty(  $home_block_1  )){?>
		<section class="section-01">
          <h2><?php echo $home_block_1['text']; ?></h2>
          <p><?php echo $home_block_1['textarea']; ?></p>
        </section>
        <?php  }?>
   
<!-- /article -->

  <?php endwhile; ?>

  <?php else: ?>



  <?php endif; ?>

	
</main>

<?php // get_sidebar(); ?>

<?php get_footer(); ?>
