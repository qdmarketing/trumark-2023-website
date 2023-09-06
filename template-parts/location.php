<div class="entry-content">
    <?php if (get_field('items')) : ?>
        <?php get_template_part('resources/blocks/checkmark-list', null, array('prefix' => 'services_')); ?>
    <?php endif; ?>

    <?php get_template_part('resources/blocks/fifty'); ?>
</div>