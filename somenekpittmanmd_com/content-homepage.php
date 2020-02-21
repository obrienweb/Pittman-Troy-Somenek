<?php
  global $nkp_client_info;
?>

<div class="topbar">
  Bring this page with you to your consultation and receive a $100 S+P Giftcard
</div>

<div class="address">
  <div>2440 M Street NW, Suite 507 Washington, DC 20037</div>
  <div class="address--divider hide-on-mobile">|</div>
  <div>Appointments: <a href="tel:<?php echo $nkp_client_info->get_primary_practice_phone(); ?>"><?php echo $nkp_client_info->get_primary_practice_phone(); ?></a></div>
</div>

<div id="logo">
    <a href="/" title="<?php echo $nkp_client_info->get_primary_practice_name(); ?>, <?php echo $nkp_client_info->get_primary_practice_doctors(); ?>, <?php echo $nkp_client_info->get_primary_practice_city(); ?>, <?php echo $nkp_client_info->get_primary_practice_state(); ?>">
        <img class="img-resp" src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.webp" alt="<?php echo $nkp_client_info->get_primary_practice(); ?>, <?php echo $nkp_client_info->get_primary_doctors(); ?>, <?php echo $nkp_client_info->get_primary_practice_city(); ?>, <?php echo $nkp_client_info->get_primary_practice_state(); ?>">
    </a>
</div>

<p>
  <h1 class="tagline">TWO EXPERTS, ONE UNCOMPROMISING STANDARD</h1>
  <div class="tac">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/tailored.webp" alt="" class="img-resp">
  </div>
</p>

<section class="blue-bg">
  <div class="grid-container">
    <h2>Welcome to the Practice</h2>
    <div class="welcome">
      <div class="grid-33 tablet-50 tac">
        <h4>Redefining Concierge Care</h4>
        <p>Our upscale office, located in the West End neighborhood, just steps from historic Georgetown, houses the city's dynamic duo of plastic surgery and luxury concierge care at its best.  We strive to provide a variety of services and a one-stop-shop experience that will boost your self-confidence and leave you feeling your best.  Through a thorough consultation process, we explain your options to make sure that you are comfortable with your treatment plan.  We pride ourselves on our team of experts specially trained to address your specific needs.</p>
      </div>
      <div class="grid-33 tablet-50 tac">
        <h4>Two Experts, One Uncompromising Standard</h4>
        <p>Our experienced team of experts set the highest standards in surgical and non-surgical care and aim to exceed our patient’s expectations.  Dr. Michael Somenek is double Board-Certified in Facial Plastic Surgery and Otolaryngology and specializes in rhinoplasty, complex revision rhinoplasty and facial rejuvenation.  Dr. Troy Pittman is Board-Certified by the American Board of Plastic Surgery and renowned for his work is aesthetic and reconstructive surgery of the breast and body.  Both surgeons are consistently recognized by their peers as Top Doctors and leaders in their respective fields.</p>
      </div>
    </div>
  </div>
</section>

<section class="doctors">
  <div class="grid-container">
    <h2>Meet the DC Dynamic Duo</h2>
    <div class="grid-50 tablet-50 tac">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Michael-Somenek.webp" alt="Michael T. Somenek MD" class="img-resp">
      <p>Michael T. Somenek MD<br>
        Facial Plastic Surgeon</p>
    </div>
    <div class="grid-50 tablet-50 tac">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Troy-Pittman.webp" alt="Troy A. Pittman MD FACS" class="img-resp">
      <p>Troy A. Pittman MD FACS<br>
        Plastic and Reconstructive Surgeon</p>
    </div>
  </div>
</section>

