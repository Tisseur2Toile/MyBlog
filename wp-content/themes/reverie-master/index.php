<?php get_header(); ?>

<!-- Row for main content area -->


	<div class="small-12 medium-9 large-8 columns" id="content" role="main">
	
		<ul>
			<li class="small-6 large-2 columns">ELEM 001</li>
			<li class="small-6 large-2 columns">ELEM 002</li>
			<li class="small-6 large-2 columns">ELEM 003</li>
			<li class="small-6 large-2 columns">ELEM 004</li>
			<li class="small-6 large-2 columns">ELEM 005</li>
			<li class="small-6 large-2 columns">ELEM 006</li>
		</ul>



	<?php if ( have_posts() ) : ?>
	
		<?php /* Start the Loop */ ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'content', get_post_format() ); ?>
		<?php endwhile; ?>
		
		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
		
	<?php endif; // end have_posts() check ?>
	
	<?php /* Display navigation to next/previous pages when applicable */ ?>
	<?php if ( function_exists('reverie_pagination') ) { reverie_pagination(); } else if ( is_paged() ) { ?>
		<nav id="post-nav">
			<div class="post-previous"><?php next_posts_link( __( '&larr; Older posts', 'reverie' ) ); ?></div>
			<div class="post-next"><?php previous_posts_link( __( 'Newer posts &rarr;', 'reverie' ) ); ?></div>
		</nav>
	<?php } ?>

	</div>
	<?php get_sidebar(); ?>
		
<?php get_footer(); ?>