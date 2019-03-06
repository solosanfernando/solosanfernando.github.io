<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="shortcut icon" href="/favicon.png" />

    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="estilos/estilos.css">

    <script src="script/script.js"></script>

</head>

<body>

    <div class="container z-depth-5">
        <div class="cabecera teal lighten-2">

            <div class="z-depth-5 col  center logo">
                <img class="responsive-img " src="img/logo.png" alt="">
            </div>



            <div id="nav-mobile" class="textocabecera center col  ">Formulario de Conocimiento</div>



        </div>
        <div class="section teal lighten-2">
            <h5 class="section">Este formulario está destinado a que nos conozcamos mejor, para que sepamos en que área de
                conocimiento podéis colaborar con nosotros y vuestra disponibilidad.</h5>

        </div>


        <div id="imprimir" class="section">
            <form action="http://www.barbarrero.es/solo3/formulario.php" class="col s12" method="POST" enctype="multipart/form-data">
                <br>



                <h5 class="z-depth-5 teal lighten-2 textocabecera">DATOS PERSONALES</h5>
                <br>
                <div class="row ">
                    <div class="input-field col s6">
                        <i class="material-icons prefix ">accessibility</i>
                        <input id="nombre" name="nombre" type="text" class="validate" required>
                        <label for="nombre">NOMBRE</label>
                    </div>
                    <div class="input-field col s6 ">
                        <input id="apellido" name="apellido" type="text" class="validate" required>
                        <label for="apellido">APELLIDOS</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <i class="material-icons prefix">contact_mail</i>
                        <input id="email" type="email" name="email" class="validate" required>
                        <label for="email">CORREO ELECTRÓNICO</label>
                    </div>

                </div>


                <div class="row">
                    <div class="input-field col s12 ">
                        <i class="material-icons prefix">contacts</i>
                        <textarea id="textarea1" name="textarea1" class="materialize-textarea "></textarea>
                        <label for="textarea1">FORMACIÓN REGLADA Y TITULACIONES OFICIALES</label>
                    </div>


                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <i class="material-icons prefix">add_box</i>
                        <textarea id="textarea2" name="textarea2" class="materialize-textarea"></textarea>
                        <label for="textarea2">CURSOS Y OTRA FORMACIÓN</label>
                    </div>


                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <i class="material-icons prefix">business_center</i>
                        <textarea id="textarea3" name="textarea3" class="materialize-textarea"></textarea>
                        <label for="textarea3">EXPERIENCIA LABORAL</label>
                    </div>


                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <i class="material-icons prefix">folder_special</i>
                        <textarea id="textarea4" name="textarea4" class="materialize-textarea"></textarea>
                        <label for="textarea4">RELACION CON ASOCIACIONES, FUNDACIONES Y GRUPOS SOCIALES O PROFESIONALES</label>
                    </div>


                </div>

                <div class="row">
                    <div class="input-field col s12">
                        <i class="material-icons prefix">extension</i>
                        <textarea id="textarea4" name="textarea4" class="materialize-textarea"></textarea>
                        <label for="textarea4">¿EN QUE ÁREA TE GUSTARIA  COLABORAR CON SOLO SAN FERNANDO</label>
                    </div>



                </div>
                <div class="section row">
                    <div class="input-field col s12">
                    <h5 class="z-depth-5 teal lighten-2 textocabecera section">¿TE GUSTARÍA IR EN LAS LISTAS ELECTORALES DE SOLO SAN FERNANDO? ¿EN QUE PUESTO? </h5>
                        <p>Las dos primeras opciones son solo para afiliados</p>
                        <p>
                            <label>
                                <input name="group1" type="radio"  />
                                <span>ME GUSTARÍA SER ALCALDABLE</span>
                            </label>
                        </p>
                        <p>
                            <label>
                                <input name="group1" type="radio" />
                                <span>ME GUSTARÍA ESTAR ENTRE EL NÚMERO 2 y 5</span>
                            </label>
                        </p>
                        <p>
                            <label>
                                <input name="group1" type="radio" checked />
                                <span>ME ES INDIFERENTE LA POSICIÓN</span>
                            </label>
                        </p>
                        <p>
                            <label>
                                <input name="group1" type="radio" />
                                <span>NO ME GUSTARÍA IR EN NINGUNA LISTA ELECTORAL</span>
                            </label>
                        </p>

                    </div>


                </div>





                <div class="row">
                    <div class="col center s12 ">
                        <ul>
                            <li class="botones">

                                <button id="botonterminar" class="btn waves-effect waves-light teal lighten-2 disabled " type="submit" name="action">ENVIAR
                                    <i class="material-icons right">assignment_turned_in</i>
                                </button>

                            </li>
                            <li class="botones">
                                <button class="btn  waves-effect waves-light teal lighten-2 " onclick="borrar()" type="reset">
                                    BORRAR TODO
                                    <i class="material-icons">delete</i>
                                </button>


                            </li>


                        </ul>
                    </div>
                </div>
            </form>


        </div>
        <div class="section atencion">
            <form action="">
                <p>
                    <label>
                        <input id="acepto" type="checkbox" onclick="mostrarboton()" />
                        <span>Acepto la política de protección de datos de SSF.</span>
                    </label>
                </p>
                <p>El mero envio de este formulario significa la aceptación del tratamientos de los datos aqui introducidos por parte de SSF.
                    De acuerdo con la Ley Orgánica 15/1999 de Protección de Datos de carácter personal, SSF informa que sus datos serán
                    integrados en un fichero cuya responsabilidad es de SSF, que se utilizará para tramitar su afiliación, permitir los derechos y
                    obligaciones establecidos en los estatutos y mantenerlo informado de sus actividades. Los datos proporcionados se conservarán
                    durante los años necesarios para cumplir con las obligaciones legales. Los datos no se cederán a terceros salvo en los casos en que
                    exista una obligación legal. Puede ejercitar los derechos de acceso, rectificación, cancelación y oposición dirigiéndose a SSF, calle
                    Naranjos 9-A, 11100 San Fernando (Cádiz).</p>



            </form>

        </div>
        <footer>
            <br>
            <br>
            <br>

        </footer>



    </div>



    <!-- Compiled and minified JavaScript -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.2/jspdf.min.js"></script>

</body>

</html> 