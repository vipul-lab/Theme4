
<?php function paddingClassesB($spacing){
    $classes = [];

    if (isset($spacing['spacing_top']) && $spacing['spacing_top']) {
        $classes[] = 'pt-8 md:pt-12 lg:pt-18 xl:pt-20 2xl:pt-24';
    }

    if (isset($spacing['spacing_bottom']) && $spacing['spacing_bottom']) {
        $classes[] = 'pb-8 md:pb-12 lg:pb-18 xl:pb-20 2xl:pb-24';
    }

    return implode(' ', $classes);
}
?>


<?php
$contact = get_field('contact', 'option');
$contact_group = get_field('contact_group', 'option');

$contact_us = $contact_group['contact_us'] ?? '';
$spacing = $contact_group['spacing'] ?? [];
$section_class = paddingClassesB($spacing);

$current_id = get_the_ID();
$show_contact = false;

if (!empty($contact_us)) {
    foreach ($contact_us as $post_item) {
        $post_id = is_object($post_item) ? $post_item->ID : $post_item;
        if ($post_id == $current_id) {
            $show_contact = true;
            break;
        }
    }
}

if ($show_contact) :  
  $contact_number = $contact['contact_number'] ?? '';
  $email_address = $contact['email_address'] ?? '';
  $business_address = $contact['business_address'] ?? '';
  $business_address_link = $contact['business_address_link'] ?? '';
  $business_google_location = $contact['business_google_location'] ?? '';
?>
<section class="<?php echo esc_attr($section_class); ?>">
  <div class="container grid grid-cols-12 gap-8">
      <div class="col-span-8 bg-radial-[at_0%_100%] from-dark-blue via-cyan via-72% to-light-green p-14 rounded-3xl">
        <div class="xl:max-w-112.5 text-white">
          <h2 class="font-bold">Contact Us</h2>
          <p class="">Call or Text Us</p>

          <div class="flex flex-col md:flex-row lg:flex-col gap-4 md:gap-6 lg:gap-15 mt-4 xl:mt-14">

            <?php if($contact_number != NULL){ ?>
            <div>
                <div class="flex gap-2 items-center">
                  <svg width="20" height="20" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M8.26 4.66667C8.4 6.74333 8.75 8.77333 9.31 10.71L6.51 13.51C5.55333 10.71 4.94667 7.74667 4.73667 4.66667H8.26ZM31.2667 32.7133C33.25 33.2733 35.28 33.6233 37.3333 33.7633V37.24C34.2533 37.03 31.29 36.4233 28.4667 35.49L31.2667 32.7133ZM10.5 0H2.33333C1.05 0 0 1.05 0 2.33333C0 24.2433 17.7567 42 39.6667 42C40.95 42 42 40.95 42 39.6667V31.5233C42 30.24 40.95 29.19 39.6667 29.19C36.7733 29.19 33.95 28.7233 31.3367 27.86C31.1033 27.7667 30.8467 27.7433 30.6133 27.7433C30.0067 27.7433 29.4233 27.9767 28.9567 28.42L23.8233 33.5533C17.22 30.17 11.8067 24.78 8.44667 18.1767L13.58 13.0433C14.2333 12.39 14.42 11.48 14.1633 10.6633C13.3 8.05 12.8333 5.25 12.8333 2.33333C12.8333 1.05 11.7833 0 10.5 0Z" fill="var(--color-white)"/>
                  </svg>
                  <p class="text-xl">Phone</p>
                </div>
                <a class="font-bold text-2xl" href="tel:<?php echo clean_phone_number($contact_number); ?>"><?php echo $contact_number; ?></a>
            </div>
            <?php } ?>

            <?php if($email_address != NULL){ ?>
            <div>
              <div class="flex gap-2 items-center">
                <svg width="20" height="20" viewBox="0 0 42 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M37.8 0H4.2C1.89 0 0.021 1.785 0.021 3.96667L0 27.7667C0 29.9483 1.89 31.7333 4.2 31.7333H37.8C40.11 31.7333 42 29.9483 42 27.7667V3.96667C42 1.785 40.11 0 37.8 0ZM37.8 27.7667H4.2V7.93333L21 17.85L37.8 7.93333V27.7667ZM21 13.8833L4.2 3.96667H37.8L21 13.8833Z" fill="var(--color-white)"/>
                </svg>
                <p class="text-xl">Email</p>
              </div>
              <a class="font-bold text-2xl" href="mailto:<?php echo $email_address; ?>"><?php echo $email_address; ?></a>
            </div>
            <?php } ?>

            <?php if($business_address != NULL){ ?>
            <div>
              <div class="flex gap-2 items-center">
                <svg width="20" height="20" viewBox="0 0 30 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M14.7 0C6.573 0 0 6.573 0 14.7C0 25.725 14.7 42 14.7 42C14.7 42 29.4 25.725 29.4 14.7C29.4 6.573 22.827 0 14.7 0ZM4.2 14.7C4.2 8.904 8.904 4.2 14.7 4.2C20.496 4.2 25.2 8.904 25.2 14.7C25.2 20.748 19.152 29.799 14.7 35.448C10.332 29.841 4.2 20.685 4.2 14.7Z" fill="var(--color-white)"/>
                  <path d="M14.6992 19.9517C17.5987 19.9517 19.9492 17.6012 19.9492 14.7017C19.9492 11.8022 17.5987 9.45166 14.6992 9.45166C11.7997 9.45166 9.44922 11.8022 9.44922 14.7017C9.44922 17.6012 11.7997 19.9517 14.6992 19.9517Z" fill="var(--color-white)"/>
                </svg>
                <p class="text-xl">Address</p>
              </div>  
              <a class="font-bold text-2xl" href="<?php echo $business_address_link; ?>" target="_blank"><?php echo $business_address; ?></a>
            </div>
            <?php } ?>

          </div>
        </div>
      </div>
      <?php if ($business_google_location != NULL) { ?>
      <div class="col-span-4 rounded-3xl overflow-hidden"><?php echo $business_google_location; ?></div>
      <?php } ?>
  </div>
