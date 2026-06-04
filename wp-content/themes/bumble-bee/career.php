<?php
/*
Template Name: Career
*/
get_header();
?>

<?php
// Optional padding function (you can remove if not used)
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
}
?>

<?php 
$hero_banner_section = get_field('hero_banner_section');
if (!empty($hero_banner_section)):
    $display = $hero_banner_section['display'] ?? false;
    if ($display):
        $image   = $hero_banner_section['image'] ?? '';
        $tagline = $hero_banner_section['tagline'] ?? '';
        $title   = $hero_banner_section['title'] ?? '';
?>

<section class="pt-8 md:pt-12 lg:pt-18 xl:pt-20 2xl:pt-24 pb-8 md:pb-12 lg:pb-18 xl:pb-20 2xl:pb-24 bg-cover relative"
    <?php if (!empty($image)) : ?> style="background-image: url('<?php echo esc_url($image); ?>');" <?php endif; ?>>
    <span class="bg-radial from-primary/0 to-primary absolute inset-0 mix-blend-multiply"></span>
    <div class="relative z-10 text-center max-w-175 mx-auto">
        <?php if (!empty($tagline)) : ?>
        <p class="text-white mb-2"><?php echo esc_html($tagline); ?></p>
        <?php endif; ?>
        <h2 class="font-semibold text-white text-shadow-lg">
            <?php echo !empty($title) ? esc_html($title) : get_the_title(); ?>
        </h2>
    </div>
</section>
<?php 
    endif;
endif; 
?>



<!-- ================= CONTENT SECTION ================= -->
<section class="pt-8 md:pt-12 lg:pt-18 xl:pt-20 2xl:pt-24 pb-8 md:pb-12 lg:pb-18 xl:pb-20 2xl:pb-24">
    <div class="container">
        <h4 class="font-semibold mb-3 md:mb-7 lg:mb-10">Open Positions</h4>
        <?php 
        $career_items = get_field('career_item');
        if (!empty($career_items) && is_array($career_items)) : 
        $i = 0;
        ?>

        <div data-kt-accordion="true" id="careerAccordion" class="kt-accordion kt-accordion-outline">
            <?php foreach ($career_items as $item): 
            $i++;
            $career_detail   = $item['career_detail'] ?? [];
            $job_title        = $career_detail['job_title'] ?? '';
            $full_time__part_time   = $career_detail['full_time__part_time'] ?? '';
            $experience      = $career_detail['experience'] ?? '';
            $location        = $career_detail['location'] ?? '';
            $job_description = $item['job_description'] ?? '';
            $apply_now = $item['apply_now'] ?? [];
            $show_class   = ($i == 1) ? 'active' : '';
            $hidden_class = ($i == 1) ? '' : 'hidden';
            ?>

            <div data-kt-accordion-item="true"
                class="kt-accordion-item border-0! bg-terrtiary rounded-3xl <?php echo esc_attr($show_class); ?>">

                <!-- HEADER -->
                <div id="accordion_<?php echo esc_attr($i); ?>" data-kt-accordion-toggle="true"
                    aria-controls="accordion_cont_<?php echo esc_attr($i); ?>"
                    class="kt-accordion-toggle rounded-2xl px-6 py-5 font-semibold gap-5!">

                    <div class="flex justify-between w-full">
                        <div>
                            <?php if ($job_title): ?>
                            <p class="text-2xl font-medium mb-1"><?php echo esc_html($job_title); ?></p>
                            <?php endif; ?>
                            <?php if ($location): ?>
                            <p><i class="fa-solid fa-location-dot mr-2"></i><?php echo esc_html($location); ?></p>
                            <?php endif; ?>
                        </div>
                        <div>
                            <?php if ($experience): ?>
                            <p class="text-2xl font-medium mb-1">Exp.: <?php echo esc_html($experience); ?> yrs</p>
                            <p><i class="fa-solid fa-clock mr-2"></i><?php echo ($full_time__part_time) ? 'Full Time' : 'Part Time'; ?></p>
                            <?php endif; ?>
                        </div>
                    </div>
                    

                    <span class="kt-accordion-indicator w-auto! h-auto!">
                        <span class="kt-accordion-indicator-on w-auto! h-auto!">
                            <i class="fas fa-chevron-right text-[#0E1827]"></i>
                        </span>
                        <span class="kt-accordion-indicator-off w-auto! h-auto!">
                            <i class="fas fa-chevron-down text-[#0E1827]"></i>
                        </span>
                    </span>

                </div>

                <!-- CONTENT -->
                <div class="kt-accordion-content px-6 pb-5 pt-2 border-none! <?php echo esc_attr($hidden_class); ?>"
                    aria-labelledby="accordion_<?php echo esc_attr($i); ?>"
                    id="accordion_cont_<?php echo esc_attr($i); ?>">
                    <div class="defaultContent border-t border-t-gray-300 pt-5">
                        <?php echo wp_kses_post($job_description); ?>
                    </div>
                    <?php if ($apply_now): ?>
                    <a href="<?php echo esc_url($apply_now['url']); ?>" target="<?php echo esc_attr($apply_now['target']); ?>" class="kt-btn kt-btn-g">
                        <?php echo esc_html($apply_now['title']); ?> <i class="fa-solid fa-arrow-up-right"></i>
                    </a>
                    <?php endif; ?>
                </div>

            </div>
            <?php endforeach; ?>
        </div>
        <?php endif; ?>
    </div>
</section>


<?php
get_footer();
?>