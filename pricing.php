<?php
/**
* Template Name: Pricing
*
*/

get_header();
?>
<main id="primary" class="site-main pricing_page">
<?php
while ( have_posts() ) :
    the_post();
    get_template_part( 'template-parts/pricing/hero' );
    get_template_part( 'template-parts/pricing/plans' );
    get_template_part( 'template-parts/pricing/first' );


endwhile;
?>

</main>

<?php
get_footer();
