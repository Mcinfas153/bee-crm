$(document).ready(function () {
    $('.loader__container').hide()
});
const Toast = Swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 5000
});