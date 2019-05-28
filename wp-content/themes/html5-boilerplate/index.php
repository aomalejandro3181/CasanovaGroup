<?php
/**
 * @package WordPress
 * @subpackage HTML5_Boilerplate
 */

get_header();

$args = array('post_type' => 'settings');
$loop = new WP_Query($args);

if ($loop->have_posts()) :
    while ($loop->have_posts()) :
        $loop->the_post();
        // vars
        $section_hero_slider = get_field('hero_slider');
    endwhile;
//end of the loop.
else :?>
    <h1>No posts here!</h1>
<?php endif;

//print_r($section_hero_slider);
?>
<?php wp_reset_postdata(); ?>
<section id="hero" class="container-fluid no-gutters no-padding">
    <div class="hero-sliders">
<?php for ($i=1; $i<=3; $i++) {
    $image = $section_hero_slider['imagen_'.$i];
    ?>
        <div class="slider">
            <div class="img-slider" style="background-image:url('<?php echo $image['url']; ?>')">
                <div class="container">
                    <div class="row align-items-center">
                    <div class="col-sm-12 col-md-6 col-lg-9 cont-title">
                        <h1 class="title"><?php echo $section_hero_slider['title_'.$i];?></h1>
                        <div class="col-sm-12 col-lg-7">
                            <h3 class="sub-title"><?php echo $section_hero_slider['sub_title_'.$i];?></h3>
                        </div>
                        <?php
                        if ($section_hero_slider['boton_visible_'.$i]) {
                            echo '<a class="border rounded-pill btn-hero" href="'.$section_hero_slider['url_boton_'.$i].'">'.$section_hero_slider['boton_'.$i].'</a>';
                        }
                        ?>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
}
//End for
?>
        <!-- <div class="slider">
            <div class="img-slider" style="background-image:url('wp-content/themes/html5-boilerplate/images/art-big-data-blur-373543.jpg')">
                <div class="container">
                    <div class="row align-items-center">
                    <div class="col-sm-12 col-md-6 col-lg-9 cont-title">
                        <h1 class="title">Somos Soluciones Energéticas para tu mercado</h1>
                        <div class="col-lg-7">
                            <h3 class="sub-title">Contamos con un amplio catálogo de productos que se ajustaran a tu necesidad industrial</h3>
                        </div>
                        
                        <a class="border rounded-pill btn-hero" href="#contactos">Contactanos</a>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="slider">
            <div class="img-slider" style="background-image:url('wp-content/themes/html5-boilerplate/images/art-big-data-blur-373543.jpg')">
                <div class="container">
                    <div class="row align-items-center">
                    <div class="col-sm-12 col-md-6 col-lg-9 cont-title">
                        <h1 class="title">Somos Soluciones Energéticas para tu mercado</h1>
                        <div class="col-lg-7">
                            <h3 class="sub-title">Contamos con un amplio catálogo de productos que se ajustaran a tu necesidad industrial</h3>
                        </div>
                        
                        <a class="border rounded-pill btn-hero" href="#contactos">Contactanos</a>
                    </div>
                    </div>
                </div>
            </div>
        </div> -->
    </div>
    <div class="cont-link d-none d-xl-block">
        <figure class="rounded-circle circle">
        <i class="fas fa-angle-down"></i>
        </figure>
        <div><span>Conoce más</span></div>
    </div>
    
</section>

<section id="la-empresa">
    <div class="container">
    <div class="line one d-none d-xl-block"></div>
    <figure class="circle-line d-none d-xl-block"></figure>
        <h1>la empresa</h1>
        <div class="dots-slider">
            <ul>
                <li class="dots dot-0">venezuela <figure class="active"></figure></li>
                <li class="dots dot-1">USA <figure></figure></li>
                <li class="dots dot-2">España <figure></figure></li>
            </ul>
        </div>
        <div class="content-slider-2">
            <div class="slider-empresa">
                <div class="slider">
                    <div class="row">
                        <div class="col-12 col-md-6 col-lg-6 img">
                            <img src="wp-content/themes/html5-boilerplate/images/logo-color.jpg" alt="">
                        </div>
                        <div class="col-12 col-md-6 col-lg-5 text">
                            <p>Casanova Group nació de H. Casanova Representaciones, C.A. constituida en 1990 por el Ing. <b>Hugo Casanova en Caracas, Venezuela</b>, con el objeto de atender las necesidades del mercado venezolano de sistemas de conexionado para diversos sectores industriales. </p>
                        </div>
                    </div>
                </div>
                <div class="slider">2</div>
                <div class="slider">3</div>
            </div>
        </div>
    </div>
</section>

