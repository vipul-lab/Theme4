<?php

/*

Template Name: Services Template

Template Post Type: services

*/

get_header();

?>


<?php function paddingClasses($spacing){
    $section_classes = '';
    if ($spacing) {
        $spacing = get_sub_field('spacing');
        $classes = [];
        if (!empty($spacing['spacing_top'])) {
            $classes[] = 'pt-8 md:pt-12 lg:pt-18 xl:pt-20 2xl:pt-24';
        }
        if (!empty($spacing['spacing_bottom'])) {
            $classes[] = 'pb-8 md:pb-12 lg:pb-18 xl:pb-20 2xl:pb-24';
        }
        $section_classes = implode(' ', $classes);
    }
    return $section_classes;
} ?>



<?php
  $service_template = get_field( "select_template" );
  if ( $service_template == 'Template 1' ) {
?>

<?php
$hero_banner_section_display = get_field( "hero_banner_section_display" );
if ( $hero_banner_section_display ) {
  if ( have_rows( "hero_banner_section" ) ) {
    while ( have_rows( "hero_banner_section" ) ) {
      the_row();
      $image = get_sub_field( "image" );
      $tagline = get_sub_field( "tagline" );
      $spacing = get_sub_field("spacing");
    $section_classes = paddingClasses($spacing);
      ?>


<section class="<?php echo esc_attr($section_classes); ?> bg-cover relative bg-center" <?php if ($image != NULL) { ?>
    style="background-image: url(<?php echo $image; ?>);" <?php } ?>>
    <span class="bg-linear-to-r from-black/90 to-transparent absolute inset-0"></span>
    <div class="container relative Z-1">
        <div><span class="kt-badge bg-white/30 text-white text-sm font-semibold"><?php echo $tagline; ?></span></div>
        <h1 class="font-semibold text-white"><?php the_content(); ?></h1>
    </div>
</section>
<?php } } } ?>


<?php
      $service_details_display = get_field( "service_details_display" );
      if ( $service_details_display ) {
      if ( have_rows( "service_details" ) ) {
      while ( have_rows( "service_details" ) ) {
      the_row();
      $image = get_sub_field( "image" );
      $title = get_sub_field( "title" );
      $description = get_sub_field( "description" );
      $button_text = get_sub_field( "button_text" );
      $button_link = get_sub_field( "button_link" );
      $spacing = get_sub_field("spacing");
      $section_classes = paddingClasses($spacing);
      ?>

<section class="<?php echo esc_attr($section_classes); ?>">
    <div class="container">
        <div class="grid grid-cols-12">
            <div class="col-span-12 lg:col-span-6 self-center">
                <img class="rounded-[20px]" src="<?php echo $image; ?>" alt="">
            </div>
            <div class="col-span-12 lg:col-span-6 lg:pl-16 xl:pl-30 self-center">
                <h5 class="font-bold text-[#252525] mt-2 mb-2"><?php echo $title; ?></h5>
                <div class="space-y-3 mb-5"><?php echo $description; ?></div>
                <a href="<?php echo $button_link; ?>" class="kt-btn kt-btn-secondary"><?php echo $button_text; ?>
                </a>
            </div>
        </div>
    </div>
</section>
<?php } } } ?>





<?php
    $why_choose_display = get_field( "why_choose_display" );
    if ( $why_choose_display ) {
    if ( have_rows( "why_choose" ) ) {
    while ( have_rows( "why_choose" ) ) {
    the_row();
    $title = get_sub_field( "title" );
    $heading_1 = get_sub_field( "heading_1" );
    $heading_2 = get_sub_field( "heading_2" );
    $description = get_sub_field( "description" );
    $display_company_name = get_sub_field( "display_company_name" );
    $spacing = get_sub_field("spacing");
    $section_classes = paddingClasses($spacing);
  ?>
<section class="<?php echo esc_attr($section_classes); ?> text-center">
    <div class="container">
        <div class="max-w-300 mx-auto">
            <?php
          if ( $display_company_name == 1 ) {
            echo "<h5 class='font-bold text-[#252525] mt-2 mb-2'>" . " " . $heading_1 . get_bloginfo() . " " . $heading_2 . "</h5>";
          } else {
            echo "<h5 class='font-bold text-[#252525] mt-2 mb-2'>" . $title . "</h5>";
          }
          ?>
            <p class="mb-7.5"><?php echo $description; ?></p>
        </div>
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-7.5 text-left">
            <?php
            while ( have_rows( "box" ) ) {
            the_row();
            $icon = get_sub_field( "icon" );
            $title = get_sub_field( "title" );
            $description = get_sub_field( "description" );
            ?>
            <div class="bg-terrtiary rounded-[30px] p-5 lg:p-9 md:flex lg:block md:gap-10">
                <div class="relative inline-block lg:mb-8 mb-4 flex-none">
                    <span
                        class="w-12.5 h-36 bg-secondary/30 absolute rotate-45 top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 rounded-full"></span>
                    <img class="relative z-1" src="<?php echo $icon; ?>" alt="">
                </div>
                <div>
                    <p class="font-bold text-2xl mb-2 text-primary"><?php echo $title; ?></p>
                    <p><?php echo $description; ?></p>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</section>
<?php } } } ?>



<?php
}
if ( $service_template == 'Template 2' ) {
  ?>
<?php

$hero_banner_section_display = get_field( "hero_banner_section_display" );

if ( $hero_banner_section_display ) {

  if ( have_rows( "hero_banner_section" ) ) {

    while ( have_rows( "hero_banner_section" ) ) {

      the_row();

      $image = get_sub_field( "image" );

      $tagline = get_sub_field( "tagline" );
      $spacing = get_sub_field("spacing");
    $section_classes = paddingClasses($spacing);

      ?>

<section class="<?php echo esc_attr($section_classes); ?> bg-cover relative bg-center" <?php if ($image != NULL) { ?>
    style="background-image: url(<?php echo $image; ?>);" <?php } ?>>
    <span class="bg-linear-to-r from-black/90 to-transparent absolute inset-0"></span>
    <div class="container relative Z-1">
        <div><span class="kt-badge bg-white/30 text-white text-sm font-semibold"><?php echo $tagline; ?></span></div>
        <h1 class="font-semibold text-white"><?php the_content(); ?></h1>
    </div>
</section>
<?php
}
}
}
?>




<?php
    $service_details_display = get_field( "service_details_display" );
    if ( $service_details_display ) {
    if ( have_rows( "service_details" ) ) {
    while ( have_rows( "service_details" ) ) {
    the_row();
    $image = get_sub_field( "image" );
    $title = get_sub_field( "title" );
    $description = get_sub_field( "description" );
    $button_text = get_sub_field( "button_text" );
    $button_link = get_sub_field( "button_link" );
    $spacing = get_sub_field("spacing");
    $section_classes = paddingClasses($spacing); ?>
<section class="<?php echo esc_attr($section_classes); ?>">
    <div class="container">
        <div class="grid grid-cols-12">
            <div class="col-span-12 lg:col-span-6 self-center">
                <img src="<?php echo $image; ?>" alt="">
            </div>
            <div class="col-span-12 lg:col-span-6 lg:pl-16 xl:pl-30 self-center">
                <h5 class="font-bold text-[#252525] mt-2 mb-2"><?php echo $title; ?></h5>
                <div class="space-y-3 mb-5"><?php echo $description; ?></div>
                <a href="<?php echo $button_link; ?>" class="kt-btn kt-btn-secondary"><?php echo $button_text; ?>
                </a>
            </div>
        </div>
    </div>
</section>
<?php } } } ?>






<?php
    $service_point_box_display = get_field( "service_point_box_display" );
    $service_point_box_title = get_field( "service_point_box_title" );
    $service_point_box_description = get_field( "service_point_box_description" );
    $spacing = get_sub_field("spacing");
    $section_classes = paddingClasses($spacing);
    if ( $service_point_box_display ) {
    if ( have_rows( "service_point_box" ) ) { ?>

<section class="<?php echo esc_attr($section_classes); ?> text-center">
    <?php if($service_point_box_title != NULL){ ?>
    <h5 class="font-bold text-[#252525] mb-2"><?php echo $service_point_box_title; ?></h5>
    <?php } ?>

    <?php if($service_point_box_description != NULL){ ?>
    <p><?php echo $service_point_box_description; ?></p>
    <?php } ?>

    <div class="container gap-4 lg:gap-7.5 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 text-left mt-7.5">
        <?php
      while ( have_rows( "service_point_box" ) ) {
      the_row();
      $image = get_sub_field( "image" );
      $title = get_sub_field( "title" );
      $description = get_sub_field( "description" );
      ?>
        <div class="border border-primary rounded-[20px] p-4 md:p-8 lg:p-10">
            <img class="w-full h-62.5 rounded-2xl" src="<?php echo $image; ?>" alt="">
            <p class="font-semibold text-lg mb-4 mt-4 md:mt-8 lg:mt-10"><?php echo $title; ?></p>
            <p><?php echo $description; ?></p>
        </div>
        <?php } ?>
</section>
<?php } } ?>




<?php
  $what_does_move_in_display = get_field( "what_does_move_in_display" );
  if ( $what_does_move_in_display ) {
  if ( have_rows( "what_does_move_in" ) ) {
  while ( have_rows( "what_does_move_in" ) ) {
  the_row();
  $title = get_sub_field( "title" );
  $description = get_sub_field( "description" );
  $spacing = get_sub_field("spacing");
  $section_classes = paddingClasses($spacing);?>
<section class="<?php echo esc_attr($section_classes); ?> text-center">
    <div class="container">
        <h5 class="font-bold text-[#252525] mb-2"><?php echo $title; ?></h5>
        <p class="mb-7.5"><?php echo $description; ?></p>
        <div class="grid grid-cols-1 lg:grid-cols-2 bg-terrtiary rounded-[20px] text-left">
            <?php
          while ( have_rows( "box_1" ) ) {
          the_row();
          $title = get_sub_field( "title" );
          ?>
            <div class="p-10 last:border-t last:border-t-[#7A7A7A4D]/30 lg:last:border-l lg:last:border-l-[#7A7A7A4D]/30">
                <h5 class="font-bold text-[#252525] mb-3"><?php echo $title; ?></h5>
                <ul class="flex flex-col gap-7 *:flex *:gap-4">
                    <?php
                while ( have_rows( "list" ) ) {
                the_row();
                $text = get_sub_field( "text" );
                ?>
                    <li><i class="fas fa-check mt-1"></i> <?php echo $text; ?></li>
                    <?php } ?>
                </ul>
            </div>
            <?php } ?>
        </div>
    </div>
</section>
<?php } } } ?>



<?php } if ( $service_template == 'Template 3' ) { ?>
<?php
  $hero_banner_section_display = get_field( "hero_banner_section_display" );
  if ( $hero_banner_section_display ) {
  if ( have_rows( "hero_banner_section" ) ) {
  while ( have_rows( "hero_banner_section" ) ) {
  the_row();
  $image = get_sub_field( "image" );
  $tagline = get_sub_field( "tagline" );
  $spacing = get_sub_field("spacing");
  $section_classes = paddingClasses($spacing);
?>
<section class="<?php echo esc_attr($section_classes); ?> bg-cover relative bg-center" <?php if ($image != NULL) { ?>
    style="background-image: url(<?php echo $image; ?>);" <?php } ?>>
    <span class="bg-linear-to-r from-black/90 to-transparent absolute inset-0"></span>
    <div class="container relative Z-1">
        <div><span class="kt-badge bg-white/30 text-white text-sm font-semibold"><?php echo $tagline; ?></span></div>
        <h1 class="font-semibold text-white"><?php the_content(); ?></h1>
    </div>
</section>
<?php } } } ?>


<?php
  $service_details_display = get_field( "service_details_display" );
  if ( $service_details_display ) {
  if ( have_rows( "service_details" ) ) {
  while ( have_rows( "service_details" ) ) {
  the_row();
  $image = get_sub_field( "image" );
  $title = get_sub_field( "title" );
  $description = get_sub_field( "description" );
  $button_text = get_sub_field( "button_text" );
  $button_link = get_sub_field( "button_link" );
  $spacing = get_sub_field("spacing");
  $section_classes = paddingClasses($spacing);
?>
<section class="<?php echo esc_attr($section_classes); ?>">
    <div class="container">
        <section class="<?php echo esc_attr($section_classes); ?>">
            <div class="container">
                <div class="grid grid-cols-12">
                    <div class="col-span-12 lg:col-span-6 self-center">
                        <img src="<?php echo $image; ?>" alt="">
                    </div>
                    <div class="col-span-12 lg:col-span-6 lg:pl-16 xl:pl-30 self-center">
                        <h5 class="font-bold text-[#252525] mt-2 mb-2"><?php echo $title; ?></h5>
                        <div class="space-y-3 mb-5"><?php echo $description; ?></div>
                        <a href="<?php echo $button_link; ?>"
                            class="kt-btn kt-btn-secondary"><?php echo $button_text; ?>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <?php } } } ?>

        <?php
    $what_does_move_in_display = get_field( "what_does_move_in_display" );
    if ( $what_does_move_in_display ) {
    if ( have_rows( "what_does_move_in" ) ) {
    while ( have_rows( "what_does_move_in" ) ) {
    the_row();
    $title = get_sub_field( "title" );
    $description = get_sub_field( "description" );
    $spacing = get_sub_field("spacing");
    $section_classes = paddingClasses($spacing);
    ?>
        <section class="<?php echo esc_attr($section_classes); ?> text-center">
            <div class="container">
                <h5 class="font-bold text-[#252525] mb-2"><?php echo $title; ?></h5>
                <p class="mb-7.5"><?php echo $description; ?></p>
                <div class="grid grid-cols-1 lg:grid-cols-2 bg-terrtiary rounded-[20px] text-left">
                    <?php
          while ( have_rows( "box_1" ) ) {
          the_row();
          $title = get_sub_field( "title" );
          ?>
                    <div class="p-10 last:border-t last:border-t-[#7A7A7A4D]/30 lg:last:border-l lg:last:border-l-[#7A7A7A4D]/30">
                        <h5 class="font-bold text-[#252525] mb-3"><?php echo $title; ?></h5>
                        <ul class="flex flex-col gap-7 *:flex *:gap-4">
                            <?php
                while ( have_rows( "list" ) ) {
                the_row();
                $text = get_sub_field( "text" );
                ?>
                            <li><i class="fas fa-check mt-1"></i> <?php echo $text; ?></li>
                            <?php } ?>
                        </ul>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </section>
        <?php } } } ?>


        <?php
    $why_choose_display = get_field( "why_choose_display" );
    if ( $why_choose_display ) {
    if ( have_rows( "why_choose" ) ) {
    while ( have_rows( "why_choose" ) ) {
    the_row();
    $title = get_sub_field( "title" );
    $heading_1 = get_sub_field( "heading_1" );
    $heading_2 = get_sub_field( "heading_2" );
    $description = get_sub_field( "description" );
    $display_company_name = get_sub_field( "display_company_name" );
    $spacing = get_sub_field("spacing");
    $section_classes = paddingClasses($spacing);
  ?>
        <div class="why-choose-service-section">
            <div class="why-choose-service-heading">
                <?php
                  if ( $display_company_name == 1 ) {
                    echo "<h2>" . " " . $heading_1 . get_bloginfo() . " " . $heading_2 . "</h2>";
                  } else {
                    echo "<h2>" . $title . "</h2>";
                  }
                  ?>
                <p><?php echo $description; ?></p>
            </div>
            <div class="row">
                <?php
          while ( have_rows( "box" ) ) {
          the_row();
          $icon = get_sub_field( "icon" );
          $title = get_sub_field( "title" );
          $description = get_sub_field( "description" );
        ?>
                <div class="col-lg-4 col-md-6">
                    <div class="why-choose-service-box">
                        <div class="why-choose-service-icon"> <img src="<?php echo $icon; ?>" alt=""> </div>
                        <div class="why-choose-service-content">
                            <h3><?php echo $title; ?></h3>
                            <p><?php echo $description; ?></p>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
        <?php } } } ?>
    </div>
</section>
<?php } ?>



<?php
$gallery_display = get_field( "gallery_display" );
if ( $gallery_display ) {
if ( have_rows( 'gallery', 11 ) ) {
while ( have_rows( 'gallery', 11 ) ) {
the_row();
$tagline = get_sub_field( "tagline" );
$title = get_sub_field( "title" );
$gallery_list = get_sub_field( "gallery_list" );
$spacing = get_sub_field("spacing");
$section_classes = paddingClasses($spacing);?>

<section class="<?php echo esc_attr($section_classes); ?> text-center">

    <?php if ($tagline != NULL) { ?>
    <div>
        <span class="kt-badge kt-badge-secondary"><?php echo $tagline; ?></span>
    </div>
    <?php } ?>

    <?php if ($title != NULL) { ?>
    <h5 class="font-bold text-[#252525] mt-4 mb-10"><?php echo $title; ?></h5>
    <?php } ?>

    <div class="owl-carousel owl-theme photo-gallery-slider">
        <?php foreach ($gallery_list as $image): ?>
        <div class="item scale-80">
            <img src="<?php echo esc_url($image); ?>" alt="">
        </div>
        <?php endforeach; ?>
    </div>
</section>
<?php } } } ?>
<?php get_footer(); ?>