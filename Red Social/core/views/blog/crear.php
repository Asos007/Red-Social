<form method="post" action="index.php?controller=blog&action=publicar">
    <div class="form-group">
        <label>Titulo</label>
        <input type="text" class="form-control" name="titulo">
    </div>
    <div class="form-group">
        <label>Contenido</label>
        <textarea class="form-control" rows="3" name="contenido"></textarea>
    </div>
    <div class="form-group">
        <input type="submit" class="btn btn-primary" value="Publicar">
    </div>

</form>