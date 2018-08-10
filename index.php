<?php get_header(); ?>

    <main class="page-content" aria-label="Content">
        <!-- section -->
        <div class="wrapper">

            <h2>News</h2>

            <?php get_template_part('loop'); ?>

            <?php get_template_part('pagination'); ?>

            <?php get_sidebar(); ?>

        </div>
        <!-- /section -->
    </main>

<?php get_footer(); ?>
