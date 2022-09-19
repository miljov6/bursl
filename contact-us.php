<?php
/**
* Template Name: Contact Us
*
*/

get_header();
?>
<main id="primary" class="site-main contact_us_page">
<?php
while ( have_posts() ) :
    the_post();
    get_template_part( 'template-parts/contact-us/hero' );
    get_template_part( 'template-parts/contact-us/first' );
    get_template_part( 'template-parts/contact-us/second' );


endwhile;
?>

</main>

<?php
get_footer();
