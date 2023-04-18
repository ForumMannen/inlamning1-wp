<?php
get_header();
?>

<!--This page is rendering the post made on the postpage-->
<main>
    <section>
        <div class="container">
            <div class="row">
                <div id="primary" class="col-xs-12 col-md-9">
                    <h1>Blogg</h1>
                    <?php
                    if (have_posts()) {
                        while (have_posts()) {
                            the_post();
                            get_template_part('template-parts/content', 'archive');
                        }
                    }
                    ?>
                    <nav class="navigation pagination">
                        <h2 class="screen-reader-text">Inläggsnavigering</h2>
                        <?php
                        the_posts_pagination();
                        ?>
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