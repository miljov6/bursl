<?php
/**
* Template Name: Solutions
*
*/

get_header();
?>
<main id="primary" class="site-main solutions_page">
<?php
while ( have_posts() ) :
    the_post();
    get_template_part( 'template-parts/solutions/hero' );
    get_template_part( 'template-parts/solutions/bursl-benefits' );
    get_template_part( 'template-parts/solutions/areas-of-coverage' );
    get_template_part( 'template-parts/solutions/for-startups' );
    get_template_part( 'template-parts/solutions/for-hiring-managers' );
    get_template_part( 'template-parts/solutions/for-legal-team' );
    get_template_part( 'template-parts/solutions/global-solutions' );
    get_template_part( 'template-parts/solutions/data-dashboarding' );
    get_template_part( 'template-parts/solutions/book-demo' );
    get_template_part( 'template-parts/solutions/faq' );
    get_template_part( 'template-parts/solutions/under-box' );


endwhile;
?>

</main>

<?php
get_footer();
