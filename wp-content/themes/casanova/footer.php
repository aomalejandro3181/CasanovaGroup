<?php
/**
 * @package WordPress
 * @subpackage HTML5_Boilerplate
 */

$args = array('post_type' => 'settings');
$loop = new WP_Query($args);

if ($loop->have_posts()) :
    while ($loop->have_posts()) :
        $loop->the_post();
        // vars
        $section_footer       = get_field('footer');
    endwhile;
//end of the loop.
else :?>
    <h1>No posts here!</h1>
<?php endif;

//print_r($section_footer);
?>

  <footer>
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-6 col-lg-4">
          <p class="title"><b><?php echo $section_footer['title']?></b></p>
          <address class="content"><?php echo $section_footer['direccion']?></address>
        </div>
        <div class="col-12 col-md-6 col-lg-4">
          <p class="title"><b><?php echo $section_footer['title_2']?></b></p>
          <address class="content"><?php echo $section_footer['direccion_2']?></address>
        </div>
      </div>
    </div>
  </footer>

  <!-- Javascript at the bottom for fast page loading -->

  <!-- Grab Google CDN's jQuery. fall back to local if necessary -->

  <!-- asynchronous google analytics: mathiasbynens.be/notes/async-analytics-snippet
       change the UA-XXXXX-X to be your site's ID -->
  <!-- WordPress.com does not allow Google Analytics code to be built into themes they host. 
       Add this section from HTML Boilerplate manually (html5-boilerplate/index.html), or use a Google Analytics WordPress Plugin-->
	   
  <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
  <script>
    var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
    (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
    g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
    s.parentNode.insertBefore(g,s)}(document,'script'));
  </script>
			   
  <?php wp_footer(); ?>

</body>
</html>
