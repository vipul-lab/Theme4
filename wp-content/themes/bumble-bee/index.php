<?php
get_header();
?>

<?php function paddingClasses($spacing){
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
// 🔥 IMPORTANT: change 'option' if needed
$banner_posts = get_field('page_banner', 'option'); 

$current_id = get_the_ID();
$show_banner = false;

if (!empty($banner_posts)) {
    foreach ($banner_posts as $post_item) {

        $post_id = is_object($post_item) ? $post_item->ID : $post_item;

        if ($post_id == $current_id) {
            $show_banner = true;
            break;
        }
    }
}

if ($show_banner) :

    $thumbnail = get_the_post_thumbnail_url($current_id, 'full');
    $default_image = get_template_directory_uri() . '/assets/images/default-banner.jpg';
    $bg_image = $thumbnail ? $thumbnail : $default_image;
?>

<section class="pt-8 md:pt-12 lg:pt-18 xl:pt-20 2xl:pt-24 pb-8 md:pb-12 lg:pb-18 xl:pb-20 2xl:pb-24 bg-cover relative"
    style="background-image: url('<?php echo esc_url($bg_image); ?>');">
    
    <span class="bg-radial from-primary/0 to-primary absolute inset-0 mix-blend-multiply"></span>

    <div class="relative z-10 text-center max-w-175 mx-auto">

        <?php if (is_single()) : ?>
            <div>
                <span class="kt-badge bg-white/30 text-white text-sm font-semibold">Blog</span>
            </div>
        <?php endif; ?>

        <h2 class="font-semibold text-white text-shadow-lg">
            <?php the_title(); ?>
        </h2>

    </div>
</section>

<?php endif; ?>



<?php if ( is_page('book') ) : ?>
<?php
$booking = get_field('booking', 'option'); // main group
$iframe  = $booking['booking_iframe'] ?? '';
$spacing = $booking['spacing'] ?? [];
$section_class = paddingClasses($spacing);
?>
<section class="<?php echo esc_attr($section_class); ?>">
  <div class="container mx-auto text-center">
    <?php if (!empty($iframe)) : ?>
        <?php echo $iframe; ?>
    <?php else : ?>
      <img class="w-40 inline-block" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/ifrem.svg" />
      <p class="text-2xl mt-10 text-[#BEBEBE] font-bold">Invalid or missing iframe</p>
      <?php endif; ?>
    </div>
</section>
<?php endif; ?>


<?php if ( is_page('sign-in-up') ) : ?>
<?php
$sign_inup = get_field('sign_inup', 'option'); // main group
$iframe  = $sign_inup['sign_inup_iframe'] ?? '';
$spacing = $sign_inup['spacing'] ?? [];
$section_class = paddingClasses($spacing);
?>
<section class="<?php echo esc_attr($section_class); ?>">
  <div class="container mx-auto text-center">
    <?php if (!empty($iframe)) : ?>
        <?php echo $iframe; ?>
    <?php else : ?>
      <img class="w-40 inline-block" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/ifrem.svg" />
      <p class="text-2xl mt-10 text-[#BEBEBE] font-bold">Invalid or missing iframe</p>
      <?php endif; ?>
    </div>
</section>
<?php endif; ?>


<?php if ( get_the_content() ) : ?>
<section class="pt-8 md:pt-12 lg:pt-18 xl:pt-20 2xl:pt-24">
  <div class="container editerData mx-auto">
      <?php echo the_content(); ?>
      <?php if (is_single()){ ?>
      
      <div class="next-prev-btn flex justify-between items-center gap-5 mt-7.5 pt-7.5 border-t border-primary/20">
        <?php
          $prev_post = get_next_post();
          $next_post = get_previous_post();
        ?>
        <div class="col-6">
          <?php if (!empty($prev_post)): ?>
          <a href="<?php echo get_permalink($prev_post->ID); ?>" class="prev flex items-center gap-2 hover:text-primary">
          <svg width="20" height="15" viewBox="0 0 20 15" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M7 0.5L8.41 1.91L3.83 6.5H20V8.5H3.83L8.42 13.09L7 14.5L0 7.5L7 0.5Z" fill="#252525"/>
          </svg>
          Prev</a>
          <?php endif; ?>
        </div>
        <div class="col-6">
          <?php if (!empty($next_post)): ?>
          <a href="<?php echo get_permalink($next_post->ID); ?>" class="next flex items-center gap-2 hover:text-primary">Next
          <svg width="20" height="14" viewBox="0 0 20 14" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M13 0L11.59 1.41L16.17 6H0V8H16.17L11.58 12.59L13 14L20 7L13 0Z" fill="#252525"></path>
          </svg>
          </a>
          <?php endif; ?>
        </div>
      </div>
      <?php } ?>
    </div>
  </div>
</section>
<?php endif; ?>


<?php
get_footer();
?>
