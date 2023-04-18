<?php
get_header();
?>

<!--This page is rendering the content of Undersida-4-->
<main>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-md-6">
                    <?php
                    if (have_posts()) {
                        while (have_posts()) {
                            the_post();

                            the_content();
                        }
                    }
                    ?>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-6">
                    <img src="<?php the_post_thumbnail_url(); ?>" alt="">
                </div>
            </div>
    </section>
</main>

<?php
get_footer();
?>