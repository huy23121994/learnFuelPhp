<script type="text/javascript">
    $(document).ready(function () {
<?php if (Session::get_flash('success')) : ?>
            new PNotify({
                title: 'Success',
                text: 'Session::get_flash('success')',
                        type: 'success',
                delay: 2000,
                styling: 'bootstrap3'
            });
<?php endif ?>
<?php if (Session::get_flash('error')): ?>
    <?php foreach (Session::get_flash('error') as $error): ?>
                new PNotify({
                    title: 'Error',
                    text: '<?php echo $error ?>. Update fail',
                    type: 'error',
                    hide: false,
                    delay: 3000,
                    styling: 'bootstrap3'
                });
    <?php endforeach; ?>
<?php endif; ?>
        Morris.Bar({
            element: 'graph_bar',
            data: [
                {"period": "Jan", "Hours worked": 80},
                {"period": "Feb", "Hours worked": 125},
                {"period": "Mar", "Hours worked": 176},
                {"period": "Apr", "Hours worked": 224},
                {"period": "May", "Hours worked": 265},
                {"period": "Jun", "Hours worked": 314},
                {"period": "Jul", "Hours worked": 347},
                {"period": "Aug", "Hours worked": 287},
                {"period": "Sep", "Hours worked": 240},
                {"period": "Oct", "Hours worked": 211}
            ],
            xkey: 'period',
            hideHover: 'auto',
            barColors: ['#26B99A', '#34495E', '#ACADAC', '#3498DB'],
            ykeys: ['Hours worked', 'sorned'],
            labels: ['Hours worked', 'SORN'],
            xLabelAngle: 60,
            resize: true
        });
        $MENU_TOGGLE.on('click', function () {
            $(window).resize();
        });
    });
</script>

<!-- datepicker -->
<script type="text/javascript">
    $(document).ready(function () {
        var cb = function (start, end, label) {
            console.log(start.toISOString(), end.toISOString(), label);
            $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        }
        var optionSet1 = {
            startDate: moment().subtract(29, 'days'),
            endDate: moment(),
            minDate: '01/01/2016',
            maxDate: '12/31/2016',
            dateLimit: {
                days: 60
            },
            showDropdowns: true,
            showWeekNumbers: true,
            timePicker: false,
            timePickerIncrement: 1,
            timePicker12Hour: true,
            ranges: {
                'Today': [moment(), moment()],
                'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                'This Month': [moment().startOf('month'), moment().endOf('month')],
                'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
            },
            opens: 'left',
            buttonClasses: ['btn btn-default'],
            applyClass: 'btn-small btn-primary',
            cancelClass: 'btn-small',
            format: 'MM/DD/YYYY',
            separator: ' to ',
            locale: {
                applyLabel: 'Submit',
                cancelLabel: 'Clear',
                fromLabel: 'From',
                toLabel: 'To',
                customRangeLabel: 'Custom',
                daysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
                monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
                firstDay: 1
            }
        };
        $('#reportrange span').html(moment().subtract(29, 'days').format('MMMM D, YYYY') + ' - ' + moment().format('MMMM D, YYYY'));
        $('#reportrange').daterangepicker(optionSet1, cb);
        $('#reportrange').on('show.daterangepicker', function () {
            console.log("show event fired");
        });
        $('#reportrange').on('hide.daterangepicker', function () {
            console.log("hide event fired");
        });
        $('#reportrange').on('apply.daterangepicker', function (ev, picker) {
            console.log("apply event fired, start/end dates are " + picker.startDate.format('MMMM D, YYYY') + " to " + picker.endDate.format('MMMM D, YYYY'));
        });
        $('#reportrange').on('cancel.daterangepicker', function (ev, picker) {
            console.log("cancel event fired");
        });
        $('#options1').click(function () {
            $('#reportrange').data('daterangepicker').setOptions(optionSet1, cb);
        });
        $('#options2').click(function () {
            $('#reportrange').data('daterangepicker').setOptions(optionSet2, cb);
        });
        $('#destroy').click(function () {
            $('#reportrange').data('daterangepicker').remove();
        });
    });
</script>
<!-- /datepicker -->