<?php
get_header();
?>

<!--This page is rendering the searchresult from different inputfields on the site-->
<h1><?php echo "Sökresultat för: ";
    the_search_query(); ?></h1>

<?php
if (have_posts()) {
    while (have_posts()) {
        the_post();
        get_template_part('template-parts/content', 'archive');
    }
}
?>

<?php
get_footer();
?>