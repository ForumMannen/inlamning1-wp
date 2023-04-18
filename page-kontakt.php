<?php
get_header();
?>

<!--This page is rendering the contactform on the contactpage-->
<main>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-8 col-md-offset-2">
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                            <h1><?php the_title(); ?></h1>
                            <?php the_content(); ?>
                    <?php endwhile;
                    endif; ?>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();
?>