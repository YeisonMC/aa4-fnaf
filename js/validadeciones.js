function validacionNombres() {
  nombre = window.event.keyCode;
  if (
    (nombre >= 65 && nombre <= 90) ||
    (nombre >= 97 && nombre <= 122) ||
    nombre == 32
  ) {
  } else {
    alert("ERROR! 😱 Solo se acepta letras");
    window.event.keyCode = 0;
  }
}

function validacionTEL() {
  tel = window.event.keyCode;
  if (tel >= 48 && tel <= 57) {
  } else {
    alert("ERROR! 😱 Solo se acepta números de 9 digitos");
    window.event.keyCode = 0;
  }
}
function validacionNumero() {
  numero = window.event.keyCode;
  if (numero >= 48 && numero <= 57) {
  } else {
    alert("ERROR! 😱 Solo se acepta números de 9 digitos");
    window.event.keyCode = 0;
  }
}

function validacionEmail() {
  email = window.event.keyCode;
  if (
    (email >= 97 && email <= 122) ||
    (email >= 45 && email <= 46) ||
    (email >= 48 && email <= 57) ||
    email == 64
  ) {
  } else {
    alert("ERROR! 😱 Solo se acepta correos");
    window.event.keyCode = 0;
  }
}

function validacionCorreo() {
  correo = window.event.keyCode;
  if (
    (correo >= 97 && correo <= 122) ||
    (correo >= 45 && correo <= 46) ||
    (correo >= 48 && correo <= 57) ||
    correo == 64
  ) {
  } else {
    alert("ERROR! 😱 Solo se acepta correos");
    window.event.keyCode = 0;
  }
}

function validacionTextarea() {}

function validarTodo() {
  cad = "OBSERVACIONES:";

  if (document.formulario.nombre.value == "") {
    cad = cad + "\n  *Ingresar nombres";
  }
  if (document.formulario.email.value == "") {
    cad = cad + "\n  *Ingresar apellidos";
  }
  if (document.formulario.tel.value == "") {
    cad = cad + "\n  *Ingresar un número de celular";
  }
  if (cad != "") {
    alert(cad);
  }
}
