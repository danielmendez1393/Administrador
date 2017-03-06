    <?php
    require_once("../../include/config/config.php");
    # definimos la carpeta destino

    $carpetaDestino="../../files/prueba/";

    # si hay algun archivo que subir

    if($_FILES["archivo"]["name"][0])
    { 
        # recorremos todos los arhivos que se han subido

        for($i=0;$i<count($_FILES["archivo"]["name"]);$i++)
        { 
            # si es un formato de imagen

            if($_FILES["archivo"]["type"][$i]=="image/jpeg" || $_FILES["archivo"]["type"][$i]=="image/pjpeg" || $_FILES["archivo"]["type"][$i]=="image/gif" || $_FILES["archivo"]["type"][$i]=="image/png" || $_FILES["archivo"]["type"][$i]=="application/pdf" || $_FILES["archivo"]["type"][$i]=="application/msword")
            {
                # si exsite la carpeta o se ha creado

                if(file_exists($carpetaDestino) || @mkdir($carpetaDestino))
                {
                    $origen=$_FILES["archivo"]["tmp_name"][$i];

                    $destino=$carpetaDestino.$_FILES["archivo"]["name"][$i];

                    # movemos el archivo

                    if(@move_uploaded_file($origen, $destino))
                    {
                        echo "<br>".$_FILES["archivo"]["name"][$i]." movido correctamente";
                    }else{
                        echo "<br>No se ha podido mover el archivo: ".$_FILES["archivo"]["name"][$i];
                    }

                }else{
                    echo "<br>No se ha podido crear la carpeta: up/".$user;
                }

            }else{
                echo "<br>".$_FILES["archivo"]["name"][$i]." - NO es imagen jpg";
            }
        }
    }else{

        echo "<br>No se ha subido ninguna imagen";

    }

    ?> 

    <form action="<?php echo $_SERVER["PHP_SELF"]?>" method="post" enctype="multipart/form-data" name="inscripcion">
 
         <p >
                                                    <input name="id_nts" type="hidden" class="feedback-input" placeholder="id"  />
                                                </p>
                                                
                                                <p >
                                                    <input name="fecha_nts" type="text" class="feedback-input" placeholder="FECHA"  />
                                                </p>

                                                <p >
                                                    <input name="ptitulo_nts" type="text" class="feedback-input" placeholder="TITULO PRINCIPAL"  />
                                                </p>

                                                <p>
                                                    <input name="titulo_nts" type="text" class="feedback-input" placeholder="TITULO"  />
                                                </p>
                                                
                                                <p>
                                                    <textarea name="descripcioncorta_nts" class="feedback-input" placeholder="DESCRIPCION CORTA"></textarea>
                                                </p>
                                                
                                                <p>
                                                    <textarea name="descripcion_nts" class="feedback-input" placeholder="DESCRIPCION"></textarea>
                                                </p>

                                                <p>
                                                    <textarea name="descripcioninterior_nts" class="feedback-input" placeholder="DESCRIPCION INTERIOR"></textarea>
                                                </p>

                                                <p>
                                                    <textarea name="nota_nts" class="feedback-input" placeholder="CUERPO DE LA NOTA"></textarea>
                                                </p>

                                                <p>
                                                    <textarea name="pie_nts" class="feedback-input" placeholder="PIE DE NOTA"></textarea>
                                                </p>
                                                <p >
                                                    <input name="rotativo_nts" type="number" value="1" max="1" min="0" class="feedback-input"  placeholder="ROTATIVO" />
                                                </p>

                                                <p >
                                                    <input name="archivo_nts" type="text" class="feedback-input"  placeholder="ARCHIVO" />
                                                </p>

                                                <p >
                                                    <input name="url_nts" type="text"  class="feedback-input"  placeholder="URL" />
                                                </p>
        <input type="file" name="archivo[]" multiple="multiple">

        <input type="submit" value="Enviar"  class="trig">

    </form>