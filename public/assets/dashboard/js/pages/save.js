$(document).on('submit', 'form#new_form', function(event) {
    event.preventDefault();
    route = $(this).attr('action');
    table = $(this).data('table');
    var myforms = $("form#new_form");
    // validator...........
    validator(myforms);
    $.ajax({
        url: route,
        method: "POST",
        data: new FormData(this),
        contentType: false,
        cache: false,
        processData: false,
        dataType: "json",
        beforeSend:function(){
            Swal.fire({
                title: 'Processing..',
                html: "Please wait...",
                showConfirmButton: false,allowOutsideClick: false,
                onOpen: () => {
                    Swal.showLoading();
                }
            });
        },
        success: function(data) {
            Swal.hideLoading();
            if (data.status) {
                if (data.status == 'info') {
                    var response = data.errors;
                    // validator error...........
                    errors(myforms, response)
                    Toast.fire({
                        type: 'info',
                        title: 'Info! ',
                        html: '<span class="text-info">' + data.text + '</span>'
                    });
                }
                if (data.status == 'success') {
                    closedModel();
                    if($('#' + table).length){
                         $('#' + table).DataTable().draw(true)
                    }
                    Toast.fire({
                        type: 'success',
                        title: 'Success! ',
                        html: '<span class="text-success">' + data.text + '</span>'
                    });
                }
                if (data.status == 'error') {
                    Toast.fire({
                        type: 'error',
                        title: 'Error! ',
                        html: '<span class="text-danger">' + data.text + '</span>'
                    });
                }
            }
        }
    });
});

