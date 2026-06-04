<?php



global $primary_color, $secondary_color, $territory_color, $body_color, $button_text_color, $tag_text_color;



$primary_color = get_field( 'primary_color', 'option' ); //#FCBC45

$secondary_color = get_field( 'secondary_color', 'option' ); //#252525

$territory_color = get_field( 'territory_color', 'option' ); //#F9F9F9

$body_color = get_field( 'body_color', 'option' ); //#7A7A7A

$button_text_color = get_field( 'button_text_color', 'option' ); //#252525

$tag_text_color = get_field( 'tag_text_color', 'option' ); //#252525
?>

p{color: <?php echo $body_color; ?>;}

.main-menu li a{color: #B0B0B0;}

.main-menu li > a:focus,

.main-menu li > a:hover{color: <?php echo $primary_color; ?>;}

.main-menu li > a::after{background: <?php echo $primary_color; ?>;}

.main-menu .current_page_item > a,

.main-menu .current-menu-ancestor > a{color: <?php echo $primary_color; ?>;}

.sub-menu li a:hover{background: <?php echo $secondary_color; ?>; color: #fff;}

.sub-menu .current-menu-item a{background: <?php echo $secondary_color; ?>;}

.common-btn{background-color: <?php echo $primary_color; ?>; color: <?php echo $button_text_color; ?>;}

.common-btn:hover{background-color: <?php echo $secondary_color; ?>;}

.header-btn.sign-btn .common-btn{background-color: <?php echo $secondary_color; ?>;}

.header-btn.sign-btn .common-btn:hover{background-color: <?php echo $primary_color; ?>;}

.home .header-btn.sign-btn .common-btn{background-color: <?php echo $primary_color; ?>;color: <?php echo $secondary_color; ?>;}

.home .header-btn.sign-btn .common-btn:hover{background-color:<?php echo $territory_color; ?>;}

.home .scrolled .header-btn.sign-btn .common-btn{background-color: <?php echo $secondary_color; ?>;color: #fff;}

.home .scrolled .header-btn.sign-btn .common-btn:hover{background-color: <?php echo $primary_color; ?>;color: <?php echo $secondary_color; ?>;}

.home .header-btn .header-nav-btn{background-color: <?php echo $territory_color; ?>;}

.home .header-btn .header-nav-btn:hover{background-color: <?php echo $primary_color; ?>;color: <?php echo $secondary_color; ?>;}

.home .scrolled .header-btn .header-nav-btn{background-color: <?php echo $primary_color; ?>;}

.home .scrolled .header-btn .header-nav-btn:hover{background-color: <?php echo $secondary_color; ?>;color: #fff;}

.home-banner-content .welcome-to-profirm{color:  <?php echo $primary_color; ?>;}

.cleaning-process-section .cleaning-process{background-color: <?php echo $territory_color; ?>10;}

.tag {background-color: <?php echo $primary_color; ?>;color: <?php echo $tag_text_color; ?>;}

.home-banner-content p.tag { color: <?php echo $tag_text_color; ?>; }

.hero-banner-section{border-color: <?php echo $primary_color; ?>;}

<!-- .home-about-point-icon svg path{fill: <?php //echo $primary_color; ?>; } -->

.service-provided-box{background-color: <?php echo $territory_color; ?>;}

.service-provided-content a{color: <?php echo $primary_color; ?>;}

.service-provided-content a svg path{stroke: <?php echo $primary_color; ?>;}

.service-provided-content a:hover{color: <?php echo $secondary_color; ?>;}

.service-provided-content a:hover svg path{stroke: <?php echo $secondary_color; ?>;}

.cleaning-tips-box{background-color: <?php echo $territory_color; ?>;}

.customer-feedback-section{background-color: <?php echo $territory_color; ?>;}

.our-service-box{border-color: <?php echo $secondary_color; ?>;}

.book-on-the-go-img img{border-color: <?php echo $primary_color; ?>;}

.mobile-image-block::before{background-color: <?php echo $primary_color; ?>;}

.service-provided-box:hover{background-color: <?php echo $primary_color; ?>;}

.owl-dots .owl-dot.active{background: <?php echo $primary_color; ?> !important;}

.rating-bg-img::before{background: <?php echo $secondary_color; ?>;}

.how-work-box .how-work-content:hover{background-color: <?php echo $primary_color; ?>;}

.work-inner .comapany_rating-title{color: <?php echo $primary_color; ?>;}

.pricing_box span{color: <?php echo $secondary_color; ?>;}

.pricing_box.bg span{color: <?php echo $secondary_color; ?>;}

.pricing_box.bg h6{color: <?php echo $secondary_color; ?>;}

.pricing_box h6{color: <?php echo $secondary_color; ?>;}

.cta-btn .common-btn{background-color: <?php echo $primary_color; ?>;}

.faq-section .accordion-item{background-color: <?php echo $territory_color; ?>;}

.blog-box-2{background-color: <?php echo $territory_color; ?>;}

.blog-date{color: <?php echo $primary_color; ?>;}

<!-- .company-rating-box{background-color: <?php //echo $territory_color; ?>;} -->

.bring-space-section{border-color: <?php echo $primary_color; ?>;}

.why-choose-us{background-color: <?php echo $territory_color; ?>;}

.pricing_box{background: <?php echo $territory_color; ?>;}

.pricing_box.bg{background: <?php echo $primary_color; ?>;}

.pricing_box a.booknow{background-color: <?php echo $secondary_color; ?>;}

.pricing_box a.booknow:hover{background: <?php echo $primary_color; ?>;}

.pricing_box.bg a.booknow:hover{background: <?php echo $secondary_color; ?>;}

.team-section_inner{background-color: <?php echo $territory_color; ?>;}

.hmblogsection a:hover{color: <?php echo $primary_color; ?>;}

.hmblogsection a:hover h3{color: <?php echo $primary_color; ?>;}

.hmblogsection a:hover svg path{fill: <?php echo $primary_color; ?>;}

.blog-list-box{border-color: <?php echo $secondary_color; ?>;}

.blog-list-detail .date{color: <?php echo $secondary_color; ?>;}

.blog-list-box:hover{background-color: <?php echo $primary_color; ?>;}

<!-- .photo-gallery-section{background-color: <?php //echo $territory_color; ?>;} -->

.image-comparison-main{background: <?php echo $secondary_color; ?>;}

.image-comparison__thumb{background-color: <?php echo $primary_color; ?>;}

.page-template-contact-us .contact-us-row{background-color: <?php echo $territory_color; ?>;}

.contact-detail svg path{fill: <?php echo $primary_color; ?>;}

<!-- .contact a{color: <?php //echo $primary_color; ?>;} -->

<!-- .cta-content{background-color: <?php //echo $primary_color; ?>;} -->

.cta-btn .common-btn:hover{background-color: <?php echo $secondary_color; ?>;}

.eco-friendly-section{background-color: <?php echo $territory_color; ?>;}

.service-provided-box.service-highlight-box{background-color: <?php echo $primary_color; ?>;}

.benifit-include-box{background-color: <?php echo $territory_color; ?>;}

.move-in-out-include-list svg circle{fill: <?php echo $primary_color; ?>;}

.why-choose-service-box{background-color: <?php echo $territory_color; ?>;}

.why-choose-service-box .why-choose-service-icon::before{background-color: <?php echo $primary_color; ?>;}

.table-of-content-div{background-color: <?php echo $territory_color; ?>;}

.table-conten-list svg rect{fill: <?php echo $primary_color; ?>;}

.move-in-out-content{background-color: <?php echo $territory_color; ?>;}

.move-in-out-include-list svg path{fill: <?php echo $primary_color; ?>;}

.owl-nav button svg path{fill: <?php echo $secondary_color; ?>;}

.owl-nav button:hover svg path{fill: <?php echo $primary_color; ?>;}

.socical-media a:hover svg path{fill: <?php echo $primary_color; ?>;}

footer{background-color: <?php echo $secondary_color; ?>;}

footer h5{color: <?php echo $primary_color; ?>;}

footer ul li a:hover{color: <?php echo $primary_color; ?>;}

footer ul .current_page_item a{color: <?php echo $primary_color; ?>;}




@media only screen and (max-width: 991px) {

.home .header-btn.sign-btn .common-btn,

.home .scrolled .header-btn.sign-btn .common-btn{background-color: transparent;}

.home .header-btn.sign-btn .common-btn:hover,

.home .scrolled .header-btn.sign-btn .common-btn:hover{background-color: transparent;}

.header-btn.sign-btn .common-btn,

.header-btn.sign-btn .common-btn:hover{background-color: transparent;}

.header-btn.sign-btn .fa-user{color: <?php echo $secondary_color; ?>;}

.header-btn.sign-btn .common-btn .fa-user:hover{color: <?php echo $primary_color; ?>;}

.home .header-btn.sign-btn .fa-user{color: #fff;}

.home .scrolled .header-btn.sign-btn .fa-user{color: <?php echo $secondary_color; ?>;}

.home .scrolled .header-btn.sign-btn .fa-user:hover{color: <?php echo $primary_color; ?>;}

.toggle-icon{background: <?php echo $primary_color; ?>;}

.toggle-icon::before, .toggle-icon::after{background: <?php echo $primary_color; ?>;}

.closeMenu .toggle-icon{background: <?php echo $primary_color; ?>;}

.closeMenu .toggle-icon::before, .closeMenu .toggle-icon::after{background: <?php echo $primary_color; ?>;}

.main-menu li > a{color: #fff;}

.sub-menu li a:hover{background: transparent;}

.main-menu li > a:focus{color: <?php echo $primary_color; ?>;}

.main-menu li > a:hover{color: <?php echo $primary_color; ?>;}

.main-menu .current_page_item > a, .main-menu .current-menu-ancestor > a{color: <?php echo $primary_color; ?>;}

.sub-menu .current-menu-item a{background: transparent;color: <?php echo $primary_color; ?>;}

}