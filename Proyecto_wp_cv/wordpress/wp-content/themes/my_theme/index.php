<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Astra
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header(); ?>
<?php if ( astra_page_layout() == 'left-sidebar' ) : ?>

	<?php get_sidebar(); ?>

<?php endif ?>
	<div id="primary" <?php astra_primary_class(); ?>>
    <?php
astra_primary_content_top();

?>

<div >
        <section class="hero">
            <div class="container">
                <h1>Bienvenido a Mi Perfil Web</h1>
                <h2>Soy Estudiante de Informática y Tecnologías Multimedia</h2>
                <p>Descubre mis proyectos y servicios. Contactame para mas informacion</p>
                <a href="#features" class="btn btn-dark">Contactar</a>
            </div>
        </section>

        <section id="features" class="features">
            <div class="container">
            <h3 class="site-title">Servicios que puedo brindar</h3>
                <div class="feature">             

                    <div class="works">
                        <h4>Desarrollo web</h4> 
                        <p>Con experiencia en variedad de temáticas</p>
                    </div>
                    <div class="works">                       
                        <h4>Desarrollo de videojuegos</h4> 
                        <p>Producto completa y profesional</p>
                    </div>
                    <div class="works">
                        <h4>Diseño gráfico</h4> 
                        <p>Estilos adaptados a sus necesidades y identidad de marca</p>
                    </div>
                </div>
            </div>
        </section>
    </div>
     
    <section id="contact" class="contact">
        <div class="container">
            <h3>Contáctanos</h3>
            <form action="#" method="post">
                <label for="name">Nombre:</label>
                <input type="text" id="name" name="name" required>
                
                <label for="email">Correo Electrónico:</label>
                <input type="email" id="email" name="email" required>
                
                <label for="message">Mensaje:</label>
                <textarea id="message" name="message" required></textarea>
                
                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
        </div>
    </section>
</div>

<?php
astra_primary_content_bottom();
?>

	</div><!-- #primary -->
<?php
if ( astra_page_layout() == 'right-sidebar' ) :

	get_sidebar();

endif;

get_footer();
