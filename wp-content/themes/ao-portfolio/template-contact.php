<?php /* Template Name: Page "Contact" */ ?>
<?php get_header(); ?>
    <?php if(have_posts()): while(have_posts()): the_post(); // Ouverture de "The Loop" de Wordpress ?>
        
        <main class="contact">
            <header class="contact__header">
                <h1 role="heading" aria-level="1" class="contact__title"><?= get_the_title(); ?></h1>
            </header>

            <section class="contact__form" style="display:none">
                <h2 role="heading" aria-level="2">Contactez-moi via ce formulaire</h2>
                <?= apply_filters('the_content', '[contact-form-7 id="9065a15" title="Contact form"]'); ?>
            </section>

            <?= (apply_filters('the_content', '[contact-form-7 id="9065a15" title="Contact form"]')); ?>

        </main>

    <?php endwhile; endif; // Fermeture de "The Loop" de Wordpress ?>
<?php get_footer(); ?>