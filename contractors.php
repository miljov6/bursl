<?php
/**
* Template Name: Contractors
*
*/

get_header();
?>
<main id="primary" class="site-main contractors_page">
<?php
while ( have_posts() ) :
    the_post();
    get_template_part( 'template-parts/contractors/hero' );
    get_template_part( 'template-parts/contractors/how-it-works' );
    get_template_part( 'template-parts/contractors/global-contractor' );
    get_template_part( 'template-parts/contractors/compliance' );
    get_template_part( 'template-parts/contractors/localised-contractor' );
    get_template_part( 'template-parts/contractors/expenses' );
    get_template_part( 'template-parts/contractors/contractor-onboarding' );
    get_template_part( 'template-parts/contractors/why-bursl' );
    get_template_part( 'template-parts/contractors/benefits-summary' );
    get_template_part( 'template-parts/contractors/faq' );
    get_template_part( 'template-parts/contractors/under-box' );


endwhile;
?>

</main>

<?php
get_footer();
