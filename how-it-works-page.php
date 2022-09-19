<?php
/**
* Template Name: How It Works
*
*/

get_header();
?>
<main id="primary" class="site-main how_it_works_page">
<?php
while ( have_posts() ) :
    the_post();
    get_template_part( 'template-parts/how-it-works/hero' );
    get_template_part( 'template-parts/how-it-works/contracts' );
    get_template_part( 'template-parts/how-it-works/expense-management' );
    get_template_part( 'template-parts/how-it-works/slider' );
    get_template_part( 'template-parts/how-it-works/payments' );
    get_template_part( 'template-parts/how-it-works/why-work-with' );
    get_template_part( 'template-parts/how-it-works/compliance' );
    get_template_part( 'template-parts/how-it-works/recruitment-marketplace' );
    get_template_part( 'template-parts/how-it-works/local-partnerships' );
    get_template_part( 'template-parts/how-it-works/global-contractor' );
    get_template_part( 'template-parts/how-it-works/how-bursl-works' );
    get_template_part( 'template-parts/how-it-works/insights' );
    get_template_part( 'template-parts/how-it-works/tools' );
    get_template_part( 'template-parts/how-it-works/book-demo' );
    get_template_part( 'template-parts/how-it-works/faq' );
    get_template_part( 'template-parts/how-it-works/under-box' );


endwhile;
?>

</main>

<?php
get_footer();
