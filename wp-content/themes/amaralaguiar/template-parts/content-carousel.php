<?php
  //register scripts
  wp_enqueue_style( 'jCarousel', 'http://sorgalla.com/jcarousel/examples/skeleton/jcarousel.skeleton.css' );

  wp_enqueue_script( 'jCarousel','http://sorgalla.com/jcarousel/dist/jquery.jcarousel.min.js', array( 'jquery' ) );

  wp_enqueue_script( 'jCarouselSkeleton', 'http://sorgalla.com/jcarousel/examples/skeleton/jcarousel.skeleton.js', array( 'jCarousel' ) );
 ?>

<script>
 $(function() {
     $('.jcarousel')
         .jcarousel({
             // Core configuration goes here
         })
         .jcarouselAutoscroll({
             interval: 8000,
             target: '+=1',
             autostart: true
         })
     ;
 });
 </script>

<div class="jcarousel-wrapper">

     <!-- Carousel -->
     <div class="jcarousel">
         <ul>
             <li><img src="https://dummyimage.com/510x360/858585/fff.jpg&text=carousel+1" width="497" alt=""></li>
             <li><img src="https://dummyimage.com/510x360/858585/fff.jpg&text=carousel+2" width="497" alt=""></li>
             <li><img src="https://dummyimage.com/510x360/858585/fff.jpg&text=carousel+3" width="497" alt=""></li>
             <li><img src="https://dummyimage.com/510x360/858585/fff.jpg&text=carousel+4" width="497" alt=""></li>
             <li><img src="https://dummyimage.com/510x360/858585/fff.jpg&text=carousel+5" width="497" alt=""></li>
         </ul>
     </div>

     <!-- Prev/next controls -->
     <a href="#" class="jcarousel-control-prev">&lsaquo; Prev</a>
     <a href="#" class="jcarousel-control-next">Next &rsaquo;</a>

     <!-- Pagination -->
     <p class="jcarousel-pagination">
         <!-- Pagination items will be generated in here -->
     </p>

</div>
