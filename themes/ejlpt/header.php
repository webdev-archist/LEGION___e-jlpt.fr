<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php 
        /****
         * https://developer.wordpress.org/reference/hooks/wp_title/
         * https://developer.wordpress.org/reference/functions/get_bloginfo/
         */
        // code something like this: (depreciated)
            //echo wp_title(' | ', true, "right"); 
        //or code something like that: 
            //echo "just put nothing and ride html title tag output through filter hooks in the functions.php file :p"
    ?></title>
    <?php wp_head() ?>
</head>
<body>
    <header class="navbar navbar-expand-sm navbar-light bg-light">
<!--/*********************************************************************************** */-->
<!--/*************************************INDENTITE VISUELLE**************************** */-->
<!--/*********************************************************************************** */-->
        <a class="navbar-brand" href="#" title="<?=get_bloginfo()?>">
            <?php
            // https://developer.wordpress.org/reference/functions/the_custom_logo/
            // echo the_custom_logo();
            // echo get_custom_logo();
            //---//
            $custom_logo_id = get_theme_mod( 'custom_logo' );
            $custom_logo_url = wp_get_attachment_image_url( $custom_logo_id , 'thumbnail' );
            echo '<img src="' . esc_url( $custom_logo_url ) . '" alt="">';
            ?>
            <h1 class='brand'>
                <span>E-JLPT: </span>
                <span><?=get_bloginfo()?></span>
                <span>:p</span>
            </h1>
        </a>
        <?php
        ?>
        <!--?=var_dump( $custom_logo_url )?-->
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <nav class="collapse navbar-collapse" id="collapsibleNavId">
            <?= 
                // https://developer.wordpress.org/reference/functions/wp_nav_menu%20start_lvl%20never%20clled/
                wp_nav_menu([
                    'theme_location' => 'navbar', 
                    'container' => '',// 'container_id' => '','container_class' => '',
                    'items_wrap' => '<menu id="mon_navbar%1$s" class="%2$s navbar-nav mr-auto">
                        %3$s
                    </menu>',
                    // 'menu_id' => 'mon_navbar',
                    // 'menu_class' => 'navbar-nav mr-auto',
                    'walker' => new Mon_Walker_Nav_Menu,
                    // 'fallback_cb' => function(){echo"...no menu available yet...";},
                ]); 


                get_search_form();

                
                if ( function_exists('yoast_breadcrumb') ) {
                    yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
                }
            ?>
        </nav>
    </header>


    <nav class="ariane container">
        <div class="widget0">
            <bookmarks>links on this domain that the user saved via his cookies</bookmarks>
            <share>printable pdf current page, resources,..</share>
        </div>
        <ol id="ariane__breadcrumb breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Home</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
                Library
            </li>
        </ol>
        <section id="ariane__date">
            <p class="wrapDate">
                <label>Nous sommes le:</label>
                <time id="ariane__date--fr" class="showDate" datetime="<?=date('y-m-d')?>">la date en francais</time>
                <time id="ariane__date--jp" class="showDate" datetime="<?=date('y-m-d')?>">日本語で日時</time>
                <input id="ariane__date--input" type="date" />
            </p>
            <div class="wrapNow">
                <time id="ariane__now--" class="showTime" datetime="<?=date('y-m-d')?>">c'est un widget pour faciliter la lecture de l'heure en japonais. Il affiche une image de cadre horaire avec les nombre romain et japonais(meido et ancien). Ce peut aussi etre un jeu intéractif...</time>
            </div>
        </section>
        <div class="widget1">
            <metas>
                - PUIS générer une ancre qui au survol affiche un petit article optimisé reprenant les informations des métas données (title,description,liens(canonnique,rs,etc) de la page
            </metas>
            <rs>
                - générer des liens de partage sur les réseau-sociaux
                <hr/>
                - PUIS pour chaque méta données rs(fb,tw,github,...) existante générer une ancre qui au survol affiche la vue correspondante au rs du lien ainsi survolé
            </rs>
            <googletrends>
                - générer des un nuage d'ancres(backlinks, intralinks, etc) correspondant à la liste des keywords de la page d'une part, 
                <hr/>
                - générer un lien correspondante à la longue traine pour cette page,
                - générer un lien correspondante à la courte traine pour cette page,
            </googletrands>
        </div>
    </nav>
    
    
    