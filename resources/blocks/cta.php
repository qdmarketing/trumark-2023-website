<?php

/**
 * Block Name: CTA
 *
 *
 */

$blockName = str_replace('acf/', '', $block['name']);

$id = '';
$id = isset($block['anchor']) ? $block['anchor'] : $blockName . '-' . $block['id'];

$align_class = $block['align'] ? 'align' . $block['align'] : '';
$blockClass = '';
$blockClass = isset($block['className']) ? $block['className'] : '';

$headline = get_field('headline');
$content = get_field('content');

$link = get_field('link');
$background = get_field('background');

// Retrieve the values from ACF fields
$horizontal_position = get_field('horizontal_position'); // Values: 'Left', 'Center', 'Right', 'Percent'
$vertical_position = get_field('vertical_position'); // Values: 'Top', 'Center', 'Bottom', 'Percent'
$horizontal_percent = get_field('horizontal_percent'); // Range: 0 - 100
$vertical_percent = get_field('vertical_percent'); // Range: 0 - 100

// Initialize the inline CSS variable
$style = '';

// Check horizontal position
if ($horizontal_position === 'Percent') {
    $style .= "background-position-x: $horizontal_percent%; ";
} else {
    $horizontal_value = strtolower($horizontal_position);
    $style .= "background-position-x: $horizontal_value; ";
}

// Check vertical position
if ($vertical_position === 'Percent') {
    $style .= "background-position-y: $vertical_percent%; ";
} else {
    $vertical_value = strtolower($vertical_position);
    $style .= "background-position-y: $vertical_value; ";
}





if ($background) {
    $style .= "background-image: url(" . wp_get_attachment_image_url($background, 'full', false) . ");";
}


?>


<div id="<?php echo $id; ?>" class="<?php echo $blockClass; ?> <?php echo $blockName ?>-block acf-block <?php echo $align_class; ?> cta-block" style="<?php echo $style; ?>">
    <div class="container-xxl">
        <?php echo $headline ? '<h3 class="cta-block__headline">' . $headline . '</h3>' : ''; ?>
        <?php echo $content ? '<div class="cta-block__content">' . $content . '</div>' : ''; ?>
        <?php echo $link ? qntm_acf_link('a', 'cta-block__link', $link, false, false) : ''; ?>
    </div>
</div>