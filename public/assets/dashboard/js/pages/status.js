$(document).on('click', '.change-status', function() {
    // var value = '';
    
    // if($(this).attr('value').length){
    //     value = $(this).attr('value');
    // }
    user_id = $(this).attr('id');
    route = $(this).attr('route');
    text = $(this).attr('text');
    text = text.replace("_", " ");
    table_id = $(this).attr('table');
    Swal.fire({
        title: 'Are you sure?',
        text: "Do yo want to change " + text + " status!",
        type: 'warning',
        showCancelButton: true,
        customClass: {
            confirmButton: 'btn btn-raised btn-raised-danger m-1 ladda-button basic-ladda-button',
            cancelButton: 'btn btn-raised btn-raised-primary m-1 ladda-button basic-ladda-button',
        },
        confirmButtonText: 'Yes, change it!',
    }, function(isConfirm) {}).then((result) => {
        if (result.value) {
            $.ajax({
                url: route,
                method: "POST",
                data: {
                    "_token": $('meta[name="csrf-token"]').attr('content'),
                    // "status":value
                },
                beforeSend: function() {
                    Swal.fire({
                        title: 'Changing..',
                        html: "Please wait...",
                        showConfirmButton: false,
                        allowOutsideClick: false,
                        onOpen: () => {
                            Swal.showLoading();
                        }
                    });
                },
                success: function(data) {
                    closedModel();
                    if (data.status) {
                        Swal.hideLoading();
                        if (data.status == 'success') {
                            Swal.fire(data.title, data.text, 'success');
                        }
                        if (data.status == 'error') {
                            Swal.fire(data.title, data.text, 'error');
                        }
                        if (data.redirect != 'undefined' && data.redirect != '') {
                           location.reload();
                        }
                        // $('#'+table_id+'_table').DataTable().ajax.reload();
                        $('#' + table_id).DataTable().draw(true)
                    }
                }
            })
        } else {
            // $('#'+table_id+'_table').DataTable().ajax.reload();
            $('#' + table_id + '_table').DataTable().draw(true)
        }
    });
});
