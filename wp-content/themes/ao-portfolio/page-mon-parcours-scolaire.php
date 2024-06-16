<?php get_header(); ?>
<?php if (have_posts()): while (have_posts()): the_post(); // Ouverture de "The Loop" de Wordpress ?>

	<?php get_header(); ?>
    <main class="careers__page">
        <h2 role="heading" aria-level="1" class="careers__title" >Mon parcours scolaire</h2>
        <div class="careers__content">
			<?php if( have_rows('careers') ): while( have_rows('careers') ) : the_row(); // Ouverture de "The Loop" de Wordpress ?>
                <section class="careers__steps">
                    <div class="careers__container">
                        <h2 role="heading" aria-level="2" class="careers__school"><?= get_sub_field('school'); ?></h2">
                        <p class="careers__duration"><?= get_sub_field('duration'); ?></p>
                        <p class="careers__section"><?= get_sub_field('section'); ?></p>
                        <p class="careers__desc"><?= get_sub_field('description'); ?></p>
                        <a class="careers__link" href="<?php echo esc_attr( get_sub_field('lien') ); ?>" title="Ceci est un lien qui vous emmène sur le site de l'école!" ><?php echo esc_attr( get_sub_field('lien') ); ?></a>
                    </div>
                </section>
			<?php endwhile; endif; // Fermeture de "The Loop" de Wordpress ?>
        </div>
    </main>
	<?php get_footer(); ?>

<?php endwhile; endif; // Fermeture de "The Loop" de Wordpress ?>
<?php get_footer(); ?>