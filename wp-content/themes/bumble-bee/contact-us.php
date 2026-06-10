<?php
/*
Template Name: Contact Us
*/
get_header();
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


<?php if ( have_rows( 'contact', 'option' ) ) {
  while ( have_rows( 'contact', 'option' ) ) {
  the_row();
  $tagline = get_sub_field( "tagline" );
  $title = get_sub_field( "title" );
  $description = get_sub_field( "description" );
  $contact_number = get_sub_field( "contact_number" );
  $email_address = get_sub_field( "email_address" );
  $business_address = get_sub_field( "business_address" );
  $business_address_link = get_sub_field( "business_address_link" );
  $static_form = get_sub_field( "static_form" );
$business_google_location = get_sub_field( "business_google_location" );
  $contact_title = get_sub_field( "contact_title" );
  $contact_description = get_sub_field( "contact_description" );
  $contact_iframe = get_sub_field( "contact_iframe" );
?>
<section class="pt-8 md:pt-12 lg:pt-18 xl:pt-20 2xl:pt-24">
    <div class="container grid grid-cols-12 gap-8">
        <div class="rounded-[20px] p-4 sm:p-8 col-span-8 mx-auto relative z-1 w-full bg-radial-[at_0%_170%] from-secondary via-primary via-72% to-terrtiary">
            <?php if($tagline != NULL){ ?>
            <div><span class="kt-badge kt-badge-secondary"><?php echo $tagline; ?></span></div>
            <?php } ?>
            <?php if($title != NULL){ ?>
            <p class="text-2xl text-white font-medium"><?php echo $title; ?></p>
            <?php } ?>
            <?php if($description != NULL){ ?>
            <p class="text-white"><?php echo $description; ?></p>
            <?php } ?>

            <?php if($static_form == 1){ ?>
            <form class="grid md:grid-cols-2 gap-6 mt-7">
                <div class="flex flex-col">
                    <input type="text" class="kt-input border-white! rounded-full! placeholder:text-white!" placeholder="First Name">
                </div>
                <div class="flex flex-col">
                    <input type="text" class="kt-input border-white! rounded-full! placeholder:text-white!" placeholder="Last Name">
                </div>
                <div class="flex flex-col">
                    <input type="email" class="kt-input border-white! rounded-full! placeholder:text-white!" placeholder="Email Address*">
                </div>
                <div class="flex flex-col">
                    <input type="text" class="kt-input border-white! rounded-full! placeholder:text-white!" placeholder="Phone">
                </div>
                <div class="flex flex-col md:col-span-2">
                    <input type="text" class="kt-input border-white! rounded-full! placeholder:text-white!" placeholder="Address">
                </div>
                <div class="flex flex-col md:col-span-2">
                    <input type="text" class="kt-input border-white! rounded-full! placeholder:text-white!" placeholder="Enter the typr of service you need here.">
                </div>
                <div class="flex gap-2 md:col-span-2">
                  <input class="bg-transparent" type="checkbox" id="contact-tremscheckbox">
                  <label class="text-white" for="contact-tremscheckbox">Agree to the <a target="_blank" href="#">Terms &amp; Conditions</a></label>
                </div>
                <button type="submit" class="kt-btn bg-white text-primary md:col-span-2">Send Message</button>
            </form>
            <div class="rounded-lg overflow-hidden">
            <?php } else { echo $contact_iframe; } ?>
            </div>
        </div>
        <?php if($business_google_location != NULL){ ?>
        <div class="col-span-4 rounded-[20px] overflow-hidden"> <?php echo $business_google_location; ?> </div>
        <?php } ?>
    </div>
</section>

<div class="container grid grid-cols-3 pt-8 md:pt-12 lg:pt-18 xl:pt-20 2xl:pt-24 pb-8 md:pb-12 lg:pb-18 xl:pb-20 2xl:pb-24 text-gray-950">
    <div>
        <p><i class="fa-solid mr-2 fa-phone"></i> Phone</p>
        <?php if($contact_number != NULL){ ?>
        <p class="text-2xl font-semibold"><?php echo $contact_number; ?></p>
        <?php } ?>
    </div>
    <div>
        <p><i class="fa-solid mr-2 fa-envelope"></i> Email</p>
        <?php if($email_address != NULL){ ?>
        <p class="text-2xl font-semibold"><?php echo $email_address; ?></p>
        <?php } ?>
    </div>
    <div>
        <p><i class="fa-solid mr-2 fa-location-dot"></i> Location</p>
        <?php if($business_address != NULL){ ?>
        <p class="text-2xl font-semibold"><?php echo $business_address; ?></p>
        <?php } ?>
    </div>
</div>
<?php } } ?>



<?php get_footer(); ?>