$(document).ready(function () {
  $("#formulario").submit(function (event) {
    event.preventDefault();

    var nombre = $("#nombre").val();
    var email = $("#email").val();
    var tel = $("#tel").val();
    var locales = $("#locales").val();
    var tipo = $("#tipo").val();
    var promocion = $("#promocion").val();

    $.ajax({
      url: "/php/register.php",
      type: "POST",
      data: {
        nombre: nombre,
        email: email,
        tel: tel,
        locales: locales,
        tipo: tipo,
        promocion: promocion,
      },
      success: function (response) {
        Swal.fire(
          "¡Éxito!",
          "Usuario registrado satisfactoriamente",
          "success"
        ).then(function () {
          window.location.href = "/pages/ordene_aqui.html";
        });
        $("#formulario")[0].reset();
      },
    });
  });
});
