<?php
$ready_title = get_field('ready_title');
$ready_desc  = get_field('ready_description');
$ready_note  = get_field('ready_note');
?>

<section class="ready-scale-section">
  <div class="ready-container">

    <h2 class="ready-title"><?php echo esc_html($ready_title); ?></h2>

    <p class="ready-desc">
      <?php echo esc_html($ready_desc); ?>
    </p>

    <div class="ready-form">
     <?php
      $email_error = '';

      if(isset($_POST['submit_email'])) {

          $email = sanitize_email($_POST['user_email']);

          if(empty($email)) {
              $email_error = "Email is required";
          }
          elseif(!is_email($email)) {
              $email_error = "Please enter a valid email address";
          }
          else {
              $email_error = "Thank you! Email submitted successfully.";
          }
      }
      ?>

      <form id="readyForm">
        <input type="email" id="readyEmail" placeholder="Enter your work email" required>
        <button type="submit">Get Started</button>
        <p class="email-error" id="emailError" style="color:red; display:none;"></p>
      </form>

      <?php if($email_error): ?>
          <p style="color:red;"><?php echo esc_html($email_error); ?></p>
      <?php endif; ?>

    </div>

    


    <p class="ready-note">
      <?php echo esc_html($ready_note); ?>
    </p>

  </div>
</section>
