<?php
/**
* Template Name: For Enterprise
*
*/

get_header();
?>
<main id="primary" class="site-main for_enterprise_page">
<?php
while ( have_posts() ) :
    the_post();
    get_template_part( 'template-parts/for-enterprise/hero' );
    get_template_part( 'template-parts/for-enterprise/first' );
    get_template_part( 'template-parts/for-enterprise/second' );
    get_template_part( 'template-parts/for-enterprise/third' );
    get_template_part( 'template-parts/for-enterprise/book-demo' );
    get_template_part( 'template-parts/for-enterprise/fourth' );
    get_template_part( 'template-parts/for-enterprise/faq' );
    get_template_part( 'template-parts/for-enterprise/under-box' );


endwhile;
?>

</main>

<?php
get_footer();
