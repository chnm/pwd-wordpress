<?php get_header(); ?>

    <main class="page-content" aria-label="Content">
        <!-- section -->
        <div class="wrapper">
            <h2><?php echo sprintf( __( '%s Search Results for ', 'html5blank' ), $wp_query->found_posts ); echo get_search_query(); ?></h2>

            <?php get_template_part('loop'); ?>

            <?php get_template_part('pagination'); ?>

            <?php get_sidebar(); ?>
        </div>
        <!-- /section -->
    </main>

<?php get_footer(); ?>
