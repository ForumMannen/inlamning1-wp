<?php
get_header();
?>

<!--This page is rendering the content of Undersida-->
<main>
    <section>
        <div class="container">
            <div class="row">
                <div id="primary" class="col-xs-12 col-md-9">
                    <?php
                    if (have_posts()) {
                        while (have_posts()) {
                            the_post();

                            the_content();
                        }
                    }
                    ?>
                </div>
                <aside id="secondary" class="col-xs-12 col-md-3">
                    <ul class="side-menu">
                        <?php
                        get_template_part('template-parts/content', 'smallmenu');
                        ?>
                    </ul>
                </aside>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();
?>