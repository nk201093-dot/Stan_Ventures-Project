<section class="process-section">
    <div class="process-container">
        <div class="process-header">
            <h2><?php the_field('section_title1'); ?>.<br><?php the_field('section_title2'); ?><span>.</span></h2>
        </div>

        <div class="process-steps">

            <!-- STEP 1 -->
            <div class="process-item">
                <div class="step-number">
                    <?php the_field('step1_number'); ?>
                </div>

                <h3><?php the_field('step1_title'); ?></h3>

                <p>
                    <?php the_field('step1_description'); ?>
                </p>
            </div>


            <!-- STEP 2 -->
            <div class="process-item">
                <div class="step-number">
                    <?php the_field('step2_number'); ?>
                </div>

                <h3><?php the_field('step2_title'); ?></h3>

                <p>
                    <?php the_field('step2_description'); ?>
                </p>
            </div>


            <!-- STEP 3 -->
            <div class="process-item">
                <div class="step-number">
                    <?php the_field('step3_number'); ?>
                </div>

                <h3><?php the_field('step3_title'); ?></h3>

                <p>
                    <?php the_field('step3_description'); ?>
                </p>
            </div>

        </div>
    </div>
</section>
