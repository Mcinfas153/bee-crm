$(function () {
    var table = $("#leadDetails").DataTable({
        responsive: true,
        select: false,
        "ordering": false,
    })

    $("#leadUpdate").on("submit", function () {
        const loader = $('.loading');
        loader.show();
    });
})