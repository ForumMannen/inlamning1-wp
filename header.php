<!DOCTYPE html>
<html>

<!--This is file is where the header-content is added, to access it use get_header(); -->

<head>
    <meta charset="UTF-8" />
    <title><?php bloginfo('name'); ?></title>
    <?php
    wp_head();
    ?>
</head>

<body>

    <div id="wrap">

        <header id="header">
            <div class="container">
                <div class="row">
                    <div class="col-xs-8 col-sm-6">
                        <a class="logo" href="<?php echo esc_url(get_site_url()); ?>"><?php bloginfo('name'); ?></a>
                    </div>
                    <div class="col-sm-6 hidden-xs">
                        <?php
                        get_search_form();
                        ?>
                    </div>
                    <div class="col-xs-4 text-right visible-xs">
                        <div class="mobile-menu-wrap">
                            <i class="fa fa-search"></i>
                            <i class="fa fa-bars menu-icon"></i>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <div class="mobile-search">
            <form id="searchform" class="searchform">
                <div>
                    <label class="screen-reader-text">Sök efter:</label>
                    <!--This function is using wordpress searchfunction-->
                    <?php
                    get_search_form();
                    ?>
                </div>
            </form>
        </div>

        <nav id="nav">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <!--This function is adding the menu created and choosen in the adminpanel-->
                        <?php
                        wp_nav_menu(array(
                            'menu' => 'huvudmeny',
                            'container' => '',
                            'theme_location' => 'huvudmeny',
                            'items_wrap' => '<ul class="menu">%3$s</ul>'
                        ));
                        ?>
                    </div>
                </div>
            </div>
        </nav>