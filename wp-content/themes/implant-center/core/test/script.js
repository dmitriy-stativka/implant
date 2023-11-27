(function ($) {
    $(document).on('click', '.load_more_news', function(e) {
        e.preventDefault();
        var button = $(this),
            data = {
                'action': 'loadmore_news',
                'query': true_posts,
                'page' : current_page
            };
        $.ajax({ // you can also use $.post here
            url: ajaxurl, // AJAX handler
            data: data,
            type: 'POST',
            beforeSend: function (xhr) {
                
            },
            success: function (data) {
                if (data) {
                    button.find('b').text('SEE MORE');
                    $('#news .news-list').append(data); // insert new posts
                    current_page++;
                    if (current_page == max_pages)
                        button.hide(); // if last page, remove the button
                    // you can also fire the "post-load" event here if you use a plugin that requires it
                    // $( document.body ).trigger( 'post-load' );
                } else {
                    button.hide(); // if no data, remove the button as well
                }
            }
        });
    });
})(jQuery);