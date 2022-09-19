<?php
/**
* Template Name: For Hiring Managers
*
*/

get_header();
?>
<main id="primary" class="site-main for_hiring_managers_page">
<?php
while ( have_posts() ) :
    the_post();
    get_template_part( 'template-parts/for-hiring-managers/hero' );
    get_template_part( 'template-parts/for-hiring-managers/first' );
    get_template_part( 'template-parts/for-hiring-managers/text-icon-items' );
    get_template_part( 'template-parts/for-hiring-managers/second' );
    get_template_part( 'template-parts/for-hiring-managers/third' );
    get_template_part( 'template-parts/for-hiring-managers/fourth' );
    get_template_part( 'template-parts/for-hiring-managers/book-demo' );
    get_template_part( 'template-parts/for-hiring-managers/fifth' );
    get_template_part( 'template-parts/for-hiring-managers/sixth' );
    get_template_part( 'template-parts/for-hiring-managers/faq' );
    get_template_part( 'template-parts/for-hiring-managers/under-box' );


endwhile;
?>

</main>

<?php
get_footer();
