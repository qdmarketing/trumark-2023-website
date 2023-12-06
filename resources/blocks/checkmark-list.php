<?php

/**
 * Block Name: Checkmark List
 *
 *
 */

$blockName = str_replace('acf/', '', $block['name']);

$id = '';
$id = isset($block['anchor']) ? $block['anchor'] : $blockName . '-' . $block['id'];

$align_class = $block['align'] ? 'align' . $block['align'] : '';
$blockClass = '';
$blockClass = isset($block['className']) ? $block['className'] : '';


if (isset($args) && $args['prefix']) {
    $prefix = $args['prefix'];
} else {
    $prefix = '';
}




$headline = get_field($prefix . 'headline');

$content = get_field($prefix . 'content');

$layout = get_field($prefix . 'layout');

$background = get_field($prefix . 'background');
?>


<div id="<?php echo $id; ?>" class="<?php echo $blockClass; ?> <?php echo $blockName ?>-block acf-block <?php echo $align_class; ?> checkmark-list<?php echo $background ? ' checkmark-list--bg-offwhite' : ''; ?> <?php echo $layout ? 'checkmark-list--1col' : 'checkmark-list--3col' ?>">
    <div class="container-xxl">
        <div class="checkmark-list__top">
            <?php echo $headline ? '<h3 class="checkmark-list__headline">' . $headline . '</h3>' : ''; ?>
        </div>
        <div class="checkmark-list__grid <?php echo $layout ? 'checkmark-list__grid--1col' : 'checkmark-list__grid--3col' ?>">
            <?php if (have_rows('items')) : ?>
                <?php while (have_rows('items')) : the_row(); ?>
                <?php
                    $link = get_sub_field('link');
                    $title = get_sub_field('title');

                    if ($link) :
                        $title = qntm_acf_link('a', '', $link, false, $title);
                    // $title = '<a href="' . $link . '">' . $title . '</a>';
                    endif;
                    $description = get_sub_field('content');
                    $svg =  '<svg xmlns="http://www.w3.org/2000/svg" width="33" height="24" viewBox="0 0 33 24" fill="none"> <path d="M10.9311 23.5286L0.471304 13.0688C-0.157101 12.4404 -0.157101 11.4215 0.471304 10.7931L2.747 8.51731C3.37541 7.88884 4.39436 7.88884 5.02277 8.51731L12.069 15.5635L27.1612 0.471304C27.7896 -0.157101 28.8086 -0.157101 29.437 0.471304L31.7127 2.74707C32.3411 3.37547 32.3411 4.39436 31.7127 5.02283L13.2069 23.5287C12.5784 24.1571 11.5595 24.1571 10.9311 23.5286Z"/> </svg>';
                    $class = 'checkmark-list__title';
                    if (!$description) {
                        $class .= ' checkmark-list__title--no-description';
                    }

                    if ($title) :
                        echo '<div class="' . $class . '">' . $svg . $title . '</div>';
                    elseif ($description) :
                        echo '<div class="checkmark-list__title checkmark-list__title--no-description">' . $svg . $description . '</div>';

                    endif;

                    echo $title && $description ? '<div class="checkmark-list__description">' . $description . '</div>' : '';
                endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</div>