<section id="mision">
    <div class="container">
    <div class="line d-none d-xl-block"></div>
    <figure class="circle-line d-none d-xl-block"></figure>
        <div class="row">
            <div class="col-12 col-md-6 col-lg-6 img d-none d-xl-block">
                <img src="wp-content/themes/html5-boilerplate/images/bitmap.jpg" alt="">
            </div>
            <div class="col-12 col-md-12 col-lg-6">
                <h1 class="title">misión</h1>
                <p>Ser el Grupo de Empresas Líder a través de nuestra elección innovadora de soluciones, productos y servicios con un alto nivel competitivo, tanto a nivel local como internacional, con el apoyo de nuestro capital humano especializado y profesional, en los segmentos que proporcionamos a nuestros clientes.</p>
                <h1 class="title marginTop46">visión</h1>
                <p>Ser los Lideres en la comercialización de productos de los Sectores de Energía Eléctrica, Redes y Telecomunicaciones, en sus diferentes niveles, para anticipar y satisfacer las necesidades de nuestros clientes, brindándoles la calidad de nuestros productos y servicios, por encima de sus expectativas, alienados con el crecimiento sostenido de las empresas que conforman el grupo Casanova y sus colaboradores, proveyéndolos y apoyándolos para su mayor bienestar y desarrollo del logro de sus objetivos.</p>
            </div>
        </div>
    </div>
</section>

<section id="equipo">
    <diV  id="caja-equipo" class="container"> 
        <div class="line d-none d-xl-block"></div>
        <figure class="circle-line equipo d-none d-xl-block"></figure>
        <div class="row">
            <article class="col-xs-12 col-sm-11 col-md-9 col-lg-10">
                <h2 class="estilo-h2">EQUIPO</h2>
            </article>
                <article class="w-100"></article>
            <article id="art-p" class=" col-xs-12 col-sm-11 col-md-9 col-lg-10">
                    <p class="estilo-h3">
                    |HUGO CASANOVA</p>
                    <p class="estilo-p">
                    &nbsp;&nbsp;CEO</P>
                </article>
        </div>
        <div class="row">
            <article id="art-p" class="col-xs-12 col-sm-4 col-md-4 col-lg-5">
                <p  class="estilo-h3">
                |ALEXANDER CORDERO</p>
                <p class="estilo-p">
                &nbsp;&nbsp;DIRECTOR COMERCIAL </br>
                &nbsp;&nbsp;H CASANOVA REPRESENTACIONES, C.A</P>
            </article>
            <article id="art-p" class="col-xs-12 col-sm-4 col-md-4 col-lg-5">
                <p class="estilo-h3">
                |RODRIGO TRONCOSO</p>
                <p class="estilo-p">
                &nbsp;&nbsp;DIRECTOR DE OPERECIONES</br>
                &nbsp;&nbsp;H CASANOVA REPRESENTACIONES, C.A</P>
            </article>
            <article id="art-p" class="col-xs-12 col-sm-4 col-md-4 col-lg-2">
                <p> </p>
                <p></P>
            </article>
        </div>	
        <div class="row">
            <article id="art-p" class="col-xs-12 col-sm-4 col-md-4 col-lg-5">
                <p class="estilo-h3">
                |CESAR MENA</p>
                <p class="estilo-p">
                &nbsp;&nbsp;GERENTE GENERAL</br>
                &nbsp;&nbsp;CASANOVA INTERNACIONAL, LLC</P>
            </article>
            <article id="art-p" class="col-xs-12 col-sm-4 col-md-3 col-lg-5">
                <p class="estilo-h3">
                |VIVIANA CASANOVA</p>
                <p class="estilo-p">
                &nbsp;&nbsp;DIRECTORA GENERAL</br>
                &nbsp;&nbsp;CASANOVA INTERNACIONAL EUROPA, S.L</P>
            </article>
        </div>
    </div>
</section>

<div id="contacto">
    <div id="caja-contacto" class="container">
        <figure class="circle-line last d-none d-xl-block"></figure>
        <div class="row">
            <div class="col-xs-12 col-sm-11 col-md-9 col-lg-6 col-xl-6">
                <p id="titulo-c">CONTACTO</p>
                <form id='form-contact'>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-lg-12">
                                <input id="correo" class="border border-secondary rounded-pill" type="email" name="Correo" placeholder="Correo">
                            </div>
                            <div class="col-lg-6 pr-1">
                                <input id="nombre" class=" border border-secondary rounded-pill" type="text" name="nombre" placeholder="Nombre">
                            </div>
                            <div class="col-lg-6  pl-1">
                                <input id="apellido" class=" border border-secondary rounded-pill" type="text" name="apellido" placeholder="Apellido">
                            </div>
                            <div class="col-lg-6 pr-1">
                                <input id="empresa" class=" border border-secondary rounded-pill" type="text" name="Empresa" placeholder="Empresa">
                            </div>
                            <div class="col-lg-6  pl-1">
                                <input id="telefono" class="border border-secondary rounded-pill" type="number" name="telefono" placeholder="Telefono">
                            </div>
                            <div class="col-lg-12">
                                <input id="asunto" class="border border-secondary rounded-pill" type="text" name="asunto" placeholder="Asunto">
                            </div>
                            <div class="col-lg-12">
                                <input id="mensaje" class="border border-secondary " type="textarea" name="mensaje" placeholder="Mensaje">
                            </div>
                            <div class="col-lg-12">
                                <input id="enviar" class="" type="submit" name="enviar" value="Enviar">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php //get_sidebar(); ?>

<?php get_footer(); ?>