<section class="blue-bg">
  <div class="grid-container">
    <h2>DC Beauty at its Best</h2>
    <div class="grid-33 tablet-33">
      <h4 class="tac">Surgical Services</h4>
      <div class="tac">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/surgical-services.webp" alt="Surgical Services" class="img-resp">
      </div>
      <p class="tac">The practice specializes in rhinoplasty, revision rhinoplasty, face and neck lift, minimally invasive Somenek Signature Lift, breast augmentation, revision breast augmentation, mastopexy / augmentation and tummy tuck.  Both doctors are accomplished restorative surgeons who treat the most complex revision cases for patients who have had suboptimal results in previous operations.  Coming in the late Spring of 2020, we will be introducing a state-of-the-art, on-site, completely private surgical facility, the newest of its kind in the DC area.</p>
    </div>
    <div class="grid-33 tablet-33">
      <h4 class="tac m-mt-2">Surgical Services</h4>
      <div class="tac">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/non-surgical-services.webp" alt="Surgical Services" class="img-resp">
      </div>
      <p class="tac">Whether it's wrinkle relaxation or restoration of facial volume, we offer a wide variety of injectable treatments that are customized for each patient.  We also understand that not everyone is ready to commit to a surgical procedure. Our, no downtime, non-surgical body contouring program includes non-invasive fat removal with TruSculptID and muscle toning and sculpting with TruSculptFLEX. Stop underarm sweat and odor with a 45-minute MiraDry treatment. Additionally, we offer a full range of hair restoration procedures and laser skin resurfacing.</p>
    </div>
    <div class="grid-33 tablet-33">
      <h4 class="tac m-mt-2">S + P MedSpa</h4>
      <div class="tac">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/S+P-MedSpa.webp" alt="S + P MedSpa" class="img-resp">
      </div>
      <p class="tac">With the busy demands of life in the DMV, it becomes increasingly difficult to give your skin the attention it deserves.  Drs. Somenek and Pittman have created the upscale S + P MedSpa which truly redefines luxury skincare.  The full-menu of services includes Signature facials, chemical peels, microneedling and laser treatments.  Maintenance procedures like laser hair removal, brow tinting and dermaplaning are also offered.  Finally, recharge and relax with a full-menu of specially formulated IV cocktails.</p>
    </div>
  </div>
</section>

<section class="social">
  <div class="grid-container">
    <h2>Follow us on Social Media</h2>
    <div class="grid-33 tablet-33 tac">
      <a href="https://www.instagram.com/somenekmd/" target="_blank">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/somenekmd-ig.webp" alt="@somenekmd" class="img-resp">
      </a>
    </div>
    <div class="grid-33 tablet-33 tac">
      <a href="https://www.instagram.com/drtroypittman/" target="_blank">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/drtroypittman-ig.webp" alt="@drtroypittman" class="img-resp">
      </a>
    </div>
    <div class="grid-33 tablet-33 tac">
      <a href="https://www.instagram.com/dcdynamicduo/" target="_blank">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/dcdynamicduo-ig.webp" alt="@dcdynamicduo" class="img-resp">
      </a>
    </div>
  </div>
</section>

<section class="contact-footer">
  <div class="contact-info grid-50 tablet-50">
    <div>
      <h2>Contact Us</h2>
      <h4>Book your complimentary consult today!</h4>
      <h4>Somenek + PittmanMD - Advanced Plastic Surgery</h4>
      <address>2440 M Street NW, Suite 507 Washington, DC 20007</address>
      <a href="" class="telephone">(202) 810-7700</a>
      <div>
        <a href="" class="btn">Join Our Mailing List</a>
      </div>
    </div>
  </div>
  <div class="grid-50 tablet-50">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3104.8376141013755!2d-77.05458738373015!3d38.9048285795694!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b7b7b44443515d%3A0x4943be3ecd566485!2s2440%20M%20St%20NW%20%23507%2C%20Washington%2C%20DC%2020037!5e0!3m2!1sen!2sus!4v1582237930738!5m2!1sen!2sus" width="600" height="487" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
  </div>
</section>

<footer class="grid-container">
  <p><i class="fa fa-th-large"></i> Copyright © <?php echo(date('Y')); ?> Somenek + Pittman  MD - All Rights Reserved.</p>
</footer>