function validator(myforms, response) {
      //for Input fields.........
    myforms.each(function(i) {
        var myform = myforms.eq(i);
        var myInputFields = $("input[type='number']", myform);
        myInputFields.each(function(i) {
            var myInputField = myInputFields.eq(i);
            if (myInputField[0].value != "") {

                if (myInputField[0].name.includes("[") && myInputField[0].name.includes("]")) {
                    var name = myInputField[0].name;
                    removeFirst = (name.replace("[", "_")).replace("]", "_");
                    inputName = (removeFirst.replace("[", "")).replace("]", "");
                    $('span#' + inputName + '_error').remove();
                } else {
                    $('span#' + myInputField[0].name + '_error').remove();
                }
                $('input[name="' + myInputField[0].name + '"]').removeClass("border-danger").addClass('border-success');

            } else {
                if (myInputField[0].name.includes("[") && myInputField[0].name.includes("]")) {
                    var name = myInputField[0].name;
                    removeFirst = (name.replace("[", "_")).replace("]", "_");
                    inputName = (removeFirst.replace("[", "")).replace("]", "");
                     $('span#' + inputName + '_error').remove();
                } else {
                    $('span#' + myInputField[0].name + '_error').remove();
                }
                if ($('input[name="' + myInputField[0].name + '"]').hasClass("border-success")) {
                    $('input[name="' + myInputField[0].name + '"]').removeClass("border-success");
                }
                $('input[name="' + myInputField[0].name + '"]').removeClass("border-danger");
            }
        });
    });
    //for Input fields.........
    myforms.each(function(i) {
        var myform = myforms.eq(i);
        var myInputFields = $("input[type='text']", myform);
        myInputFields.each(function(i) {
            var myInputField = myInputFields.eq(i);
            if (myInputField[0].value != "") {

                if (myInputField[0].name.includes("[") && myInputField[0].name.includes("]")) {
                    var name = myInputField[0].name;
                    removeFirst = (name.replace("[", "_")).replace("]", "_");
                    inputName = (removeFirst.replace("[", "")).replace("]", "");
                    $('span#' + inputName + '_error').remove();
                } else {
                    $('span#' + myInputField[0].name + '_error').remove();
                }
                $('input[name="' + myInputField[0].name + '"]').removeClass("border-danger").addClass('border-success');

            } else {
                if (myInputField[0].name.includes("[") && myInputField[0].name.includes("]")) {
                    var name = myInputField[0].name;
                    removeFirst = (name.replace("[", "_")).replace("]", "_");
                    inputName = (removeFirst.replace("[", "")).replace("]", "");
                     $('span#' + inputName + '_error').remove();
                } else {
                    $('span#' + myInputField[0].name + '_error').remove();
                }
                if ($('input[name="' + myInputField[0].name + '"]').hasClass("border-success")) {
                    $('input[name="' + myInputField[0].name + '"]').removeClass("border-success");
                }
                $('input[name="' + myInputField[0].name + '"]').removeClass("border-danger");
            }
        });
    });
    //for Input fields.........
    myforms.each(function(i) {
        var myform = myforms.eq(i);
        var myInputPassFields = $("input[type='password']", myform);
        myInputPassFields.each(function(i) {
            var myInputPassField = myInputPassFields.eq(i);
            if (myInputPassField[0].value != "") {
                $('input[name="' + myInputPassField[0].name + '"]').removeClass("border-danger").addClass('border-success');
                $('span#' + myInputPassField[0].name + '_error').remove();
            } else {
                if ($('input[name="' + myInputPassField[0].name + '"]').hasClass("border-success")) {
                    $('input[name="' + myInputPassField[0].name + '"]').removeClass("border-success");
                }
                $('input[name="' + myInputPassField[0].name + '"]').removeClass("border-danger");
                $('span#' + myInputPassField[0].name + '_error').remove();
            }
        });
    });
    //for Input fields.........
    myforms.each(function(i) {
        var myform = myforms.eq(i);
        var myInputEmailFields = $("input[type='email']", myform);
        myInputEmailFields.each(function(i) {
            var myInputEmailField = myInputEmailFields.eq(i);
            if (myInputEmailField[0].value != "") {
                if (myInputEmailField[0].name.includes("[") && myInputEmailField[0].name.includes("]")) {
                    var name = myInputEmailField[0].name;
                      removeFirst = (name.replace("[", "_")).replace("]", "_");
                    inputName = (removeFirst.replace("[", "")).replace("]", "");
              
                    $('span#' + inputName + '_error').remove();
                } else {
                    $('span#' + myInputEmailField[0].name + '_error').remove();
                }
                $('input[name="' + myInputEmailField[0].name + '"]').removeClass("border-danger").addClass('border-success');
            } else {
                if (myInputEmailField[0].name.includes("[") && myInputEmailField[0].name.includes("]")) {
                    var name = myInputEmailField[0].name;
                      removeFirst = (name.replace("[", "_")).replace("]", "_");
                    inputName = (removeFirst.replace("[", "")).replace("]", "");
              
                    $('span#' + inputName + '_error').remove();
                } else {
                    $('span#' + myInputEmailField[0].name + '_error').remove();
                }
                if ($('input[name="' + myInputEmailField[0].name + '"]').hasClass("border-success")) {
                    $('input[name="' + myInputEmailField[0].name + '"]').removeClass("border-success");
                }
                $('input[name="' + myInputEmailField[0].name + '"]').removeClass("border-danger");
            }
        });
    });
    //for Input fields.........
    myforms.each(function(i) {
        var myform = myforms.eq(i);
        var myInputRedioFields = $("input[type='radio']", myform);
        myInputRedioFields.each(function(i) {
            var myInputRedioField = myInputRedioFields.eq(i);
            if (myInputRedioField[0].value != "") {
                $('input[name="' + myInputRedioField[0].name + '"]').removeClass("border-danger").addClass('border-success');
                $('span#' + myInputRedioField[0].name + '_error').remove();
            } else {
                if ($('input[name="' + myInputRedioField[0].name + '"]').hasClass("border-success")) {
                    $('input[name="' + myInputRedioField[0].name + '"]').removeClass("border-success");
                }
                $('input[name="' + myInputRedioField[0].name + '"]').removeClass("border-danger");
                $('span#' + myInputRedioField[0].name + '_error').remove();
            }
        });
    });
    //for Input fields.........
    // myforms.each(function(i) {
    //     var myform = myforms.eq(i);
    //     var myInputCheckboxFields = $("input[type='checkbox']", myform);
    //     myInputCheckboxFields.each(function(i) {
    //         var myInputCheckboxField = myInputCheckboxFields.eq(i);
    //         if (myInputCheckboxField[0].checked == true) {
    //             $('input[name="' + myInputCheckboxField[0].name + '"]').removeClass("border-danger").addClass('border-success');
    //             if ($('span#' + myInputCheckboxField[0].length == 0)) {
                        
    //                     checkboxName = myInputCheckboxField[0].name;  
                        
    //                     inputId = key.replace(".", "_");
    //                     str = key + ']';
    //                     inputName = str.replace(".", "[");
    //                     if (myInputField[0].name == inputName) {
    //                         if ($('span#' + inputId + '_error').length) {
    //                             $('span#' + inputId + '_error').remove();
    //                         }
    //                         $('input[name="' + inputName + '"]').addClass("border-danger").after(`
    //                     <span class="text-danger" id="` + inputId + `_error">` + response[key] + `</span>`);
    //                     }
                      

    //                 $('span#' + myInputCheckboxField[0].name + '_error').remove();
    //             }
    //         } else {
    //             var name = myInputCheckboxField[0].name;
    //             inputName = (name.replace("[", "_")).replace("]", "_");
    //             if ($('input[name="' + name + '"]').hasClass("border-success")) {
    //                 $('input[name="' + name + '"]').removeClass("border-success");
    //             }
    //             $('input[name="' + name + '"]').removeClass("border-danger");
    //             if ($('span#' + name.length == 0)) {
    //                 $('span#' + inputName + '_error').remove();
    //             }
    //         }
    //     });
    // });
    //for Input fields.........
    myforms.each(function(i) {
        var myform = myforms.eq(i);
        var myInputFileFields = $("input[type='file']", myform);
        myInputFileFields.each(function(i) {
            var myInputFileField = myInputFileFields.eq(i);
            if (myInputFileField[0].value != "") {
                $('input[name="' + myInputFileField[0].name + '"]').removeClass("border-danger").addClass('border-success');
                $('span#' + myInputFileField[0].name + '_error').remove();
            } else {
                if ($('input[name="' + myInputFileField[0].name + '"]').hasClass("border-success")) {
                    $('input[name="' + myInputFileField[0].name + '"]').removeClass("border-success");
                }
                $('input[name="' + myInputFileField[0].name + '"]').removeClass("border-danger");
                $('span#' + myInputFileField[0].name + '_error').remove();
            }
        });
    });
    //for select fields.........
    myforms.each(function(i) {
        var myform = myforms.eq(i);
        var mySelectFields = $("select", myform);
        mySelectFields.each(function(i) {
            var mySelectField = mySelectFields.eq(i);
            if (mySelectField[0].value != "") {
                $('select[name="' + mySelectField[0].name + '"]').removeClass("border-danger").addClass('border-success');
                $('span#' + mySelectField[0].name + '_error').remove();
            } else {
                if ($('select[name="' + mySelectField[0].name + '"]').hasClass("border-success")) {
                    $('select[name="' + mySelectField[0].name + '"]').removeClass("border-success");
                }
                $('select[name="' + mySelectField[0].name + '"]').removeClass("border-danger");
                $('span#' + mySelectField[0].name + '_error').remove();
            }
        });
    });
    //for TextArea fields.........
    myforms.each(function(i) {
        var myform = myforms.eq(i);
        var myTextAreaFields = $("textarea", myform);
        myTextAreaFields.each(function(i) {
            var myTextAreaField = myTextAreaFields.eq(i);
            if (myTextAreaField[0].value != "") {
                $('textarea[name="' + myTextAreaField[0].name + '"]').removeClass("border-danger").addClass('border-success');
                $('span#' + myTextAreaField[0].name + '_error').remove();
            } else {
                if ($('textarea[name="' + myTextAreaField[0].name + '"]').hasClass("border-success")) {
                    $('textarea[name="' + myTextAreaField[0].name + '"]').removeClass("border-success");
                }
                $('textarea[name="' + myTextAreaField[0].name + '"]').removeClass("border-danger");
                $('span#' + myTextAreaField[0].name + '_error').remove();
            }
        });
    });
}

