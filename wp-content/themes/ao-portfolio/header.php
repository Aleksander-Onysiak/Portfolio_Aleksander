<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= dw_asset( 'css/style.css' ); ?>">
	<?php wp_head(); ?>


    <script src="<?= dw_asset( 'js/site.js' ) ?>"></script>
</head>

<body>
<noscript>
    <p class="no-js__message">
        Pour accéder à toutes les fonctionnalités de ce site, vous devez activer JavaScript.<br>
        Voici les <a href="https://www.enable-javascript.com/fr/" title="vers le site enable-javascript">instructions
            pour activer JavaScript dans votre navigateur Web</a>.
    </p>
</noscript>
<h1 class="portfolio__title" role="heading" aria-level="1"><?= get_bloginfo( 'name' ); ?></h1>
<div class="menu__container">

	<?php
	// Afficher le menu de pied de page "façon MVC"
	?>
    <nav class="nav">
        <h2 role="heading" aria-level="2" class="nav_title">Navigation principale</h2>
        <div class="nav__container">
            <span class="arrowAfter">Mes pages</span>
            <ul class="dropdown sub-menu">
                <li class="nav__links-list">
					<?php foreach ( dw_get_navigation_links( 'main' ) as $link ): ?>
                        <a class="nav__link" href="<?= $link->url ?>" class="nav__link" title="Ceci est un lien de navigation!" ><?= $link->label ?></a>
					<?php endforeach; ?>
                </li>
            </ul>
        </div>

    </nav>

	<?php // Version "BEM" avec JS pour faire un "quick search" ?>

    <div class="quicksearch">
        <form action="<?= home_url(); ?>" method="get" class="quicksearch__form">
            <div class="quicksearch__field">
                <label for="search" class="quicksearch__label sro">Votre recherche</label>
                <input type="search" name="s" id="search" placeholder="Recherchez par exemple tarte..."
                       value="<?= get_search_query(); ?>" class="quicksearch__input"/>
                <button type="submit" class="quicksearch__btn">
                    <span class="sro">Rechercher</span>
                </button>
            </div>
        </form>
    </div>
</div>