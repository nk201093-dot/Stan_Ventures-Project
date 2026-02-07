<section class="services-section">
    <div class="container">

        <div class="services-header">
            <div>
                <h2>
                    <?php the_field('services_section_title'); ?> <br>
                    <span><?php the_field('services_section_highlight'); ?></span>
                </h2>

                <p class="subtitle">
                    <?php the_field('services_section_subtitle'); ?>
                </p>
            </div>

            <a href="<?php the_field('services_catalog_link'); ?>" class="catalog-btn">
                <?php the_field('services_catalog_text'); ?>
            </a>
        </div>


        <div class="services-grid">

            <?php for($i = 1; $i <= 6; $i++): ?>

                <div class="service-card <?php echo ($i == 1 || $i == 5) ? 'large' : ''; ?>">

                    <div class="icon">
                        <?php 
                        $icon = get_field('card'.$i.'_icon');
                        if($icon): ?>
                            <img src="<?php echo esc_url($icon['url']); ?>" alt="<?php echo esc_attr($icon['alt']); ?>">
                        <?php endif; ?>
                    </div>

                    <h3><?php the_field('card'.$i.'_title'); ?></h3>

                    <p>
                        <?php the_field('card'.$i.'_description'); ?>
                    </p>

                    <a href="<?php the_field('card'.$i.'_link'); ?>" class="learn-more">
                        Learn more →
                    </a>

                </div>

            <?php endfor; ?>

        </div>
    </div>
</section>
