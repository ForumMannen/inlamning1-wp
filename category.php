<?php
get_header();
?>

<!--This code is rendering posts depending on category-->
<main>
    <section>
        <div class="container">
            <div class="row">
                <div id="primary" class="col-xs-12 col-md-9">
                    <h1><?php single_cat_title(); ?></h1>;
                    <?php
                    if (have_posts()) :
                        while (have_posts()) : the_post();
                            get_template_part('template-parts/content', 'archive');
                        endwhile;
                    else :
                        echo '<p>Inga poster hittades</p>';
                    endif;
                    ?>
                    <nav class="navigation pagination">
                        <h2 class="screen-reader-text">Inläggsnavigering</h2>
                        <?php the_posts_pagination(); ?>
                    </nav>
                </div>
                <?php get_sidebar(); ?>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();
?>