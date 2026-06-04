<?php
/**
 * Template Name: Thank you
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
if ( function_exists( 'get_field' ) ) {
    $thankyou = get_field( "thank_you_page");
    $page_title = $thankyou[ 'page_title' ];
    $page_description = $thankyou[ 'page_description' ];
    $page_image = $thankyou[ 'page_image' ];
    $page_button_text = $thankyou[ 'page_button_text' ];
    $page_button_url = $thankyou[ 'page_button_url' ];
    ?>
<section class="text-center pt-8 md:pt-12 lg:pt-18 xl:pt-20 2xl:pt-24 pb-8 md:pb-12 lg:pb-18 xl:pb-20 2xl:pb-24">
  <div class="container">
        <?php if($page_title != NULL) {?>
        <h2 class="text-gray-950 font-bold"><?php echo $page_title; ?></span></h2>
        <?php } ?>
        <?php if($page_description != NULL) {?>
        <p class="text-xl"><?php echo $page_description; ?></p>
        <?php } ?>
      <?php if($page_image != NULL) {?>
      <img class="inline-block my-10 max-w-30 max-h-30" src="<?php echo $page_image; ?>" alt="">
      <?php } ?>
      <?php if($page_button_text != NULL) {?>
      <div>
      <a href="<?php echo $page_button_url; ?>" class="kt-btn kt-btn-secondary"><?php echo $page_button_text; ?></a>
      </div>
      <?php } ?>
  </div>
</section>
<?php } ?>
<?php get_footer(); ?>