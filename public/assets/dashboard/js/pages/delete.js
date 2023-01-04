$(document).on('click', '.delete', function() {
    user_id = $(this).attr('id');
    route = $(this).attr('route');
    text = $(this).attr('text');
    text = text.replace("_", " ");
    table_id = $(this).attr('table');
    Swal.fire({
        title: 'Are you sure?',
        text: "Do yo want to permanently delete " + text + "!",
        type: 'warning',
        showCancelButton: true,
        customClass: {
            confirmButton: 'btn btn-raised btn-raised-danger m-1 ladda-button basic-ladda-button',
            cancelButton: 'btn btn-raised btn-raised-primary m-1 ladda-button basic-ladda-button'
        },
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
        if (result.value) {
            $.ajax({
                url: route,
                method: "DELETE",
                data: {
                    "_token": $('meta[name="csrf-token"]').attr('content'),
                },
                beforeSend: function() {
                    Swal.fire({
                        title: 'Deleting..',
                        html: "Please wait...",
                        showConfirmButton: false,
                        allowOutsideClick: false,
                        onOpen: () => {
                            Swal.showLoading();
                        }
                    });
                },
                success: function(data) {
                    if (data.status) {
                        Swal.hideLoading();
                        if (data.status == 'success') {
                            Swal.fire(data.title, data.text, 'success');
                        }
                        if (data.status == 'error') {
                            Swal.fire(data.title, data.text, 'error');
                        }
                        // $('#'+table_id+'_table').DataTable().draw(true)
                        $('#' + table_id + '_table').DataTable().ajax.reload();
                    }
                }
            })
        }
    });
});