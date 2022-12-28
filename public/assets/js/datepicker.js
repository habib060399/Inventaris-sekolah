$(function () {
    "use strict";

    if ($("#datePickerExample2").length) {
        var date = new Date();
        var today = new Date(
            date.getFullYear(),
            date.getMonth(),
            date.getDate()
        );
        $("#datePickerExample2").datepicker({
            format: "yyyy/mm/dd",
            todayHighlight: true,
            autoclose: true,
        });
        $("#datePickerExample2").datepicker("setDate", today);
    }
});

$(function () {
    "use strict";

    if ($("#datePickerExample").length) {
        var date = new Date();
        var today = new Date(
            date.getFullYear(),
            date.getMonth(),
            date.getDate()
        );
        $("#datePickerExample").datepicker({
            format: "yyyy/mm/dd",
            todayHighlight: true,
            autoclose: true,
        });
        $("#datePickerExample").datepicker("setDate", today);
    }
});
