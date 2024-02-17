<?php 
header("Content-type: text/css; charset: UTF-8");

//Global variables
$baseColor = get_field('base_color', 'options');
$lightGray = get_field('light_gray', 'options');
$darkGray = get_field('dark_gray', 'options');

$primary = get_field('primary', 'options');
$secondary = get_field('secondary', 'options');
$tetriary = get_field('tetriary', 'options');
$quaternary = get_field('quaternary', 'options');

$topbarBG = get_field("topbar_background_color", "option");
$topbarColor = get_field("topbar_color", "options"); 

$footerBG = get_field ("footer_background_color", "options");
$footerColor = get_field ("footer_color", "options");
?>

body {
    color:  <? echo $baseColor ?>;
}
h1,
h2,
h3,
h4,
h5,
h6 {
    color: <? echo $primary ?>;
}
a {
    color: <? echo $tetriary ?>;
}
.heading {
    color: <? echo $primary ?>;
}
.subheading {
    color: <? echo $tetriary ?>;
}
.btn-primary {	
	background-color: <? echo $primary ?>;
}
.btn-secondary {
    color: <? echo $primary ?>;
    background-color: <? echo $secondary ?>;
}


.topbar {
    background-color: <?php echo $topbarBG ?>;
    color: <? echo $topbarColor ?>;
}
.topbar .content .top-nav__phone a,
.topbar .content .top-nav__drawer .top-nav li a {
    color: <? echo $topbarColor ?>;
}


.main-nav .main-nav__wrapper .main-nav__bar .hamburger-button .hamburger-button__bar--top, 
.main-nav .main-nav__wrapper .main-nav__bar .hamburger-button .hamburger-button__bar--middle, 
.main-nav .main-nav__wrapper .main-nav__bar .hamburger-button .hamburger-button__bar--bottom {
    color: <? echo $secondary ?>;
    background-color: <? echo $secondary ?>;
}
.main-nav .main-nav__wrapper .main-nav__drawer .primary-nav > li.btn a {
    color: <? echo $primary ?>;
}


.footer {
    background-color: <? echo $footerBG ?>;
    color: <? echo $footerColor ?>;
}


.slick-slider .slick-dots li,
.slick-slider .slick-dots li {
    background: <? echo $quaternary ?>;
}
.slick-slider .slick-dots li.slick-active,
.slick-slider .slick-dots li.slick-active {
    background: <? echo $lightGray ?>;
}


.main--archive .category li a,
.main--single .category li a,
.main--single .btn-back {
    color: <? echo $primary ?>;
}


.section--banner-cta-alt::after {
    background-image: linear-gradient(<? echo $primary ?>, rgba(255, 255, 255, 0));
}
@media only screen and (min-width: 768px) {
    .section--banner-cta-alt::after {
        background-image: linear-gradient(to right, <? echo $primary ?>, rgba(255, 255, 255, 0));
    }
}

.section--faqs .faq-wrapper .faq .answer {
    background-color: <? echo $primary ?>;
}
.section--faqs .faq-wrapper .faq .question .arrow-down {
    color: <? echo $secondary ?>;
}

.section--featured-panels .panels .panel .title {
    color: <? echo $secondary ?>;
}

.section--featured-services .cards .card:hover .image-wrapper {
    background-color: <? echo $primary ?>;
}
.section--featured-services .panels .panel:hover .image-wrapper {
    background-color: <? echo $tetriary ?>;
}

.section--linkable-panels .panels .panel .title {
    color: <? echo $tetriary ?>;
}
.section--linkable-panels .panels .panel:hover::before {
    box-shadow: -8px 8px 0px 0px <? echo $primary ?>;
}
.section--location-info .two-col .col:nth-child(2) .content-wrapper::after,
.section--location-info .two-col .col:nth-child(2) .locations-list::after {
    border: 0.2em solid <? echo $secondary ?>;
}

.section--locations .panels .panel:hover {
    box-shadow: 0px 5px 10px 0px  <? echo $tetriary ?>;
}

.section--locations .panels .panel .title,
.section--locations .panels .panel .hours-wrapper b {
    color: <? echo $tetriary ?>;
}

.section--provider-bio .two-col .col .title {
    color: <? echo $primary ?>;
}
.section--provider-bio .specialty-wrapper {
    background-color: <? echo $primary ?>;
}

.section--side-by-side .two-col .col:first-child,
.section--contact-form-alt .two-col .col:first-child {
    background-color: <? echo $primary ?>;
}

.section--testimonials .panels .panel .author .name-wrapper .name,
.section--testimonials .panels .panel .author .name-wrapper .title {
    color: <? echo $tetriary ?>;
}

.section--tiles .tiles .tile:hover {
    background-color: <? echo $primary ?>;
}









