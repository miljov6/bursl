<?php
/**
* Template Name: Onboarding
*
*/

get_header();
?>
<main id="primary" class="site-main onboarding_page">
<?php
while ( have_posts() ) :
    the_post();
    get_template_part( 'template-parts/onboarding/hero' );
    get_template_part( 'template-parts/onboarding/how-it-works' );
    get_template_part( 'template-parts/onboarding/pension-plans' );
    get_template_part( 'template-parts/onboarding/why-bursl' );
    get_template_part( 'template-parts/onboarding/book-demo' );
    get_template_part( 'template-parts/onboarding/faq' );


endwhile;
?>

</main>

<?php
get_footer();
