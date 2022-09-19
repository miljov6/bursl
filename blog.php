<?php
/**
* Template Name: Blog
*
*/

get_header();
?>
<main id="primary" class="site-main blog_page">
<?php
while ( have_posts() ) :
    the_post();
    get_template_part( 'template-parts/blog/hero' );
    get_template_part( 'template-parts/blog/featured-blogs' );
    get_template_part( 'template-parts/blog/all-blogs' );


endwhile;
?>

</main>

<?php
get_footer();
