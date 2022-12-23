(function($) {
    $.fn.persistTabs = function() {
        return this.each(function(index, element) {
            var getTab = function() {
                if (getURLVar('tab') != '') {
                    return '#tab-' + getURLVar('tab');
                }

                return localStorage.getItem(getURLVar('route') + '/tab/' + index);
            };

            var setTab = function(tab) {
                localStorage.setItem(getURLVar('route') + '/tab/' + index, tab);
            };

            var showTab = function(tab) {
                if (!tab || $(element).find('li > a[href="' + tab + '"]').length == 0) {
                    $(element).find('li:first > a').trigger('click');
                } else {
                    $(element).find('li > a[href="' + tab + '"]').trigger('click');
                }

                setTab($(element).find('li.active > a').attr('href'));
            };

            $(element).find('li > a').click(function() {
                setTab($(this).attr('href'));
            });

            showTab(getTab());

            return element;
        });
    };

    $(document).ready(function() {
        $('[role="persist-tabs"]').persistTabs();
    });
}(jQuery));
