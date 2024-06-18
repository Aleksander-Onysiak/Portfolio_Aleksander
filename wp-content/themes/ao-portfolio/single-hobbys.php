<?php get_header(); ?>
    <main class="hobby__page">
        <h2 role="heading" aria-level="2" class="hobby__main" >Tous mes passe-temps</h2>
        <div class="hobby__content">
			<?php if ( have_posts() ): while ( have_posts() ): the_post(); // Ouverture de "The Loop" de Wordpress ?>
                <article class="hobby__container" itemscope itemtype="https://schema.org/Hobby">
					<?= wp_get_attachment_image( get_sub_field( 'image' ), 'medium', false, [ 'class' => 'hobby__image', 'itemprop' => 'image' ] ) ?>
                    <div class="hobby__container__infos">
                        <h3 role="heading" aria-level="2" class="hobby__container__name" itemprop="name"><?= get_sub_field( 'name' ); ?></h3>
                        <p class="hobby__container__description" itemprop="description"><?= get_sub_field( 'description' ); ?></p>
                    </div>
                </article>
			<?php endwhile; endif; // Fermeture de "The Loop" de Wordpress ?>
        </div>
    </main>
<?php get_footer(); ?>