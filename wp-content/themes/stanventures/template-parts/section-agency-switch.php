<section class="agency-switch-section">
  <div class="agency-container">

    <h2 class="agency-title"><?php the_field('agency_title'); ?></h2>

    <div class="agency-table-wrapper">
      <table class="agency-table">
        <thead>
          <tr>
            <th></th>
            <th>STAN VENTURES</th>
            <th>FATJOE</th>
          </tr>
        </thead>

        <tbody>
          <?php 
          // Loop through features 1 to 5
          for ($i = 1; $i <= 5; $i++) : 
              $feature = get_field('feature_' . $i);
              $stan    = get_field('stan_' . $i);
              $fatjoe  = get_field('fatjoe_' . $i);
              if ($feature) : // Only show row if feature text exists
          ?>
          <tr>
            <td><?php echo esc_html($feature); ?></td>
            <td>
              <?php if ($stan) : ?>
                <span class="check">✔</span>
              <?php else : ?>
                <span class="cross">✕</span>
              <?php endif; ?>
            </td>
            <td>
              <?php if ($fatjoe) : ?>
                <span class="check">✔</span>
              <?php else : ?>
                <span class="cross">✕</span>
              <?php endif; ?>
            </td>
          </tr>
          <?php 
              endif;
          endfor; 
          ?>
        </tbody>
      </table>
    </div>
  </div>
</section>
