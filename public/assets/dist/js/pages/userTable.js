function userStatusChange(userId, element) {
    if (element.val() == 1) {
        isActive = 0
    } else {
        isActive = 1
    }
    let token = $('input[name="_token"]').val();
    $.ajax({
        method: "POST",
        url: `${BASEURL}/user-status-change`,
        data: { "user": userId, "_token": token, "isActive": isActive }
    })
        .done(function (res) {
            element.val(isActive);
            if (res.status == 204) {
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