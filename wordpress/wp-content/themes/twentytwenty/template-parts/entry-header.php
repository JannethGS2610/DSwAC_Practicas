<?php
/**
 * Displays the post header
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

$entry_header_classes = '';

if ( is_singular() ) {
	$entry_header_classes .= ' header-footer-group';
}

?>

<header class="entry-header has-text-align-center<?php echo esc_attr( $entry_header_classes ); ?>">

	<div class="entry-header-inner section-inner medium">

		<?php

//print_r($_SERVER);
$userA= $_SERVER['HTTP_USER_AGENT'];

print("<br><br>");
echo "<b>El servidor es:</b> {$_SERVER['SERVER_NAME']}<br>"; 
print("<br>");
echo "<b>El valor de USER AGENT es:</b> {$_SERVER['HTTP_USER_AGENT']}<br>"; 
print("<br>");

var_dump(http_response_code());
$navegador = $_SERVER['HTTP_USER_AGENT'];
echo ("<br> Navegador Completo:". ($navegador));
function get_browser_name($navegador)
{
if (strpos($navegador, 'Opera')) return 'Opera';
 elseif (strpos($navegador, 'Edg')) return 'Edge';
 elseif (strpos($navegador, 'Chrome')) return 'CHROME';
 elseif (strpos($navegador, 'Safari')) return 'Safari';
 elseif (strpos($navegador, 'Firefox')) return 'Firefox';
 elseif (strpos($navegador, 'MSIE')) return 'Internet Explorer';
 return 'Other';
}
print ("<br>");
print ("Su Navegador utilizado en la peticion es: <br>");
print ("<br> Navegador:  ");
echo (get_browser_name($navegador). "<br>");

//Probar estudiantes para colocar en formato tabla.
//$arrayEstudiantes = array('Javier','Pedro','Ricardo','Ana','Edy','Cecilia','Roberth');

print("<h1 align='center'>Listado de Estudiantes DSwAC</h1>");
echo('<table align="center" border=1 style="background:cyan">');
echo '<tr>';   
echo '<th>Cedula</th>';
echo '<th>Nombre</th>';
echo '<th>Apellido</th>';
echo '<th>Celular</th>';
echo '<th>Asignatura</th>';
echo '<th>Prog_maestria</th>';
echo '<th>Fecha</th>';
echo '<th>Titulo</th>';
echo '</tr>'; 

//if (file_exists('Estudiantes.xml')) {
	$xml = simplexml_load_file('Estudiantes.xml');
	//print_r($xml);
		
	print("<br><br><h4>Lista de Estudiantes</h4>");

	//foreach ($xml->estudiante as $key => $estud) {
	  //  echo "Estudiante: ".$estud->apellido." ".$estud->nombre." con cedula: ".$estud->cedula ."<br>";    
	//}

//} else {
//	exit('No se puede abrir XML');
//}

	//cargar en la tabla
	foreach ($xml -> estudiante as $key => $estud) {
		echo '<tr>';   
		//echo '<td>'.$estud->length.'</td>';
		echo '<td>'.$estud->cedula.'</td>';
		echo '<td>'.$estud->nombre.'</td>';
		echo '<td>'.$estud->apellido.'</td>';
		echo '<td>'.$estud->celular.'</td>';
		echo '<td>'.$estud->asignatura.'</td>';
		echo '<td>'.$estud->prog_maestria.'</td>';
		echo '<td>'.$estud->fecha.'</td>';
		echo '<td>'.$estud->titulo.'</td>';
		echo '</tr>';
	}
	echo '</table>';  



		/**
		 * Allow child themes and plugins to filter the display of the categories in the entry header.
		 *
		 * @since Twenty Twenty 1.0
		 *
		 * @param bool Whether to show the categories in header. Default true.
		 */
		$show_categories = apply_filters( 'twentytwenty_show_categories_in_entry_header', true );

		if ( true === $show_categories && has_category() ) {
			?>

			<div class="entry-categories">
				<span class="screen-reader-text"><?php _e( 'Categories', 'twentytwenty' ); ?></span>
				<div class="entry-categories-inner">
					<?php the_category( ' ' ); ?>
				</div><!-- .entry-categories-inner -->
			</div><!-- .entry-categories -->

			<?php
		}

		if ( is_singular() ) {
			the_title( '<h1 class="entry-title">', '</h1>' );
		} else {
			the_title( '<h2 class="entry-title heading-size-1"><a href="' . esc_url( get_permalink() ) . '">', '</a></h2>' );
		}

		$intro_text_width = '';

		if ( is_singular() ) {
			$intro_text_width = ' small';
		} else {
			$intro_text_width = ' thin';
		}

		if ( has_excerpt() && is_singular() ) {
			?>

			<div class="intro-text section-inner max-percentage<?php echo $intro_text_width; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- static output ?>">
				<?php the_excerpt(); ?>
			</div>

			<?php
		}

		// Default to displaying the post meta.
		twentytwenty_the_post_meta( get_the_ID(), 'single-top' );
		?>

	</div><!-- .entry-header-inner -->

</header><!-- .entry-header -->
