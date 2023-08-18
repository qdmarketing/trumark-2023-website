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

$headline = get_field('headline');
$link = get_field('link');

$content = get_field('content');

$background = get_field('background');
$image = get_field('image');
$items = get_field('items');

?>

<div id="<?php echo $id; ?>" class="<?php echo $blockClass; ?> <?php echo $blockName ?>-block acf-block <?php echo $align_class; ?> simple-table<?php echo $background ? ' simple-table--bg-offwhite' : ''; ?>">
    <div class="container-xxl">
        <?php echo $headline ? '<div class="simple-table__headline">' .  $headline . '</div>' : ''; ?>
        <div class="simple-table__grid">
            <?php if (have_rows('items')) : ?>
                <?php while (have_rows('items')) : the_row(); ?>
                    <?php
                    $title = get_sub_field('title');
                    $content = get_sub_field('content');
                    $link = get_sub_field('link');
                    $link_type = get_sub_field('link_type');
                    $icon = get_sub_field('icon');

                    $link_html = '';
                    if ($link && $link_type == 'button') {
                        $link_html = '<div class="simple-table__col3">' . qntm_acf_link('a', 'simple-table__button', $link, false, false) . '</div>';
                    }
                    if ($link && $link_type == 'icon') {
                        $link_html = '<div class="simple-table__col3">' .     qntm_acf_link('a', 'simple-table__link', $link, $icon, false) . '</div>';
                    }

                    ?>

                    <div class="simple-table__item simple-table__item--<?php echo $link_type; ?>">
                        <?php echo $title ? '<div class="simple-table__title">' .  $title . '</div>' : ''; ?>
                        <?php echo $content ? '<div class="simple-table__content">' .  $content . '</div>' : ''; ?>
                        <?php echo $link_html; ?>

                    </div>
                <?php endwhile; ?>

            <?php endif; ?>

        </div>



    </div>
</div>