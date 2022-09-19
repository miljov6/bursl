<?php
/**
* Template Name: Recruitment Marketplace
*
*/

get_header();
?>
<main id="primary" class="site-main recruitment">
<?php
while ( have_posts() ) :
    the_post();
    get_template_part( 'template-parts/recruitment/hero' );
    get_template_part( 'template-parts/recruitment/how-it-works' );
    get_template_part( 'template-parts/recruitment/connect-with-us' );
    get_template_part( 'template-parts/recruitment/connect-with-us-2' );
    get_template_part( 'template-parts/recruitment/how-global-hiring' );
    get_template_part( 'template-parts/recruitment/book-demo' );
    get_template_part( 'template-parts/recruitment/faq' );
    get_template_part( 'template-parts/recruitment/under-box' );

endwhile;
?>

</main>

<?php
get_footer();
