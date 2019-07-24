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
        $section_hero_slider    = get_field('hero_slider');
        $section_empresar       = get_field('section_empresa');
        $section_mision       = get_field('section_mision');
        $section_equipo       = get_field('section_equipo');
        $section_footer       = get_field('footer');
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
    </div>
    <div class="cont-link d-none d-xl-block">
        <figure class="rounded-circle circle">
        <i class="fas fa-angle-down"></i>
        </figure>
        <div><span><a id="btn-hero" href="#la-empresa">Conoce más</a></span></div>
    </div>
    
</section>

<section id="la-empresa">
    <div class="container">
    <div class="line one d-none d-xl-block"></div>
    <figure class="circle-line d-none d-xl-block"></figure>
        <h1><?php echo $section_empresar['title']?></h1>
        <div class="dots-slider">
            <ul>
            <?php for ($i=1; $i<=3; $i++) {
                $country = $section_empresar['pais_'.$i];
                ?>
                <li class="dots dot-<?php echo $i-1;?>" ><?php echo $country;?>
                    <figure class="<?php if($i==1){ echo "active";} ?>"></figure>
                </li>
            <?php }?>
            </ul>
        </div>
        <div class="content-slider-2">
            <div class="slider-empresa">
            <?php for ($i=1; $i<=3; $i++) {
                $logo = $section_empresar['logo_'.$i];
                $texto = $section_empresar['texto_'.$i];
                ?>
                <div class="slider">
                    <div class="row">
                        <div class="col-12 col-md-6 col-lg-6 img">
                            <img src="<?php echo $logo['url']; ?>" alt="">
                        </div>
                        <div class="col-12 col-md-6 col-lg-5 text">
                            <p><?php echo $texto;?></p>
                        </div>
                    </div>
                </div>
            <?php }?>
            </div>
        </div>
    </div>
</section>

<section id="mision">
<?php
$imagen_mision = $section_mision['imagen'];
?>
    <div class="container">
    <div class="line d-none d-xl-block"></div>
    <figure class="circle-line d-none d-xl-block"></figure>
        <div class="row">
            <div class="col-12 col-md-6 col-lg-6 img d-none d-lg-block d-xl-block">
                <img src="<?php echo $imagen_mision['url'];?>" alt="">
            </div>
            <div class="col-12 col-md-12 col-lg-6">
                <h1 class="title"><?php echo $section_mision['title_1']?></h1>
                <p><?php echo $section_mision['content_1']?></p>
                <h1 class="title marginTop46"><?php echo $section_mision['title_2']?></h1>
                <p><?php echo $section_mision['content_2']?></p>
                <h1 class="title marginTop46"><?php echo $section_mision['title_3']?></h1>
                <p><?php echo $section_mision['content_3']?></p>
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
                <h2 class="estilo-h2"><?php echo $section_equipo['title']?></h2>
            </article>
                <article class="w-100"></article>
            <article id="art-p" class=" col-xs-12 col-sm-11 col-md-9 col-lg-10">
                    <p class="estilo-h3">
                    |<?php echo $section_equipo['name_1']?></p>
                    <p class="estilo-p">
                    &nbsp;&nbsp;<?php echo $section_equipo['cargo_1']?></P>
                </article>
        </div>
        <div class="row">
            <article id="art-p" class="col-xs-12 col-sm-4 col-md-4 col-lg-5">
                <p  class="estilo-h3">
                |<?php echo $section_equipo['name_2']?></p>
                <p class="estilo-p">
                &nbsp;&nbsp;<?php echo $section_equipo['cargo_2']?> </br>
                &nbsp;&nbsp;<?php echo $section_equipo['conpmany_2']?></P>
            </article>
            <article id="art-p" class="col-xs-12 col-sm-4 col-md-4 col-lg-5">
                <p class="estilo-h3">
                |<?php echo $section_equipo['name_3']?></p>
                <p class="estilo-p">
                &nbsp;&nbsp;<?php echo $section_equipo['cargo_3']?></br>
                &nbsp;&nbsp;<?php echo $section_equipo['company_3']?></P>
            </article>
            <article id="art-p" class="col-xs-12 col-sm-4 col-md-4 col-lg-2">
                <p> </p>
                <p></P>
            </article>
        </div>	
        <div class="row">
            <article id="art-p" class="col-xs-12 col-sm-4 col-md-4 col-lg-5">
                <p class="estilo-h3">
                |<?php echo $section_equipo['name_4']?></p>
                <p class="estilo-p">
                &nbsp;&nbsp;<?php echo $section_equipo['cargo_4']?></br>
                &nbsp;&nbsp;<?php echo $section_equipo['conpmany_4']?></P>
            </article>
            <article id="art-p" class="col-xs-12 col-sm-4 col-md-3 col-lg-5">
                <p class="estilo-h3">
                |<?php echo $section_equipo['name_5']?></p>
                <p class="estilo-p">
                &nbsp;&nbsp;<?php echo $section_equipo['cargo_5']?></br>
                &nbsp;&nbsp;<?php echo $section_equipo['conpmany_5']?></P>
            </article>
        </div>
    </div>
</section>
<?php
$bandera = $section_footer['bandera'];
$bandera_2 = $section_footer['bandera_2'];
?>
<div id="contacto">
    <div id="caja-contacto" class="container">
        <figure class="circle-line last d-none d-xl-block"></figure>
        <div class="row">
            <div class="col-xs-12 col-sm-11 col-md-9 col-lg-6 col-xl-6">
                <p id="titulo-c">CONTACTO</p>
                <?php echo do_shortcode('[contact-form-7 id="10" title="Contact form 1"]');?>
            </div>
            <div class="col-1"></div>
            <div class="col-xs-12 col-sm-11 col-md-9 col-lg-5 col-xl-5 cont-address">
                <div class="col-12">
                    <p class="title">
                    <img src="<?php echo $bandera['url']; ?>" alt="">
                    <b><?php echo $section_footer['title']?></b></p>
                    <address class="content"><?php echo $section_footer['direccion']?></address>
                </div>
                <div class="col-12">
                    <p class="title">
                    <img src="<?php echo $bandera_2['url']; ?>" alt="">
                    <b><?php echo $section_footer['title_2']?></b></p>
                    <address class="content"><?php echo $section_footer['direccion_2']?></address>
                </div>
            </div>
        </div>
    </div>
</div>
<?php //get_sidebar(); ?>

<?php get_footer(); ?>


