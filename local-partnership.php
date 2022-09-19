<?php
/**
* Template Name: Local Partnership
*
*/

get_header();
?>
<main id="primary" class="site-main local_partnership">
<?php
while ( have_posts() ) :
    the_post();
    get_template_part( 'template-parts/local-partnership/hero' );
    get_template_part( 'template-parts/local-partnership/partner-marketplace' );
    get_template_part( 'template-parts/local-partnership/hr-partners' );
    get_template_part( 'template-parts/local-partnership/legal-partners' );
    get_template_part( 'template-parts/local-partnership/accounting-partners' );
    get_template_part( 'template-parts/local-partnership/accounting-partners-2' );
    get_template_part( 'template-parts/local-partnership/partnering-benefits ' );
    get_template_part( 'template-parts/local-partnership/book-demo' );
    get_template_part( 'template-parts/local-partnership/faq' );
    get_template_part( 'template-parts/local-partnership/under-box' );


endwhile;
?>

</main>

<?php
get_footer();
