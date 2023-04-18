<!--This template-part is rendering a shorter blogpost with only a excerpt wherever you want to reuse it. -->

<article>
    <img src="<?php the_post_thumbnail_url(); ?>" alt="">
    <h2 class="title">
        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
    </h2>
    <ul class="meta">
        <li>
            <i class="fa fa-calendar"></i><?php the_date(); ?>
        </li>
        <li>
            <i class="fa fa-user"></i><a href="
            <?php
            $user_id = get_current_user_id();
            echo esc_url(get_author_posts_url($post->post_author)); ?>"><?php the_author(); ?></a>
        </li>
        <li>
            <i class="fa fa-tag"></i><a href="kategori.html"><?php the_category(', '); ?></a>
        </li>
    </ul>
    <p><?php the_excerpt(); ?></p>
</article>