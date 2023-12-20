<?php
/*
Template Name: Zelle
*/

//Template Name: Zelle


get_header(); ?>


<div class="is-single-php">

    <?php if (have_posts()) : ?>

        <?php
        while (have_posts()) :
            the_post();
        ?>

            <?php get_template_part('template-parts/content', get_post_format()); ?>

            <?php
            // If comments are open or we have at least one comment, load up the comment template.
            if (comments_open() || get_comments_number()) :
                comments_template();
            endif;
            ?>

        <?php endwhile; ?>

    <?php endif; ?>

</div>
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-132065149-6"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-132065149-6', {
        'page_title': 'TruMark Financial Zelle Landing A'
    });
</script>
<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous">
</script>
<!-- Google fonts -->
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;700;800&display=swap" rel="stylesheet">
<style>
    ol {
        padding-inline-start: 28px;
    }

    ol.zelle-steps {
        padding: 0;
        margin: 0 0 .4em;
    }

    #f92-wrapper * {
        box-sizing: border-box;
        position: relative;
    }

    #f92-wrapper {
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
        font-family: 'Montserrat', sans-serif;
        font-weight: 400;
        line-height: 2.11;
        visibility: visible !important;
        opacity: 1 !important;
    }

    #f92-wrapper img {
        max-width: 100%;
        height: auto;
        display: inline-block;
        vertical-align: middle;
        border-style: none;
    }

    #f92-wrapper-inner {
        max-width: 1200px;
        margin: 0 auto;
    }

    #f92-wrapper .bank-logo-container {
        text-align: center;
        padding-right: 36px;
    }

    #f92-wrapper .bank-logo {
        width: auto;
        height: 200px;
    }

    #f92-wrapper .mobile-apps {
        padding-top: 30.78px;
        padding-bottom: 30.78px;
    }

    #f92-wrapper .legal {
        font-size: 12px;
        font-weight: 400;
        line-height: 1.0;
        font-family: Arial, Helvetica, sans-serif;
        padding-top: 36px;
    }

    #f92-wrapper .legal p {
        margin-bottom: 0.666em;
    }

    h1.f92-hero-content {
        text-align: center;
        font-size: calc(20px + 40 * ((100vw - 320px) / (1200 - 320)));
        font-weight: 700;
        line-height: 1.3;
        color: #ffffff;
        padding: 5% 8%;
    }

    .f92-lead,
    .f92-hero-section p,
    .f92-enroll-section p,
    .f92-enroll-section li,
    .f92-faqs .f92-item-text p,
    .f92-faqs .f92-item-text ol,
    .f92-faqs .f92-item-text ul {
        font-family: 'Montserrat', sans-serif;
        /* FLUID FONT-SIZE FROM 14px â€“ 21px */
        font-size: calc(14px + 7 * ((100vw - 320px) / (1200 - 320)));
        line-height: 1.3;
        /* see Color Customizations for "color" */
    }

    .f92-enroll-section li {
        line-height: 1.8em;
    }

    #f92-wrapper .f92-main.f92-landing .faq {
        margin-bottom: 90px;
    }

    #f92-wrapper .f92-main.f92-landing .faq h5 {
        margin-bottom: 28.8px;
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6,
    .f92-content h1,
    .f92-content h2,
    .f92-content h3,
    .f92-content h4,
    .f92-content h5,
    .f92-content h6 {
        margin-top: 0;
        margin-bottom: 9px;
        font-family: inherit;
        font-weight: 500;
        line-height: 1.2;
        color: inherit;
    }

    h2,
    .f92-content h2 {
        font-weight: 500;
        font-size: 45px;
    }

    h3,
    .f92-content h3 {
        font-weight: 300;
        font-size: 37.98px;
        line-height: 1.4;
    }

    .f92-icons .f92-easy,
    .f92-icons .f92-free {
        display: none;
    }

    .f92-icons.f92-show-free .f92-free,
    .f92-icons.f92-show-easy .f92-easy {
        display: block;
    }

    /*! Class to Hide Anything */
    .f92-hide {
        display: none !important;
    }

    /*! Class used to show content ie do nothing  */
    .f92-show {}

    .f92-icons--h3 {
        font-size: 24;
        font-weight: 700;
        letter-spacing: 3px;
        color: inherit;
    }

    .f92-video--h3 {
        font-size: 40px;
        font-weight: 500 !important;
    }

    .f92-faq--h3 {
        font-size: 21px;
        font-weight: 700;
        letter-spacing: 3px;
        text-transform: uppercase;
    }

    h4,
    .f92-content h4 {
        font-weight: 300;
        font-size: 25.002px;
    }

    p {
        margin-top: 0;
        margin-bottom: 18px;
    }

    a {
        color: inherit;
        text-decoration: none;
        background-color: transparent;
        -webkit-text-decoration-skip: objects;
    }

    a.underline {
        color: inherit;
        text-decoration: underline;
    }

    ol {
        padding-inline-start: 28px;
    }

    .f92-light {
        font-weight: 300;
    }

    .f92-regular {
        font-weight: 400;
    }

    .f92-bold {
        font-weight: 700;
    }

    .f92-leading-tight {
        line-height: 1.3 !important;
    }

    .f92-text-center {
        text-align: center !important;
    }

    .f92-text-left {
        text-align: left !important;
    }

    .color-slate {
        color: #363636 !important;
    }

    .color-mdGrey {
        color: #888888 !important;
    }

    .color-ash {
        color: #f4f4f4 !important;
    }

    .bg-ash {
        background-color: #f4f4f4 !important;
    }

    .border-ash {
        border-color: #f4f4f4 !important;
    }

    .btn {
        display: inline-block;
        text-align: center;
        white-space: nowrap;
        vertical-align: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        line-height: 1.5;
        border-radius: 28px;
        padding: 18px 39.6px 18px;
        font-weight: 700;
        border: 1px solid #ebebeb;
        letter-spacing: 0.5vw;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .btn.btn-primary {
        background-color: #f4f4f4;
        color: #24428b;
    }

    .btn.btn-primary:hover {
        border-color: #888;
    }

    .lead {
        font-size: 20.9988px;
    }

    sub,
    .f92-content sub,
    sup,
    .f92-content sup {
        position: relative;
        font-size: 50%;
        line-height: 0;
        vertical-align: baseline;
    }

    sup,
    .f92-content sup {
        top: -.75em;
    }

    .row {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        margin-right: -15px;
        margin-left: -15px;
    }

    .col,
    .col-1,
    .col-10,
    .col-11,
    .col-12,
    .col-2,
    .col-3,
    .col-4,
    .col-5,
    .col-6,
    .col-7,
    .col-8,
    .col-9,
    .col-auto,
    .col-lg,
    .col-lg-1,
    .col-lg-10,
    .col-lg-11,
    .col-lg-12,
    .col-lg-2,
    .col-lg-3,
    .col-lg-4,
    .col-lg-5,
    .col-lg-6,
    .col-lg-7,
    .col-lg-8,
    .col-lg-9,
    .col-lg-auto,
    .col-md,
    .col-md-1,
    .col-md-10,
    .col-md-11,
    .col-md-12,
    .col-md-2,
    .col-md-3,
    .col-md-4,
    .col-md-5,
    .col-md-6,
    .col-md-7,
    .col-md-8,
    .col-md-9,
    .col-md-auto,
    .col-sm,
    .col-sm-1,
    .col-sm-10,
    .col-sm-11,
    .col-sm-12,
    .col-sm-2,
    .col-sm-3,
    .col-sm-4,
    .col-sm-5,
    .col-sm-6,
    .col-sm-7,
    .col-sm-8,
    .col-sm-9,
    .col-sm-auto,
    .col-xl,
    .col-xl-1,
    .col-xl-10,
    .col-xl-11,
    .col-xl-12,
    .col-xl-2,
    .col-xl-3,
    .col-xl-4,
    .col-xl-5,
    .col-xl-6,
    .col-xl-7,
    .col-xl-8,
    .col-xl-9,
    .col-xl-auto {
        position: relative;
        width: 100%;
        min-height: 1px;
        padding-right: 48px;
        padding-left: 48px;
    }

    .align-items-center {
        -ms-flex-align: center !important;
        align-items: center !important;
    }

    .d-flex {
        display: -ms-flexbox !important;
        display: flex !important;
    }

    .order-1 {
        -ms-flex-order: 1;
        order: 1;
    }

    .order-2 {
        -ms-flex-order: 2;
        order: 2;
    }

    .d-none {
        display: none !important;
    }

    .mb-2 {
        margin-bottom: 9px !important;
    }

    .mb-4 {
        margin-bottom: 27px !important;
    }

    .mb-5 {
        margin-bottom: 54px !important;
    }

    .mt-5 {
        margin-top: 54px !important;
    }

    .my-4 {
        margin: 27px 0 !important;
    }

    .my-5 {
        margin: 54px 0 !important;
    }

    .ml-2,
    .mx-2 {
        margin-left: 9px !important;
    }

    .mr-2,
    .mx-2 {
        margin-right: 9px !important;
    }

    .pb-4,
    .py-4 {
        padding-bottom: 27px !important;
    }

    .pt-4,
    .py-4 {
        padding-top: 27px !important;
    }

    .pb-5,
    .py-5 {
        padding-bottom: 54px !important;
    }

    .pt-5,
    .py-5 {
        padding-top: 54px !important;
    }

    div[class^="vs-"] {
        clear: both;
    }

    .vs-16 {
        height: 16px;
    }

    #f92-wrapper .f92-main.faq {
        padding-top: 0;
        padding-bottom: 36px;
    }

    #f92-wrapper .f92-main.faq a {
        color: inherit;
        text-decoration: underline;
    }

    #f92-wrapper .f92-main.faq h3 {
        font-size: 27.99px;
        font-weight: 700;
        color: #24428b;
        text-decoration: underline;
        text-transform: uppercase;
        margin-bottom: 31.5px;
    }

    #f92-wrapper .f92-main.faq .question {
        margin-bottom: 45px;
    }

    #f92-wrapper .faq_hide.faq {
        display: none
    }

    .f92-cta-button-container {
        text-align: center;
        padding: 40px 10px;
    }

    .f92-cta-button {
        /* See "Color Customizations" for background color. */
        font-size: calc(18px + 17 * ((100vw - 320px) / (1200 - 320)));
        /* font-size: 35px; */
        font-family: 'Montserrat';
        font-weight: 800;
        color: #ffffff !important;
        text-decoration: none;
        padding: 15px 3vw;
    }

    video {
        max-width: 100%;
        height: auto;
        border: 24px solid #f5f5f5;
    }

    .f92-faqs {
        margin: 5em 0;
    }

    .f92-faqs .f92-accordion-heading {
        text-align: center;
        margin-top: 2em;
        border-bottom: solid 2px #bfbfbf;
        padding-bottom: 2.5em;
    }

    .f92-faqs .f92-accordion-item {
        border-bottom: solid 2px #bfbfbf;
        padding-right: 0;
    }

    .f92-faqs .f92-item-text {
        display: none;
        padding-right: 4em;
        padding-bottom: 1.5em;
    }

    /* .f92-faqs .f92-item-text p,
  .f92-faqs .f92-item-text ol,
  .f92-faqs .f92-item-text ul {
	font-size: calc(14px + 4 * ((100vw - 320px) / (1200 - 320)));
	line-height: 2;
	margin-bottom: .5em;
  } */

    .f92-faqs .f92-item-text ol,
    .f92-faqs .f92-item-text ul {
        padding-left: 4em;
        padding-right: 4em;
    }

    .f92-faqs .f92-item-text ol li,
    .f92-faqs .f92-item-text ul li {
        margin-bottom: .5em;
    }

    .f92-faqs .f92-item-text a {
        color: inherit;
    }

    .f92-faqs .f92-item-heading {
        position: relative;
        width: 100%;
        cursor: pointer;
        padding: 2em 4em 2em 0;
    }

    .f92-faqs .f92-item-heading h3 {
        margin: 0;
    }

    .f92-faqs .f92-item-heading::after {
        position: absolute;
        right: 0;
        top: 50%;
        content: "^";
        display: block;
        font-size: 3.25em;
        transform: translateY(-50%) rotate(180deg);
        transition: .3s;
    }

    .f92-faqs .f92-item-heading.f92-active-accordion::after {
        transform: translateY(-50%) rotate(0deg);
    }

    .f92-faqs .f92-accordion-view-more {
        margin: 3em auto 0;
        display: flex;
        flex-flow: row nowrap;
        align-items: center;
        justify-content: center;
        cursor: pointer;
    }

    .f92-faqs .f92-accordion-view-more .f92-view-button {
        position: relative;
        height: 90px;
        display: inline-flex;
        align-items: center;
        font-size: 1.3em;
        font-weight: 700;
        letter-spacing: 0.25vw;
        text-align: center;
        /* line-height: 1.5; */
        vertical-align: middle;
        padding: 12px 24px 12px;
        border-radius: 50px;
        border: 1px solid #ebebeb;
        background-color: #f4f4f4;
        color: 9D2235;
        text-decoration: none;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        cursor: pointer;
        white-space: nowrap;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }

    .f92-faqs .f92-accordion-view-more .f92-view-button:hover {
        border-color: #888888;
    }

    .f92-faqs .f92-accordion-view-more .f92-view-button .f92-more {
        display: inline;
    }

    .f92-faqs .f92-accordion-view-more .f92-view-button .f92-less {
        display: none;
    }

    .f92-faqs .f92-accordion-view-more .f92-cross {
        position: relative;
        width: 2.125em;
        height: 2.125em;
        border-radius: 50%;
        border: solid 3px currentColor;
        margin-left: .5em;
    }

    .f92-faqs .f92-accordion-view-more .f92-cross::before,
    .f92-faqs .f92-accordion-view-more .f92-cross::after {
        content: "";
        display: block;
        position: absolute;
        background-color: currentColor;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
        transition: all .3s;
    }

    .f92-faqs .f92-accordion-view-more .f92-cross::before {
        width: 1.175em;
        height: 3px;
    }

    .f92-faqs .f92-accordion-view-more .f92-cross::after {
        height: 1.175em;
        width: 3px;
    }

    .f92-faqs .f92-accordion-view-more.f92-more-active .f92-view-button .f92-more {
        display: none;
    }

    .f92-faqs .f92-accordion-view-more.f92-more-active .f92-view-button .f92-less {
        display: inline;
    }

    .f92-faqs .f92-accordion-view-more.f92-more-active .f92-cross::after {
        height: 0;
    }

    @media (min-width: 575px) {}

    @media (min-width: 768px) {

        .btn {
            border-radius: 38px;
            padding: 23.4px 39.6px 23.4px;
        }

        .col-md-6 {
            -ms-flex: 0 0 50%;
            flex: 0 0 50%;
            max-width: 50%;
        }

        .col-md-4 {
            -ms-flex: 0 0 33.333333%;
            flex: 0 0 33.333333%;
            max-width: 33.333333%;
        }

        .d-md-none {
            display: none !important;
        }

        .mb-md-0,
        .my-md-0 {
            margin-bottom: 0 !important;
        }
    }

    @media (min-width: 992px) {

        /* Maximum font-size for fluid text */
        h1.f92-hero-content {
            font-size: 60px;
        }

        /* Maximum font-size for fluid text */
        .f92-lead,
        .f92-hero-section p,
        .f92-enroll-section p,
        .f92-enroll-section li,
        .f92-faqs .f92-item-text p,
        .f92-faqs .f92-item-text ol,
        .f92-faqs .f92-item-text ul {
            font-size: 21px;
        }

        .btn {
            letter-spacing: 5px;
        }

        .d-lg-block {
            display: block !important;
        }

        /* Setting maximum font-size. */
        .f92-cta-button {
            font-size: 35px;
            padding: 10px 20px;
        }

        /* Setting maximum font-size. */
        /* .f92-faqs .f92-item-text p,
	.f92-faqs .f92-item-text ol,
	.f92-faqs .f92-item-text ul {
	  font-size: 18px;
	} */
    }

    @media (max-width: 575px) {
        #f92-wrapper .bank-logo-container {
            text-align: center;
            padding: 0;
        }

        #f92-wrapper .bank-logo {
            max-width: 256px;
            max-height: 52px;
        }

        /* Setting minimum font-size. */
        .f92-cta-button {
            font-size: 18px;
            padding: 8px 16px;
        }

        .f92-lead,
        .f92-hero-section p,
        .f92-enroll-section p,
        .f92-enroll-section li,
        .f92-faqs .f92-item-text p,
        .f92-faqs .f92-item-text ol,
        .f92-faqs .f92-item-text ul {
            /* Minimum font-size */
            font-size: 14px;
            /* see Color Customizations for "color" */
        }

        h1.f92-hero-content {
            /* Minimum font-size for fluid text */
            font-size: 30px;
        }

        h2,
        .f92-content h2 {
            font-size: 2em;
        }

        h3,
        .f92-content h3 {
            font-size: 1.5em;
        }

        video {
            border: 16px solid #f5f5f5;
        }
    }

    /* *************************
  START - Color Customizations
  ************************** */
    .f92-video--h3,
    .f92-btn.f92-btn-primary,
    .f92-color-blue,
    .f92-faq--h2,
    .f92-faq--h3,
    .f92-faqs .f92-accordion-view-more .f92-view-button,
    .f92-faqs .f92-item-heading::after {
        color: #9D2235 !important;
    }

    h1.f92-hero-content,
    .f92-cta-button {
        background-color: #9D2235 !important;
    }

    .border-top-bottom {
        border-top: #9D2235 solid 4px;
        border-bottom: #9D2235 solid 4px;
    }

    /*! Text Color */
    p,
    .f92-hero-section p,
    .f92-enroll-section p,
    .faq--p,
    .f92-accordion-view-more ol,
    ul,
    #f92-steps li,
    .f92-faqs .f92-item-text ol li,
    .f92-lead {
        color: #474647;
    }

    /*! Icons Color */
    .f92-icons svg path {
        fill: #9D2235 !important;
    }

    */
    /* *************************
  END - Color Customizations
  ************************** */
