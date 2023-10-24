<?php //var_dump($item);

$style = $item['style'];
$headline = $item['headline'];

if ($style === 'icon') {
    $icons = $item['icons'];
}

if ($style === 'link-list') {
    $linklist = $item['link_list'];
}

if ($style === 'table') {
    $table = $item['table'];
}

if ($style === 'text') {

    $content = $item['content'];
}

if ($style === 'video' && $item['video_link'] && $item['video_thumbnail']) {
    $playicon =             '<svg width="136" height="136" viewBox="0 0 136 136" fill="none" xmlns="http://www.w3.org/2000/svg"> <g id="play-circle" opacity="0.65" clip-path="url(#clip0_528_40803)"> <g id="Vector" filter="url(#filter0_d_528_40803)"> <path d="M68 2.125C31.6094 2.125 2.125 31.6094 2.125 68C2.125 104.391 31.6094 133.875 68 133.875C104.391 133.875 133.875 104.391 133.875 68C133.875 31.6094 104.391 2.125 68 2.125ZM98.7328 74.375L51.9828 101.203C47.7859 103.541 42.5 100.539 42.5 95.625V40.375C42.5 35.4875 47.7594 32.4594 51.9828 34.7969L98.7328 63.2188C103.089 65.6625 103.089 71.9578 98.7328 74.375Z" fill="white"/> </g> </g> <defs> <filter id="filter0_d_528_40803" x="-5.875" y="-3.875" width="155.75" height="155.75" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"> <feFlood flood-opacity="0" result="BackgroundImageFix"/> <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/> <feOffset dx="4" dy="6"/> <feGaussianBlur stdDeviation="6"/> <feComposite in2="hardAlpha" operator="out"/> <feColorMatrix type="matrix" values="0 0 0 0 0.12549 0 0 0 0 0.12549 0 0 0 0 0.12549 0 0 0 0.15 0"/> <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_528_40803"/> <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_528_40803" result="shape"/> </filter> <clipPath id="clip0_528_40803"> <rect width="136" height="136" fill="white"/> </clipPath> </defs> </svg>';

    $playbutton = '<a class="fifty-item__video-play  glightbox noWarning" href="' . $item['video_link'] . '">' . $playicon . '</a>';
}

?>

<div class="fifty-item fifty-item--<?php echo $style; ?>">
    <?php echo $headline ? '<h3 class="fifty-item__headline">' . $headline . '</h3>' : ''; ?>
    <?php if ($style === 'icon' && $icons) : ?>
        <div class="fifty-item__icon-wrapper">
            <?php foreach ($icons as $icon) : ?>
                <div class="fifty-item__icon">
                    <? $image = wp_get_attachment_image($icon['image'], 'full', false, false);
                    echo qntm_acf_link('a', 'fifty-item__icon-link', $icon['link'], false, $image);
                    echo qntm_acf_link('a', 'fifty-item__icon-text', $icon['link'], false, false);
                    ?>
                </div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
    <?php if ($style === 'link-list' && $linklist) : ?>
        <ul class="fifty-item__link-list">
            <?php foreach ($linklist as $link) : ?>
                <li>
                    <?php echo qntm_acf_link('a', 'fifty-item__link', $link['link'], $link['fa_icon'], false); ?>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
    <?php if ($style === 'table' && $table) : ?>

        <?php echo renderTable($table, 'fifty-item__table'); ?>
    <?php endif; ?>
    <?php if ($style === 'text') : ?>
        <div class="fifty-item__content acf-wysiwyg">

            <?php echo $content; ?>
        </div>
    <?php endif; ?>
    <?php if ($style === 'video') : ?>
        <div class="fifty-item__video   ">

            <?php echo wp_get_attachment_image($item['video_thumbnail'], 'full', false, false); ?>
            <?php echo $playbutton; ?>
        </div>
    <?php endif; ?>

</div>