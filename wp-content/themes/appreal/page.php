<?php get_header(); ?>


<div class="left">
	<?php if ( !function_exists('dynamic_sidebar')
        || !dynamic_sidebar(2) ) : ?>
	<?php endif; ?>
</div>
<div class="pageContent mainContent">
		<h1 class="post-title" >
			    <?php the_title(); ?><?php edit_post_link(__('Edit'), ' ', ''); ?>
		</h1>
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<?php the_content('<p class="serif">Read more &raquo;</p>'); ?>


		<?php endwhile; endif; ?>
	<?php edit_post_link(''); ?>
</div>


<?php get_footer(); ?>