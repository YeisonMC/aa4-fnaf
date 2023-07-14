$(document).ready(function () {
  $("#formulario").submit(function (event) {
    event.preventDefault();

    var usuario = $("#usuario").val();
    var nombre = $("#nombre").val();
    var numero = $("#numero").val();
    var contrasena = $("#contrasena").val();
    var correo = $("#correo").val();

    $.ajax({
      url: "/php/register.php",
      type: "POST",
      data: {
        usuario: usuario,
        nombre: nombre,
        numero: numero,
        contrasena: contrasena,
        correo: correo,
      },
      success: function (response) {
        Swal.fire(
          "¡Éxito!",
          "Usuario registrado satisfactoriamente",
          "success"
        ).then(function () {
          window.location.href = "/index.html";
        });
        $("#formulario")[0].reset();
      },
    });
  });
});
