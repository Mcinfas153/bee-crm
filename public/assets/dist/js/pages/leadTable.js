$(function () {
    var table = $("#leads").DataTable({
        "responsive": true,
        "lengthChange": false,
        "autoWidth": false,
        select: true,
        "order": [[0, "desc"]],
        "buttons": ["excel", "pdf", "print",
            {
                text: 'Assign Lead',
                action: function () {
                    userModalOpen()
                }
            }
        ],
        columnDefs: [{
            orderable: false,
            targets: 0
        }],
        select: {
            style: 'os',
            selector: 'td:first-child'
        },
    }).buttons().container().appendTo('#example2_wrapper .col-md-6:eq(0)');
});

function assignLead() {
    let leads = [];
    $('input[name="lead_id"]:checked').each(function () {
        leads.push(this.value);
    });
    let user = $('#user').val();
    let token = $('input[name="_token"]').val();

    if (leads.length === 0 || user == '' || user == undefined) {

        Toast.fire({
            icon: 'error',
            title: 'You have to at leaset select 1 lead & 1 user'
        })

    } else {

        $.ajax({
            method: "POST",
            url: `${BASEURL}/assign-lead`,
            data: { "leads": leads, "user": user, "_token": token }
        })
            .done(function (res) {
                userModalClose()
                if (res.status == 201) {
                    Toast.fire({
                        icon: 'success',
                        title: res.msg
                    })
                } else {
                    Toast.fire({
                        icon: 'error',
                        title: 'Something went wrong'
                    })
                }
            })
            .fail(function () {
                Toast.fire({
                    icon: 'error',
                    title: 'Something went wrong'
                })
            })
    }
}

function userModalOpen() {
    $('#user__modal').modal('show')
}

function userModalClose() {
    $('#user__modal').modal('hide')
}