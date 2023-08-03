<?php if (have_rows('mainstage_slides')) :

    $count = count(get_field('mainstage_slides'));
?>
    <div class="is-mainstage-php mainstage<?php echo $count < 2 ? ' mainstage--no-dots' : ''; ?>" data-count="<?php echo $count; ?>">
        <?php while (have_rows('mainstage_slides')) : the_row();
            $headline = get_sub_field('headline');
            $content = get_sub_field('content');
            $imageID = get_sub_field('image');
            $image = wp_get_attachment_image($imageID, 'mainstage', false, false);
            $link = get_sub_field('link');
            $media = get_sub_field('media_file');
            $video_source_url = get_sub_field('video_source_url');
            $play_icon = '<svg width="136" height="136" viewBox="0 0 136 136" fill="none" xmlns="http://www.w3.org/2000/svg"> <g id="play-circle" opacity="0.65" clip-path="url(#clip0_528_40803)"> <g id="Vector" filter="url(#filter0_d_528_40803)"> <path d="M68 2.125C31.6094 2.125 2.125 31.6094 2.125 68C2.125 104.391 31.6094 133.875 68 133.875C104.391 133.875 133.875 104.391 133.875 68C133.875 31.6094 104.391 2.125 68 2.125ZM98.7328 74.375L51.9828 101.203C47.7859 103.541 42.5 100.539 42.5 95.625V40.375C42.5 35.4875 47.7594 32.4594 51.9828 34.7969L98.7328 63.2188C103.089 65.6625 103.089 71.9578 98.7328 74.375Z" fill="white"/> </g> </g> <defs> <filter id="filter0_d_528_40803" x="-5.875" y="-3.875" width="155.75" height="155.75" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"> <feFlood flood-opacity="0" result="BackgroundImageFix"/> <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/> <feOffset dx="4" dy="6"/> <feGaussianBlur stdDeviation="6"/> <feComposite in2="hardAlpha" operator="out"/> <feColorMatrix type="matrix" values="0 0 0 0 0.12549 0 0 0 0 0.12549 0 0 0 0 0.12549 0 0 0 0.15 0"/> <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_528_40803"/> <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_528_40803" result="shape"/> </filter> <clipPath id="clip0_528_40803"> <rect width="136" height="136" fill="white"/> </clipPath> </defs> </svg>';
        ?>
            <div class="mainstage-slide">
                <div class="mainstage-slide__wrapper">

                    <div class="mainstage-slide__left">
                        <div class="mainstage-slide__left-inner">
                            <?php echo $headline ? '<div class="mainstage-slide__headline">' . $headline . '</div>' : ''; ?>
                            <?php echo $content ? '<div class="mainstage-slide__content">' . $content . '</div>' : ''; ?>
                            <?php echo qntm_acf_link('a', 'mainstage-slide__link', $link, false, false); ?>

                        </div>
                    </div>
                    <div class="mainstage-slide__right">
                        <?php echo $image; ?>
                        <?php echo  $video_source_url || $media ? '<a class="mainstage-slide__play glightbox" href="' . $video_source_url . '">' . $play_icon . '</a>' : ''; ?>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
    </div>


<?php endif; ?>