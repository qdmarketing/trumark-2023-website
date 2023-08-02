<?php

/**
 * Block Name: Image Pathways
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
$content = get_field('body');

$items = get_field('items');

$count = count($items);


?>
<?php if ($count < 3 && is_user_logged_in()) : ?>

    <div class="container text-center my-50">
        <h3>Please add at least 3 items to the Image Pathways block. </h3>
        (Only logged in users can see this message)
    </div>
<?php elseif ($items) : ?>
    <div id="<?php echo $id; ?>" class="<?php echo $blockClass; ?> <?php echo $blockName ?>-block acf-block <?php echo $align_class; ?> image-pathways ">
        <div class="container-xxl">
            <?php echo $headline ? '<h3 class="image-pathways__headline">' . $headline . '</h3>' : ''; ?>
            <?php echo $content ? '<div class="image-pathways__content">' . $content . '</div>' : ''; ?>
            <div class="image-pathways__grid image-pathways__grid--count-<?php echo $count; ?>">
                <?php foreach ($items as $key => $item) : ?>
                    <div class="image-pathways__item item--<?php echo $key; ?>">
                        <div class="image-pathways__top">
                            <?php
                            echo $item['image'] ? '<div class="image-pathways__image">' . wp_get_attachment_image($item['image'], 'pathways', false, array('class' => 'image-pathways__image')) . '</div>' : ''; ?>
                            <?php echo $item['title'] ? '<h3 class="image-pathways__headline">' . $item['title'] . '</h3>' : ''; ?>
                            <?php echo $item['content'] ? '<div class="image-pathways__content">' . $item['content'] . '</div>' : ''; ?>
                        </div>
                        <div class="image-pathways__bottom">
                            <?php echo $item['link'] ? qntm_acf_link('a', 'image-pathways__link', $item['link'], false, false) : ''; ?>

                        </div>
                    </div>
                <?php endforeach; ?>
                <?php foreach ($items as $key => $item) : ?>
                    <div class="image-pathways__item item--<?php echo $key + $count; ?>">
                        <?php if ($item['more']) : ?>
                            <div>

                                <a data-item="<?php echo $key; ?>" class="image-pathways__more-open">More Info
                                    <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="24" cy="24" r="24" fill="#930027" />
                                        <path d="M32.3076 21.922H26.0768V15.6913C26.0768 14.9267 25.4568 14.3066 24.6922 14.3066H23.3076C22.5431 14.3066 21.923 14.9267 21.923 15.6913V21.922H15.6922C14.9277 21.922 14.3076 22.5421 14.3076 23.3066V24.6913C14.3076 25.4558 14.9277 26.0759 15.6922 26.0759H21.923V32.3066C21.923 33.0712 22.5431 33.6913 23.3076 33.6913H24.6922C25.4568 33.6913 26.0768 33.0712 26.0768 32.3066V26.0759H32.3076C33.0722 26.0759 33.6922 25.4558 33.6922 24.6913V23.3066C33.6922 22.5421 33.0722 21.922 32.3076 21.922Z" fill="white" />
                                    </svg>
                                </a>
                                <div class="image-pathways__more-content" data-item="<?php echo $key; ?>" style="display:none;">
                                    <?php echo $item['more']; ?>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
<?php else : ?>
    Please add some items.
<?php endif; ?>