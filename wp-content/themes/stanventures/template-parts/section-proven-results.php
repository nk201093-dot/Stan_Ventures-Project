<section class="proven-results-section">
    <div class="results-container">
        <div class="results-header">
            <h2><?php the_field('results_section_title'); ?></h2>
            <p><?php the_field('results_section_subtitle'); ?></p>
        </div>

        <div class="results-grid">

            <!-- CARD 1 -->
            <div class="result-card">
                <div class="image-wrapper">
                    <span class="tag"><?php the_field('card1_tag'); ?></span>

                    <?php 
                    $image1 = get_field('card1_image');
                    if( $image1 ): ?>
                        <img src="<?php echo esc_url($image1['url']); ?>" alt="<?php echo esc_attr($image1['alt']); ?>">
                    <?php endif; ?>
                </div>

                <div class="result-info">
                    <div>
                        <h3><?php the_field('card1_title'); ?></h3>
                        <p><?php the_field('card1_description'); ?></p>
                    </div>
                    <div class="result-stat">
                        <span><?php the_field('card1_stat_number'); ?></span>
                        <small><?php the_field('card1_stat_label'); ?></small>
                    </div>
                </div>
            </div>


            <!-- CARD 2 -->
            <div class="result-card">
                <div class="image-wrapper">
                    <span class="tag"><?php the_field('card2_tag'); ?></span>

                    <?php 
                    $image2 = get_field('card2_image');
                    if( $image2 ): ?>
                        <img src="<?php echo esc_url($image2['url']); ?>" alt="<?php echo esc_attr($image2['alt']); ?>">
                    <?php endif; ?>
                </div>

                <div class="result-info">
                    <div>
                        <h3><?php the_field('card2_title'); ?></h3>
                        <p><?php the_field('card2_description'); ?></p>
                    </div>
                    <div class="result-stat">
                        <span><?php the_field('card2_stat_number'); ?></span>
                        <small><?php the_field('card2_stat_label'); ?></small>
                    </div>
                </div>
            </div>


            <!-- CARD 3 -->
            <div class="result-card">
                <div class="image-wrapper">
                    <span class="tag"><?php the_field('card3_tag'); ?></span>

                    <?php 
                    $image3 = get_field('card3_image');
                    if( $image3 ): ?>
                        <img src="<?php echo esc_url($image3['url']); ?>" alt="<?php echo esc_attr($image3['alt']); ?>">
                    <?php endif; ?>
                </div>

                <div class="result-info">
                    <div>
                        <h3><?php the_field('card3_title'); ?></h3>
                        <p><?php the_field('card3_description'); ?></p>
                    </div>
                    <div class="result-stat">
                        <span><?php the_field('card3_stat_number'); ?></span>
                        <small><?php the_field('card3_stat_label'); ?></small>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
