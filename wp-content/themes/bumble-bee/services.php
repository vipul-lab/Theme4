<?php
/*
Template Name: Services
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
$hero_banner_display = get_field("hero_banner_display");
if ($hero_banner_display) {
  if (have_rows("hero_banner_section")) {
    while (have_rows("hero_banner_section")) {
      the_row();
      $image = get_sub_field("image");
      $title = get_sub_field("title");
      $spacing = get_sub_field("spacing");
    $section_classes = paddingClasses($spacing);
      ?>
      <section class="<?php echo esc_attr($section_classes); ?> bg-cover relative" <?php if ($image != NULL) { ?> style="background-image: url(<?php echo $image; ?>);" <?php } ?>>
      <span class="bg-linear-to-r from-black/90 to-transparent absolute inset-0"></span>
        <div class="container relative Z-1">
            <div><span class="kt-badge bg-white/30 text-white text-sm font-semibold"><?php the_title(); ?></span></div>
            <?php if ($title != NULL) { ?>
              <h1 class="font-semibold text-white"><?php echo $title; ?></h1>
            <?php } ?>
        </div>
      </section>
    <?php }
  }
} ?>




<?php
$services_display = get_field("services_display");
if ($services_display) {
  if (have_rows("services_copy")) {
    while (have_rows("services_copy")) {
      the_row();
      $tagline = get_sub_field("tagline");
      $title = get_sub_field("title");
      $description = get_sub_field("description");
      $spacing = get_sub_field("spacing");
    $section_classes = paddingClasses($spacing);
      ?>
      <section class="<?php echo esc_attr($section_classes); ?> text-center">
        <div class="container">
          <div class="max-w-300 mx-auto mb-10">
            <div><span class="kt-badge kt-badge-secondary"><?php echo $tagline; ?></span></div>
            <h5 class="font-bold text-[#252525] mt-2 mb-2"><?php echo $title; ?></h5>
            <p><?php echo $description; ?></p>
          </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-7.5 max-w-250 mx-auto text-left">
              <?php
              while (have_rows("services_box")) {
                the_row();
                $icon = get_sub_field("icon");
                $title = get_sub_field("title");
                $description = get_sub_field("description");
                $button_text = get_sub_field("button_text");
                $button_link = get_sub_field("button_link");
                $service_box_highlight = get_sub_field("service_box_highlight");
                ?>
                <div class="rounded-[20px] overflow-hidden flex flex-col bg-terrtiary h-full<?php if ($service_box_highlight == 1) { echo " bg-secondary!"; } ?>">
                  <img class="w-full h-60 object-cover" src="<?php echo $icon; ?>" alt="">
                  <div class="p-7.5 flex-1">
                    <p class="text-primary text-xl font-semibold <?php if ($service_box_highlight == 1) { echo " text-white!";} ?>"><?php echo $title; ?></h4>
                    <p class="my-3 <?php if ($service_box_highlight == 1) { echo " text-white";} ?>"><?php echo $description; ?></p>
                    <a class="text-secondary font-semibold <?php if ($service_box_highlight == 1) { echo " text-white!";} ?>" href="<?php echo $button_link; ?>"><?php echo $button_text; ?></a>
                  </div>
                </div>
              <?php } ?>
            </div>
      </section>
    <?php }
  }
} ?>






<?php
$faq_display = get_field("faq_display");
if ($faq_display) {
  $i = 0;
  if (have_rows('faq', 11)) {
    while (have_rows('faq', 11)) {
      the_row();
      $tagline = get_sub_field("tagline");
      $title = get_sub_field("title");
      ?>
      <section class="faq-section section-spacing">
        <div class="container">
          <div class="row">
            <div class="col-md-4">
              <div class="faq-heading">
                <?php if ($tagline != NULL) { ?>
                  <p class="tag"><?php echo $tagline; ?></p>
                <?php } ?>
                <?php if ($title != NULL) { ?>
                  <h2><?php echo $title; ?></h2>
                <?php } ?>
              </div>
            </div>

            <div class="col-md-8">
              <div class="faq-details">
                <div class="accordion accordion-flush" id="accordionFlushExample">
                  <?php
                  while (have_rows('faq_list')) {
                    $i++;
                    the_row();
                    $title = get_sub_field('title');
                    $description = get_sub_field('description');
                    // Add 'show' class for the first FAQ
                    $show_class = ($i == 1) ? 'show' : '';
                    $collapsed_class = ($i == 1) ? '' : 'collapsed';
                    //$aria_expanded = ( $i == 1 ) ? 'true' : 'false';
                    ?>
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="flush-heading<?php echo $i; ?>">
                        <button class="accordion-button <?php echo $collapsed_class; ?>" type="button" data-bs-toggle="collapse"
                          data-bs-target="#flush-collapse<?php echo $i; ?>" aria-expanded="false"
                          aria-controls="flush-collapse<?php echo $i; ?>"> <?php echo $title; ?> </button>
                      </h2>
                      <div id="flush-collapse<?php echo $i; ?>" class="accordion-collapse collapse <?php echo $show_class; ?>"
                        aria-labelledby="flush-heading<?php echo $i; ?>" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body"> <?php echo $description; ?> </div>
                      </div>
                    </div>
                  <?php } ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    <?php }
  }
} ?>
<?php get_footer(); ?>