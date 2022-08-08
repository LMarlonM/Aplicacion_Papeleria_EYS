function validarProveedor(){
    var nombre, celular, telefono, direccion, email; 
    nombre=document.getElementById("nombre").value;
    celular=document.getElementById("celular").value;
    telefono=document.getElementById("telefono").value;
    direccion=document.getElementById("direccion").value;
    email=document.getElementById("email").value;
    

    expresion= /\w+@\w+\.+[a-z]/;
    
    if(nombre === ""){
        Swal.fire({
            icon: 'error',
            title: 'Digite Nombre',
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
    if (telefono ==="") {
        Swal.fire({
            icon: 'error',
            title: 'Digite Telefono',
          })
          return false;
    }
    if (direccion ==="") {
        Swal.fire({
            icon: 'error',
            title: 'Digite Direccion',
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
}
