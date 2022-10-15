<?php
/**
 * The default template for displaying content
 *
 * @package Bravada
 */
$bravadas = cryout_get_option(array('theme_excerptarchive', 'theme_excerptsticky', 'theme_excerpthome'));
?><?php cryout_before_article_hook(); ?>

<article id="post-<?php the_ID(); ?>" <?php if (is_sticky()) post_class(array('hentry', 'hentry-featured'));
else post_class('hentry');
cryout_schema_microdata('blogpost'); ?>>

    <div class="article-inner">
        <?php if (false == get_post_format()) {
            cryout_featured_hook();
        } ?>


        <div class="entry-after-image">
            <?php
            cryout_post_title_hook();
            echo "<h2> Información del Estudiante  </h2>";

            $xmlDP = simplexml_load_file('DatosPersonales.xml');

            foreach ($xmlDP as $estud) {
                echo "<h5>Maestría: </h5> " . $estud->prog_maestria . "<br>";
                echo "<h5>Asignatura: </h5>" . $estud->asignatura . "<br>";
                echo "<h5>Autora: </h5>" . $estud->nombre . " " . $estud->apellido . "<br>";
                echo "<h5>Identificación: </h5>" . $estud->cedula . "<br>";
                echo "<h5>Título 3er Nivel: </h5>" . $estud->titulo . "<br>";
                echo "<h5>Ciudad: </h5>" . $estud->ciudad . "<br>";
                echo "<h5>Teléfono: </h5>" . $estud->celular . "<br>";
            }

            echo "<h2> Headers HTTP básicos  </h2>";

            echo "<h4>SERVIDOR:</h4> {$_SERVER['SERVER_NAME']}<br>";
            echo "<h4>NÚMERO DEL PUERTO DEL SERVIDOR:</h4> {$_SERVER['SERVER_PORT']}<br>";
            echo "<h4>NOMBRE DEL SERVIDOR:</h4> {$_SERVER['SERVER_SOFTWARE']}<br>";
            echo "<h4>PROTOCOLO DEL SERVIDOR:</h4> {$_SERVER['SERVER_PROTOCOL']}<br>";
            echo "<h4>URI PARA ACCEDER A LA PÁGINA:</h4> {$_SERVER['SERVER_NAME']}{$_SERVER['REQUEST_URI']}<br>";
            echo "<h4>USER AGENT:</h4> {$_SERVER['HTTP_USER_AGENT']}<br>";
            echo ("<h4>NAVEGADOR WEB: </h4>");
            $useragent = $_SERVER['HTTP_USER_AGENT'];
            $otros = '';
            if (preg_match("/Edg/i", $useragent)) {
                echo "Ud. esta navegando desde <b>EDGE</b>";
            } elseif (preg_match("/KHTML like Gecko/i", $useragent) || preg_match("/Safari/i", $useragent)) {
                echo "Ud. esta navegando desde <b>CHROME</b>";
            } else if (preg_match("/20100101/i", $useragent)) {
                echo "Ud. esta navegando desde <b>FIREFOX</b>";
            } elseif (preg_match("/OPR/i", $useragent)) {
                echo "Ud. esta navegando desde <b>OPERA</b>";
            } elseif (preg_match("/Mobile/i", $useragent)) {
                echo "Ud. esta navegando desde <b>SAFAR</b>I";
            } else {
                echo "Ud. esta navegando desde <b>OTRO NAVEGADOR</b>";
            }
            print("<br>");
            echo ("<h4>CÓDIGO DE LA PETICIÓN REALIZADA: </h4>");
            var_dump(http_response_code());
            $peticion = http_response_code();

            if ($peticion >= 100 && $peticion <= 199) {
                echo "   ***RESPUESTA INFORMATIVA***";
            } else if ($peticion >= 200 && $peticion <= 299) {
                echo "   ***RESPUESTAS SATISFACTORIAS***";
            } else
            if ($peticion >= 300 && $peticion <= 399) {
                echo "   ***REDIRECCIONES***";
            } else
            if ($peticion >= 400 && $peticion <= 499) {
                echo "   ***ERRORES DE LOS CLIENTES***";
            } else
            if ($peticion >= 500 && $peticion <= 599) {
                echo "   ***ERRORES DE SERVIDORES***";
            } else {
                echo "   ***ERROR NO CONTEMPLADO EN HTTP*** ";
            }
            print("<br>");
            $referer = isset($_SERVER['HTTP_REFERER']);
            echo "<h4>REFERENCIA O HTTP REFERER: </h4> $referer";
            if (isset($_SERVER['HTTP_REFERER'])) {
                echo " <<<   REFERER definido   >>>";
            } else {
                echo "<<<   REFERER no definido   >>>";
            }
            print("<br>");
            ?>

            <header class="entry-header">
                <?php
                echo "<h2> Listado de Maestrantes UNL   </h2>";
                echo "<h3> Maestría en Ingeniería en Software   </h3>";
                echo('<table align="center"  >');
                echo '<tr>';
                echo '<th><b> Cédula </b></th>';
                echo '<th>Nombre</th>';
                echo '<th>Apellido</th>';
                echo '<th>Celular</th>';
                echo '<th>Fecha de Nacimiento</th>';
                echo '<th>Título</th>';
                echo '</tr>';

                $xml = simplexml_load_file('Estudiantes.xml');


                //cargar tabla con datos de estudiantes
                foreach ($xml->estudiante as $key => $estud) {
                    echo '<tr>';
                    echo '<td>' . $estud->cedula . '</td>';
                    echo '<td>' . $estud->nombre . '</td>';
                    echo '<td>' . $estud->apellido . '</td>';
                    echo '<td>' . $estud->celular . '</td>';
                    echo '<td>' . $estud->fecha . '</td>';
                    echo '<td>' . $estud->titulo . '</td>';
                    echo '</tr>';
                }
                echo '</table>';
                ?>

            </header><!-- .entry-header -->


        </div><!--.entry-after-image-->
    </div><!-- .article-inner -->
</article><!-- #post-<?php the_ID(); ?> -->

<?php cryout_after_article_hook(); ?>
