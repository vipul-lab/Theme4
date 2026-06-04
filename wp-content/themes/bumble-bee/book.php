<?php
/*
Template Name: Book
*/
get_header();
?>

<?php
function paddingClasses($spacing){
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
}?>



<?php 
$thumbnail = get_the_post_thumbnail_url(get_the_ID(), 'full');

// fallback image
$default_image = get_template_directory_uri() . '/assets/images/default-banner.jpg';

// final image
$bg_image = $thumbnail ? $thumbnail : $default_image;
?>

<section class="pt-8 md:pt-12 lg:pt-18 xl:pt-20 2xl:pt-24 pb-8 md:pb-12 lg:pb-18 xl:pb-20 2xl:pb-24 bg-cover relative"
    style="background-image: url('<?php echo esc_url($bg_image); ?>');">
    <span class="bg-radial from-primary/0 to-primary absolute inset-0 mix-blend-multiply"></span>
    <div class="relative z-10 text-center max-w-175 mx-auto">
        <?php if (is_single()){ ?><div><span class="kt-badge bg-white/30 text-white text-sm font-semibold">Blog</span></div><?php } ?>
        <h2 class="font-semibold text-white text-shadow-lg">
            <?php echo the_title(); ?>
        </h2>
    </div>
</section>


<section class="pt-8 md:pt-12 lg:pt-18 xl:pt-20 2xl:pt-24 pb-8 md:pb-12 lg:pb-18 xl:pb-20 2xl:pb-24">
    <?php 
    $iframe = get_field('booking_iframe', 'option');

    if( !empty($iframe) ){
        echo $iframe;
    } else { ?>
        <div class="container text-center">
			 <img class="w-40 inline-block" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/ifrem.svg" />
            <p class="text-2xl mt-10 text-[#BEBEBE] font-bold">Invalid or missing iframe</p>
		</div>
    <?php } ?>
</section>
<?php get_footer(); ?>