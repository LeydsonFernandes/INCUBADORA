<?php
/** 
    * Template name: postagens
*/
?>

<?php get_header(); ?>

<!-- Breadcrumb -->
	<header class="masthead2">
    <div class="container h-100">
      <div class="row h-100 align-items-center justify-content-center text-center">
        <div class="col-lg-10 align-self-end">
          <h1 class="text-uppercase text-white font-weight-bold">Saiba mais sobre quem já está conosco</h1>
          <hr class="divider my-4">
        </div>
        <div class="col-lg-8 align-self-baseline">
          <a class="btn btn-primary btn-xl js-scroll-trigger" href="#about2">Continuar</a>
        </div>
      </div>
    </div>
  </header>  
	<section class="container">
		<div class="row">
			<?php

                $pagina = (get_query_var('paged')) ? get_query_var('paged') : 1;
                $args = array('post_type'=>'post', 'paged'=>$pagina);
                query_posts($args);

                if(have_posts()) : while(have_posts()) : the_post();
                ?>
			<div class="col-lg-3 mb-5 col-md-4">
				<!-- Imagem -->
				<?php the_post_thumbnail('post-thumbnail', array('class' => 'card-img-top rounded-0 border-noticia img-fluid'));?>
			    <div class="card-body p-0 mt-3">
			    	<!-- Título -->
			      <a class="card-title-noticia" href="<?php the_permalink();?>"><?php the_title();?></a>
			      <!-- Descrição -->
			      <p class="card-text text-description mt-1"><?php echo the_excerpt(); ?></p>
			      <p class="card-text"><small class="text-muted">Publicado em <?php echo get_the_date('d/m/y');?></small></p>
			    </div>
			 </div>	
		<?php endwhile; endif;?>
		</div>		


<?php get_footer();?>