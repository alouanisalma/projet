<div class="blog-post">
 <h2 class="blog-post-title"><a href="<?php the_permalink(); ?>"><?php
the_title(); ?></a></h2>
 <p class="blog-post-meta"><?php the_date(); ?> par <a
href="#"><?php the_author(); ?></a></p>
 <?php the_excerpt(); ?>
</div><!-- /.blog-post -->
<<<<<<< Updated upstream
<<<<<<< Updated upstream
<a href="#" class="instagram text-center" style="<?php bloginfo('template_directory'); ?>background-image: url(images/p.jpg);">
<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Enseignant</title>
</head>

<body>


=======
>>>>>>> Stashed changes
<a href="<?php comments_link(); ?>"> <?php printf( _nx( 'One Comment',
'%1$s Comments', get_comments_number(), 'comments title', 'textdomain' ),
number_format_i18n( get_comments_number() ) ); ?> </a>
<?php next_posts_link( 'Older posts' ); ?>
<?php previous_posts_link( 'Newer posts' ); ?>
<nav>
<ul class="pager">
<li><?php next_posts_link( 'Previous' ); ?></li>
<li><?php previous_posts_link( 'Next' ); ?></li>
</ul>
</nav>
<<<<<<< Updated upstream
</body>

</html>
=======
>>>>>>> Stashed changes
