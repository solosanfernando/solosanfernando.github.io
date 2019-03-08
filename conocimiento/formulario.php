<?php
require './vendor/autoload.php';

use Spipu\Html2Pdf\Html2Pdf;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$hoy = getdate();

ob_start();
?>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FORMULARIO DE CONOCIMIENTOS</title>




    <script src="script/script.js"></script>

</head>
<style>
    body {
        margin: 0;
        padding: 0;
        box-sizing: border-box;

    }

    table {

        width: 90%;
        margin: auto;
        padding: 10px;


    }

    .td {
        border: 1px solid #000;
        padding: 5px;
        font-size: 14px;

        overflow: hidden;


    }

    .pdf {
        text-aling: center;
        color: blue;
        width: 50%;
    }

    .atencion {
        margin-top: 15px;
        width: 400px;
        padding: 15px;
        text-align: justify;
    }

    h1,
    h2 {
        text-align: center;
    }
</style>



<body>

    <div style="margin:auto;">
        <table class="tabla" style="">
            <tr>
                <td>
                    <img src="img/logo.png" alt="">
                </td>
                <td>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <h1>FORMULARIO DE CONOCIMIENTOS</h1>
                </td>
            </tr>

            <tr>
                <td>
                    Nombre:
                </td>
                <td class="td">
                    <?= $_POST['nombre'] ?>
                </td>
            </tr>
            <tr>
                <td>
                    Apellidos:
                </td>
                <td class="td">
                    <?= $_POST['apellido'] ?>
                </td>
            </tr>
            <tr>
                <td>
                    Correo Electronico:
                </td>
                <td class="td">
                    <?= $_POST['email'] ?>
                </td>
            </tr>
            <tr>
                <td>
                    Formacion Reglada:
                </td>
                <td class="td">
                    <?= $_POST['textarea1'] ?>
                </td>
            </tr>
            <tr>
                <td>
                    Cursos:
                </td>
                <td class="td">
                    <?= $_POST['textarea2'] ?>
                </td>
            </tr>
            <tr>
                <td>
                    Experiencia Laboral:
                </td>
                <td class="td">
                    <?= $_POST['textarea3'] ?>
                </td>
            </tr>
            <tr>
                <td>
                    Asociaciones/Fundaciones:
                </td>
                <td class="td">
                    <?= $_POST['textarea4'] ?>
                </td>
            </tr>
            <tr>
                <td>
                    Areas de interes:
                </td>
                <td class="td">
                    <?= $_POST['textarea5'] ?>
                </td>
            </tr>


            <tr>
                <td>
                    Posicion en las listas :
                </td>
                <td class="td">
                    <?= $_POST['group1']?>
                </td>
            </tr>
        </table>

        <table>

            <tr>
                <td style="max-height:150px; max-width:200px;">
                    
                    <br>
                   San Fernando a
                    <?= $hoy['mday'] ?>/
                    <?= $hoy['mon'] ?>/
                    <?= $hoy['year'] ?>
                </td>
                <td class="atencion">

                    <p>
                        De acuerdo con la Ley Orgánica 15/1999 de Protección de Datos de carácter personal, SSF informa que sus datos serán
                        integrados en un fichero cuya responsabilidad es de SSF, que se utilizará para tramitar su afiliación, permitir los derechos y
                        obligaciones establecidos en los estatutos y mantenerlo informado de sus actividades. Los datos proporcionados se conservarán
                        durante los años necesarios para cumplir con las obligaciones legales. Los datos no se cederán a terceros salvo en los casos en que
                        exista una obligación legal. Puede ejercitar los derechos de acceso, rectificación, cancelación y oposición dirigiéndose a SSF, calle
                        Naranjos 9-A, 11100 San Fernando (Cádiz).</p>

                </td>
            </tr>

        </table>
        
    </div>


    <?php 

    $hora = gettimeofday();
    $html = ob_get_clean();
    $html2pdf = new Html2Pdf();
    $html2pdf->writeHTML($html);
    $ficheropdf = $_POST['nombre'] . $hora['sec'] . ".pdf";
    $pathpdf = __DIR__ . "/img/pdf/" . $ficheropdf;
    $html2pdf->output($pathpdf, 'F');


    //Recipiente
    $to = 'solosanfernando@gmail.com';

    //remitente del correo
    $from = 'prueba@barbarrero.es';
    $fromName = 'Servicio de Altas';

    //Asunto del email
    $subject = 'Nuevo formulario de conocimiento recibido';

    //Ruta del archivo adjunto
    $file = $pathpdf;

    //Contenido del Email
    $htmlContent = '<h1>NUEVO FORMULARIO CONOCIMIENTO RECIBIDO</h1>
            <h2>Examinar fichero adjunto</h2>';

    //Encabezado para información del remitente
    $headers = "De: $fromName" . " <" . $from . ">";

    //Limite Email
    $semi_rand = md5(time());
    $mime_boundary = "==Multipart_Boundary_x{$semi_rand}x";

    //Encabezados para archivo adjunto 
    $headers .= "\nMIME-Version: 1.0\n" . "Content-Type: multipart/mixed;\n" . " boundary=\"{$mime_boundary}\"";

    //límite multiparte
    $message = "--{$mime_boundary}\n" . "Content-Type: text/html; charset=\"UTF-8\"\n" .
        "Content-Transfer-Encoding: 7bit\n\n" . $htmlContent . "\n\n";

    //preparación de archivo
    if (!empty($file) > 0) {
        if (is_file($file)) {
            $message .= "--{$mime_boundary}\n";
            $fp =    @fopen($file, "rb");
            $data =  @fread($fp, filesize($file));


            @fclose($fp);
            $data = chunk_split(base64_encode($data));
            $message .= "Content-Type: application/octet-stream; name=\"" . basename($file) . "\"\n" .
                "Content-Description: " . basename($file) . "\n" .
                "Content-Disposition: attachment;\n" . " filename=\"" . basename($file) . "\"; size=" . filesize($file) . ";\n" .
                "Content-Transfer-Encoding: base64\n\n" . $data . "\n\n";
        }
    }
    $message .= "--{$mime_boundary}--";
    $returnpath = "-f" . $from;

    //Enviar EMail



    $mail = @mail($to, $subject, $message, $headers, $returnpath);



    //Estado de envío de correo electrónico
    if ($mail) {

        Header( "Location: http://www.solosanfernando.es/enviado.php");
    } else {
        Header( "Location: http://www.solosanfernando.es/noenviado.php");

       
    }

    ?>






    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.2/jspdf.min.js"></script>

</body> 