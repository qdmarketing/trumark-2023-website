jQuery(function($) {
    var loading = false;
    var page = 2; // Set to the next page number

    $(window).scroll(function() {
        if ($(document).height() - $(window).height() <= $(window).scrollTop() + 300 && !loading) {
            loading = true;
            $('#load-more-container').html('<div class="loading">Loading...</div>');

            $.ajax({
                type: 'POST',
                dataType: 'html',
                url: infinite_scroll_params.ajax_url,
                data: {
                    action: 'load_more_posts',
                    query: infinite_scroll_params.posts,
                    page: page
                },
                success: function(response) {
                    console.log(response);
                    $('#blog-container').append(response);
                    $('#load-more-container').empty();
                    loading = false;
                    page++;
                }
            });
        }
    });
});