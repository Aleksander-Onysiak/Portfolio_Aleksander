<?php get_header(); ?>
<?php if (have_posts()): while (have_posts()): the_post(); ?>
    <main id="cards">
		<?php get_template_part('posts'); ?>
    </main>
<?php endwhile; endif; ?>
<?php get_footer(); ?>