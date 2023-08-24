<?php

/**
 * Block Name: Accordion
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
$background = get_field('background');
$style = get_field('style');
?>


<div id="<?php echo $id; ?>" class="<?php echo $blockClass; ?> <?php echo $blockName ?>-block acf-block <?php echo $align_class; ?> accordion<?php echo $background ? ' accordion--bg-offwhite' : ''; ?><?php echo $style ? ' accordion--' . $style : ''; ?>">
    <div class="container-xxl">
        <div class="accordion__top">
            <?php echo $headline ? '<h3 class="accordion__headline">' . $headline . '</h3>' : ''; ?>
        </div>
        <div class="accordion__grid">
            <?php if (have_rows('items')) : ?>
                <?php while (have_rows('items')) : the_row(); ?>
                    <div class="accordion__item">

                        <?php
                        $title = get_sub_field('title');
                        $content = get_sub_field('content'); ?>
                        <a href="#" class="accordion__title">
                            <div class="accordion__title-text">
                                <?php echo $title; ?>
                            </div>
                            <div class="accordion__open-close">
                                <svg class="accordion__plus" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path d="M20.3077 9.92203H14.077V3.69126C14.077 2.92669 13.4569 2.30664 12.6924 2.30664H11.3077C10.5432 2.30664 9.92312 2.92669 9.92312 3.69126V9.92203H3.69235C2.92779 9.92203 2.30774 10.5421 2.30774 11.3066V12.6913C2.30774 13.4558 2.92779 14.0759 3.69235 14.0759H9.92312V20.3066C9.92312 21.0712 10.5432 21.6913 11.3077 21.6913H12.6924C13.4569 21.6913 14.077 21.0712 14.077 20.3066V14.0759H20.3077C21.0723 14.0759 21.6924 13.4558 21.6924 12.6913V11.3066C21.6924 10.5421 21.0723 9.92203 20.3077 9.92203Z" />
                                </svg>
                            </div>
                        </a>

                        <?php echo $content ? '<div class="accordion__content" style="display:none;">' . $content . '</div>' : '';
                        ?>

                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</div>