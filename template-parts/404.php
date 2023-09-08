<?php

$image = get_field('mainstage_image', 'option');
$ms_headline = get_field('404_mainstage_headline', 'option');
$ms_content = get_field('404_mainstage_text', 'option');

$headline = get_field('404_body_section_headline', 'option');
$content = get_field('404_body_section_content', 'option');; ?>

<main>

    <div class="is-mainstage-php mainstage mainstage--no-dots" data-count="1">


        <div class="mainstage-slide">
            <div class="mainstage-slide__wrapper">

                <div class="mainstage-slide__left">
                    <div class="mainstage-slide__left-inner">
                        <div class="mainstage-slide__headline"><?php echo $ms_headline; ?></div>
                        <div class="mainstage-slide__content"><?php echo $ms_content; ?></div>
                    </div>
                </div>
                <div class="mainstage-slide__right">
                    <?php echo wp_get_attachment_image($image, 'mainstage', null, array('class' => 'mainstage-slide__image')); ?>
                </div>
            </div>
        </div>
    </div>

    <div class="entry-content ">
        <div class="error-404">
            <div class="container-xxl">
                <div class="error-404__grid">
                    <div class="error-404__col-one">
                        <h3><?php echo $headline; ?></h3>
                        <div class="error-404__content acf-wysiwyg">
                            <?php echo $content; ?>
                        </div>
                    </div>
                    <div class="error-404__col-two">
                        <h3>
                            Use our search tool:
                        </h3>

                        <form class="" role="search" method="get" action="<?php echo home_url('/'); ?>">
                            <label for="s" class="">Enter a term in the search box to look for information.</label>
                            <input placeholder="Search..." type="search" id="s" name="s" value="" class="">
                            <button type="submit" id="s">


                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                                    <g clip-path="url(#clip0_673_41374)">
                                        <path d="M23.6719 21.2516L18.9984 16.5781C18.7875 16.3672 18.5016 16.25 18.2016 16.25H17.4375C18.7313 14.5953 19.5 12.5141 19.5 10.25C19.5 4.86406 15.1359 0.5 9.75 0.5C4.36406 0.5 0 4.86406 0 10.25C0 15.6359 4.36406 20 9.75 20C12.0141 20 14.0953 19.2313 15.75 17.9375V18.7016C15.75 19.0016 15.8672 19.2875 16.0781 19.4984L20.7516 24.1719C21.1922 24.6125 21.9047 24.6125 22.3406 24.1719L23.6672 22.8453C24.1078 22.4047 24.1078 21.6922 23.6719 21.2516ZM9.75 16.25C6.43594 16.25 3.75 13.5688 3.75 10.25C3.75 6.93594 6.43125 4.25 9.75 4.25C13.0641 4.25 15.75 6.93125 15.75 10.25C15.75 13.5641 13.0688 16.25 9.75 16.25Z" fill="#15636E" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_673_41374">
                                            <rect width="24" height="24" fill="white" transform="translate(0 0.5)" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</main>