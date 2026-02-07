<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title(); ?></title>
     <?php wp_head(); ?>
</head>

<body>

    <!-- hero-section -->

    <section class="hero-section">
        <header class="main-header">
            <div class="header-container">

                <div class="logo">
                     <?php
                        if ( function_exists( 'the_custom_logo' ) && has_custom_logo() ) {
                            the_custom_logo();
                        } else { ?>
                            <a href="<?php echo home_url(); ?>">
                                <?php bloginfo( 'name' ); ?>
                            </a>
                        <?php } ?>
                </div>
                <nav class="nav-menu">
                    <?php
                        wp_nav_menu( array(
                            'theme_location' => 'header-menu',
                            'container'      => false,
                            'menu_class'     => 'nav-menu',
                        ));
                    ?>
                </nav>

                <?php if (get_theme_mod('header_button_enable', '1')) : ?>

        <div class="header-btn">
            <a href="<?php echo esc_url(get_theme_mod('header_button_url', '#')); ?>" class="proposal-btn">
                <?php echo esc_html(get_theme_mod('header_button_text', 'Get a Proposal')); ?>
            </a>
        </div>

        <?php endif; ?>


            </div>
        </header>
        <div class="container">

    <div class="badge">
        <span class="dot"></span>
        <?php the_field('hero_badge_text'); ?>
    </div>

    <h1>
        <?php the_field('hero_title_line1'); ?> <br>
        <span><?php the_field('hero_title_highlight'); ?></span>
    </h1>

    <p class="hero-text">
        <?php the_field('hero_description'); ?>
    </p>

    <div class="hero-buttons">
        <a href="<?php the_field('hero_primary_btn_link'); ?>" class="btn-primary">
            <?php the_field('hero_primary_btn_text'); ?> →
        </a>

        <a href="<?php the_field('hero_secondary_btn_link'); ?>" class="btn-secondary">
            <?php the_field('hero_secondary_btn_text'); ?>
        </a>
    </div>

    <div class="dashboard-preview">
        <?php 
        $dashboard = get_field('hero_dashboard_image');
        if($dashboard): ?>
            <img src="<?php echo esc_url($dashboard['url']); ?>" alt="<?php echo esc_attr($dashboard['alt']); ?>">
        <?php endif; ?>
    </div>

    <div class="trusted">
        <p><?php the_field('hero_trusted_text'); ?></p>

        <div class="logos">

            <?php for($i = 1; $i <= 6; $i++): 
                $logo = get_field('hero_logo_'.$i);
                if($logo): ?>
                    <img src="<?php echo esc_url($logo['url']); ?>" alt="<?php echo esc_attr($logo['alt']); ?>">
                <?php endif; 
            endfor; ?>

        </div>
    </div>

</div>

    </section>