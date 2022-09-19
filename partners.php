<?php
/**
* Template Name: Partners
*
*/

get_header();
?>
<main id="primary" class="site-main partners_page">
<?php
while ( have_posts() ) :
    the_post();
    get_template_part( 'template-parts/partners/hero' );
    get_template_part( 'template-parts/partners/partners' );
    get_template_part( 'template-parts/partners/text-boxes-under-no-border' );
    get_template_part( 'template-parts/partners/text-icon-items' );
    get_template_part( 'template-parts/partners/second' );
    get_template_part( 'template-parts/partners/third' );
    get_template_part( 'template-parts/partners/fourth' );
    get_template_part( 'template-parts/partners/text-boxes-under-no-border-2' );
    get_template_part( 'template-parts/partners/fifth' );
    get_template_part( 'template-parts/partners/sixth' );
    get_template_part( 'template-parts/partners/seventh' );
    get_template_part( 'template-parts/partners/eighth' );
    get_template_part( 'template-parts/partners/under-box' );


endwhile;
?>

</main>

<?php
get_footer();
