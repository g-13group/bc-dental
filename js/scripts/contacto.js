$(document).ready(function () {
    $('form').validate({
        lang: 'es',  // or whatever language option you have.
        rules: {
            nombre: {
                minlength: 3,
                maxlength: 20,
                required: true,
            },
            correo: {
                email: true,
                required: true
            },
            telefono: {
                required: true,
                // matches: "[0-9]+",  // <-- no such method called "matches"!
                minlength: 10,
                maxlength: 10,
                number: true
            },
            mensaje: {
                required: true,
                minlength: 5
            }
        },
        messages: {
            nombre: {
                minlength: "Ingresa al menos 3 carácteres",
                maxlength: "Ingresa hasta 15 carácteres",
                required: "El campo Nombre es obligatorio",
            },
            correo: {
                email: "Ingresa un correo valido",
                required: "El campo Correo es obligatorio",
            },
            telefono: {
                required: "El campo Telefono es obligatorio",
                minlength: "Ingresa al menos 10 carácteres",
                maxlength: "Ingresa hasta 10 carácteres",
                number: "Ingresa un telefono valido",
            },
            mensaje: {
                required: "El campo Mensaje es obligatorio",
                minlength: "Ingresa al menos 5 carácteres",
            }
        },
        errorPlacement: function (label, element) {
            label.addClass('arrow');
            label.insertAfter(element);
        },
        wrapper: 'span',
        submitHandler: function (form) {
            $.ajax({
                url: "Controllers/routes.php?controller=Contacto&method=email",
                type: "post",
                dataType: "json",
                data: $("#form-contacto").serialize(),
                success: function (response) {
                    if (response === "success") {
                        Swal.fire({
                            icon: 'success',
                            title: 'Exito',
                            text: 'El correo ha sido enviado con exito',
                        })
                        $("#form-contacto")[0].reset();

                    } else {
                        error();
                    }
                },
                error: function () {
                    error();
                }
            });
        }
    });

    // $("#form-contacto").submit(function (e) {
    //     e.preventDefault();
    //     $('form').validate();
    //
    // })

    function error() {
        Swal.fire({
            icon: 'error',
            title: 'Error',
            text: '¡Lo sentimos ocurrió un error!',
        })
    }
});