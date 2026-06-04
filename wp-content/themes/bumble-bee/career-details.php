<?php
/*
Template Name: Career Template
Template Post Type: careers
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

<section class="pt-8 md:pt-12 lg:pt-18 xl:pt-20 2xl:pt-24 pb-8 md:pb-12 lg:pb-18 xl:pb-20 2xl:pb-24 relative" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);">
    <span class="bg-linear-to-r from-black/90 to-transparent absolute inset-0"></span>
    <div class="container relative Z-1">
        <div><span class="kt-badge bg-white/30 text-white text-sm font-semibold">Careers</span></div>
        <h1 class="font-semibold text-white"><?php echo the_title(); ?></h1>
      </div>
    </div>
</section>


<section class="pt-8 md:pt-12 lg:pt-18 xl:pt-20 2xl:pt-24">
  <div class="container">
    <h5 class="font-bold text-[#252525] mb-2"><?php echo get_field("position_type"); ?></h5>
    <div class="grid grid-cols-12 gap-3 lg:gap-6">
      <div class="col-span-12 lg:col-span-4">
        <div class="border border-gray-200 hover:bg-gray-200 rounded-[20px] p-7.5">
          <h5 class="text-[#202020] font-medium"><?php echo the_title(); ?></h5>
          <p class="text-[#202020] text-xl font-medium mb-7.5">Exp.: <?php echo get_field("experience"); ?></p>
          <p class="text-[#585858] mb-2"><i class="far fa-fw fa-clock"></i><?php echo get_field("job_type"); ?></p>
          <p class="text-[#585858] mb-2"><i class="fas fa-fw fa-map-marker-alt"></i><?php echo get_field("location"); ?></p>
        </div>
      </div>
      <div class="col-span-12 lg:col-span-8 editerData">
        
        <?php echo get_field("job_description"); ?>

        <a href="<?php echo get_field("button_link"); ?>" class="kt-btn kt-btn-primary"><?php echo get_field("button_text"); ?></a>
      </div>
    </div>
  </div>
</section>

<?php
get_footer();
?>
