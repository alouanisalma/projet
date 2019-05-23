<?php get_header(); ?>
<div class="row">
<div class="col-sm-6 blog-main">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>

<?php endwhile;?>
<nav>
 <ul class="pager">
<li><?php next_posts_link( 'Previous' ); ?></li>
<li><?php previous_posts_link( 'Next' ); ?></li>
 </ul>
</nav>
<?php endif; ?>
<?php get_template_part('content',get_post_format());?>


</div> <!-- /.row -->
<?php get_footer(); ?>



