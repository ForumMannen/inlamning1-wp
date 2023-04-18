<?php
get_header();
?>

<!--This page is rendering the content of a pages that doesn't have a page-slug.php on it's own-->
<main>
    <section>
        <div class="container">
            <div class="row">
                <div id="primary" class="col-xs-12 col-md-9 col-md-push-3">
                    <?php
                    if (have_posts()) {
                        while (have_posts()) {
                            the_post();

                            the_content();
                        }
                    }
                    ?>
                </div>
</main>

<?php
get_footer();
?>