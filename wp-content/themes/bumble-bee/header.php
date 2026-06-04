<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>

<?php the_title(); ?> | <?php echo get_bloginfo(); ?></title>
<?php wp_head() ?>
<style>

<?php

global $primary_color, $secondary_color, $territory_color, $body_text_color;
global $color_1, $color_2, $color_3;

$primary_color = get_field( 'primary_color', 'option' );
$secondary_color = get_field( 'secondary_color', 'option' );
$territory_color = get_field( 'territory_color', 'option' );
$body_text_color = get_field( 'body_text_color', 'option' );

// Get group field
$gradient_color_palette = get_field('gradient_color_palette', 'option');

// Access subfields safely
$color_1 = $gradient_color_palette['color_1'] ?? '';
$color_2 = $gradient_color_palette['color_2'] ?? '';
$color_3 = $gradient_color_palette['color_3'] ?? '';
?>



:root {
    --color-primary: <?php echo esc_html($primary_color); ?>;
    --color-secondary: <?php echo esc_html($secondary_color); ?>;
    --color-terrtiary: <?php echo esc_html($territory_color); ?>;
    --color-dark-blue: <?php echo esc_html($color_1); ?>;
    --color-cyan: <?php echo esc_html($color_2); ?>;
    --color-light-green: <?php echo esc_html($color_3); ?>;
}
</style>
</head>
<body <?php body_class('group/body'); ?>>
<!-- Header section start h-c-100 -->
<header class="top-0 z-100 px-4 lg:px-6 xl:px-8 py-4 lg:py-7 2xl:px-12  w-full group-[.headerSticky]/body:shadow <?php echo is_front_page()? 'bg-transparent group-[.headerSticky]/body:bg-white fixed': 'bg-white sticky'; ?>">
    <div class="flex items-center justify-between gap-4.5 2xl:gap-10">

      <?php if ( is_front_page() ) : ?>
        <a class="group-[.headerSticky]/body:hidden" href="<?php echo esc_url(home_url()); ?>">
            <img style="height: 40px;" 
                src="<?php echo esc_url(get_field('website_logo', 'option')); ?>" 
                alt="<?php echo esc_attr(get_bloginfo()); ?> Logo">
        </a>
      <?php else : ?>
        <a class="group-[.headerSticky]/body:hidden" href="<?php echo esc_url(home_url()); ?>">
            <img style="height: 40px;" 
                src="<?php echo esc_url(get_field('website_logo_dark', 'option')); ?>" 
                alt="<?php echo esc_attr(get_bloginfo()); ?> Logo">
        </a>
      <?php endif; ?>

      <a class="hidden group-[.headerSticky]/body:block" href="<?php echo esc_url(home_url()); ?>">
        <img style="height: 40px;" src="<?php echo get_field('website_logo_dark', 'option'); ?>" alt="<?php echo get_bloginfo(); ?> Logo">
      </a>

      <ul class="main-menu xl:flex items-center gap-4 xl:gap-5 2xl:gap-15 ml-auto hidden text-lg <?php echo is_front_page() ? 'home-page-header' : ''; ?>">
        <?php
        wp_nav_menu(
            array(
                'theme_location' => 'main-menu',
                'container' => false,
                'items_wrap' => '%3$s'
            )
        );
        ?>
      </ul>
      
      <div class="flex items-center gap-2 text-sm xl:text-base">
        
        <?php 
        $call_now = get_field('call_now', 'option');
        if ($call_now && $call_now['call_now_display']) :
            $contact_number = $call_now['contact_number'];
            if ($contact_number) : ?>
                <a href="tel:<?php echo esc_attr($contact_number); ?>" class="hidden md:flex kt-btn bg-dark-blue/50 hover:bg-dark-blue">
                    <span>Call Now</span>
                </a>
            <?php endif;
        endif;
        ?>

        <?php
          // Sign Button
          $header_sign_button_display = get_field('header_sign_button_display', 'option');
          $header_sign_button_link    = get_field('header_sign_button_link', 'option');

          if ($header_sign_button_display) :
              if ($header_sign_button_link) : ?>
                  <a href="<?php echo esc_url($header_sign_button_link['url']); ?>"
                    target="<?php echo esc_attr($header_sign_button_link['target'] ?: '_self'); ?>"
                    class="hidden md:flex kt-btn kt-btn-primary">
                      <i class="fa-solid fa-user"></i>
                      <span><?php echo esc_html($header_sign_button_link['title']); ?></span>
                  </a>
              <?php endif;
          endif; ?>


        <?php
        // Header Button
        $header_button_display = get_field('header_button_display', 'option');
        $header_button_link    = get_field('header_button_link', 'option');

        if ($header_button_display) :
            if ($header_button_link) : ?>
                <a href="<?php echo esc_url($header_button_link['url']); ?>"
                  target="<?php echo esc_attr($header_button_link['target'] ?: '_self'); ?>"
                  class="hidden md:flex kt-btn kt-btn-primary">
                    <span><?php echo esc_html($header_button_link['title']); ?></span>
                </a>
            <?php endif;
        endif; ?>

        <div class="xl:hidden bg-primary rounded-full" data-kt-drawer-toggle="#drawer">
          <svg class="ham size-10 lg:size-12.5" viewBox="0 0 100 100" width="80" onclick="this.classList.toggle('active')">
            <path class="line line-top" d="m 70,33 h -40 c 0,0 -8.5,-0.149796 -8.5,8.5 0,8.649796 8.5,8.5 8.5,8.5 h 20 v -20" />
            <path class="line line-middle" d="m 70,50 h -40" />
            <path class="line line-bottom" d="m 30,67 h 40 c 0,0 8.5,0.149796 8.5,-8.5 0,-8.649796 -8.5,-8.5 -8.5,-8.5 h -20 v 20" />
          </svg>
        </div>

      </div>
  </div>
