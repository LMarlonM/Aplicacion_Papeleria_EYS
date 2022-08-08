function validarProducto(){
    var nombre, marca, precio_compra, precio_venta, stock_act, stock_id; 
    nombre=document.getElementById("nombre").value;
    marca=document.getElementById("marca").value;
    precio_compra=document.getElementById("precio_compra").value;
    precio_venta=document.getElementById("precio_venta").value;
    stock_act=document.getElementById("stock_act").value;
    stock_id=document.getElementById("stock_id").value;
    

    expresion= /\w+@\w+\.+[a-z]/;
    
    if(nombre === ""){
        Swal.fire({
            icon: 'error',
            title: 'Digite Nombre',
          })
          return false;
    }
    if (marca ==="") {
        Swal.fire({
            icon: 'error',
            title: 'Digite Marca',
          })
          return false;
    }
    if (precio_compra ==="") {
        Swal.fire({
            icon: 'error',
            title: 'Digite Precio de Compra',
          })
          return false;
    }
    if (precio_venta ==="") {
        Swal.fire({
            icon: 'error',
            title: 'Digite Precio de Venta',
          })
          return false;
    }
    if (stock_act ==="") {
        Swal.fire({
            icon: 'error',
            title: 'Stock Actual',
          })
          return false;
    }
    if (stock_id ==="") {
        Swal.fire({
            icon: 'error',
            title: 'Digite Stock Ideal',
          })
          return false;
    }
}
