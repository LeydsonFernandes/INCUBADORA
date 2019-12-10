
<?php get_header(); ?>
<section class="page-section bg-primary" id="about2">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-sm-12 text-center">
          <h2 class="text-white mt-0"><?php the_title();?></h2>
          <hr class="divider my-4">
        <figure>  
           <?php the_post_thumbnail('post_thumbnail', array('class' =>'col-12 p-0'));?>
            <figcaption  class="legenda_imagem" style="color: #fff"><?php the_title();?> - <?php echo get_the_date('d/m/y');?></figcaption>  
        </figure>
        <br>
        <br>
         <?php get_the_content(); ?> 
       
          <hr class="divider light my-4">
          
    </div>
  </section>
<?php get_footer(); ?>
