<html>
    <body>
        <?php
        function guarda_archivo($nomfile, $nomtemp){
            if (file_exists("./upload/" . $_FILES["file"]["name"])){
                echo $_FILES["file"]["name"] . " ya existe. ";
            }
            else {
                move_uploaded_file($nomtemp, "./upload/".$nomfile);
                return $nomfile;
            }
        }

        if (($_FILES["file"]["type"] == "image/gif")
        || ($_FILES["file"]["type"] == "image/jpeg")
        || ($_FILES["file"]["type"] == "image/pjpeg")){
            if ($_FILES["file"]["error"] > 0) {
                echo "Error: " . $_FILES["file"]["error"] . "<br />";
            }
            else {
            $subir = $_FILES["file"]["name"];
            $guarda_tmp = $_FILES["file"]["tmp_name"];
            
            echo "<br/>"."Guardado en: " . "./upload/". guarda_archivo($subir, $guarda_tmp);
            }
        }
        else {
            echo "<h2>no es un archivo de imagen<h2/>";
        }

        $archivo = fopen("./upload/info.txt", "w");
        fwrite($archivo, $_POST["a_nombre"] . PHP_EOL);
        fwrite($archivo, $_POST["b_apellido"] . PHP_EOL);
        fwrite($archivo, $_POST["b_dni"] . PHP_EOL);
        fwrite($archivo, $_POST["b_born"] . PHP_EOL);
        fwrite($archivo, $_FILES["file"]["name"] . PHP_EOL);
        fclose($archivo);
        ?>
    <body>
</html>