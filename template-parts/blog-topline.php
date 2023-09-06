<div class="blog-single-top__topline">
    <div class="blog-single-top__section-title">TruMark Financial Blog</div>
    <div class="blog-single-top__category-links">
        <label for="categoryDropdown">Filter by Category:</label>


        <select id="categoryDropdown" onchange="goToCategory()">
            <option value="" selected>Select a category</option>
            <?php if (is_category()) : ?>
                <option value="<?php echo esc_url(get_permalink(get_option('page_for_posts'))); ?>">All Categories</option>
            <?php endif; ?>
            <?php
            $categories = get_categories(); // Get all categories

            // Get the currently displayed category ID (if on a category page)
            $current_category = get_queried_object();
            $current_category_id = $current_category ? $current_category->term_id : 0;

            foreach ($categories as $category) {
                $selected = ($category->term_id == $current_category_id) ? 'selected' : '';
                echo '<option value="' . get_category_link($category->term_id) . '" ' . $selected . '>' . $category->name . '</option>';
            }
            ?>
        </select>
        <script>
            function goToCategory() {
                var dropdown = document.getElementById("categoryDropdown");
                var selectedValue = dropdown.value;

                if (selectedValue) {
                    if (selectedValue === "<?php echo esc_url(get_permalink(get_option('page_for_posts'))); ?>") {
                        // Navigate to the posts page (displaying all posts)
                        window.location.href = "<?php echo esc_url(get_permalink(get_option('page_for_posts'))); ?>";
                    } else {
                        // Navigate to the selected category
                        window.location.href = selectedValue;
                    }
                }
            }
        </script>
    </div>
    <div class="blog-single-top__search">
        <form class="" role="search" method="get" action="<?php echo home_url('/'); ?>">
            <label for="s" class="">Seach by keyword:</label>
            <input placeholder="Type keyword here..." type="search" id="s" name="s" value="" class="">
            <button type="submit" id="s">
                <img class="" src="<?php echo get_template_directory_uri(); ?>/resources/images/search.svg">
            </button>
        </form>
    </div>
</div>