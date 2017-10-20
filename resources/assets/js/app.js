
/**
 * First, we will load all of this project's Javascript utilities and other
 * dependencies. Then, we will be ready to develop a robust and powerful
 * application frontend using useful Laravel and JavaScript libraries.
 */

require('./bootstrap');

window.toastr = require('toastr');
window.swal = require('sweetalert2');
window.select2 = require('select2');
window.moment = require('moment');

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