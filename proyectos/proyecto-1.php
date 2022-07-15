<div>
  <style type="text/css">
    img.tg-item-image{height:270px}

    
    .tg-item-media-inner:after{content:'';background:#f5f5f5;position:absolute;width:calc(100% - 50px);border-radius:3px;height:14px;top:14px;left:40px}.tg-landing .tg-item-media-holder{transition:0.3s}.tg-landing:hover .tg-item-media-holder{transform:translateY(-4px)}
    .tg-item-media-inner:not(.no-media-poster){overflow:hidden;outline:#272727 solid 6px}
    .part-superior_nav {
      background: #272727;
      ;color:#bbb;width:100%;height:50px;padding:0 8px;display:block;font-size:20px;line-height:28px;text-align:left;background-image:url('../../wp-content/uploads/2018/04/dots.html');background-position:left center;background-repeat:no-repeat;
    }
    .part-superior_nav::after {
      content: '';
    background: #272727;
    position: absolute;
    width: calc(114.2% - 50px);
    border-radius: 6px;
    height: 54px;
    top: 0.4px;
    left: 0px;
    }
    .tg-item-media-inner {
      height: 300px;
      width: 100.3%;
    }
    
    .slick-list {
      height: 302px;
      box-shadow: 0 2px 62px rgba(0, 0, 0, 0.41);
    }

    #content-pro{
      height: 690px;
    }

    @media (max-width:991px){
      /*.vc_column-inner {
        width: 80%;
      }*/
      
      #content-pro {
       height: 1000px;
      }
      
      img.tg-item-image {
        height: 312px;
      }

      .tg-item-media-inner {
      height: 364px;
      }
    
      .slick-list {
        height: 367px;
      }

    }
    @media (min-width:992px){
      .vc_column-inner {
        width: 100%;
      }
    }
</style>

    <script type="text/javascript">(function ($) {
      'use strict';
      $(function () {
        $('.ct-p-gm-buy a').on('click', function () {
          gtag('event', 'click', {'event_category': 'buttons', 'event_label': 'promo_menu_button'});
        });
      });
    })(jQuery);
    </script>
    
    <div class="preloader is-hidden"><div class="loader-inner line-scale"><div></div><div></div><div></div><div></div><div></div></div></div>
    <div class="crane-content">
    <div class="post-5321 page type-page status-publish hentry">
    <div id="content">
    
    <!-- seccion 2 -->
    <?php 
    
      if ($_REQUEST['num_proy']==1){
        //Acerca de
        include ("proyectos/pag_preview1.html");

      }
      if ($_REQUEST['num_proy']==2){
          //Portafolio
          include ("proyectos/pag_preview2.html");
      }
      if ($_REQUEST['num_proy']==3){
          //Skill
          include ("proyectos/pag_preview3.html");
      }
      if ($_REQUEST['num_proy']==4){
          //Empleo
          include ("proyectos/pag_preview4.html");
      }
      if ($_REQUEST['num_proy']==5){
          //Educacion
          include ("proyectos/pag_preview5.html");
      }
    
    
    ?>
    <!-- seccion 2 Fin-->

    <!-- seccion 1 -->
    <?php //include ("pag_preview2.html"); ?>
    <!-- seccion 1 Fin-->

    <!-- seccion 3 -->
    
     </div>
    </div>
    </div>
  
   
    
    
    <div class="gumroad-loading-indicator">
      <i></i>
    </div>
    <!-- seccion 3 Fin-->
  </div>