<?php
/**
* Template Name: For Legal Teams
*
*/

get_header();
?>
<main id="primary" class="site-main for_legal_teams_page">
<?php
while ( have_posts() ) :
    the_post();
    get_template_part( 'template-parts/for-legal-teams/hero' );
    get_template_part( 'template-parts/for-legal-teams/text-boxes-under' );
    get_template_part( 'template-parts/for-legal-teams/first' );
    get_template_part( 'template-parts/for-legal-teams/second' );
    get_template_part( 'template-parts/for-legal-teams/third' );
    get_template_part( 'template-parts/for-legal-teams/fourth' );
    get_template_part( 'template-parts/for-legal-teams/fifth' );
    get_template_part( 'template-parts/for-legal-teams/sixth' );
    get_template_part( 'template-parts/for-legal-teams/text-boxes-under-2' );
    get_template_part( 'template-parts/for-legal-teams/reviews' );
    get_template_part( 'template-parts/for-legal-teams/seventh' );
    get_template_part( 'template-parts/for-legal-teams/book-demo' );
    get_template_part( 'template-parts/for-legal-teams/faq' );
    get_template_part( 'template-parts/for-legal-teams/under-box' );


endwhile;
?>

</main>

<?php
get_footer();
