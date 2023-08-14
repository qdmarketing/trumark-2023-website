<?php

/**
 * Block Name: Comparison
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
$link = get_field('Link');
?>


<div id="<?php echo $id; ?>" class="<?php echo $blockClass; ?> <?php echo $blockName ?>-block acf-block <?php echo $align_class; ?> comparison<?php echo $background ? ' comparison--bg-offwhite' : ''; ?>">
    <div class="container-xxl">
        <div class="comparison__top">
            <?php echo $headline ? '<h3 class="comparison__headline">' . $headline . '</h3>' : ''; ?>
        </div>
        <div class="comparison__grid">
            <?php if (have_rows('items')) : ?>
                <?php while (have_rows('items')) : the_row(); ?>
                    <div class="comparison__item">
                        <div class="comparison__item-inner">

                            <?php
                            $title = get_sub_field('title');
                            $content = get_sub_field('content');
                            $attributes = get_sub_field('attributes');
                            ?>
                            <?php echo $title ? '<h3 class="comparison__title">' . $title . '</h3>' : ''; ?>
                            <?php echo $content ? '<div class="comparison__content">' . $content . '</div>' : ''; ?>
                            <?php echo $attributes ? '<div class="comparison__attributes">' . $attributes . '</div>' : ''; ?>
                        </div>
                        <div>
                            <a class="comparison__more-open--mobile">More Info
                                <svg width="48" height="48" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="24" cy="24" r="24" />
                                    <path d="M32.3076 21.922H26.0768V15.6913C26.0768 14.9267 25.4568 14.3066 24.6922 14.3066H23.3076C22.5431 14.3066 21.923 14.9267 21.923 15.6913V21.922H15.6922C14.9277 21.922 14.3076 22.5421 14.3076 23.3066V24.6913C14.3076 25.4558 14.9277 26.0759 15.6922 26.0759H21.923V32.3066C21.923 33.0712 22.5431 33.6913 23.3076 33.6913H24.6922C25.4568 33.6913 26.0768 33.0712 26.0768 32.3066V26.0759H32.3076C33.0722 26.0759 33.6922 25.4558 33.6922 24.6913V23.3066C33.6922 22.5421 33.0722 21.922 32.3076 21.922Z" fill="white" />
                                </svg>
                            </a>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
        <div>
            <a class="comparison__more-open">More Info
                <svg width="48" height="48" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="24" cy="24" r="24" />
                    <path d="M32.3076 21.922H26.0768V15.6913C26.0768 14.9267 25.4568 14.3066 24.6922 14.3066H23.3076C22.5431 14.3066 21.923 14.9267 21.923 15.6913V21.922H15.6922C14.9277 21.922 14.3076 22.5421 14.3076 23.3066V24.6913C14.3076 25.4558 14.9277 26.0759 15.6922 26.0759H21.923V32.3066C21.923 33.0712 22.5431 33.6913 23.3076 33.6913H24.6922C25.4568 33.6913 26.0768 33.0712 26.0768 32.3066V26.0759H32.3076C33.0722 26.0759 33.6922 25.4558 33.6922 24.6913V23.3066C33.6922 22.5421 33.0722 21.922 32.3076 21.922Z" fill="white" />
                </svg>
            </a>
        </div>
        <div class="comparison__button-wrapper">
            <?php echo qntm_acf_link('a', 'comparison__button', $link, false, false); ?>
        </div>
    </div>
</div>