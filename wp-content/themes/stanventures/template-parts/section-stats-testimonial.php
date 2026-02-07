<section class="stats-testimonial-section">
    <div class="container">

        <!-- Stats Row -->
        <div class="stats-row">

            <div class="stat-item">
                <h2><?php the_field('stat1_number'); ?></h2>
                <p><?php the_field('stat1_text'); ?></p>
            </div>

            <div class="stat-item">
                <h2><?php the_field('stat2_number'); ?></h2>
                <p><?php the_field('stat2_text'); ?></p>
            </div>

            <div class="stat-item">
                <h2><?php the_field('stat3_number'); ?></h2>
                <p><?php the_field('stat3_text'); ?></p>
            </div>

        </div>

        <div class="divider"></div>


        <!-- Testimonials -->
        <div class="testimonial-row">

            <!-- Testimonial 1 -->
            <div class="testimonial-card">

                <div class="stars">
                    <?php 
                    $stars1 = get_field('testimonial1_stars');

                    if($stars1){
                        for($i = 1; $i <= $stars1; $i++){
                            echo '★';
                        }
                    }
                    ?>
                </div>

                <p class="review-text">
                    <?php the_field('testimonial1_text'); ?>
                </p>

                <div class="author">

                    <?php 
                    $timage1 = get_field('testimonial1_image');
                    if( $timage1 ): ?>
                        <img src="<?php echo esc_url($timage1['url']); ?>" alt="<?php echo esc_attr($timage1['alt']); ?>">
                    <?php endif; ?>

                    <div>
                        <h4><?php the_field('testimonial1_name'); ?></h4>
                        <span><?php the_field('testimonial1_designation'); ?></span>
                    </div>
                </div>

            </div>


            <!-- Testimonial 2 -->
            <div class="testimonial-card">

                <div class="stars">
                    <?php 
                    $stars2 = get_field('testimonial2_stars');

                    if($stars2){
                        for($i = 1; $i <= $stars2; $i++){
                            echo '★';
                        }
                    }
                    ?>
                </div>

                <p class="review-text">
                    <?php the_field('testimonial2_text'); ?>
                </p>

                <div class="author">

                    <?php 
                    $timage2 = get_field('testimonial2_image');
                    if( $timage2 ): ?>
                        <img src="<?php echo esc_url($timage2['url']); ?>" alt="<?php echo esc_attr($timage2['alt']); ?>">
                    <?php endif; ?>

                    <div>
                        <h4><?php the_field('testimonial2_name'); ?></h4>
                        <span><?php the_field('testimonial2_designation'); ?></span>
                    </div>
                </div>

            </div>

        </div>

    </div>
</section>