</section>
<?php endif; ?>




<?php
$newsletter_display = get_field( 'newsletter_display', 'option' );
if ( $newsletter_display ) {
 if (function_exists('get_field')) {
      $newsletter = get_field('newsletter', 'option');
      $sub_title = $newsletter['sub_title'];
      $title = $newsletter['title'];
      $static_form = $newsletter['static_form'];
      $iframe = $newsletter['iframe'];
  ?>
<section class="bg-terrtiary rounded-3xl pt-8 mx-4 md:pt-12 lg:pt-18 xl:pt-20 2xl:pt-24 pb-8 md:pb-12 lg:pb-18 xl:pb-20 2xl:pb-24">
  <div class="container grid grid-cols-1 lg:grid-cols-2 gap-5">
    <div class="">
      <?php if($sub_title != NULL){ ?>
      <p class="text-lg mb-2"><?php echo $sub_title; ?></p>
      <?php } ?>
      <?php if($title != NULL){ ?>
      <p class="font-bold text-xl md:text-2xl lg:text-3xl xl:text-4xl 2xl:text-5xl"><?php echo $title; ?></p>
      <?php } ?>
    </div>

    <?php if ($static_form) { ?>
    <div class="self-center">
      <div class="flex items-center border rounded-full p-1">
        <input class="block flex-1 px-4 py-2 outline-none" type="email" placeholder="Your Email" />
        <button type="submit" class="kt-btn kt-btn-g px-4">Subscribe</button>
      </div>
    </div>
    <?php } else {
      echo $iframe;
    } ?>

  </div>
</section>
<?php } } ?>
</div>


