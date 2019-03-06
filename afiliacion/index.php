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


            <div id="nav-mobile" class="textocabecera center col  ">FORMULARIO DE AFILIACIÓN</div>


        </div>
        <div id="imprimir" class="section">
            <form action="http://www.barbarrero.es/solo/formulario.php" class="col s12" method="POST" enctype="multipart/form-data">
                <br>

                <h5 class="z-depth-5 teal lighten-2 textocabecera">DATOS PERSONALES</h5>
                <br>
                <div class="row ">
                    <div class="input-field col s6">
                        <i class="material-icons prefix ">accessibility</i>
                        <input id="nombre" name="nombre" type="text" class="validate" required>
                        <label for="nombre">NOMBRE</label>
                    </div>
                    <div class="input-field col s6">
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
                    <div class="input-field col s12  ">
                        <i class="material-icons prefix">add_location</i>
                        <input id="direccion" type="text" name="direccion" class="validate" required>
                        <label for="direccion">DIRECCIÓN</label>
                    </div>

                </div>
                <div class="row">
                    <div class="input-field col s4">

                        <input id="cp" type="text" name="cp" pattern="[0-9]{5}" class="validate" required>
                        <label for="cp">CÓDIGO POSTAL</label>
                    </div>
                    <div class="input-field col s4">
                        <input id="ciudad" type="text" name="ciudad" class="validate" required>
                        <label for="ciudad">CIUDAD</label>
                    </div>
                    <div class="input-field col s4">
                        <input id="provincia" type="text" name="provincia" class="validate" required>
                        <label for="provincia">PROVINCIA</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s4">
                        <i class="material-icons prefix">contact_phone</i>
                        <input id="telefono_fijo" name="telefono_fijo" pattern="[0-9]{9}" type="text" class="validate">
                        <label for="telefono_fijo">TELÉFONO FIJO</label>
                    </div>
                    <div class="input-field col s4">
                        <input id="telefono_movil" name="telefono_movil" type="text" pattern="[0-9]{9}" class="validate" required>
                        <label for="telefono_movil">TELÉFONO MOVIL</label>
                    </div>
                    <div class="input-field col s4">
                        <input id="profesion" name="profesion" type="text" class="validate" required>
                        <label for="profesion">PROFESIÓN</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        <i class="material-icons prefix">accessibility</i>
                        <input id="fecha_nacimiento" name="fecha_nacimiento" type="date" class="validate" required>
                        <label for="fecha_nacimiento">FECHA DE NACIMIENTO</label>
                    </div>
                    <div class="input-field col s6">
                        <input id="dni" name="dni" type="text" class="validate" required>
                        <label for="dni">D.N.I.(INCLUIDA LA LETRA)</label>
                    </div>
                </div>
                <br>
                
                <h5  class="teal lighten-2 textocabecera">DOMICILIACIÓN BANCARIA DE CUOTAS</h5>
                <h5  class="z-depth-5 teal lighten-2 textocabecera"> CUOTA MENSUAL: 5€</h5>
                

               
                <br>

                <div class="row">
                    <div class="">
                        <div class="input-field col s6">
                            <input id="banco" name="banco" type="text" class="validate" required>
                            <label for="banco">NOMBRE BANCO O CAJA:</label>
                        </div>
                        <div class="input-field col s6">
                            <input id="sucursal" name="sucursal" type="text" class="validate" required>
                            <label for="sucursal">NUMERO SUCURSAL:</label>
                        </div>

                    </div>
                </div>
                <div class="row">
                    <div class="">
                        <div class="input-field col s6">
                            <input id="domicilioBanco" name="domicilioBanco" type="text" class="validate" required>
                            <label for="domicilioBanco">DOMICILIO SUCURSAL:</label>
                        </div>
                        <div class="input-field col s6">
                            <input id="municipioBanco" name="municipioBanco" type="text" class="validate" required>
                            <label for="municipioBanco">MUNICIPIO:</label>
                        </div>

                    </div>
                </div>
                <div class="row">
                    <div class="">
                        <div class="input-field col s6">
                            <input id="provinciaBanco" name="provinciaBanco" type="text" class="validate" required>
                            <label for="provinciaBanco">PROVINCIA:</label>
                        </div>
                        <div class="input-field col s6">
                            <input id="cpBanco" name="cpBanco" pattern="[0-9]{5}" type="text" class="validate" required>
                            <label for="cpBanco">CÓDIGO POSTAL:</label>
                        </div>

                    </div>
                </div>
                <div class="row">
                    <div class="">
                        <div class="input-field col s12">
                            <input id="ibam" name="ibam" type="text" class="validate" required>
                            <label for="ibam">IBAN/NÚMERO DE CUENTA:</label>
                        </div>


                    </div>
                </div>
                <br>

                <h5 class="z-depth-5 teal lighten-2 textocabecera">DOCUMENTOS ESCANEADOS</h5>
                <br>




                <div class="imagenes section row">
                    <div class="file-field input-field  col s12 m6  z-depth-5 center">

                        <div class="textocabe">FRONTAL D.N.I.</div>
                        <input class=" input-image validate" required type="file" id="frontal" name="frontal" data-target="frontal" accept="image/*" onchange="mostrar(frontal)" />

                        <img class="responsive-img" alt="Haga una fotografía con su cámara de su D.N.I." id="imgfrontal" style="max-height:250px; max-width:300px;" />
                        <br>
                        <br>
                        <br>
                    </div>


                    <div class="file-field input-field col s12 m6  z-depth-5 center">

                        <div class="textocabe">
                            TRASERA D.N.I.

                        </div>

                        <input class=" input-image validate" required type="file" id="trasera" name="trasera" accept="image/*" onchange="mostrar(trasera)" />



                        <img id="imgtrasera" class="responsive-img" alt="Haga una fotografía con su cámara de la parte posterior del D.N.I." style="max-height:250px; max-width:300px;" />
                        <br>
                        <br><br>
                    </div>

                    <div class="file-field input-field z-depth-5 col s12 m6 center offset-m3">
                        <div class="textocabe">
                            FIRMA
                        </div>
                        <input class=" input-image validate" required type="file" id="firma" name="firma" accept="image/*" onchange="mostrar(firma)" />

                        <img id="imgfirma" class="responsive-img" alt="Haga una fotografía con su cámara de su firma sobre un papel blanco" style="max-height:250px; max-width:300px;" />
                        <br>
                        <br>
                        <br>
                    </div>

                    <div class="col center s12 ">
                        <ul>
                            <li class="botones">

                                <button id="botonterminar" class="btn waves-effect waves-light teal lighten-2 disabled " type="submit" name="action">Terminado
                                    <i class="material-icons right">assignment_turned_in</i>
                                </button>

                            </li>
                            <li class="botones">
                                <button class="btn  waves-effect waves-light teal lighten-2 " onclick="borrar()" type="reset">
                                    Borrar todo
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
                        <span>Acepto la política de protección de datos , estatutos y normas de SSF.</span>
                    </label>
                </p>
                <p>La firma de esta hoja de afiliación significa la aceptación de los estatutos y demás normas internas
                    de
                    SSF. De acuerdo con la Ley
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
                <p>Acceda <a class="waves-effect waves-light btn-light modal-trigger" href="#modal1">AQUI</a> a los
                    estatutos
                    fundacionales de SSF</p>
                <!-- Modal Trigger -->

            </form>

        </div>
        <footer>
            <br>
            <br>
            <br>

        </footer>



    </div>
    <div id="modal1" class="modal">
        <div class="modal-content">
            <img src="img/logo.png" alt="" class="responsive-img">
            <h4>ESTATUTOS FUNDACIONALES
            </h4>
            <h4> SOLO SAN FERNANDO</h4>
            <h5> CAPÍTULO I. DENOMINACIÓN, FINES, DOMICILIO</h5>

            <p>

                ARTÍCULO 1º. DENOMINACIÓN, SIGLAS Y SÍMBOLO.
                Al amparo de los artículos 6º de la Constitución Española y 1º de la Ley Orgánica 6/2002,
                de 27
                de
                junio, de Partidos Políticos, se constituye el partido político denominado «SOLO SAN
                FERNANDO»
                Sus siglas son «SSF», y su símbolo el puente Zuazo con una cañaílla detrás, con las letras
                «SOLO
                SAN FERNANDO» debajo del conjunto anterior, en color aguamarina, tal como se muestra:
            </p>

            <p>
                ARTÍCULO 2º. ÁMBITO Y FINES
                El ámbito de actuación es el municipio de San Fernando.
                «SOLO SAN FERNANDO» es una organización política dedicada al servicio de los intereses
                generales de la ciudadanía de San Fernando.
                Son fines de SSF:
                - La lucha contra la corrupción con todos los medios políticos y legales posibles.
                - Promover el desarrollo del sector primario de San Fernando a través de la defensa y
                explotación
                sostenible de su Parque Natural.
                - Promover el desarrollo del sector turístico explotando el patrimonio histórico-artístico
                de
                la
                ciudad e investigando sobre el mismo.
                - Fomentar la transparencia política e institucional en el Ayuntamiento de San Fernando.
                - Promover la cultura democrática y la participación ciudadana en los asuntos públicos.
                - Fomentar la gestión pública de los servicios municipales.
                - Promover la democracia, tanto la interna dentro del seno del partido, como la externa en
                las
                instituciones del Estado.
            </p>

            <p>
                ARTÍCULO 3º. DOMICILIO Y DIRECCIÓN ELECTRÓNICA
                El domicilio social radica en la calle Naranjos, No 9-A de San Fernando en la provincia de
                Cádiz,
                con el código postal 11.100.
                Sitio web: www.solosanfernando.es
                Dirección de correo electrónico: solosanfernando@gmail.com
                El domicilio y los sitios web podrán ser modificados por acuerdo de la Comisión Ejecutiva.
            </p>
            <h5> CAPÍTULO II. AFILIADOS. DERECHOS Y DEBERES</h5>
            <p>

                ARTÍCULO 4º. AFILIADOS
                Podrán afiliarse a «SOLO SAN FERNANDO» las personas físicas mayores de edad y que no
                tengan limitada ni restringida su capacidad de obrar, así como los ciudadanos extranjeros
                cuando la
                normativa vigente lo permita.
                De acuerdo con la legislación vigente existirá en el partido el Libro de Registro de
                Afiliados,
                en
                donde constarán los datos de altas y bajas definitivas.
            </p>
            <p>
                ARTÍCULO 5º. ADMISIÓN.
                1. La calidad de afiliado del partido se adquiere a solicitud del interesado por acuerdo de
                la
                Comisión Ejecutiva.
                2. La solicitud de la afiliación se realizará de acuerdo con el modelo aprobado y dirigido
                a la
                Comisión Ejecutiva en donde se hará constar los datos personales, DNI, domicilio,
                población,
                teléfono y dirección de correo electrónico, de poseer una. La Comisión Ejecutiva resolverá
                sobre la
                procedencia o no de la admisión entendiéndose el silencio como positivo. Se podrá recurrir
                el
                acuerdo denegatorio de la Comisión Ejecutiva, y ésta deberá comunicárselo al solicitante
                dentro
                de
                un plazo de treinta días desde el momento del acuerdo, debiendo ser motivado y disponiendo
                aquél
                de un plazo de cinco días para interponer recurso ante la Asamblea General, que resolverá
                definitivamente en su próxima reunión. La decisión será irrecurrible.
                3. El Partido dejará constancia de la afiliación de sus miembros en el correspondiente
                fichero
                o
                Libro de Registro de Afiliados que se regirá por lo dispuesto en la Ley Orgánica 15/1999,
                de 13
                de diciembre, de Protección de Datos de Carácter Personal, y en el que constarán los datos
                de
                altas y
                bajas definitivas.
                4. El afiliado tendrá a su disposición un ejemplar de los estatutos del partido y de sus
                reglamentos.

            </p>
            <p>
                ARTÍCULO 6º. DERECHOS DE LOS AFILIADOS
                De acuerdo con la legislación vigente, los afiliados tendrán derecho:
                a) A participar en las actividades del partido y en los órganos de gobierno y
                representación, a
                ejercer
                el derecho de voto, así como asistir a la Asamblea general, de acuerdo con estos estatutos.
                b) A ser electores y elegibles para los cargos del partido.
                c) A ser informados acerca de la composición de los órganos directivos y de administración
                o
                sobre
                las decisiones adoptadas por los órganos directivos, sobre las actividades realizadas y
                sobre
                la
                situación económica.
                d) A impugnar los acuerdos de los órganos del partido que estimen contrarios a la Ley o a
                estos
                estatutos.
                e) A impulsar el cumplimiento de los fines del partido, mediante la presentación de
                iniciativas,
                dedicación personal y aportaciones económicas.
                f) A manifestar sugerencias, opiniones y quejas ante los órganos representativos.
                h) A acudir al Órgano encargado de la Defensa de los Derechos del Afiliado.
                El Órgano de Defensa de Derechos de los Afiliados desarrollará el resto de derechos de los
                afiliados, con posterior acuerdo de la Asamblea General.
            </p>
            <p>
                ARTÍCULO 7º. DEBERES DE LOS AFILIADOS
                a) Compartir las finalidades del partido y colaborar para la consecución de las mismas.
                b) Respetar lo dispuesto en los estatutos y en las leyes.
                c) Acatar y cumplir los acuerdos válidamente adoptados por los órganos directivos del
                partido.
                d) Abonar las cuotas y otras aportaciones que, con arreglo a los estatutos, puedan
                corresponder
                a
                cada uno.
                e) Participar en los procesos electorales como interventores o apoderados del Partido
                cuando
                sean
                requeridos para ello.
                f) Colaborar activamente en las campañas electorales.
                g) Guardar el secreto y custodiar debidamente los ficheros de datos de carácter personal a
                los
                que se
                tenga acceso.
                El Órgano de Defensa de Derechos de los Afiliados desarrollará el resto de obligaciones de
                los
                afiliados, con posterior acuerdo de la Asamblea.

            </p>
            <p>
                ARTÍCULO 8º. BAJA DEL AFILIADO
                Se causará baja en el partido por:
                a) Libre decisión de la persona afiliada del partido mediante la oportuna comunicación.
                b) Por resolución sancionadora de los órganos competentes.
                c) Por impago injustificado de la cuota de afiliación.
                d) Por fallecimiento de la persona afiliada.
                El Órgano de Defensa de Derechos de los Afiliados desarrollará el resto de motivos y
                mecanismos
                de baja involuntaria del partido, con posterior acuerdo de la Asamblea.

            </p>
            <p>
                ARTÍCULO 9º. PROCEDIMIENTO DE RECLAMACIÓN.
                1.- Los afiliados podrán formular reclamación frente a los acuerdos y decisiones adoptados
                por
                los
                órganos del partido en un plazo de quince días desde su adopción.
                2.- Dicha reclamación se interpondrá ante el Órgano de Defensa de Derechos de los
                Afiliados,
                que
                deberá resolver en un plazo no superior a un mes desde su interposición. Contra la
                resolución
                del
                Órgano de Defensa de Derechos de los Afiliados no cabe ninguna otra reclamación.
            </p>
            <h5>CAPÍTULO III. RÉGIMEN DISCIPLINARIO</h5>
            <h5> SECCIÓN PRIMERA. DE LAS INFRACCIONES Y SANCIONES</h5>
            <p>
                ARTÍCULO 10º. RÉGIMEN DISCIPLINARIO
                Conforme a la legislación vigente, el Órgano de Defensa de Derechos de los Afiliados
                desarrollará
                un régimen disciplinario completo que sea reflejo del espíritu de democracia y
                transparencia
                del
                partido, y del estado de derecho en el que vivimos, con posterior acuerdo de la Asamblea
                General.
                Mientras tanto, servirá el siguiente régimen disciplinario básico:
                El afiliado que incumpliese con sus deberes para con el partido o que con su conducta
                pública o
                privada menoscabe o atente contra los principios del partido, será objeto del
                correspondiente
                expediente disciplinario. Las medidas disciplinarias sólo podrán imponerse mediante
                procedimiento
                contradictorio, en el que, en todo caso, se garantice al afectado los siguientes derechos:
                a) A ser informado de los hechos que den lugar a tales medidas.
                b) A ser oído con carácter previo a su adopción.
                c) A que el acuerdo por el que se adopte la medida disciplinaria sea motivado.
                5
                d) A formular contra dicho acuerdo los recursos que procedan.
            </p>

            <p>
                ARTÍCULO 11º. DE LAS INFRACCIONES Y SUS CLASES.
                1.- Se considerará infracciones las acciones u omisiones, voluntarias o no, realizadas por
                cualquier
                afiliado en contra del partido, sus órganos o afiliados, que estén expresamente tipificadas
                en
                los
                presentes Estatutos. En ningún caso podrá ser de aplicación la analogía a la hora de
                calificar
                una
                acción u omisión como infracción.
                2.- Las infracciones pueden ser muy graves, graves o leves.
            </p>
            <p>
                ARTÍCULO 12º. INFRACCIONES MUY GRAVES.
                1.- Se considerará infracciones muy graves las siguientes:
                a) Atentar contra cualquier derecho o menoscabar el ejercicio de un deber de cualquiera de
                los afiliados.
                b) Incurrir en cualquier forma de corrupción en el ejercicio de cargos públicos o cargos
                internos del partido.
                c) Actuar en el ejercicio de los cargos públicos de forma contraria a los fines del
                partido.
                d) Revelar cualquier acuerdo, resolución o decisión del partido cuando se haya acordado
                guardar secreto sobre los mismos.
                e) Haber sido condenado por un delito relacionado con la corrupción.
                f) Por impago de las cuotas u otras aportaciones debidas, cuando dicha situación se dé por
                tiempo superior a un año.
                g) Haber sido sancionado con dos o más faltas graves.
                2.- Las infracciones muy graves serán sancionadas con:
                a) Suspensión de militancia durante un período de entre un año y un día y dos años.
                b) Inhabilitación para el desempeño de cargos en el seno del partido y para ser incluido en
                listas electorales durante igual período de tiempo.
                c) Expulsión del partido.
                3.- Las sanciones previstas en los apartados a) y b) del número 2 de este artículo no son
                excluyentes
                entre sí y podrán ser acumuladas frente a una misma infracción.
                4.- La infracción contemplada en el apartado e) del número 1 de este artículo llevará
                aparejada, en
                todo caso, la sanción de expulsión del partido.
            </p>
            <p>
                ARTÍCULO 13º. INFRACCIONES GRAVES.
                1.- Se considerará infracciones graves las siguientes:
                6
                a) Propagar, por cualquier medio, noticias que desprestigien al partido o menoscaben la
                imagen del mismo o de cualquiera de sus órganos.
                b) Mostrar en público una actitud o hacer manifestaciones que dañen seriamente la imagen
                del partido, siendo especialmente graves los casos de machismo, homofobia, xenofobia y
                cualquier otro mensaje de odio a colectivos así como la apología de cualquier tipo de
                violencia o idea que contravenga la Declaración Universal de los Derechos Humanos.
                c) Hacer dejación de las funciones que el partido le hubiese encomendado.
                d) Suplantar o atribuirse cargos o funciones de cualquier clase o naturaleza que no le
                correspondan.
                e) Cualquier manifestación pública en los medios de comunicación, que suponga
                descrédito, menosprecio o descalificación de cualquier afiliado.
                f) No asistir a las reuniones convocadas por los órganos del partido durante un período de
                seis meses, salvo causa debidamente acreditada, cuando se tenga obligación de asistir a las
                mismas.
                g) Impago de las cuotas u otras aportaciones debidas, cuando dicha situación se dé por
                tiempo superior a seis meses.
                h) Haber sido sancionado con dos o más faltas leves.
                2.- Las infracciones graves serán sancionadas con:
                a) Suspensión de militancia por un período de entre seis meses y un día y un año.
                b) Inhabilitación para el desempeño de cargos en el seno del partido y para ser incluido en
                listas electorales durante igual período de tiempo.
                3.- Ambas sanciones no son excluyentes entre sí y podrán ser acumuladas frente a una
                misma infracción.
            </p>
            <p>
                ARTÍCULO 14º. INFRACCIONES LEVES.
                1.- Se considerará infracciones leves las siguientes:
                a) Actuar con negligencia en cualquiera de las funciones que le hayan sido encomendadas
                por el partido.
                b) No asistir a las reuniones convocadas por los órganos del partido durante un período de
                tres meses, salvo causa debidamente acreditada, cuando se tenga obligación de asistir a las
                mismas.
                c) Alterar el orden en cualquier reunión del partido o desoír las indicaciones de quien
                presida la misma en relación con el comportamiento que debe tenerse en la misma y/o en
                relación con cualquier otro afiliado presente en la reunión.
                2.- Las infracciones leves serán sancionadas con:
                a) Suspensión de militancia por un período de entre uno y seis meses.
                b) Inhabilitación para el desempeño de cargos en el seno del partido y para ser incluido en
                listas electorales durante igual período de tiempo.
                c) Apercibimiento verbal o escrito.
                3.- Las sanciones previstas en los apartados a) y b) anteriores no son excluyentes entre sí
                y
                podrán
                ser acumuladas frente a una misma infracción.
            </p>
            <p>
                ARTÍCULO 15º. DE LA PRESCRIPCIÓN DE LAS INFRACCIONES.
                Las infracciones prescriben, a los dos años las muy graves, al año las graves y a los seis
                meses las
                leves. Los plazos se contarán a partir de que se haya cometido la infracción y quedará
                interrumpido
                desde el momento en que se inicie contra el presunto infractor el correspondiente
                expediente
                disciplinario.
            </p>
            <p>
                ARTÍCULO 16º. DE LA RECUPERACIÓN DE DERECHOS POR LOS SANCIONADOS.
                Aquellos afiliados que hayan sido sancionados recobrarán automáticamente la plenitud de sus
                derechos una vez que hayan cumplido la sanción que les haya sido impuesta, salvo en caso de
                expulsión, que deberán volver a solicitar su readmisión, de acuerdo con lo dispuesto en el
                artículo 4
                de los presentes Estatutos.
            </p>
            <h5>SECCIÓN SEGUNDA: DEL PROCEDIMIENTO DISCIPLINARIO</h5>
            <p>
                ARTÍCULO 17º. TRAMITACIÓN.
                El procedimiento disciplinario se tramitará conforme a los principios contenidos en el
                artículo
                9º de
                los presentes Estatutos y se iniciará por la Comisión Ejecutiva en la primera reunión que
                celebre
                tras conocerse los hechos, que designará entre sus miembros un instructor, que será el
                responsable
                de su impulso.
                Una vez examinados los antecedentes por el instructor, éste informará a la Comisión
                Ejecutiva
                en
                un plazo no superior a quince días, al que propondrá el archivo de las actuaciones o la
                propuesta de
                sanción. De todo ello se dará traslado al supuesto infractor para que alegue lo que
                considere
                oportuno en su favor, en el plazo de quince días desde la notificación, pudiendo aportar y
                proponer
                las prueba que estime pertinentes.
                En los cinco días siguientes, el instructor resolverá sobre las pruebas propuestas u otras
                adicionales
                que considere convenientes. Contra la inadmisión de las pruebas propuestas, el supuesto
                infractor
                podrá recurrir ante la Comisión Ejecutiva en un plazo de quince días desde que haya tenido
                8
                conocimiento de la decisión del instructor. Contra la resolución que adopte la Comisión
                Ejecutiva
                no cabrá recurso alguno.
                Las pruebas admitidas deberán practicarse en el plazo de un mes en presencia del instructor
                y
                del
                supuesto infractor. Finalizada la práctica de prueba, el instructor elevará a la Comisión
                Ejecutiva, en
                el plazo de cinco días, su propuesta de resolución y dará traslado de las mismas al
                supuesto
                infractor, quien podrá, también en el plazo de cinco días desde la notificación, remitir a
                la
                Comisión
                Ejecutiva sus conclusiones.
                La Comisión Ejecutiva resolverá en la siguiente reunión que celebre y, en todo caso, en el
                plazo
                máximo de un mes. La resolución deberá ser motivada, conteniendo los antecedentes de hecho,
                los
                hechos declarados probados, los fundamentos jurídicos y el fallo.
                Contra la resolución de la Comisión Ejecutiva, el supuesto infractor podrá formular recurso
                ante la
                Asamblea General, que deberá resolver definitivamente en la siguiente reunión que celebre
                y, en
                todo caso, en el plazo máximo de seis meses.
                Los plazos establecidos en el anterior procedimiento son preclusivos, si bien los de
                resolución
                y
                práctica de prueba podrán ser extendidos moderadamente y por una sola vez, mediante
                resolución
                motivada del instructor del expediente.
            </p>
            <p>
                ARTÍCULO 18º. MEDIDAS CAUTELARES.
                Todo procedimiento disciplinario por infracción grave o muy grave llevará aparejada la
                suspensión
                provisional de funciones y militancia del afiliado, salvo resolución motivada en contra de
                la
                Comisión Ejecutiva, a propuesta del instructor, atendiendo a la gravedad de los hechos y a
                las
                circunstancias del caso. La suspensión provisional de funciones y militancia no prejuzgará
                el
                resultado del expediente disciplinario.

            </p>
            <p>
                ARTÍCULO 19º. SUSPENSIÓN CAUTELAR.
                1.- El afiliado que se encuentre incurso en un proceso penal por un delito relacionado con
                la
                corrupción será suspendido cautelarmente de militancia de forma automática en el momento en
                que
                se dicte en su contra el auto de apertura de juicio oral.
                2.- Dicha suspensión cautelar de militancia se mantendrá hasta que se adquiera firmeza la
                resolución
                judicial por la que finalice el correspondiente proceso penal.
            </p>
            <h5> CAPÍTULO III. ÓRGANOS DE REPRESENTACIÓN, GOBIERNO Y
                ADMINISTRACIÓN</h5>

            <p>
                ARTÍCULO 20º. PRINCIPIOS DE ORGANIZACIÓN INTERNA.
                La organización y estructura general de «SOLO SAN FERNANDO» se configura en orden a los
                siguientes principios básicos:
                9
                - La concepción del Partido como instrumento al servicio de la sociedad y de los ciudadanos.
                - La promoción de cauces para el debate en el seno del Partido, como expresión de su democracia
                interna.
                - La participación, en igualdad de oportunidades, de todos y cada uno de los afiliados, como
                eje
                fundamental de vertebración del Partido.
                - La aceptación de los principios de solidaridad, lealtad y respeto mutuo entre los miembros
                del
                Partido.
                - El compromiso ético de cumplir los deberes de los afiliados, previstos en estos Estatutos,
                así
                como el deber de la Organización de respetar y tutelar los derechos de los afiliados.
                - La definición del concepto de disciplina como compromiso ético y asunción de la
                responsabilidad
                personal del afiliado.
                - El contacto permanente con los ciudadanos y con las organizaciones sectoriales que los
                representan.
                - La utilización de las tecnologías de la información como cauce preferente de comunicación
                interna y con los ciudadanos.
                - La transparencia en todas sus actuaciones.

            </p>
            <p>
                ARTÍCULO 21. ÓRGANOS DEL PARTIDO
                El partido se ajustará en su organización, estructura interna, funcionamiento y actividad a los
                principios democráticos y a lo dispuesto en la Constitución y en las leyes.
                Los órganos del partido son:
                - La Asamblea General.
                - La Secretaría General.
                - La Comisión Ejecutiva.
                - El Tesorero/Administrador.
                - Las Comisiones de Trabajo.
                - El Órgano de Defensa de los Derechos de los Afiliados.
                La comunicación interna del partido se lleva a cabo por una lista de correo general en la que
                todos
                los miembros están suscritos. A través de dicha lista de correo podrán tomarse decisiones de
                carácter ordinario entre reuniones sucesivas de la Asamblea General conforme a los criterios
                generales establecidos en el presente artículo, a salvedad de aquellas decisiones que invadan
                competencias y atribuciones recogidas de forma explícita en los presentes estatutos para los
                distintos órganos de gobierno.
                Para miembros que no tengan acceso a nuevas tecnologías, se procurarán métodos alternativos de
                información y comunicación. Sin embargo, la línea fundamental de trabajo diario, comunicación y
                traspaso de información será telemática.
                Todas las convocatorias han de hacerse públicas por la lista de correo en la que están dados de
                alta
                todos los miembros del Partido. Ninguna convocatoria puede hacerse con menos de 7 días de
                antelación, de modo que haya tiempo para preparar los asuntos a debate.
                Además de estas, todos los órganos del partido comparten las siguientes características:
                - Forma de designar el orden del día: Se crea colaborativamente en un PAD (sistema de redacción
                colaborativa online) desde el momento en el que se decide la siguiente fecha de reunión. Todos
                los
                miembros pueden aportar contenido hasta 24 horas antes de la reunión.
                El número de miembros requeridos para la inclusión de asuntos en el orden del día es de uno.
                - Reglas de deliberación:
                Conversando y respetando a todos los integrantes. En cada reunión se designarán dos moderadores
                del debate. Se tomarán turnos de palabra y se irá moderando el debate recogiendo las propuestas
                más apoyadas, intentando llegar a consensos o, en su defecto, a un número acotado de propuestas
                para que sean sometidas a votación.
                - Mayoría requerida para la adopción de acuerdos:
                Las decisiones se intentan tomar por consenso. De no ser posible, las decisiones se tomarán por
                mayoría establecida en el 66% (2/3) de los asistentes.
                De no conseguirse acuerdo, la decisión se pospondrá a la siguiente reunión del órgano. En este
                caso
                será suficiente una mayoría simple. En casos de urgencia, la segunda vuelta de la votación, que
                necesitaría esta mayoría simple, podría darse en la misma reunión de la votación de 2/3.
                - Modalidad:
                Los encuentros de los órganos del partido podrán ser tanto presenciales como a través de
                internet,
                ya sea por sala de chat o mediante salas de conferencias o videoconferencias. En todos casos se
                recogerá en el acta correspondiente a dicho encuentro una descripción detallada de la modalidad
                adoptada.
                Las actas del partido serán de naturaleza pública.

            </p>
            <p>
                ARTÍCULO 22º. PROCEDIMIENTOS DE ELECCIÓN Y ADOPCIÓN DE ACUERDOS
                1. La votación de las Resoluciones, Dictámenes y Acuerdos, así como de la gestión de la
                Comisión
                Ejecutiva, la Secretaria General y el Órgano de Defensa de los Derechos de los Afiliados se
                realizará mediante el voto individual y público de los afiliados en la Asamblea General.
                2. La Comisión Ejecutiva será elegida por medio del sistema de voto mayoritario, mediante voto
                individual, directo y secreto de todos los afiliados en las listas cerradas.
                3. La elección del Órgano de Defensa de los Afiliados se realizará m
                11
                Las primarias se celebrarán por el sistema de “doble vuelta”. En la primera vuelta, resultará
                elegido/a Secretario/a General el candidato/a que obtenga más del 50% de los votos válidos. Si
                hubiera más de dos candidaturas proclamadas y ninguna obtuviera más del 50% de los votos
                válidos en la primera vuelta, pasarán a la segunda vuelta las dos candidaturas que obtengan el
                mayor
                número de votos, en la que resultará elegido/a Secretario/a General el candidato/a que obtenga
                mayor número de votos.
            </p>
            <p>
                ARTÍCULO 23º. ASAMBLEA GENERAL
                La Asamblea General es el órgano soberano del partido y está compuesto por el conjunto de los
                afiliados, que podrán actuar directamente o por medio de compromisarios, con autorización por
                escrito y fotocopia del documento nacional de identidad.
                La Asamblea General se reunirá con carácter ordinario una vez al año y con carácter
                extraordinario
                cuando así lo acuerde la Comisión Ejecutiva. La convocatoria la realizará la Secretaría
                General,
                previo acuerdo de la Comisión Ejecutiva, y será remitida a todos los afiliados con, al menos,
                siete
                días de antelación a su celebración. Dicha convocatoria contendrá el lugar, fecha y hora de
                celebración, así como el orden del día de los asuntos a tratar.
                Los afiliados podrán proponer asuntos a tratar por la Asamblea General siempre que remitan su
                propuesta por escrito y amparada por la firma de, al menos, diez afiliados, con la antelación
                suficiente para que la Comisión Ejecutiva la estudie y la incluya en el orden del día, junto
                con el
                resto de asuntos a tratar.
                La Asamblea General estará presidida por la Secretaría General del partido y adoptará sus
                acuerdos
                por mayoría simple de los asistentes. Cada asunto a tratar en las sesiones de la Asamblea
                General se
                desarrollará de modo que se permita un turno de intervenciones a los afiliados previo a la
                adopción
                de cada acuerdo.
                A propuesta de la Junta Directiva, la Asamblea General aprobará un Código Ético de
                responsabilidades y obligaciones de los cargos electos del partido. Habitualmente los órganos
                del
                partido tienen que rendir cuentas de la gestión realizada, a la que podrá censurar o aprobar
                por
                acuerdo de los afiliados o de los cargos del partido, y someterse a las preguntas que se les
                formulen
                ya que deberán realizar su acción política acorde con los principios y fines del partido.
                También se
                les puede pedir información sobre su situación patrimonial o actividades económicas en las que
                estén relacionados.
                Son funciones de la Asamblea General:
                - La elección de los demás órganos del partido.
                - La discusión y aprobación de los proyectos encaminados al cumplimiento de los fines del
                partido.
                - La disposición y enajenación de sus bienes.
                - La ratificación de las listas electorales y del programa electoral.
                - Aprobar los presupuestos y las cuentas anuales.
                - La modificación de los Estatutos.
                - La disolución del partido.
            </p>
            <p>
                ARTÍCULO 24º. LA SECRETARIA GENERAL.
                Quien ostente la Secretaria General es el representante legal del partido, y es elegido por la
                Asamblea General por un período de dos años.
                Sus funciones son:
                - Presidir las reuniones de la Asamblea General y de la Comisión Ejecutiva.
                - Convocar las reuniones de la Comisión Ejecutiva.
                - Designar los vocales de la Comisión Ejecutiva.
                - Coordinar y promover la actividad política del partido.
                - Visar las actas de las reuniones de la Asamblea General y de la Comisión Ejecutiva.
                - Velar por la ejecución de los acuerdos adoptados por los distintos órganos del partido.
                - Autorizar toda clase de documentos que elabore el partido.
                - Autorizar los pagos que vaya a realizar el Tesorero/Administrador.
                - Adoptar cuantas medidas de carácter urgente considere pertinentes para el mejor gobierno y
                administración del partido, dando cuenta de las mismas a la Comisión Ejecutiva y/o a la
                Asamblea General, según proceda.

            </p>
            <p>
                ARTÍCULO 25. LA COMISIÓN EJECUTIVA
                La Comisión Ejecutiva es el órgano de dirección y gobierno del partido entre asambleas, es
                elegido
                por la Asamblea General por un período de dos años y está compuesto por la Secretaria General,
                Tesorero/Administrador y un mínimo de cinco vocalías a determinar por la Secretaria General, a
                menos que el partido cuenta con menos de 100 afiliados, en cuyo caso no habrá mínimo de
                vocalías.
                Se reunirá con carácter ordinario quincenalmente y con carácter extraordinario cuando así lo
                estime
                la Secretaria General.
                La convocatoria la realizará la Secretaría General y será remitida a todos los miembros con, al
                menos, tres días de antelación a su celebración. Dicha convocatoria contendrá el lugar, fecha y
                hora
                de celebración, así como el orden del día de los asuntos a tratar.
                Tres miembros de la Comisión pueden solicitar a la Secretaria General la inclusión de uno o más
                asuntos en el orden del día. Si ésta ya ha sido convocada, la solicitud debe formularse al
                siguiente
                día de la recepción de la convocatoria, a fin de que se pueda informar de la ampliación del
                orden del
                día.
                La Comisión Ejecutiva quedará válidamente constituida cuando asistan a sus reuniones más de un
                tercio de sus miembros, estará presidido por la Secretaria General del partido y adoptará sus
                acuerdos por mayoría simple de los asistentes.
                El Reglamento de desarrollo de los presentes Estatutos regulará las reglas de deliberación que
                permitan el contraste de pareceres y la forma en que se producirá el correspondiente debate y
                deliberación.
                Sus competencias son:
                - La organización del Partido.
                - Ejecutar los acuerdos adoptados por la Asamblea General.
                - Elaborar las listas electorales.
                - Aprobar y cancelar acuerdos con otras formaciones políticas.
                - Fiscalizar la política municipal.
                - Asumir la dirección de las campañas electorales.
                - Proponer a la Asamblea General las listas electorales y el programa electoral.
                - La adquisición, administración, transmisión y gravamen de los bienes del partido.
                - La realización de cuantas actividades sean necesarias en todos los aspectos para el
                cumplimiento
                de los fines del Partido.
            </p>
            <p>
                ARTÍCULO 26º. EL TESORERO/ADMINISTRADOR.
                El Tesorero/Administrador es elegido por la Asamblea General por un período de dos años.
                Sus funciones son:
                - Gestionar los recursos económicos del partido.
                - Efectuar cobros y pagos con el visto bueno de la Secretaria General.
                - Elaborar los presupuestos y las cuentas anuales.
                - Llevar los libros contables conforme a la legislación vigente.
                - Cumplir las obligaciones fiscales del partido.
                - Ser responsable del personal laboral del partido.
                - Elevar al Comité de Garantías las cuentas anuales para su fiscalización.
                - Remitir las cuentas anuales al Tribunal de Cuentas.
                - Custodiar la documentación del partido, incluidos los libros de actas y de afiliados.
                - Levantar, redactar y firmar las actas de las reuniones de la Asamblea General y de la
                Comisión
                Ejecutiva.
                - Dar fe de los acuerdos adoptados.
                - Elaborar los documentos y certificados.
            </p>
            <p>
                ARTÍCULO 27: LAS COMISIONES DE TRABAJO
                Se deciden en la Asamblea General. Constituidas ad hoc para la realización de tareas
                específicas, ya
                sean de estudio, de debate, de desarrollo de contenidos, de elaboración de materiales
                audiovisuales,
                de financiación, de comunicación, de relación con otros actores político-sociales o con medios
                de
                comunicación u otras.
                Estos equipos de trabajo nunca funcionarán con numerus clausus de participantes. Muy por el
                contrario, permanecerán abiertos a la inclusión y mutantes, en continua simbiosis con el resto,
                que
                podrán incluir expertos externos al partido y simpatizantes voluntarios.
                - Composición:
                Cualquier miembro que quiera trabajar e incluso expertos externos al partido o simpatizantes
                que
                decida la Asamblea.
                - Plazos de convocatoria de las reuniones:
                Cada vez que se necesite realizar un trabajo concreto, respetando siempre los plazos asignados
                por
                la asamblea general.
                - Competencias o atribuciones:
                Preparar contenidos o acciones que ratificará la Asamblea General.
                - Régimen de funcionamiento:
                Se expondrá el asunto a tratar, los objetivos a alcanzar y los plazos fijados para la
                consecución de
                los mismos. A partir de ahí, se llevará a cabo la dinámica de trabajo más oportuna para cada
                tarea
                concreta.
                SSF podrá además externalizar tareas específicas a grupos de simpatizantes voluntarios no
                afiliados,
                entre las que se encontrarán la elaboración de materiales de estudio y de debate, desarrollo de
                contenidos, comunicación y difusión, elaboración de materiales gráficos y audiovisuales, etc.
            </p>
            <p>
                ARTÍCULO 28: EL ÓRGANO DE DEFENSA DE LOS DERECHOS DE LOS AFILIADOS.
                El Órgano de Defensa de los Derechos de los Afiliados (ODDA en adelante) es el órgano de
                control interno y de defensa de los afiliados. Es elegido por la Asamblea General por un
                período de
                tres años y está compuesto por tres afiliados. El órgano podrá ser unipersonal cuando haya
                menos
                de cien afiliados al partido.
                Se buscarán, a ser posible, personas con conocimientos jurídicos, experiencia en la mediación y
                negociación o un talante especialmente objetivo y asertivo.
                La Asamblea General designará al Presidente, que presidirá las reuniones e impulsará los
                asuntos. A
                partir de cien afiliados, el órgano deberá estar formado por al menos 3 personas, elegidas por
                la
                Asamblea General. A partir de cien afiliados, no podrán formar parte del ODDA aquellos
                afiliados
                que ocupen otros cargos dentro del partido.
                En la Asamblea General inmediatamente posterior a la fundacional, se elegirán los miembros y el
                nombre de este órgano, cuyas funciones son:
                - Defender y garantizar los derechos de los afiliados frente a los órganos del partido.
                - Resolver las reclamaciones que formulen los afiliados, salvo las que corresponden a la Comité
                Ejecutivo en los procesos disciplinarios.
                - Interpretar los Estatutos. Velar por su cumplimiento y su legalidad interna.
                - Promover y velar por un comportamiento ético, democrático y transparente tanto en lo interior
                como en lo exterior, del partido y de sus miembros.
                - Dar forma legal a las modificaciones reglamentarias decididas por la Asamblea General.
                - Fiscalizar la labor de la Secretaría General y del Comité Ejecutivo.
                - Fiscalizar las cuentas anuales.
                El ODDA se reunirá con carácter ordinario semestralmente y con carácter extraordinario cuando
                así lo estime su Presidente.
                La convocatoria la realizará su Presidente y será remitida a todos los miembros con, al menos,
                tres
                días de antelación a su celebración. Dicha convocatoria contendrá el lugar, fecha y hora de
                celebración, así como el orden del día de los asuntos a tratar.
                El ODDA quedará válidamente constituido cuando asistan a sus reuniones dos de sus miembros y
                adoptará sus acuerdos por consenso. Cada asunto a tratar en las reuniones del Comité de
                Garantías
                15
                se desarrollará de modo que se permita un turno de intervenciones a sus miembros previamente a
                la
                adopción de cada acuerdo.
                En su labor de fiscalización, el ODDA podrá exigir en cualquier momento a los cargos electos
                del
                partido que informen acerca de su situación patrimonial y actividades económicas en las que
                estén
                relacionados.
            </p>
            <h5> CAPÍTULO IV. RÉGIMEN ECONÓMICO Y PATRIMONIAL</h5>
            <p>
                ARTÍCULO 29: RECURSOS ECONÓMICOS
                El partido podrá adquirir, administrar y enajenar los bienes y derechos que resulten necesarios
                para
                el cumplimiento de sus fines. Los recursos económicos del partido serán publicados en todo
                momento con la mayor transparencia sobre los movimientos. Los recursos económicos del partido
                están constituidos por:
                - Las cuotas de los militantes.
                - Las aportaciones voluntarias de los miembros.
                - Los rendimientos de su propio patrimonio.
                - Los productos de las actividades realizadas.
                - Las herencias, legados, subvenciones o donaciones que reciba.
                - Los créditos que concierte.
                - Cualesquiera otros ingresos que reciba de conformidad con lo dispuesto en la Ley orgánica
                8/2007, de 4 de julio (BOE núm. 160, de 5 de julio), sobre financiación de partidos políticos.
                - No se adquirirán deudas con entidades financiaras.
                - Si se precisa de efectivo, se recurrirá a los diferentes métodos legales de financiación
                participativa.
            </p>
            <p>
                ARTÍCULO 30: PATRIMONIO
                Carece de patrimonio fundacional.
            </p>
            <p>
                ARTÍCULO 31: PROCEDIMIENTO DE RENDICIÓN DE CUENTAS. ADMINISTRACIÓN,
                FISCALIZACIÓN Y CONTROL
                La administración, fiscalización y control de su régimen económico y patrimonial se realizará
                con
                arreglo a las siguientes normas:
                El ejercicio económico es anual, empezando el 1/1 y acabando el 31/12 de cada año.
                La Asamblea General es el órgano competente para la elaboración de los presupuestos, que
                tendrán
                una duración anual. Las normas de deliberación y debate, así como la forma de votación y
                aprobación de los presupuestos se ajustarán a las normas generales de actuación de los órganos
                del
                partido recogidas en el artículo 10 de los presentes estatutos.
                La Comisión Ejecutiva elaborará anualmente una propuesta de cuentas del partido que será
                sometida a la votación de la Asamblea General.
                16
                La gestión económico-financiera del partido y su patrimonio corresponderá al representante
                legal
                del partido.
                La función de intervención de todos los actos y documentos de los que se deriven derechos y
                obligaciones de contenido económico corresponderá a la Asamblea General que funcionará como
                órgano de control democrático
            </p>
            <p>
                ARTÍCULO 32: RÉGIMEN DOCUMENTAL. OBLIGACIONES CONTABLES.
                El partido llevará, además del Libro de Afiliados, los Libros de Actas, de Contabilidad, de
                Tesorería, y de Inventarios y Balances, cuyo contenido se fijará reglamentariamente.
                El partido dará cumplimiento a sus obligaciones contables y fiscales de conformidad con lo
                dispuesto en la Ley Orgánica 8/2007, de financiación de partidos políticos y demás legislación
                aplicable.
            </p>
            <h5>CAPÍTULO V. DISOLUCIÓN DEL PARTIDO</h5>
            <p>
                ARTÍCULO 33: DISOLUCIÓN
                El partido se disolverá, a propuesta de la Comisión Ejecutiva, mediante acuerdo de la Asamblea
                General, por mayoría de dos tercios de los asistentes, siempre que la asamblea haya sido
                constituida
                con un quórum mínimo del 30% de los afiliados.
            </p>
            <p>
                ARTÍCULO 34º.- DESTINO DEL PATRIMONIO.
                Acordada la disolución, la Comisión Ejecutiva destinará el patrimonio resultante, una vez
                satisfechas todas las obligaciones de índole económica, a las asociaciones de carácter benéfico
                con
                domicilio en la localidad de San Fernando
            </p>

        </div>
        <div class="modal-footer">
            <a href="#!" class="modal-close waves-effect waves-green btn-small">Salir</a>
            <footer>
                <br>
                <br>
                <br>
            </footer>
        </div>
    </div>


    <!-- Compiled and minified JavaScript -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.2/jspdf.min.js"></script>

</body>

</html> 