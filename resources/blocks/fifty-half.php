<?php //var_dump($item);

$style = $item['style'];
$headline = $item['headline'];

if ($style === 'icon') {
    $icons = $item['icons'];
}

if ($style === 'link-list') {
    $linklist = $item['link_list'];
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

</div>