<footer class="mx-4 rounded-3xl mt-4 bg-dark-blue text-white py-8 md:py-12 lg:py-18">
  <div class="container">
    <div class="grid grid-cols-12 gap-7">
      <div class="col-span-12 xl:col-span-4 xl:text-left text-center">
        <?php $footer_logo = get_field('footer_logo', 'option'); if($footer_logo != NULL){ ?>
        <div class="footer-logo mb-5"> <a href="<?php echo esc_url(home_url()); ?>"> <img class="inline-block" style="height: 40px;" src="<?php echo $footer_logo; ?>" alt="<?php echo get_bloginfo(); ?> Logo"> </a> </div>
        <?php } ?>
        <p> <?php echo get_field('footer_description', 'option'); ?> </p>
      </div>
      <div class="col-span-12 sm:col-span-4 xl:col-span-3">
        <?php
        $locations = get_nav_menu_locations();
        $menu_id = isset( $locations[ 'quick-menu' ] ) ? $locations[ 'quick-menu' ] : null;
        if ( $menu_id ) {
            $menu = wp_get_nav_menu_object( $menu_id );
            echo '<p class="text-lg lg:text-xl 2xl:text-2xl font-semibold mb-2 md:mb-4 text-nowrap text-center sm:text-left">' . esc_html( $menu->name ) . '</p>';
        }
        ?>
        <ul class="text-white flex flex-wrap justify-center text-lg sm:flex-col gap-4 lg:gap-3">
          <?php
          wp_nav_menu(
              array(
                  'theme_location' => 'quick-menu',
                  'container' => false,
                  'items_wrap' => '%3$s',
              )
          );
          ?>
        </ul>
      </div>
      <div class="col-span-12 sm:col-span-4 xl:col-span-3">
        <?php
        $locations = get_nav_menu_locations();
        $menu_id = isset( $locations[ 'useful-menu' ] ) ? $locations[ 'useful-menu' ] : null;
        if ( $menu_id ) {
            $menu = wp_get_nav_menu_object( $menu_id );
            echo '<p class="text-lg lg:text-xl 2xl:text-2xl font-semibold mb-2 md:mb-4 text-nowrap text-center sm:text-left">' . esc_html( $menu->name ) . '</p>';
        }
        ?>
        <ul class="text-white flex flex-wrap justify-center text-lg sm:flex-col gap-4 lg:gap-3">
          <?php
          wp_nav_menu(
              array(
                  'theme_location' => 'useful-menu',
                  'container' => false,
                  'items_wrap' => '%3$s',
              )
          );
          ?>
        </ul>
      </div>
      <div class="col-span-12 sm:col-span-4 xl:col-span-2">
          <p class="text-lg lg:text-xl 2xl:text-2xl font-semibold mb-2 md:mb-4 text-nowrap text-center sm:text-left">Follow Us</p>
          <div class="flex lg:gap-8 gap-4 text-2xl max-sm:justify-center">
            <?php $facebook = get_field('facebook', 'option'); if($facebook != NULL){ ?>
            <a href="<?php echo $facebook; ?>">
            <i class="fa-brands fa-square-facebook"></i>
            </a>
            <?php } ?>
            <?php $instagram = get_field('instagram', 'option'); if($instagram != NULL){ ?>
            <a href="<?php echo $instagram; ?>">
            <i class="fa-brands fa-instagram"></i>
            </a>
            <?php } ?>
            <?php $twitter = get_field('twitter', 'option'); if($twitter != NULL){ ?>
            <a href="<?php echo $twitter; ?>">
            <i class="fa-brands fa-x-twitter"></i>
            </a>
            <?php } ?>
            <?php $youtube = get_field('youtube', 'option'); if($youtube != NULL){ ?>
            <a href="<?php echo $youtube; ?>">
            <i class="fa-brands fa-youtube"></i>
            </a>
            <?php } ?>
          </div>
        </div>
    </div>
  </div>
</footer>
<div class="text-center text-lg py-5">
  <?php
  $company_name_display = get_field( 'company_name_display', 'option' );
  $copyright = get_field( 'copyright', 'option' );
  $all_right = get_field( 'all_right', 'option' );
  $copyright_area = get_field( 'copyright_area', 'option' );

  if ( $company_name_display == 1 ) {
      echo "<p>" . $copyright . " " . get_bloginfo() . ". " . $all_right . "</p>";
  } else {
      echo "<p>" . $copyright_area . "</p>";
  }
  ?>
</div>
<?php wp_footer(); ?>
</body>
</html>