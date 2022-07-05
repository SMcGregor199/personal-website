<?php get_header(); ?>
<h1>This page list all the book profiles contained on this site.</h1>
<?php 

  $parameters = array(
    "post_type" => "book",
    "orderby" => "ID",
    "order" => "ASC",
    "posts_per_page" => -1
  );

  $query = new WP_Query($parameters);
 
  while ($query->have_posts()) : $query->the_post();
    include( getFile('templates/components/book-card.php') );
  endwhile;

  //reset what was done above.
  //Allows looping of more items below this.
  wp_reset_postdata();
?>
<?php get_footer(); ?>