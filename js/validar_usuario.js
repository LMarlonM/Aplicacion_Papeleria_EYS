function validarUsuario(){
    var nombre, apellido, celular, email, clave; 

    nombre=document.getElementById("nombre").value;
    apellido=document.getElementById("apellido").value;
    celular=document.getElementById("celular").value;
    email=document.getElementById("email").value;
    clave=document.getElementById("clave").value;
    

    expresion= /\w+@\w+\.+[a-z]/;
    
    if(nombre === ""){
        Swal.fire({
            icon: 'error',
            title: 'Digite Nombre',
          })
          return false;
    }
    if (apellido ==="") {
        Swal.fire({
            icon: 'error',
            title: 'Digite Apellido',
          })
          return false;
    }
    if (celular ==="") {
        Swal.fire({
            icon: 'error',
            title: 'Digite Celular',
          })
          return false;
    }
    if (email ==="") {
        Swal.fire({
            icon: 'error',
            title: 'Digite Email',
          })
          return false;
    }
    if (clave ==="") {
        Swal.fire({
            icon: 'error',
            title: 'Digite Clave',
          })
          return false;
    }
}
