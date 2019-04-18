<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

        <link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="<?php bloginfo('description'); ?>">
        <?php wp_head(); ?>
        <script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

    </head>
    <body <?php body_class(); ?>>
        <!-- header -->
        <header class="site-header" role="banner">
            <div class="wrapper">
                <!-- logo -->
                <?php if (function_exists('the_custom_logo') && has_custom_logo()): ?>
                    <?php
                    $custom_logo_id = get_theme_mod( 'custom_logo' );
                    $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                    ?>
                    <a href="http://dev.wardepartmentpapers.org/s/home/" class="site-title logo"><img src="<?php echo esc_url($logo[0]); ?>" alt="<?php echo get_bloginfo('name'); ?>"></a>
                <?php else: ?>
                <a href="http://dev.wardepartmentpapers.org/s/home/" class="site-title">
                    Papers of the War Department
                </a>
                <?php endif; ?>
                <!-- /logo -->

                <!-- nav -->
                <nav class="site-nav" role="navigation">
                    <input type="checkbox" id="nav-trigger" class="nav-trigger" aria-label="Toggle menu"/>
                    <label for="nav-trigger">
                        <span class="menu-icon"></span>
                    </label>

                    <div class="trigger">
                    <?php display_omeka_nav(); ?>
                    </div>
                </nav>
                <!-- /nav -->
            </div>
        </header>
        <!-- /header -->
