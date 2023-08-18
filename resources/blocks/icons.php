<?php

/**
 * Block Name: Icons Block
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
$background = get_field('background');







?>


<div id="<?php echo $id; ?>" class="<?php echo $blockClass; ?> <?php echo $blockName ?>-block acf-block <?php echo $align_class; ?> icons-block<?php echo $background ? ' icons-block--bg-offwhite' : ''; ?>">
    <div class="container-xxl">
        <?php echo $headline ? '<h3 class="icons-block__headline">' . $headline . '</h3>' : ''; ?>
        <?php echo $content ? '<div class="icons-block__content">' . $content . '</div>' : ''; ?>

        <?php if (have_rows('images')) : ?>
            <div class="icons-block__grid">

                <?php while (have_rows('images')) : the_row(); ?>
                    <div class="icons-block__item">

                        <?php
                        $link = get_sub_field('link');
                        $alt = $link ?  $link['title'] : '';
                        $image = wp_get_attachment_image(get_sub_field('image'), 'full', false, array('class' => 'icons-block__image', 'alt' => $alt));


                        if ($link && $image) {
                            echo  qntm_acf_link('a', 'icons-block__link', $link, false, $image);
                        } else {
                            echo $image ? $image : '';
                        }


                        ?>
                    </div>

                <?php endwhile; ?>
            </div>
        <?php endif; ?>
    </div>
</div>