<?php get_header(); ?>
<?php if (have_posts()): while (have_posts()): the_post(); // Ouverture de "The Loop" de Wordpress ?>

    <main class="schools__page">
        <header class="schools__header">
            <h1  role="heading" aria-level="1" class="schools__title"><?= get_the_title(''); ?></h1>
        </header>
        <section class="schools__container" itemscope itemtype="https://schema.org/EducationalOrganization">
            <div>
                <h2 role="heading" aria-level="3" class="schools__name" itemprop="name"><?= get_sub_field('ecole'); ?></h2>
                <p class="schools__duration" itemprop="timeRequired"><?= get_sub_field('duration'); ?></p>
                <p class="schools__section" itemprop="department"><?= get_sub_field('section'); ?></p>
                <p class="schools__desc" itemprop="description"><?= get_sub_field('description'); ?></p>
                <p><a class="schools__link" href="<?php echo esc_attr( get_sub_field('lien') ); ?>" itemprop="url"><?php echo esc_attr( get_sub_field('lien') ); ?></a></p>
            </div>
        </section>

    </main>

<?php endwhile; endif; // Fermeture de "The Loop" de Wordpress ?>
<?php get_footer(); ?>


