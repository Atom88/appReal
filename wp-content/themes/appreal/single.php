<?php get_header(); ?>
<div class="left">
	<?php if ( !function_exists('dynamic_sidebar')
        || !dynamic_sidebar(2) ) : ?>
	<?php endif; ?>
</div>
This is template, beatch
<div class="content mainContent">
<?php  include(TEMPLATEPATH."/sidebar.php"); ?>
	<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
		<div class="post">
					<h1 class="post-title" >
					<?php the_title(); ?><?php edit_post_link(__('Edit'), ' ', ''); ?>
					</h1>
					<?php the_content('Read more &raquo;'); ?>


		</div>
		<?php endwhile; ?>		

	<?php else : endif; ?>

		
</div>
<?php get_footer(); ?>