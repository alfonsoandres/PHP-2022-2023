<html>
<head>
<title>Ejercicio1</title>
<meta charset="UTF-8">
</head>
<?php
// se incluyen esta tabla de  códigos de error que produce la subida de archivos en PHPP
// Posibles errores de subida segun el manual de PHP
$codigosErrorSubida= [ 
    UPLOAD_ERR_OK         => 'Subida correcta',  // Valor 0
    UPLOAD_ERR_INI_SIZE   => 'El tamaño del archivo excede el admitido por el servidor',  // directiva upload_max_filesize en php.ini
    UPLOAD_ERR_FORM_SIZE  => 'El tamaño del archivo excede el admitido por el cliente',  // directiva MAX_FILE_SIZE en el formulario HTML
    UPLOAD_ERR_PARTIAL    => 'El archivo no se pudo subir completamente',
    UPLOAD_ERR_NO_FILE    => 'No se seleccionó ningún archivo para ser subido',
    UPLOAD_ERR_NO_TMP_DIR => 'No existe un directorio temporal donde subir el archivo',
    UPLOAD_ERR_CANT_WRITE => 'No se pudo guardar el archivo en disco',  // permisos
    UPLOAD_ERR_EXTENSION  => 'Una extensión PHP evito la subida del archivo',  // extensión PHP

]; 
$mensaje = '';

// No se recibe nada, error al enviar el POST, se supera post_max_size
if (count($_POST) == 0 ){
   $mensaje= "  Error: se supera el tamaño máximo de un petición POST ";
   }
// si no se reciben el directorio de alojamiento y el archivo, se descarta el proceso
else if ((! isset($_FILES['archivos']['name']))) {
    $mensaje .= 'ERROR: No se indicó el archivo y/o no se indicó el directorio';
} else 
    {
    
    
    $directorioSubida = "/home/alumnoa/tallerphp/imgusers"; 
    if ( is_dir($directorioSubida) && is_writable ($directorioSubida)) { 
        for ($i=0; $i < count($_FILES['archivos']['name']); $i++) { 
            $nombreFichero   =   $_FILES['archivos']['name'][$i];
            $tipoFichero     =   $_FILES['archivos']['type'][$i];
            $tamanioFichero  =   $_FILES['archivos']['size'][$i];
            $temporalFichero =   $_FILES['archivos']['tmp_name'][$i];
            $errorFichero    =   $_FILES['archivos']['error'][$i];
        if (!file_exists($directorioSubida .'/'. $nombreFichero)) {
            if ($tipoFichero=='image/png' || $tipoFichero=='image/jpg'  ) {
            
            }else{
                echo"tipo de fichero no valido";
            }
        }else{
            echo"ya existe loseinto maqina";
        }
            if (move_uploaded_file($temporalFichero,  $directorioSubida .'/'. $nombreFichero) == true) {
                $mensaje .= 'Archivo guardado en: ' . $directorioSubida .'/'. $nombreFichero . ' <br />';
            } else {
                $mensaje .= 'ERROR: Archivo no guardado correctamente <br />';
            }
        }
    } else {
             $mensaje .= 'ERROR: No es un directorio correcto o no se tiene permiso de escritura <br />';
        }
}
    // Obtengo el código de error de la operación, 0 si todo ha ido bien

    //
    // diselo
    

        

echo"<pre> <hr>";
var_dump($_FILES);
echo"</pre>";
?>

</html>
