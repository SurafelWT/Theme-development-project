<?php if(have_posts() ): while(have_posts() ): the_post();?>

    <?php echo get_the_date();?> 
    <?php the_content();?>
    <?php echo get_the_author();?> 



    <?php
    $tags = get_tags();
    foreach($tags as $tag):?>
           <a href = "<?php echo get_tag_link($tag->term_id);?>" class="badge badge-success">
               <?php echo $tag->name;?>

          </a>
  
    <?php endforeach;?>

    
    <?php
    $categories = get_the_category();
    foreach($categories as $cat):?>
           <a href = "<?php echo get_category_link($cat->term_id);?>">
               <?php echo $cat->name;?>

          </a>
  
    <?php endforeach;?>

   



     
<?php endwhile; else: endif;?>