function validarCampo(){
    var email, clave;
    email=document.getElementById("email").value;
    clave=document.getElementById("clave").value;
    

    expresion= /\w+@\w+\.+[a-z]/;
    
    if(email === ""){
        Swal.fire({
            icon: 'error',
            title: 'Digite Datos de Ingreso',
            text: 'Email y clave'
          })
          return false;
    }
    if (clave ==="") {
        Swal.fire({
            icon: 'error',
            title: 'Digite Datos de Ingreso',
            text: 'Email y clave'
          })
          return false;
    }
    /* if(!expresion.test(email)){
        alert(""El correo no es valido)"";
        return false;
    } */
}
function error(){
  Swal.fire({
    icon: 'error',
    title: 'Datos Incorrectos',
    text: 'Email o clave'
  })
  return false;
}

function bienvenido(){
    Swal.fire({
      position: 'top-end',
      icon: 'success',
      title: 'Bienvenidos',
      showConfirmButton: false,
      timer: 2500
    })
}