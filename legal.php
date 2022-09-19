<?php
/**
* Template Name: Legal
*
*/

get_header();
?>
<main id="primary" class="site-main legal_page">
<?php
while ( have_posts() ) :
    the_post();
    get_template_part( 'template-parts/legal/hero' );
    get_template_part( 'template-parts/legal/content' );

endwhile;
?>

</main>

<?php
get_footer();
