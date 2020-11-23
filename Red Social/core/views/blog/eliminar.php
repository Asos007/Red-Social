<header class="jumbotron my-4">
    <h1 class="display-3">Estas seguro de continuar?</h1>
    <form method="post" action="index.php?controller=blog&action=eliminar&id=<?= $_GET["id"] ?>">
        <input type="text" value='<?php echo $_GET['id'] ?>' name="id" hidden>
        <a href="index.php?Controller=blog&Action=inicio"  class="btn btn-success btn-lg">Regresar a inicio</a>|
        <button type="submit"  class="btn btn-danger btn-lg">Eliminar</button>
    </form>
</header>