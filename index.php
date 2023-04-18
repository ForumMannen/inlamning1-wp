<?php
get_header();
?>

<!--This page is rendering the content of the Homepage and is a fallback for every other link that is not working properly-->
<main>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="hero">
                        <?php the_post_thumbnail('full'); ?>
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