<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h2>
                    <a class="nav-link" href="factgen.php">Generar Facturas</a>
                </h2>
                <h2>
                    <a class="nav-link" href="factcons.php">Consultar Facturas</a>
                </h2>
</div>

<button name="botonc" type="button" onclick="document.location='principal.php?da=2'">
Ingresar un nuevo plato
</button>

accion de un boton
<form method="POST" action="principal.php?da1=2&da2=1">  
                <span data-feather="user-plus"></span>
                <button type="submit" name="boton2" class="btn btn-primary">Agregar Usuario</button>
</form>


dentro de un php
<?php
    header("Location: principal.php?da1=1");
    header('Location: ../principal.php?da1=7&da2=1');
?>