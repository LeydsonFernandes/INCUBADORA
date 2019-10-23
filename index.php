<?php get_header(); ?>
  <!-- Masthead -->
  <header class="masthead">
    <div class="container h-100">
      <div class="row h-100 align-items-center justify-content-center text-center">
        <div class="col-lg-10 align-self-end">
          <h1 class="text-uppercase text-white font-weight-bold">Incubadora Técnologica ITZN</h1>
          <hr class="divider my-4">
        </div>
        <div class="col-lg-8 align-self-baseline">
          <p class="text-white-75">A Incubadora Tecnológica do Campus Natal Zona Norte é um habitat de inovação situado no campus Natal Zona Norte do Instituto Federal de Educação, Ciência e Tecnologia do Rio Grande do Norte.</p>
          <a class="btn btn-primary btn-xl js-scroll-trigger" href="#about">Saiba Mais</a>
        </div>
      </div>
    </div>
  </header>  

  <!-- About Section -->
  <section class="page-section bg-primary" id="about">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
          <h2 class="text-white mt-0">Sobre a incubadora</h2>
          <hr class="divider light my-4">
          <p class="text-white-50 mb-4">Trata-se de uma instituição destinada à prover os meios necessários para alimentar o ecossistema empreendedor e promover a educação empreendedora da Região Metropolitana da Área Norte de Natal/RN, estimulando a geração de produtos e serviços inovadores de base tecnológica e o desenvolvimento territorial. </p>
          <a class="btn btn-light btn-xl js-scroll-trigger" href="#services">Continue Lendo</a>
        </div>
      </div>
    </div>
  </section>

  <!-- Portfolio Section -->
  <section id="portfolio">
      <div class="container-fluid p-0">
        <div class="row ">
          <?php
            $args = array('post_type'=>'post', 'showposts'=>'3');
            $meus_posts = get_posts($args);
            if(count($meus_posts)>=1):
        ?>
        <?php
                foreach($meus_posts as $post):
                setup_postdata($post);
                
        ?>
          <div class="col-lg-4 col-sm-6 clax">
            <a class="portfolio-box  thumbnail" href="<?php the_permalink(); ?>">
            <?php the_post_thumbnail('medium_large', ['class' => 'img-fluid thumb']); ?>
                
              <div class="portfolio-box-caption">
                
                <div class="project-category text-white-50">
                  <?php the_title(); ?>
                </div>
                <div class="project-name">
                  <?php echo the_excerpt(); ?>
                </div>
                
              </div>
            </a>
          </div>
        <?php endforeach; endif; ?>
      

        </div>
      </div>
    </section>
<section class="page-section bg-primary map" id="localizacao">
 <div id="map"></div>
    <script>
      var map;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center:{lat: -5.749358, lng: -35.261059},
          zoom: 18,
          styles: [
                    {
                        "featureType": "administrative",
                        "elementType": "labels.text.fill",
                        "stylers": [
                            {
                                "color": "#444444"
                            }
                        ]
                    },
                    {
                        "featureType": "landscape",
                        "elementType": "all",
                        "stylers": [
                            {
                                "color": "#f2f2f2"
                            }
                        ]
                    },
                    {
                        "featureType": "poi",
                        "elementType": "all",
                        "stylers": [
                            {
                                "visibility": "off"
                            }
                        ]
                    },
                    {
                        "featureType": "road",
                        "elementType": "all",
                        "stylers": [
                            {
                                "saturation": -100
                            },
                            {
                                "lightness": 45
                            }
                        ]
                    },
                    {
                        "featureType": "road.highway",
                        "elementType": "all",
                        "stylers": [
                            {
                                "visibility": "simplified"
                            }
                        ]
                    },
                    {
                        "featureType": "road.arterial",
                        "elementType": "labels.icon",
                        "stylers": [
                            {
                                "visibility": "off"
                            }
                        ]
                    },
                    {
                        "featureType": "transit",
                        "elementType": "all",
                        "stylers": [
                            {
                                "visibility": "off"
                            }
                        ]
                    },
                    {
                        "featureType": "water",
                        "elementType": "all",
                        "stylers": [
                            {
                                "color": "#46bcec"
                            },
                            {
                                "visibility": "on"
                            }
                        ]
                    }
                ]
          
        });
       
       
      var markerImage = "wp-content/themes/incubadora_site/assets/img/logoSite.png";
      var marker = new google.maps.Marker({
          position: {lat: -5.749358, lng: -35.261059},
          map: map,
          icon: markerImage
      });
      attachSecretMessage(marker);

      function attachSecretMessage(marker) {
        var infowindow = new google.maps.InfoWindow({
          content: '<h5>Incubadora Tecnológica do Campus Natal Zona Norte</h5>'
        });
        marker.addListener('click', function() {
          infowindow.open(marker.get('map'), marker);
        });
      }
    }
     
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC67zocEE1ZR45DXbpIUjByDomLIqhosAE&callback=initMap"
    async defer></script>
</section>
  <!-- Contact Section -->

  

  <?php get_footer(); ?>

 
