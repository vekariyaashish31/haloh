(function($) {
    $(document).ready(function() {
        $('[role="timepicker"]').datetimepicker({
            format: 'HH:mm',
            enabledHours: true,
            pickDate: false,
            icons: {
                time: 'fa fa-clock-o',
                date: 'fa fa-calendar',
                up: 'fa fa-chevron-up',
                down: 'fa fa-chevron-down',
                previous: 'fa fa-chevron-left',
                next: 'fa fa-chevron-right',
                today: 'fa fa-screenshot',
                clear: 'fa fa-trash',
                close: 'fa fa-remove'
            }
        });
    });
}(jQuery));