<?php
/**
* Template Name: For Finance Teams
*
*/

get_header();
?>
<main id="primary" class="site-main for_finance_teams_page">
<?php
while ( have_posts() ) :
    the_post();
    get_template_part( 'template-parts/for-finance-teams/hero' );
    get_template_part( 'template-parts/for-finance-teams/text-boxes-under' );
    get_template_part( 'template-parts/for-finance-teams/first' );
    get_template_part( 'template-parts/for-finance-teams/second' );
    get_template_part( 'template-parts/for-finance-teams/text-invert-boxes-under' );
    get_template_part( 'template-parts/for-finance-teams/third' );
    get_template_part( 'template-parts/for-finance-teams/text-boxes-under-2' );
    get_template_part( 'template-parts/for-finance-teams/fourth' );
    get_template_part( 'template-parts/for-finance-teams/fifth' );
    get_template_part( 'template-parts/for-finance-teams/book-demo' );
    get_template_part( 'template-parts/for-finance-teams/faq' );


endwhile;
?>

</main>

<?php
get_footer();
