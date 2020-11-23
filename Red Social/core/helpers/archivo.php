<?php

class archivo
{
    function subir_foto($mifoto = null)
    {
        $dir_subida = "img/users/";
        $fichero_subido = $dir_subida . basename($_FILES['foto']['name']);

        if ($_FILES['foto']["name"] != null) {
            if (file_exists($mifoto)) {
                unlink($mifoto);
            }
        }
        if (
            $_FILES["foto"]["type"] == "image/jpeg" ||
            $_FILES["foto"]["type"] == "image/JPEG" ||
            $_FILES["foto"]["type"] == "image/jpg" ||
            $_FILES["foto"]["type"] == "image/JPG" ||
            $_FILES["foto"]["type"] == "image/png" ||
            $_FILES["foto"]["type"] == "image/PNG"
        ) {
            if (!is_dir($dir_subida)) {
                mkdir($dir_subida, 0755, true);
            }
            move_uploaded_file($_FILES['foto']['tmp_name'], $fichero_subido);

            return $fichero_subido;
        } else {
            echo '
                <script>
                    alert("Foto no subida,debe tener el formato PNG o JPG");
                </script>';
        }
    }
}