</style>
<?php
get_template_part('library/snippets/header/middle');
get_template_part('library/snippets/header/bottom');
?>
<script>
    jQuery("body").addClass("page-template-new-page");
</script>
<div id="content">

    <div id="inner-content" class="wrap cf">
        <main id="main" class="m-all t-2of3 d-5of7 cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
            <div id="f92-wrapper" style="color: #fff;">
                <div id="f92-wrapper-inner">

                    <!-- ^^^^^^^^^^^^^^^^^^^^^^^^ -->
                    <!-- START CUSTOMIZABLE FI LOGO -->
                    <!-- vvvvvvvvvvvvvvvvvvvvvvvv -->
                    <div class="f92-text-center py-4">
                        <div class="bank-logo-container">
                            <?php /*<img alt="TruMark Financial" class="bank-logo" src="https://images.printable.com/imagelibrary/Seller/22712/p1_cbdc97ed-0086-4e2d-9d87-669a590c1ced/images/4957560/src/Zelle_Square_Logo_Lockup_Generator_04052022_e501413a-7300-4e03-a3fe-4ef48fa0c5ac.png" width="339" height="84">*/ ?>
                            <img alt="TruMark Financial" class="bank-logo" src="<?php echo get_stylesheet_directory_uri(); ?>/images/trumark-zelle-logo.png">

                        </div>
                    </div>
                    <!-- ^^^^^^^^^^^^^^^^^^^^^^^^ -->
                    <!-- END CUSTOMIZABLE FI LOGO -->
                    <!-- vvvvvvvvvvvvvvvvvvvvvvvv -->

                    <!-- ^^^^^^^^^^^^^^^^^^^^^^^^ -->
                    <!-- ---START HERO SECTION--- -->
                    <!-- vvvvvvvvvvvvvvvvvvvvvvvv -->
                    <section class="f92-hero-section">
                        <div class="f92-main f92-landing">
                            <h1 class="f92-hero-content">Zelle<sup>&reg;</sup> is a fast, safe and free<sup>1</sup> way to send money to friends and family</h1>
                            <!-- <h1 class="f92-hero-content">Send and Receive
		              Money with Zelle<sup>®</sup></h1> -->
                        </div>

                        <div class="f92-cta-button-container">
                            <a href="https://www.trumarkonline.org/" target="_blank" class="f92-cta-button">Log in and enroll</a>
                        </div>
                        <div class="">
                            <div class="row my-4">
                                <div class="col-12 f92-text-center">
                                    <p class="f92-lead f92-leading-tight">We have partnered with Zelle<sup>®</sup> to bring you a fast, safe and easy
                                        way to send and receive money with friends, family and other people you trust.<sup>2</sup></p>
                                    <p class="f92-lead f92-leading-tight">Zelle<sup>®</sup> is available right from online and mobile banking so you
                                        don't need to download anything new to start sending and receiving money!</p>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- ^^^^^^^^^^^^^^^^^^^^^^^^ -->
                    <!-- ----END HERO SECTION---- -->
                    <!-- vvvvvvvvvvvvvvvvvvvvvvvv -->

                    <!-- ^^^^^^^^^^^^^^^^^^^^^^^^ -->
                    <!-- START ENROLL STEPS SECTION -->
                    <!-- vvvvvvvvvvvvvvvvvvvvvvvv -->
                    <section class="f92-enroll-section">
                        <div class="row my-5">
                            <div class="col-12 f92-text-left">
                                <div id="f92-steps" style="display: show">
                                    <h2 class="mb-2 f92-text-left f92-color-blue">How to start using Zelle<sup>&reg;</sup></h2>
                                    <ol class="zelle-steps">
                                        <li>Enroll or log in to Bill Pay</li>
                                        <li>Select <strong>"Send Money with Zelle<sup>&reg;</sup>"</strong></li>
                                        <li>Accept Terms and Conditions</li>
                                        <li>Select your U.S. mobile number or email address and deposit account</li>
                                    </ol>
                                </div>
                                <div>
                                    <p class="f92-lead f92-leading-tight f92-text-left">That's it! You're ready to start sending and receiving money with
                                        Zelle<sup>®</sup>.</p>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- ^^^^^^^^^^^^^^^^^^^^^^^^ -->
                    <!-- END ENROLL STEPS SECTION -->
                    <!-- vvvvvvvvvvvvvvvvvvvvvvvv -->

                    <!-- ^^^^^^^^^^^^^^^^^^^ -->
                    <!-- START ICON SECTION -->
                    <!-- vvvvvvvvvvvvvvvvvvv -->
                    <!-- Update to f92-show-free for IM -->
                    <section class="f92-icons f92-show-free">
                        <div class="border-top-bottom py-5" style="margin-bottom: 72px">
                            <div class="row ">
                                <div class="col-12 f92-text-center">
                                    <h3 class="mb-5 color-slate f92-bold">Using Zelle<sup>®</sup> is:</h3>
                                </div>
                            </div>
                            <div class="row f92-text-center">
                                <div class="col-12 col-md-4 mb-5 mb-md-0 text-center">
                                    <svg class="mx-auto" width="125px" version="1.1" id="Layer_1" xmlns:x="&ns_extend;" xmlns:i="&ns_ai;" xmlns:graph="&ns_graphs;" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 125 125" style="enable-background:new 0 0 125 125;" xml:space="preserve">
                                        <switch>
                                            <g i:extraneous="self">
                                                <path d="M92.1,28.39l0.85,0.31l0.1,0.01l0.01,0.03l0.07,0.03c0.28,0.27,0.43,0.63,0.45,0.99l-0.08,0.23l0.06,0.17L78.12,93.28
		                          c-0.34,1.36-1.34,2.5-2.64,3.01c-0.51,0.2-1.05,0.31-1.62,0.31c-0.82,0-1.62-0.23-2.33-0.65l-13.3-8.22l-8.02,8.02
		                          c-0.57,0.57-1.31,0.85-2.07,0.85c-0.37,0-0.74-0.09-1.11-0.23c-1.05-0.43-1.76-1.48-1.76-2.64v-14L27.44,68.73
		                          c-1.34-0.8-2.13-2.27-2.08-3.84c0.06-1.56,0.97-2.98,2.39-3.67l63.76-32.66l0.18,0.02L92.1,28.39z M85.69,34.71L29.03,63.72
		                          c-0.48,0.26-0.8,0.74-0.82,1.28c-0.03,0.54,0.26,1.05,0.71,1.31l17.51,10.82L85.69,34.71z M89.46,34.84L48.9,78.65l24.11,14.89
		                          c0.43,0.26,0.97,0.31,1.42,0.11c0.45-0.17,0.8-0.57,0.91-1.05L89.46,34.84z M48.11,81.49v12.22l7.62-7.52L48.11,81.49z" />
                                                <path d="M62.5,125C28.04,125,0,96.96,0,62.5C0,28.04,28.04,0,62.5,0C96.96,0,125,28.04,125,62.5C125,96.96,96.96,125,62.5,125z
		                          M62.5,2.82C29.59,2.82,2.82,29.59,2.82,62.5s26.77,59.68,59.68,59.68c32.91,0,59.68-26.77,59.68-59.68S95.41,2.82,62.5,2.82z" />
                                            </g>
                                        </switch>
                                    </svg>

                                    <h3 class="f92-icons--h3 f92-color-blue mb-4">FAST</h3>

                                    <div class="f92-lead f92-leading-tight color-slate">Send money directly<br class="d-none d-lg-block color-slate">
                                        from your account to<br class="d-none d-lg-block color-slate">
                                        theirs, typically in minutes<sup>3</sup></div>
                                </div>
                                <div class="col-12 col-md-4 mb-5 mb-md-0">
                                    <svg class="mx-auto" width="125px" version="1.1" xmlns:x="&ns_extend;" xmlns:i="&ns_ai;" xmlns:graph="&ns_graphs;" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 125 125" style="enable-background:new 0 0 125 125;" xml:space="preserve">
                                        <switch>
                                            <g i:extraneous="self">
                                                <g id="Lock">
                                                    <path d="M62.38,69.8c-0.81,0-1.36,0.54-1.36,1.36c0,0.81,0.54,1.36,1.36,1.36c0.81,0,1.36-0.54,1.36-1.36 C63.73,70.61,63.19,69.8,62.38,69.8z M62.38,75.23c-2.17,0-4.07-1.9-4.07-4.07c0-2.17,1.9-4.07,4.07-4.07 c2.17,0,4.07,1.9,4.07,4.07C66.45,73.6,64.55,75.23,62.38,75.23z" />
                                                    <path d="M62.38,84.39c-0.61,0-1.02-0.56-1.02-1.4v-8.4c0-0.84,0.41-1.4,1.02-1.4c0.61,0,1.02,0.56,1.02,1.4v8.4 C63.39,83.83,62.99,84.39,62.38,84.39z" />
                                                    <path d="M41.14,57.63c-0.84,0-1.41,0.55-1.41,1.38v33.45c0,0.83,0.56,1.38,1.41,1.38h42.45c0.84,0,1.41-0.55,1.41-1.38V59.01 c0-0.83-0.56-1.38-1.41-1.38H41.14z M83.87,96.61H41.14c-2.25,0-4.22-1.94-4.22-4.15V59.01c0-2.21,1.97-4.15,4.22-4.15h42.45 c2.25,0,4.22,1.94,4.22,4.15v33.45C88.08,94.67,86.12,96.61,83.87,96.61z" />
                                                    <path d="M47.9,54.08h28.66v-8.47c0-7.9-6.53-14.4-14.47-14.4c-7.95,0-14.19,6.49-14.19,14.4V54.08z M77.98,56.9h-31.5 c-0.57,0-1.42-0.56-1.42-1.41v-9.88c0-9.6,7.66-17.22,17.31-17.22c9.36,0,17.31,7.62,17.31,17.22v9.88 C79.4,56.34,78.83,56.9,77.98,56.9z" />
                                                </g>
                                                <g id="Circle">
                                                    <path d="M62.5,125C28.04,125,0,96.96,0,62.5C0,28.04,28.04,0,62.5,0C96.96,0,125,28.04,125,62.5C125,96.96,96.96,125,62.5,125z M62.5,2.82C29.59,2.82,2.82,29.59,2.82,62.5s26.77,59.68,59.68,59.68c32.91,0,59.68-26.77,59.68-59.68S95.41,2.82,62.5,2.82z" />
                                                </g>
                                            </g>
                                        </switch>
                                    </svg>

                                    <h3 class="f92-icons--h3 f92-color-blue mb-4">SAFE</h3>

                                    <div class="f92-lead f92-leading-tight color-slate">Send and receive
                                        <br class="d-none d-lg-block">
                                        money with Zelle<sup>®</sup>
                                        <br class="d-none d-lg-block">
                                        right from Bill Pay online or
                                        <br class="d-none d-lg-block">
                                        our mobile banking app<sup>2</sup>
                                    </div>
                                </div>

                                <div class="col-12 col-md-4">
                                    <svg class="mx-auto" width="125px" version="1.1" xmlns:x="&ns_extend;" xmlns:i="&ns_ai;" xmlns:graph="&ns_graphs;" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 125 125" style="enable-background:new 0 0 125 125;" xml:space="preserve">
                                        <switch>
                                            <g i:extraneous="self">
                                                <g id="ThumbsUp">
                                                    <path class="st0" d="M95.49,58.74c0-3.02-2.6-5.66-5.57-5.66H70.23c1.11-3.39,2.97-9.43,1.86-13.58
		                      c-1.49-5.66-4.46-7.17-7.06-6.79c-2.23,0.38-4.09,2.64-3.71,5.28c0,9.66-9,20.25-14.81,22v-2.8c0-0.76-0.76-1.53-1.51-1.53H31.02
		                      c-0.76,0-1.51,0.76-1.51,1.53v33.95c0,0.76,0.76,1.53,1.51,1.53H45c0.76,0,1.51-0.76,1.51-1.53v-3.85
		                      c2.45,0.4,4.48,0.94,6.26,1.24c3.71,0.75,6.31,1.13,11.14,1.13h17.83c3.71,0,5.57-1.51,5.2-4.15c0-1.13-0.37-2.26-0.74-3.02
		                      c1.11-0.75,2.23-1.51,2.97-2.64c1.11-1.89,1.11-3.77,0-5.66c0-0.38,0-0.38,0-0.38c2.23-0.75,3.71-3.02,3.71-5.28
		                      c0-1.13-0.37-2.26-1.11-3.02C94,64.02,95.49,61,95.49,58.74z M43.49,89.61H32.53v-30.9h10.96v3.04v23.76V89.61z M89.92,62.89
		                      h-2.6c-0.74,0-1.49,0.75-1.49,1.51c0,0.75,0.74,1.51,1.49,1.51c1.49,0,2.23,1.13,2.23,2.64c0,1.51-1.11,2.64-2.6,2.64h-2.6
		                      c-0.74,0-1.49,0.75-1.49,1.51s0.74,1.51,1.49,1.51c0.74,0,1.86,0.75,2.23,1.51c0.37,0.75,0.37,1.89,0,2.64
		                      c-0.37,1.13-1.11,1.51-2.23,1.51h-2.6c-0.74,0-1.49,0.75-1.49,1.51c0,0.75,0.74,1.51,1.49,1.51c1.49,0,2.6,1.13,2.6,2.64
		                      c0,0.38,0,1.13-2.6,1.13H63.92c-4.83,0-7.43-0.38-10.77-1.13c-1.77-0.72-3.88-1.09-6.63-1.45V63.25
		                      C53.94,61.69,64.29,48.91,64.29,38c0-1.13,0.74-2.26,1.49-2.26c1.11-0.38,2.6,1.13,3.71,4.53c0.74,3.77-1.86,11.31-2.97,13.95
		                      c0,0.38,0,0.75,0.37,1.13c0,0.38,0.74,0.75,1.11,0.75h21.91c1.49,0,2.6,1.13,2.6,2.64C92.52,60.62,91.03,62.89,89.92,62.89z" />
                                                    <path class="st0" d="M39.01,83.99c-0.42,0-0.83,0.33-0.83,0.67c0,0.67,1.51,0.77,1.72,0.13C40.06,84.3,39.64,83.99,39.01,83.99z
		                        M39.01,86.66c-1.25,0-2.5-1-2.5-2c0-1,1.25-2,2.5-2c1.25,0,2.5,1,2.5,2C41.51,85.66,40.68,86.66,39.01,86.66z" />
                                                </g>
                                                <g id="Circle">
                                                    <path d="M62.5,125C28.04,125,0,96.96,0,62.5C0,28.04,28.04,0,62.5,0C96.96,0,125,28.04,125,62.5C125,96.96,96.96,125,62.5,125z
		                        M62.5,2.82C29.59,2.82,2.82,29.59,2.82,62.5s26.77,59.68,59.68,59.68c32.91,0,59.68-26.77,59.68-59.68S95.41,2.82,62.5,2.82z" />
                                                </g>
                                            </g>
                                        </switch>
                                    </svg>

                                    <div class="f92-icons-text f92-free">
                                        <h3 class="f92-icons--h3 f92-color-blue mb-4">FREE</h3>
                                        <p class="f92-lead f92-leading-tight"> There are no fees to <br class="d-none d-lg-block ">
                                            send money with Zelle<sup>®</sup><br class="d-none d-lg-block">
                                            from our online or <br class="d-none d-lg-block">mobile banking app<sup>1</sup>
                                        </p>
                                    </div>

                                    <div class="f92-icons-text f92-easy">
                                        <h3 class="f92-icons--h3 f92-color-blue mb-4">EASY</h3>
                                        <p class="f92-lead f92-leading-tight">Send money using just their U.S. mobile number or email address</p>
                                    </div>

                                </div>
                            </div>
                    </section>
                    <!-- ^^^^^^^^^^^^^^^^^^^ -->
                    <!-- END ICON SECTION -->
                    <!-- vvvvvvvvvvvvvvvvvvv -->

                    <!-- ^^^^^^^^^^^^^^^^^^^ -->
                    <!-- START VIDEO SECTION -->
                    <!-- vvvvvvvvvvvvvvvvvvv -->
                    <div class="f92-show">
                        <div class="row">
                            <div class="col-12 f92-text-center f92-content mb-5">
                                <h3 class="f92-video--h3 mb-3">Watch the video to learn more about Zelle<sup>&#174;</sup>!</h3>
                                <video class="mx-auto mt-20" controls width="800" height="450" poster="https://images.printable.com/imagelibrary/Seller/3346/ZelleLandingPage_05152019134834_259/images/src/VideoThumb_LP_1068x600_ZelleLineArtAnim.jpg">
                                    <source src="https://www.learnaboutmoneymovement.com/videos/Zelle_Animation.mp4" type="video/mp4" />
                                </video>
                            </div>
                        </div>
                    </div>
                    <!-- ^^^^^^^^^^^^^^^^^^^ -->
                    <!-- END VIDEO SECTION -->
                    <!-- vvvvvvvvvvvvvvvvvvv -->

                    <!-- ^^^^^^^^^^^^^^^^^^^ -->
                    <!-- START FAQ SECTION -->
                    <!-- vvvvvvvvvvvvvvvvvvv -->
                    <div class="f92-faqs">
                        <div class="row">
                            <div class="col-12 f92-text-left">
                                <h2 class="mb-4 f92-faq--h2">Frequently Asked Questions</h2>
                                <div class="mb-2"> &nbsp;</div>

                                <div class="f92-accordion-group">

                                    <div class="f92-accordion-item">
                                        <div class="f92-faq f92-item-heading f92-active-accordion">
                                            <h3 class="f92-faq--h3">What is ZELLE<sup>®</sup>?</h3>
                                        </div>
                                        <div class="f92-item-text" style="display: block;">
                                            <p class="faq--p">Zelle<sup>®</sup> is a fast, safe and easy way to send money directly between almost any bank accounts in the U.S., typically within minutes.<sup>3</sup> With just an email address or U.S. mobile phone number, you can send money to people you trust, regardless of where they bank.<sup>2</sup></p>
                                        </div>
                                    </div>

                                    <div class="f92-accordion-item">
                                        <div class="f92-faq f92-item-heading">
                                            <h3 class="f92-faq--h3">Who can I send money to with ZELLE<sup>®</sup>?</h3>
                                        </div>
                                        <div class="f92-item-text">
                                            <p>You can send money to friends, family and others you trust.<sup>2</sup></p>
                                            <p>Since money is sent directly from your bank account to another person's bank account within minutes,<sup>3</sup> it's important to only send money to people you trust, and always ensure you've used the correct email address or U.S. mobile number.</p>
                                        </div>
                                    </div>

                                    <div class="f92-accordion-item">
                                        <div class="f92-faq f92-item-heading">
                                            <h3 class="f92-faq--h3">HOW DO I ENROLL IN AND USE ZELLE<sup>®</sup>?</h3>
                                        </div>
                                        <div class="f92-item-text">
                                            <p>To get started, log in to TruMark Financial's online banking or mobile app and navigate to the "Send Money with Zelle<sup>®</sup>" tab. To enroll, accept terms and conditions, tell us your email address or U.S. mobile number and deposit account, and then you will receive a one-time verification code, enter it and you're ready to start sending and receiving with Zelle<sup>®</sup>.</p>
                                            <p>To send money using Zelle<sup>®</sup>, simply add a trusted recipient's email address or U.S. mobile phone number, enter the amount you'd like to send and an optional note, review, then hit "Send." In most cases, the money is available to your recipient in minutes.<sup>3</sup></p>
                                            <p>To request money using Zelle<sup>®</sup>, choose "Request," select the individual(s) from whom you'd like to request money, enter the amount you'd like to request, include an optional note, review and hit "Request".<sup>4</sup></p>
                                            <p>To receive money, just share your enrolled email address or U.S. mobile phone number with a friend and ask them to send you money with Zelle<sup>®</sup>.
                                            </p>
                                        </div>
                                    </div>

                                    <!-- ^^^^^^^^^^^^^^^^^^^^ -->
                                    <!-- START accordion MORE -->
                                    <!-- vvvvvvvvvvvvvvvvvvvv -->
                                    <div class="f92-accordion-more" style="display: none;">

                                        <div class="f92-accordion-item">
                                            <div class="f92-faq f92-item-heading">
                                                <h3 class="f92-faq--h3">Someone sent me money with Zelle<sup>®</sup>, how do I receive it?</h3>
                                            </div>
                                            <div class="f92-item-text">
                                                <p>If you have already enrolled with Zelle<sup>®</sup>, you do not need to take any further action. The money will be sent directly into your bank account and will be available typically within minutes.<sup>3</sup></p>
                                                <p>If you have not yet enrolled with Zelle<sup>®</sup>, follow these steps:<br>
                                                <ol>
                                                    <li>Click on the link provided in the payment notification you received via email or text message.</li>
                                                    <li>Select TruMark Financial.</li>
                                                    <li>Follow the instructions provided on the page to enroll and receive your payment. Pay attention to the email address or U.S. mobile number where you received the payment notification - you should enroll with Zelle<sup>®</sup> using that email address or U.S. mobile number where you received the notification to ensure you receive your money.</li>
                                                </ol>
                                                </p>
                                            </div>
                                        </div>

                                        <div class="f92-accordion-item">
                                            <div class="f92-faq f92-item-heading">
                                                <h3 class="f92-faq--h3">What types of payments can I make with Zelle<sup>®</sup>?</h3>
                                            </div>
                                            <div class="f92-item-text">
                                                <p>Zelle<sup>®</sup> is a great way to send money to family, friends and people you are familiar with such as your personal trainer, babysitter or neighbor.<sup>2</sup></p>
                                                <p>Since money is sent directly from your bank account to another person's bank account within minutes,<sup>3</sup> Zelle<sup>®</sup> should only be used to send money to friends, family and others you trust.</p>
                                                <p>Neither TruMark Financial nor Zelle<sup>®</sup> offers a protection program for any authorized payments made with Zelle<sup>®</sup> â€“ for example, if you do not receive the item you paid for or the item is not as described or as you expected.</p>
                                            </div>
                                        </div>

                                        <div class="f92-accordion-item">
                                            <div class="f92-faq f92-item-heading">
                                                <h3 class="f92-faq--h3">How do I get started?</h3>
                                            </div>
                                            <div class="f92-item-text">
                                                <p>It's easy â€” Zelle<sup>®</sup> is already available within TruMark Financial's mobile banking app and online banking within Bill Pay! Check our app or sign in online and follow a few simple steps to enroll with Zelle<sup>®</sup> today.</p>
                                            </div>
                                        </div>

                                        <div class="f92-accordion-item">
                                            <div class="f92-faq f92-item-heading">
                                                <h3 class="f92-faq--h3">What if I want to send money to someone whose financial institution doesn't offer Zelle<sup>®</sup>?</h3>
                                            </div>
                                            <div class="f92-item-text">
                                                <p>You can find a full list of participating banks and credit unions live with Zelle<sup>®</sup> <a class="underline" href="https://www.zellepay.com/participating-banks-and-credit-unions">here</a>.
                                                </p>
                                                <p>If your recipient's financial institution isn't on the list, don't worry! The list of participating financial institutions is always growing, and your recipient can still use Zelle<sup>®</sup> by downloading the Zelle<sup>®</sup> app for Android and iOS.</p>
                                                <p>To enroll with the Zelle<sup>®</sup> app, your recipient will enter their basic contact information, an email address and U.S. mobile number and a Visa<sup>®</sup> or Mastercard<sup>®</sup> debit card with a U.S.-based account (does not include U.S. territories). Zelle<sup>®</sup> does not accept debit cards associated with international deposit accounts or any credit cards.</p>
                                            </div>
                                        </div>

                                        <div class="f92-accordion-item">
                                            <div class="f92-faq f92-item-heading">
                                                <h3 class="f92-faq--h3">How does Zelle<sup>®</sup> work?</h3>
                                            </div>
                                            <div class="f92-item-text">
                                                <p>When you enroll with Zelle<sup>®</sup> through your online banking Bill Pay account or mobile banking app, your name, the name of your Financial Institution, and the email address or U.S. mobile number you enrolled is shared with Zelle<sup>®</sup> (no sensitive account details are shared â€“ those stay with TruMark Financial).</p>
                                                <p>When someone sends money to your enrolled email address or U.S. mobile number, Zelle<sup>®</sup> looks up the email address or mobile number in its "directory" and notifies TruMark Financial of the incoming payment. TruMark Financial then directs the payment into your bank account, all while keeping your sensitive account details private.</p>
                                            </div>
                                        </div>

                                        <div class="f92-accordion-item">
                                            <div class="f92-faq f92-item-heading">
                                                <h3 class="f92-faq--h3">Can I use Zelle<sup>®</sup> internationally?</h3>
                                            </div>
                                            <div class="f92-item-text">
                                                <p>In order to use Zelle<sup>®</sup>, the sender's and recipient's bank accounts must be based in the U.S.</p>
                                            </div>
                                        </div>

                                        <div class="f92-accordion-item">
                                            <div class="f92-faq f92-item-heading">
                                                <h3 class="f92-faq--h3">Can I cancel a payment?</h3>
                                            </div>
                                            <div class="f92-item-text">
                                                <p>You can only cancel a payment if the person you sent money to hasn't yet enrolled with Zelle<sup>®</sup>. To check whether the payment is still pending because the recipient hasn't yet enrolled, you can go to your activity page, choose the payment you want to cancel, and then select "Cancel This Payment."</p>
                                                <p>If the person you sent money to has already enrolled with Zelle<sup>®</sup>, the money is sent directly to their bank account and cannot be canceled. This is why it's important to only send money to people you trust, and always ensure you've used the correct email address or U.S. mobile number when sending money.</p>
                                                <p>If you sent money to the wrong person, we recommend contacting the recipient and requesting the money back. If you aren't able to get your money back, please call our customer service team at 1-877-TRUMARK so we can help you.</p>
                                                <p>Scheduled or recurring payments sent directly to your recipient's account number (instead of an email address or mobile number) are made available by TruMark Financial but are a separate service from Zelle<sup>®</sup> and can take one to three business days to process.</p>
                                                <p>You can cancel a payment that is scheduled in advance if the money has not already been deducted from your account.</p>
                                            </div>
                                        </div>

                                        <div class="f92-accordion-item">
                                            <div class="f92-faq f92-item-heading">
                                                <h3 class="f92-faq--h3">How long does it take to receive money with Zelle<sup>®</sup>?</h3>
                                            </div>
                                            <div class="f92-item-text">
                                                <p>Money sent with Zelle<sup>®</sup> is typically available to an enrolled recipient within minutes.<sup>3</sup></p>
                                                <p>If you send money to someone who isn't enrolled with Zelle<sup>®</sup>, they will receive a notification prompting them to enroll. After enrollment, the money will be available directly in your recipient's account, typically within minutes.<sup>3</sup></p>
                                                <p>If your payment is pending, we recommend confirming that the person you sent money to has enrolled with Zelle<sup>®</sup> and that you entered the correct email address or U.S. mobile phone number.</p>
                                                <p>If you're waiting to receive money, you should check to see if you've received a payment notification via email or text message. If you haven't received a payment notification, we recommend following up with the sender to confirm they entered the correct email address or U.S. mobile phone number.</p>
                                                <p>Still having trouble? Please contact our customer support team at 1-877-TRUMARK.</p>
                                            </div>
                                        </div>

                                        <div class="f92-accordion-item">
                                            <div class="f92-faq f92-item-heading">
                                                <h3 class="f92-faq--h3">Will the person I send money to be notified?</h3>
                                            </div>
                                            <div class="f92-item-text">
                                                <p>Yes! They will receive a notification via email or text message.</p>
                                            </div>
                                        </div>

                                        <div class="f92-accordion-item">
                                            <div class="f92-faq f92-item-heading">
                                                <h3 class="f92-faq--h3">Is my information secure?</h3>
                                            </div>
                                            <div class="f92-item-text">
                                                <p>Keeping your money and information safe is a top priority for TruMark Financial. When you
                                                    use Zelle<sup>®</sup> within our mobile app or online banking, your information is
                                                    protected with the same technology we use to keep your bank account safe.</p>
                                            </div>
                                        </div>

                                        <div class="f92-accordion-item">
                                            <div class="f92-faq f92-item-heading">
                                                <h3 class="f92-faq--h3">I'm unsure about using Zelle<sup>®</sup> to pay someone I don't know. What should I do?</h3>
                                            </div>
                                            <div class="f92-item-text">
                                                <p>If you don't know the person, or aren't sure you will get what you paid for (for
                                                    example, items bought from an online bidding or sales site), you should not use
                                                    Zelle<sup>®</sup> for these types of transactions.</p>
                                                <p>These transactions are potentially high risk (just like sending cash to a person you
                                                    don't know is high risk). Neither TruMark Financial nor Zelle<sup>®</sup> offers a protection
                                                    program for any authorized payments made with Zelle<sup>®</sup> â€“ for example, if you do
                                                    not receive the item you paid for or the item is not as described or as you
                                                    expected.</p>
                                            </div>
                                        </div>

                                        <div class="f92-accordion-item">
                                            <div class="f92-faq f92-item-heading">
                                                <h3 class="f92-faq--h3">What if I get an error message when I try to enroll an email address or U.S. mobile number?</h3>
                                            </div>
                                            <div class="f92-item-text">
                                                <p>Your email address or U.S. mobile phone number may already be enrolled with Zelle<sup>®</sup> at another bank or credit union. Call our customer support team at 1-877-TRUMARK and ask them to move your email address or U.S. mobile phone number to your financial institution so you can use it for Zelle<sup>®</sup>.</p>
                                                <p>Once customer support moves your email address or U.S. mobile phone number, it will be connected to your bank account so you can start sending and receiving money with Zelle<sup>®</sup> through your TruMark Financial banking app and online banking. Please call our customer support team at 1-877-TRUMARK for help.</p>
                                            </div>
                                        </div>
                                        <!-- ^^^^^^^^^^^^^^^^^^^^ -->
                                        <!-- END accordion MORE -->
                                        <!-- vvvvvvvvvvvvvvvvvvvv -->
                                    </div>


                                    <div class="f92-accordion-view-more">
                                        <div class="f92-view-button" role="button">
                                            <span class="f92-more">View&nbsp;More</span>
                                            <span class="f92-less">View&nbsp;Less</span>
                                            <div class="f92-cross">&nbsp;</div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- ^^^^^^^^^^^^^^^^^^^ -->
                    <!-- END FAQ SECTION -->
                    <!-- vvvvvvvvvvvvvvvvvvv -->

                    <!-- ^^^^^^^^^^^^^^^^^^^ -->
                    <!-- START APP SECTION -->
                    <!-- vvvvvvvvvvvvvvvvvvv -->
                    <div id="mobileApps" class=" bg-ash mobile-apps mb-4">
                        <div class="row">
                            <div class="col-12 f92-text-center">
                                <h4 class="mb-4 color-slate">Don't have our mobile&nbsp;app? <br>
                                    <span class="f92-bold f92-color-blue">Download it for&nbsp;free:</span>
                                </h4>
                                <!-- START CUSTOMIZABLE MOBILE APP DOWNLOAD LINKS -->
                                <a id="appStore" class="mx-2 f92-show" href="" target="_blank"> <img alt="App Store" src="https://images.printable.com/imagelibrary/Seller/3346/ZelleLandingPage_05152019134834_259/images/src/app-store.png"></a>
                                <div class="vs-16 d-md-none"> </div>
                                <a id="googlePlay" class="mx-2 f92-show" href="" target="_blank"> <img alt="Google Play" src="https://images.printable.com/imagelibrary/Seller/3346/ZelleLandingPage_05152019134834_259/images/src/google-play.png"></a>
                                <!-- END CUSTOMIZABLE MOBILE APP DOWNLOAD LINKS -->
                            </div>
                        </div>
                    </div>
                    <!-- ^^^^^^^^^^^^^^^^^^^ -->
                    <!-- END APP SECTION -->
                    <!-- vvvvvvvvvvvvvvvvvvv -->

                    <!-- ^^^^^^^^^^^^^^^^^^^ -->
                    <!-- START LEGAL SECTION -->
                    <!-- vvvvvvvvvvvvvvvvvvv -->
                    <div class=" legal color-slate mb-50">
                        <div class="row">
                            <div class="col-12 f92-text-center" style="text-align: left !important">
                                <!-- START CUSTOMIZABLE DISCLAIMERS -->
                                <p><sup>1</sup> Mobile network carrier fees may apply.</p>
                                <p><sup>2</sup> Must have a bank account in the U.S. to use Zelle<sup>&reg;</sup>.</p>
                                <p><sup>3</sup> Transactions typically occur in minutes when the recipient's email address or U.S. mobile
                                    number is already enrolled with Zelle<sup>&reg;</sup>.</p>
                                <p><sup>4</sup> In order to send payment requests or split payment requests to a U.S. mobile number, the
                                    mobile number must already be enrolled with Zelle<sup>&reg;</sup>.</p>
                                <br>
                                <p>Copyright &copy; 2022 TruMark Financial. All rights reserved. Terms and conditions apply. Zelle and the
                                    Zelle related marks are wholly owned by Early Warning Services, LLC and are used herein under license.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/#f92-wrapper-inner-->
            </div>
            <!--/#f92-wrapper-->
            <!-- ^^^^^^^^^^^^^^^^^^^ -->
            <!-- END LEGAL SECTION -->
            <!-- vvvvvvvvvvvvvvvvvvv -->
            <script>
                // accordion FUNCTIONS
                var $j = jQuery.noConflict();

                $j(document).ready(function($j) {
                    $j(function() {
                        // Inner accordion
                        $j('.f92-item-heading').on('click', function() {
                            if ($j(this).hasClass('f92-active-accordion')) {
                                $j(this).siblings('.f92-item-text').slideToggle();
                                $j(this).removeClass('f92-active-accordion');
                            } else {
                                $j(this).closest('.f92-accordion-group').find('.f92-active-accordion').removeClass(
                                    'f92-active-accordion').siblings('.f92-item-text').slideUp();

                                $j(this).addClass('f92-active-accordion').siblings('.f92-item-text').slideDown();
                            }
                        })

                        //Outer accordion
                        $j('.f92-accordion-view-more').on('click', function() {
                            if ($j(this).hasClass('f92-more-active')) {
                                $j(this).removeClass('f92-more-active').siblings('.f92-accordion-more').slideUp();
                            } else {
                                $j(this).addClass('f92-more-active').siblings('.f92-accordion-more').slideDown();
                            }
                        });

                    });
                });
            </script>
        </main>
    </div>
</div>
<?php
get_footer();
