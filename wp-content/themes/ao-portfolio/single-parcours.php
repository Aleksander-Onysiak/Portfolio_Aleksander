<?php get_header(); ?>
<?php if (have_posts()): while (have_posts()): the_post(); // Ouverture de "The Loop" de Wordpress ?>

    <main class="careers__page">
        <header class="careers__header">
            <h1  role="heading" aria-level="1" class="careers__title"><?= get_the_title(''); ?></h1>
        </header>
        <section class="careers__steps">
            <div class="careers__container">
                <h2 role="heading" aria-level="3" class="careers__school"><?= get_sub_field('ecole'); ?></h2">
                <p class="careers__duration"><?= get_sub_field('duration'); ?></p>
                <p class="careers__section"><?= get_sub_field('section'); ?></p>
                <p class="careers__desc"><?= get_sub_field('description'); ?></p>
                <a class="careers__link" href="<?php echo esc_attr( get_sub_field('lien') ); ?>"><?php echo esc_attr( get_sub_field('lien') ); ?></a>
            </div>
        </section>
    </main>

<?php endwhile; endif; // Fermeture de "The Loop" de Wordpress ?>
<?php get_footer(); ?>