</header>

<ul class="xl:[--kt-drawer-enable:false] mobilemenu flex flex-col gap-4 p-8 inset-2 xl:hidden <?php echo is_front_page() ? 'home-page-header' : ''; ?>"
  id="drawer"
  data-kt-drawer="true"
  data-kt-drawer-class="kt-drawer kt-drawer-start hidden w-full max-w-[300px] bg-primary! rounded-[20px] text-2xl">
  <?php
      wp_nav_menu(
          array(
              'theme_location' => 'main-menu',
              'container' => false,
              'items_wrap' => '%3$s'
          )
      );
      ?>

      <?php 
        $call_now = get_field('call_now', 'option');
        if ($call_now && $call_now['call_now_display']) :
            $contact_number = $call_now['contact_number'];
            if ($contact_number) : ?>
                <a href="tel:<?php echo esc_attr($contact_number); ?>" class="kt-btn kt-btn-white md:hidden">
                    <span>Call Now</span>
                </a>
            <?php endif;
        endif;
        ?>

        <?php
          // Sign Button
          $header_sign_button_display = get_field('header_sign_button_display', 'option');
          $header_sign_button_link    = get_field('header_sign_button_link', 'option');

          if ($header_sign_button_display) :
              if ($header_sign_button_link) : ?>
                  <a href="<?php echo esc_url($header_sign_button_link['url']); ?>"
                    target="<?php echo esc_attr($header_sign_button_link['target'] ?: '_self'); ?>"
                    class="kt-btn kt-btn-white md:hidden">
                      <i class="fa-solid fa-user"></i>
                      <span><?php echo esc_html($header_sign_button_link['title']); ?></span>
                  </a>
              <?php endif;
          endif; ?>


        <?php
        // Header Button
        $header_button_display = get_field('header_button_display', 'option');
        $header_button_link    = get_field('header_button_link', 'option');

        if ($header_button_display) :
            if ($header_button_link) : ?>
                <a href="<?php echo esc_url($header_button_link['url']); ?>"
                  target="<?php echo esc_attr($header_button_link['target'] ?: '_self'); ?>"
                  class="kt-btn kt-btn-white md:hidden">
                    <span><?php echo esc_html($header_button_link['title']); ?></span>
                </a>
            <?php endif;
        endif; ?>


</ul>


<!--main-wrapper-start-div-->
<div class="main-wrapper">
