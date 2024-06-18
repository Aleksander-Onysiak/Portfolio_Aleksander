<?php get_header(); ?>
<?php if (have_posts()): while (have_posts()): the_post(); // Ouverture de "The Loop" de Wordpress ?>

	<?php get_header(); ?>
    <main class="schools__page">
        <h2 role="heading" aria-level="1" class="schools__title" >Mon parcours scolaire</h2>
        <div class="schools__content">
			<?php if( have_rows('schools') ): while( have_rows('schools') ) : the_row(); // Ouverture de "The Loop" de Wordpress ?>
                <section class="schools__container" itemscope itemtype="https://schema.org/EducationalOrganization">
                    <div>
                        <h2 role="heading" aria-level="3" class="schools__name" itemprop="name"><?= get_sub_field('school'); ?></h2>
                        <p class="schools__duration" itemprop="timeRequired"><?= get_sub_field('duration'); ?></p>
                        <p class="schools__section" itemprop="department"><?= get_sub_field('section'); ?></p>
                        <p class="schools__desc" itemprop="description"><?= get_sub_field('description'); ?></p>
                        <a class="schools__link" href="<?php echo esc_attr( get_sub_field('lien') ); ?>" itemprop="url"><?php echo esc_attr( get_sub_field('lien') ); ?></a>
                    </div>
                </section>
			<?php endwhile; endif; // Fermeture de "The Loop" de Wordpress ?>
        </div>
    </main>
	<?php get_footer(); ?>

<?php endwhile; endif; // Fermeture de "The Loop" de Wordpress ?>
<?php get_footer(); ?>