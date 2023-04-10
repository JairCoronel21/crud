<?php
  require_once("c://xampp/htdocs/crud_poo/view/head/head.php");


?>


   <form action="store.php" method="POST" autocomplete="off">
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Codigo:</label>
        <input type="number" name="cod" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        <label for="exampleInputEmail2" class="form-label">DNI:</label>
        <input type="number" name="dni" required class="form-control" id="exampleInputEmail2" aria-describedby="emailHelp">
        <label for="exampleInputEmail3" class="form-label">Nombres:</label>
        <input type="text" name="nombre" required class="form-control" id="exampleInputEmail3" aria-describedby="emailHelp">
        <label for="exampleInputEmail4" class="form-label">Apellidos:</label>
        <input type="text" name="apellido" required class="form-control" id="exampleInputEmail4" aria-describedby="emailHelp">
    </div>

    <button type="submit" class="btn btn-primary">Guardar</button>
    <a class="btn btn-danger" href="../../index.php">Cancelar</a>
    </form>



<?php
  require_once("c://xampp/htdocs/crud_poo/view/head/footer.php");


?>