<?php
get_header();
?>

<!--This page is rendering a single post when you click on the title-tag. -->
<main>
    <section>
        <div class="container">
            <div class="row">
                <div id="primary" class="col-xs-12 col-md-9">
                    <?php
                    if (have_posts()) {
                        while (have_posts()) {
                            the_post();
                            get_template_part('template-parts/content', 'article');
                        }
                    }
                    ?>
                </div>
                <aside id="secondary" class="col-xs-12 col-md-3">
                    <div id="sidebar">
                        <ul>
                            <li>
                                <form id="searchform" class="searchform">
                                    <?php get_search_form(); ?>
                                </form>
                            </li>
                        </ul>
                        <ul role="navigation">
                            <li class="pagenav">
                                <h2>Sidor</h2>
                                <?php
                                wp_nav_menu(array(
                                    'menu' => 'huvudmeny',
                                    'container' => '',
                                    'theme_location' => 'huvudmeny',
                                    'items_wrap' => '<ul class="menu">%3$s</ul>'
                                ));
                                ?>
                            </li>
                            <li>
                                <h2>Arkiv</h2>
                                <ul>
                                    <?php
                                    $archive_links = wp_get_archives(array(
                                        'type' => 'monthly',
                                        'format' => 'html',
                                        'before' => '<li>',
                                        'after' => '</li>'
                                    ));
                                    echo $archive_links;
                                    ?>
                                </ul>
                            </li>
                            <li class="categories">
                                <h2>Kategorier</h2>
                                <ul>
                                    <?php
                                    $category_links = wp_list_categories(array(
                                        'title_li' => '',
                                        'style' => 'list',
                                        'show_count' => true,
                                        'orderby' => 'name',
                                        'echo' => false
                                    ));
                                    echo $category_links;
                                    ?>
                                </ul>
                            </li>

                        </ul>

                    </div>
                </aside>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();
?>