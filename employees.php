<?php
/**
* Template Name: Employees
*
*/

get_header();
?>
<main id="primary" class="site-main employees_page">
<?php
while ( have_posts() ) :
    the_post();
    get_template_part( 'template-parts/employees/hero' );
    get_template_part( 'template-parts/employees/how-it-works' );
    get_template_part( 'template-parts/employees/global-coverage' );
    get_template_part( 'template-parts/employees/compliance' );
    get_template_part( 'template-parts/employees/automated-contracts' );
    get_template_part( 'template-parts/employees/expenses' );
    get_template_part( 'template-parts/employees/share' );
    get_template_part( 'template-parts/employees/local-recruitment' );
    get_template_part( 'template-parts/employees/onboarding-new' );
    get_template_part( 'template-parts/employees/why-bursl' );
    get_template_part( 'template-parts/employees/remote-hiring' );
    get_template_part( 'template-parts/employees/faq' );
    get_template_part( 'template-parts/employees/under-box' );

endwhile;
?>

</main>

<?php
get_footer();
