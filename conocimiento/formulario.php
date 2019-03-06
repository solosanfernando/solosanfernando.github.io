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
    <title>Solicitus de Afiliacion</title>




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
                    <h1>Formulario de Afiliacion</h1>
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
                    Direccion:
                </td>
                <td class="td">
                    <?= $_POST['direccion'] ?>
                </td>
            </tr>
            <tr>
                <td>
                    Codigo Postal:
                </td>
                <td class="td">
                    <?= $_POST['cp'] ?>
                </td>
            </tr>
            <tr>
                <td>
                    Ciudad
                </td>
                <td class="td">
                    <?= $_POST['ciudad'] ?>
                </td>
            </tr>
            <tr>
                <td>
                    Provincia:
                </td>
                <td class="td">
                    <?= $_POST['provincia'] ?>
                </td>
            </tr>
            <tr>
                <td>
                    Telefono Fijo:
                </td>
                <td class="td">
                    <?= $_POST['telefono_fijo'] ?>
                </td>
            </tr>
            <tr>
                <td>
                    Telefono Movil:
                </td>
                <td class="td">
                    <?= $_POST['telefono_movil'] ?>
                </td>
            </tr>
            <tr>
                <td>
                    Profesion:
                </td>
                <td class="td">
                    <?= $_POST['profesion'] ?>
                </td>
            </tr>
            <tr>
                <td>
                    Fecha de Nacimiento:
                </td>
                <td class="td">
                    <?php $fecha = date('d/m/Y', strtotime($_POST['fecha_nacimiento'])); ?>
                    <?= $fecha; ?>
                </td>
            </tr>
            <tr>
                <td>
                    D.N.I. :
                </td>
                <td class="td">
                    <?= $_POST['dni'] ?>
                </td>
            </tr>
        </table>
        <table>
            <tr>
                <td style="max-height:150px; max-width:200px;">

                    Imagen D.N.I. Fontal:
                    <br>

                    <img id="imgfrontal" src="<?= $_FILES['frontal']['tmp_name'] ?>" />


                </td>
                <td style="max-height:150px; max-width:200px;">
                    Imagen D.N.I. Trasera:
                    <br>

                    <img id="imgtrasera" src="<?= $_FILES['trasera']['tmp_name'] ?>" />
                </td>

            </tr>
        </table>
        <table>

            <tr>
                <td style="max-height:150px; max-width:200px;">
                    <img id="imgfirma" src="<?= $_FILES['firma']['tmp_name'] ?>" />
                    <br>
                    Firmado en San Fernando a
                    <?= $hoy['mday'] ?>/
                    <?= $hoy['mon'] ?>/
                    <?= $hoy['year'] ?>
                </td>
                <td class="atencion">

                    <p>
                        Acepto la politica de proteccion de datos , estatutos y normas de SSF.
                        La firma de esta hoja de afiliación significa la aceptación de los estatutos y demás normas internas
                        de SSF. De acuerdo con la Ley
                        Orgánica 15/1999 de Protección de Datos de carácter personal, SSF informa que sus datos serán
                        integrados en un fichero cuya
                        responsabilidad es de SSF, que se utilizará para tramitar su afiliación, permitir los derechos y
                        obligaciones establecidos en los
                        estatutos y mantenerlo informado de sus actividades. Los datos proporcionados se conservarán
                        durante
                        los años necesarios para
                        cumplir con las obligaciones legales. Los datos no se cederán a terceros salvo en los casos en que
                        exista una obligación legal. Puede
                        ejercitar los derechos de acceso, rectificación, cancelación y oposición dirigiéndose a SSF, calle
                        Naranjos 9-A, 11100 San Fernando
                        (Cádiz).</p>

                </td>
            </tr>

        </table>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>

        <div class="banco">
            <h1>DOMICILIACION BANCARIA</h1>

            <h2>Sr. Director del Banco o Caja de Ahorros

            </h2>
            <table style="border:2px solid #000;">
                <tr>
                    <td>Banco:</td>
                    <td>
                        <?= $_POST['banco'] ?>
                    </td>
                </tr>
                <tr>
                    <td>Sucursal:</td>
                    <td>
                        <?= $_POST['sucursal'] ?>
                    </td>

                </tr>
                <tr>
                    <td>Domicilio:</td>
                    <td>
                        <?= $_POST['domicilioBanco'] ?>
                    </td>

                </tr>
                <tr>
                    <td>Municipio:</td>
                    <td>
                        <?= $_POST['municipioBanco'] ?>
                    </td>

                </tr>
                <tr>
                    <td>Provincia:</td>
                    <td>
                        <?= $_POST['provinciaBanco'] ?>
                    </td>

                </tr>
                <tr>
                    <td>Codigo Postal:</td>
                    <td>
                        <?= $_POST['cpBanco'] ?>
                    </td>

                </tr>

            </table>
            <div style="margin:50px 150px;text-align:justify">
                Muy Sr. mio:
                Ruego a Vd que hasta nuevo aviso, haga efectivos al Partido Solo San Fernando (SSF), en concepto
                de cuota de asociación, los recibos que le presente por 5€ mensuales con cargo a mi cuenta
                corriente / libreta de ahorro n.º:
                <strong>
                    <?= $_POST['ibam'] ?></strong>


            </div>
            <div style="text-align:center;max-height:150px; max-width:200px;">
                <img style="margin-bottom:25px;" id="imgfirma" src="<?= $_FILES['firma']['tmp_name'] ?>" />
                <br>
                Firmado en San Fernando a
                <?= $hoy['mday'] ?>/
                <?= $hoy['mon'] ?>/
                <?= $hoy['year'] ?>
                <br>
                <br>
                <?= $_POST['nombre'] . "  " . $_POST['apellido'] ?>
                <br>
                D.N.I. :
                <?= $_POST['dni'] ?>


            </div>





        </div>




    </div>


    <?php 

    $hora = gettimeofday();
    $html = ob_get_clean();
    $html2pdf = new Html2Pdf();
    $html2pdf->writeHTML($html);
    $ficheropdf = $_POST['dni'] . $hora['sec'] . ".pdf";
    $pathpdf = __DIR__ . "/img/pdf/" . $ficheropdf;
    $html2pdf->output($pathpdf, 'F');


    //Recipiente
    $to = 'solosanfernando@gmail.com';

    //remitente del correo
    $from = 'prueba@barbarrero.es';
    $fromName = 'Servicio de Altas';

    //Asunto del email
    $subject = 'Nuevo formulario de alta recibido';

    //Ruta del archivo adjunto
    $file = $pathpdf;

    //Contenido del Email
    $htmlContent = '<h1>NUEVO FORMULARIO RECIBIDO</h1>
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

        echo "<div style=\"text-align:center\">        
                <img class=\"responsive-img \" src=\"img/logo.png\">
            <h1>Solicitud enviada, en breve nos pondremos en contacto con usted.</h1> <h1>Muchas gracias y bienvenido/a a Solo San Fernando.</h1>
        </div> <embed style=\"text-align:center\" src=\"./img/pdf/$ficheropdf\"  type=\"application/pdf\" width=\"800\" height=\"600\"></embed>";
    } else {

        echo "
           <img src=\"img/logo.png\"> El envío de correo falló intentelo de nuevo pasado unos minutos. Gracias";
    }

    ?>






    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.2/jspdf.min.js"></script>

</body> 