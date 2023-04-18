<?php
get_header();
?>

<!--This page is rendering the content of the Homepage-->
<main>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="hero">
                        <img src="<?php the_post_thumbnail_url(); ?>" alt="">
                        <div class="text">
                            <?php
                            if (have_posts()) {
                                the_post();
                                the_content();
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();
?>