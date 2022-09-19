<?php
/**
* Template Name: For Startups
*
*/

get_header();
?>
<main id="primary" class="site-main for_startups_page">
<?php
while ( have_posts() ) :
    the_post();
    get_template_part( 'template-parts/for-startups/hero' );
    get_template_part( 'template-parts/for-startups/first' );
    get_template_part( 'template-parts/for-startups/second' );
    get_template_part( 'template-parts/for-startups/third' );
    get_template_part( 'template-parts/for-startups/fourth' );
    get_template_part( 'template-parts/for-startups/book-demo' );
    get_template_part( 'template-parts/for-startups/fifth' );
    get_template_part( 'template-parts/for-startups/sixth' );
    get_template_part( 'template-parts/for-startups/faq' );
    get_template_part( 'template-parts/for-startups/under-box' );


endwhile;
?>

</main>

<?php
get_footer();