function errors(myforms, response) {
    Object.keys(response).forEach(function(responseKey) {
        //for Input fields.........
        myforms.each(function(i) {
            var myform = myforms.eq(i);
            var myInputFields = $("input[type='text']", myform);
            myInputFields.each(function(i) {
                var myInputField = myInputFields.eq(i);

                if (responseKey.includes(".")) {
                    var key = responseKey;
                    inputId = (key.replace(".", "_")).replace(".", "_");
                    str = key + ']';
                    inputName = (str.replace(".", "[")).replace(".", "][");
                    if (myInputField[0].name == inputName) {
                        if ($('span#' + inputId + '_error').length) {
                            $('span#' + inputId + '_error').remove();
                        }
                        $('input[name="' + inputName + '"]').addClass("border-danger").after(`
                    <span class="text-danger" id="` + inputId + `_error">` + response[key] + `</span>`);
                    }
                 
                    // tenant_details.1.mobile

                } else {
                    if (myInputField[0].name == responseKey) {
                        if ($('span#' + responseKey + '_error').length) {
                            $('span#' + responseKey + '_error').remove();
                        }
                        $('input[name="' + responseKey + '"]').addClass("border-danger").after(`
                    <span class="text-danger" id="` + responseKey + `_error">` + response[responseKey] + `</span>`);
                    }
                }
            });
        });


        //for Input fields.........
        myforms.each(function(i) {
            var myform = myforms.eq(i);
            var myInputEmailFields = $("input[type='email']", myform);
            myInputEmailFields.each(function(i) {
                var myInputEmailField = myInputEmailFields.eq(i);
                if (responseKey.includes(".")) {
                   var key = responseKey;
                    inputId = (key.replace(".", "_")).replace(".", "_");
                    str = key + ']';
                    inputName = (str.replace(".", "[")).replace(".", "][");
                     if (myInputEmailField[0].name == inputName) {
                        if ($('span#' + inputId + '_error').length) {
                            $('span#' + inputId + '_error').remove();
                        }
                        $('input[name="' + inputName + '"]').addClass("border-danger").after(`
                    <span class="text-danger" id="` + inputId + `_error">` + response[key] + `</span>`);
                    }
                } else {
                    if (myInputEmailField[0].name == responseKey) {
                        if ($('span#' + responseKey + '_error').length) {
                            $('span#' + responseKey + '_error').remove();
                        }
                        $('input[name="' + responseKey + '"]').addClass("border-danger").after(`
                    <span class="text-danger" id="` + responseKey + `_error">` + response[responseKey] + `</span>`);
                    }
                }
            });
        });
        //for Input fields.........
        myforms.each(function(i) {
            var myform = myforms.eq(i);
            var myInputPassFields = $("input[type='password']", myform);
            myInputPassFields.each(function(i) {
                var myInputPassField = myInputPassFields.eq(i);
                if (myInputPassField[0].name == responseKey) {
                    if ($('span#' + responseKey + '_error').length) {
                        $('span#' + responseKey + '_error').remove();
                    }
                    $('input[name="' + responseKey + '"]').addClass("border-danger").after(`
                <span class="text-danger" id="` + responseKey + `_error">` + response[responseKey] + `</span>`);
                }
            });
        });
        //for Input fields.........
        myforms.each(function(i) {
            var myform = myforms.eq(i);
            var myInputRedioFields = $("input[type='radio']", myform);
            myInputRedioFields.each(function(i) {
                var myInputRedioField = myInputRedioFields.eq(i);
                if (myInputRedioField[0].name == responseKey) {
                    if ($('span#' + responseKey + '_error').length) {
                        $('span#' + responseKey + '_error').remove();
                    }
                    $('input[name="' + responseKey + '"]').addClass("border-danger").after(`
                <span class="text-danger" id="` + responseKey + `_error">` + response[responseKey] + `</span>`);
                }
            });
        });
        //for Input fields.........
        myforms.each(function(i) {
            var myform = myforms.eq(i);
            var myInputCheckboxFields = $("input[type='checkbox']", myform);
            myInputCheckboxFields.each(function(i) {
                var myInputCheckboxField = myInputCheckboxFields.eq(i);
                if (myInputCheckboxField[0].name == responseKey) {
                    if ($('span#' + responseKey + '_error').length) {
                        $('span#' + responseKey + '_error').remove();
                    }
                    $('input[name="' + responseKey + '"]').after(`
                <span class="text-danger" id="` + responseKey + `_error">` + response[responseKey] + `</span>`);
                }
            });
        });
        //for Input fields.........
        myforms.each(function(i) {
            var myform = myforms.eq(i);
            var myInputFileFields = $("input[type='file']", myform);
            myInputFileFields.each(function(i) {
                var myInputFileField = myInputFileFields.eq(i);
                if (myInputFileField[0].name == responseKey) {
                    if ($('span#' + responseKey + '_error').length) {
                        $('span#' + responseKey + '_error').remove();
                    }
                    $('input[name="' + responseKey + '"]').addClass("border-danger").after(`
                <span class="text-danger" id="` + responseKey + `_error">` + response[responseKey] + `</span>`);
                }
            });
        });
        //for select fields.........
        myforms.each(function(i) {
            var myform = myforms.eq(i);
            var mySelectFields = $("select", myform);
            mySelectFields.each(function(i) {
                var mySelectField = mySelectFields.eq(i);
               
                if (responseKey.includes(".")) {
                   var key = responseKey;
                    inputId = (key.replace(".", "_")).replace(".", "_");
                    str = key + ']';
                    inputName = (str.replace(".", "[")).replace(".", "][");
                     if (mySelectField[0].name == inputName) {
                        if ($('span#' + inputId + '_error').length) {
                            $('span#' + inputId + '_error').remove();
                        }

                        $($(".select").select2("container")).addClass("border-danger sss");

                        $('select[name="' + inputName + '"]').addClass("border-danger").next().after(`
                    <span class="text-danger" id="` + inputId + `_error">` + response[key] + `</span>`);
                    }
                } else {
                    if (mySelectField[0].name == responseKey) {
                        if ($('span#' + responseKey + '_error').length) {
                            $('span#' + responseKey + '_error').remove();
                        }
                        $('select[name="' + responseKey + '"]').addClass("border-danger").next().after(`
                <span class="text-danger" id="` + responseKey + `_error">` + response[responseKey] + `</span>`);
                    }
                }
            });
        });
        //for TextArea fields.........
        myforms.each(function(i) {
            var myform = myforms.eq(i);
            var myTextAreaFields = $("textarea", myform);
            myTextAreaFields.each(function(i) {
                var myTextAreaField = myTextAreaFields.eq(i);
                if (myTextAreaField[0].name == responseKey) {
                    if ($('span#' + responseKey + '_error').length) {
                        $('span#' + responseKey + '_error').remove();
                    }
                    $('textarea[name="' + responseKey + '"]').addClass("border-danger").after(`
            <span class="text-danger" id="` + responseKey + `_error">` + response[responseKey] + `</span>`);
                }
            });
        });
    });
}

function reset(form) {
    //Reset Form...
    $(form).closest('form').find("input[type=text],input[type=email], textarea").val("");
    $(form).closest('form').find('select option').attr('selected', false);
    $(form).closest('form').find("select[name='cust_state']").html('');
    $(form).closest('form').find("select[name='cust_state']").html('<option value="">-- Select State --</option>');
    $(form).closest('form').find("select[name='cust_city']").html('');
    $(form).closest('form').find("select[name='cust_city']").html('<option value="">-- Select City --</option>');
    $(form).closest('form').find("select[name='pro_state']").html('');
    $(form).closest('form').find("select[name='pro_state']").html('<option value="">-- Select State --</option>');
    $(form).closest('form').find("select[name='pro_city']").html('');
    $(form).closest('form').find("select[name='pro_city']").html('<option value="">-- Select City --</option>');
}