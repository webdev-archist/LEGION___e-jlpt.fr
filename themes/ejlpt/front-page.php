<?php





    get_header();
?>front-page.php
<hr>
    <main id="main">
        <?php if(have_posts())while(have_posts()):the_post(); ?>
        <?= the_title() ?>
        <?= the_content() ?>
        <?php endwhile; ?>
    </main>
    <srcipt>
        const reactDatas = {
            the_title: "<?=the_title() ?>"
            , the_content: "<?=the_content() ?>"
        }
    </srcipt>
<?php
    dynamic_sidebar('homepage'); 
    // get_sidebar('homepage');


    get_footer();
        
        
    

