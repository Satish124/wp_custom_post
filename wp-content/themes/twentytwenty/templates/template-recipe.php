

<?php
/*Template Name: recipe*/
get_header();
echo '<div class="outer_container">';
query_posts(array(
   'post_type' => 'recipe'
)); ?>

<div class="custom_category">
<?php $terms = get_terms('category');
foreach($terms as $term){
    echo '<li><a href="'.$term->slug.'">'.$term->name.'</a></li>';
}
?></div>
<!-- <?php $terms = get_terms('post_tags');

foreach($terms as $term){
    echo '<li><a href="'.$term->slug.'">'.$term->name.'</a></li>';
}?> -->
<?php
while (have_posts()) : the_post(); ?>

  
<div class="main_container">

<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
<?php echo get_the_post_thumbnail()?>
<p><?php the_excerpt(); ?></p>

</div>


       </div>



       
     

      


<?php endwhile;


get_footer();

// start 
