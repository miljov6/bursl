<?php
/**
* Template Name: Request Demo
*
*/

get_header();
?>
<main id="primary" class="site-main contact_us_page">
<?php
while ( have_posts() ) :
    the_post();
    get_template_part( 'template-parts/request-demo/hero' );
    get_template_part( 'template-parts/request-demo/second' );


endwhile;
?>

</main>

<?php
get_footer();
