<?php

/**
 * Block Name: Application Status
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
?>


<div id="<?php echo $id; ?>" class="<?php echo $blockClass; ?> <?php echo $blockName ?>-block acf-block <?php echo $align_class; ?> application-status">
    <div class="container-xxl">
        <div class="application-status__top">
            <?php echo $headline ? '<h3 class="application-status__headline">' . $headline . '</h3>' : ''; ?>
            <?php echo $link ? qntm_acf_link('a', 'application-status__link', $link, false, false) : ''; ?>
        </div>
        <?php echo $content ? '<div class="application-status__content">' . $content . '</div>' : ''; ?>



    </div>
</div>