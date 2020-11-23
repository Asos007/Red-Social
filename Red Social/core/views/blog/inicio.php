<main role="main" class="container">
    <div class="row">
        <div class="col-md-8 blog-main">
            <div class="row mb-2">
                <?php foreach ($mis_publicaciones as $key => $value) : ?>

                    <div class="col-md-6">
                        <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                            <div class="col p-4 d-flex flex-column position-static">
                                <h3 class="mb-0"><?= $value["titulo"] ?></h3>
                                <div class="mb-1 text-muted"><?= $value["fecha"] ?></div>
                                <p class="card-text mb-auto"><?= $value["contenido"] ?></p>
                                <br>
                                <a href="index.php?controller=blog&action=editar&id=<?= $key ?>" class="btn btn-sm btn-outline-warning">Modificar</a>
                                <br>
                                <a href="index.php?controller=blog&action=eliminar&id=<?= $key ?>" class="btn btn-sm btn-outline-danger">Eliminar</a>
                            </div>
                        </div>
                    </div>

                <?php endforeach ?>
            </div>
        </div>

        <aside class="col-md-4 blog-sidebar">

            <div class="card" style="width: 18rem;">
                <img src="<?= $usuario["foto"] ?>" class="card-img-top">
                <div class="card-body">
                    <h2><?= $usuario["username"] ?></h2>
                    <p class="card-text">
                        <?= $usuario["nombre"] . " " . $usuario["apellido"] ?>
                    </p>
                    <p class="card-text">
                        <?= $usuario["correo"] ?>
                    </p>
                </div>
            </div>

        </aside>
    </div>
</main>