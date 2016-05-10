<?php get_header(); ?>

<div class="left">
	<?php if ( !function_exists('dynamic_sidebar')
        || !dynamic_sidebar(2) ) : ?>
	<?php endif; ?>
</div>
<div class="content mainContent">
	  <h1 class="post-title">Error 404 - Page not found</h1>
</div>

<?php get_footer(); ?>