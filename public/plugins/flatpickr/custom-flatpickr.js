// Flatpickr

document.addEventListener('DOMContentLoaded', function() {
    // Basic Flatpickr
    var basicElement = document.getElementById('basicFlatpickr');
    if (basicElement) {
        flatpickr(basicElement, {
            defaultDate: new Date()
        });
    }

    // DateTime Flatpickr
    var dateTimeElement = document.getElementById('dateTimeFlatpickr');
    if (dateTimeElement) {
        flatpickr(dateTimeElement, {
            enableTime: true,
            dateFormat: "Y-m-d H:i",
            defaultDate: new Date()
        });
    }

    // Range Calendar Flatpickr
    var rangeElement = document.getElementById('rangeCalendarFlatpickr');
    if (rangeElement) {
        flatpickr(rangeElement, {
            mode: "range",
        });
    }

    // Time Flatpickr
    var timeElement = document.getElementById('timeFlatpickr');
    if (timeElement) {
        flatpickr(timeElement, {
            enableTime: true,
            noCalendar: true,
            dateFormat: "H:i",
            defaultDate: "13:45",
        });
    }
});