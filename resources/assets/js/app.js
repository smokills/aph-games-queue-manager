
/**
 * First, we will load all of this project's Javascript utilities and other
 * dependencies. Then, we will be ready to develop a robust and powerful
 * application frontend using useful Laravel and JavaScript libraries.
 */

require('./bootstrap');
window.timer = require('./timer');

window.toastr = require('toastr');
window.swal = require('sweetalert2');
window.select2 = require('select2');
window.moment = require('moment');

function pad(num, size) {
    var s = num+"";
    while (s.length < size) s = "0" + s;
    return s;
}

window.deleteItem = (form_id) => {
    swal({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
    }).then(() => {
        document.getElementById(form_id).submit();
    }).catch(() => {});
};

$('.timer_start').on('click', function(event) {
    event.preventDefault();

    var $$ = $(this);
    var timer_id = $$.data('timer_id');
    var duration = $$.data('timer-duration');

    console.log(timer_id);

    timer.startTimer(timer_id, duration * 60, function({ elapsed, remaining }) {
        var m = Math.floor(remaining / 60);
        var s = remaining - (m * 60);

        $('#' + timer_id).html(pad(m, 2) + ':' + pad(s, 2));
        $('.' + timer_id).removeClass('label-success').addClass('label-danger').html('busy');
    }, function() {
        $('#' + timer_id).html(duration + ':00');
        $('.' + timer_id).removeClass('label-danger').addClass('label-success').html('free');


    });
});

$('.timer_stop').on('click', function(event) {
    event.preventDefault();

    var timer_id = $(this).data('timer_id');
    var duration = $(this).data('timer-duration');

    timer.stopTimer(timer_id);

    $('.' + timer_id).removeClass('label-danger').addClass('label-success').html('free');
    $('#' + timer_id).html(duration + ':00');
});