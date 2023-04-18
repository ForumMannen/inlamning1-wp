<?php
get_header();
?>

<!--This page is rendering the content of Undersida-3-->
<main>
    <section>
        <div class="container">
            <div class="row">
                <div id="primary" class="col-xs-12">
                    <?php
                    if (have_posts()) {
                        while (have_posts()) {
                            the_post();

                            the_content();
                        }
                    }
                    ?>
                </div>
            </div>
    </section>
</main>

<?php
get_footer();
?>