(function($) {
    $(document).on('click', '[role="delete-button"]', function(e) {
        if (!confirm($(this).attr('data-confirm'))) {
            e.stopPropagation();
            e.preventDefault();
        }
    });
}(jQuery));
