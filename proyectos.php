<?php
  $datos = json_decode(file_get_contents("https://new-portafolio-backend.herokuapp.com/portafolio/".$_REQUEST['num_proy']), true);
  $empresas[0] = "Manpresa";
  $empresas[1] = "Stars developers";
  $empresas[2] = "Freelancer";
  $empresas[3] = "IVSS";
  $empresas[4] = "Proyecto granja de bots";
  $empresas[5] = "Wams Mobile";
  $empresas[6] = "Avances DS";
  $empresas[7] = "The priority pass";
?>

<div>
  <style type="text/css">
    /**Seccion donde se muestran todos los lenguajes y frameworks **/
    .left {float: left}
    .right {float: right}
    .marco_frame {float: left}



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

    
    <div class="crane-section">
    <div class="crane-background" style="background-color: #efefef;"></div><div class="crane-container-fluid">
    <div class="vc_row wpb_row vc_row-fluid" id="content-pro">
      <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-md-6 vc_col-has-fill"><div class="vc_column-inner vc_custom_1499847016913"><div class="wpb_wrapper"><div class="vc_row wpb_row vc_inner vc_row-fluid"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner "><div class="wpb_wrapper"><div class="ult-spacer spacer-5f4560836078f" data-id="5f4560836078f" data-height="129" data-height-mobile="30" data-height-tab="100" data-height-tab-portrait="100" data-height-mobile-landscape="30" style="clear:both;display:block;"></div></div></div></div><div class="ct-p-views-carousel ct-p-views-carousel--left wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner ">
  
  <div class="slick-list draggable" >
    <div class="contenedor" style="width: 100%;box-shadow: 0 2px 62px rgba(0, 0, 0, 0.41);height: 300px;background: transparent;">

      
    
            <!--Aca-->
            <article class=" tg-landing f18" data-row="1" data-col="1">
              <div class="tg-item-inner">
                  <div class="tg-item-media-holder tg-light">
                      <div class="tg-item-media-inner">
                          <div class="part-superior_nav"></div>
                        <img class="tg-item-image" alt="<?php echo $datos[$i]['titulo']; ?>" width="400" height="1807" src="imagen/<?php echo  $_REQUEST['url_img']; ?>">
                      </div>
                      
                  </div>
                
              </div>
            </article>
          <!--hasta aca-->
          

    </div>
  </div>
  
  
  
  </div></div>
  <div class="wpb_column vc_column_container vc_col-sm-12">
    <div class="vc_column-inner ">
      <div class="wpb_wrapper">
        <div class="ult-spacer spacer-5f45608362492" data-id="5f45608362492" data-height="118" data-height-mobile="50" data-height-tab="" data-height-tab-portrait="50" data-height-mobile-landscape="50" style="clear:both;display:block;">
        </div>
      </div>
    </div>
  </div></div></div></div></div><div class="ct-p-dozens-offset wpb_column vc_column_container vc_col-sm-12 vc_col-lg-offset-1 vc_col-lg-4 vc_col-md-6"><div class="vc_column-inner "><div class="wpb_wrapper"><div class="ult-spacer spacer-5f456083626ae" data-id="5f456083626ae" data-height="206" data-height-mobile="0" data-height-tab="70" data-height-tab-portrait="70" data-height-mobile-landscape="0" style="clear:both;display:block;"></div><div id="ultimate-heading-32305f45608362745" class="uvc-heading ult-adjust-bottom-margin ultimate-heading-32305f45608362745 uvc-4647 " data-hspacer="no_spacer" data-halign="left" style="text-align:left"><div class="uvc-heading-spacer no_spacer" style="top"></div><div class="uvc-main-heading ult-responsive" data-ultimate-target=".uvc-heading.ultimate-heading-32305f45608362745 h2" data-responsive-json-new="{&quot;font-size&quot;:&quot;desktop:35px;&quot;,&quot;line-height&quot;:&quot;desktop:38px;&quot;}">
    <h2 style="font-family:'Montserrat';font-weight:700;color:#1a1a1a;"><?php echo $datos['titulo']; ?></h2>
  
  </div><div class="uvc-sub-heading ult-responsive" data-ultimate-target=".uvc-heading.ultimate-heading-32305f45608362745 .uvc-sub-heading " data-responsive-json-new="{&quot;font-size&quot;:&quot;desktop:18px;&quot;,&quot;line-height&quot;:&quot;desktop:38px;&quot;}" style="font-family:'Open Sans';font-weight:normal;color:#1a1a1a;">
  <?php foreach ($datos['tipo'] as $tipo){
            // echo '<script>console.log("'.$lenguaje.'");</script>';
            echo "<b>- ".$tipo,"</b> ";
        } 
  
  ?> 
  
</div></div><div class="ult-spacer spacer-5f456083627d4" data-id="5f456083627d4" data-height="53" data-height-mobile="53" data-height-tab="53" data-height-tab-portrait="" data-height-mobile-landscape="" style="clear:both;display:block;"></div><div id="ultimate-heading-81625f4560836285e" class="uvc-heading ult-adjust-bottom-margin ultimate-heading-81625f4560836285e uvc-9079 " data-hspacer="no_spacer" data-halign="left" style="text-align:left"><div class="uvc-heading-spacer no_spacer" style="top"></div>
  <div class="uvc-sub-heading ult-responsive" data-ultimate-target=".uvc-heading.ultimate-heading-81625f4560836285e .uvc-sub-heading " data-responsive-json-new="{&quot;font-size&quot;:&quot;desktop:16px;&quot;,&quot;line-height&quot;:&quot;desktop:34px;&quot;}" style="font-family:'Open Sans';font-weight:normal;color:#1a1a1a;">
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $datos['descripcion']; ?></div></div><div class="ult-spacer spacer-5f456083628de" data-id="5f456083628de" data-height="41" data-height-mobile="41" data-height-tab="41" data-height-tab-portrait="" data-height-mobile-landscape="" style="clear:both;display:block;"></div><div class=" ubtn-ctn-left ct-promo__sns_ab">
      
    <?php if ($datos['url_sitio_web']!='') {  ?>
      <a target="_blank" class="ubtn-link ult-adjust-bottom-margin ubtn-left ubtn-custom ct-promo__sns_ab" href="https://<?php echo $datos['url_sitio_web']; ?>">    
        <button type="button" id="ubtn-2686" class="ubtn ult-adjust-bottom-margin ult-responsive ubtn-custom ubtn-no-hover-bg  none  ubtn-left   tooltip-5f45608362964" data-hover="" data-border-color="" data-bg="" data-hover-bg="" data-border-hover="" data-shadow-hover="" data-shadow-click="none" data-shadow="" data-shd-shadow="" data-ultimate-target="#ubtn-2686" data-responsive-json-new="{&quot;font-size&quot;:&quot;desktop:18px;&quot;,&quot;line-height&quot;:&quot;&quot;}" style="font-family:'Poppins';font-weight:500;width:271px;min-height:68px;padding:px px;border:none;color: #ffffff;"><span class="ubtn-hover" style="background-color:"></span><span class="ubtn-data ubtn-text ">DEMO</span></button>
      </a>
    <?php } ?>
    
      </div><div class="ult-spacer spacer-5f45608362a2d" data-id="5f45608362a2d" data-height="72" data-height-mobile="72" data-height-tab="72" data-height-tab-portrait="" data-height-mobile-landscape="" style="clear:both;display:block;"></div></div></div></div></div>
  </div>
  </div>




  <div class="crane-section">
    
    
      <div class="crane-background" style="background-color: #2c2c2c;"></div>
      <div class="crane-container-fluid">
        <div id="content-pro" class="vc_row wpb_row vc_row-fluid"><div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-offset-1 vc_col-lg-4 vc_col-md-6"><div class="vc_column-inner "><div class="wpb_wrapper"><div class="ult-spacer spacer-5f4560835dc90" data-id="5f4560835dc90" data-height="206" data-height-mobile="50" data-height-tab="70" data-height-tab-portrait="50" data-height-mobile-landscape="50" style="clear:both;display:block;"></div><div id="ultimate-heading-19105f4560835dd24" class="uvc-heading ult-adjust-bottom-margin ultimate-heading-19105f4560835dd24 uvc-5669 " data-hspacer="no_spacer" data-halign="left" style="text-align:left"><div class="uvc-heading-spacer no_spacer" style="top"></div><div class="uvc-main-heading ult-responsive" data-ultimate-target=".uvc-heading.ultimate-heading-19105f4560835dd24 h2" data-responsive-json-new="{&quot;font-size&quot;:&quot;desktop:35px;&quot;,&quot;line-height&quot;:&quot;desktop:38px;&quot;}"><h2 style="font-family:'Montserrat';font-weight:700;color:#ffffff;"><?php echo $empresas[$datos['id_empresa']-1];?></h2></div><div class="uvc-sub-heading ult-responsive" data-ultimate-target=".uvc-heading.ultimate-heading-19105f4560835dd24 .uvc-sub-heading " data-responsive-json-new="{&quot;font-size&quot;:&quot;desktop:18px;&quot;,&quot;line-height&quot;:&quot;desktop:38px;&quot;}" style="font-family:'Open Sans';font-weight:normal;color:#ffffff;"><?php echo '<b>'.$datos['puesto'].'</b>'; ?></div></div><div class="ult-spacer spacer-5f4560835ddb3" data-id="5f4560835ddb3" data-height="53" data-height-mobile="25" data-height-tab="" data-height-tab-portrait="" data-height-mobile-landscape="25" style="clear:both;display:block;"></div><div id="ultimate-heading-90305f4560835de3d" class="uvc-heading ult-adjust-bottom-margin ultimate-heading-90305f4560835de3d uvc-6782 " data-hspacer="no_spacer" data-halign="left" style="text-align:left"><div class="uvc-heading-spacer no_spacer" style="top"></div><div class="uvc-sub-heading ult-responsive" data-ultimate-target=".uvc-heading.ultimate-heading-90305f4560835de3d .uvc-sub-heading " data-responsive-json-new="{&quot;font-size&quot;:&quot;desktop:16px;&quot;,&quot;line-height&quot;:&quot;desktop:34px;&quot;}" style="font-family:'Open Sans';font-weight:normal;color:#ffffff;">
        
        <?php echo $datos['descripcion_2'].'<br> <br><b>Cliente:</b> '.$datos['cliente'].''; ?>
      
        

        <?php if (isset($datos['frameworks'][0]) && !empty($datos['frameworks'][0])) { ?>
          <br />
          <br />
          <b>Lenguajes de programación</b>
        <br />
        <?php
          for ($i = 0; $i <count($datos['lenguajes']); $i++) {
            if ($datos['lenguajes'][$i]=='C#'){$datos['lenguajes'][$i] = 'CSharp'; }
            echo '<img width="40" height="40" src="imagen/m_'.$datos['lenguajes'][$i].'.jpg" class="img_frameworks" alt=""> - '.$datos['lenguajes'][$i].'<br />';

          }
        }
        ?>

        
        
        <?php if (isset($datos['frameworks'][0]) && !empty($datos['frameworks'][0])) { ?>
          <br />
          <br />
          <b>Frameworks</b>
          <br />
          <?php
            for ($i = 0; $i <count($datos['frameworks']); $i++) {
              
              echo '<img width="40" height="40" src="imagen/m_'.$datos['frameworks'][$i].'.jpg" class="img_frameworks" alt=""> - '.$datos['frameworks'][$i].'<br />';

            }
          }
          ?>

        
        
        <?php if (isset($datos['dbs'][0]) && !empty($datos['dbs'][0])) { ?>
          <br />
          <br />
          <b>Bases de datos</b>
          <br />
          <?php
            for ($i = 0; $i <count($datos['dbs']); $i++) {
              
              echo '<img width="40" height="40" src="imagen/m_'.$datos['dbs'][$i].'.jpg" class="img_frameworks" alt=""> - '.$datos['dbs'][$i].'<br />';

            }

            echo '<br /> <br />';
          }
          ?>

      </div></div><div class="ult-spacer spacer-5f4560835debc" data-id="5f4560835debc" data-height="41" data-height-mobile="41" data-height-tab="41" data-height-tab-portrait="" data-height-mobile-landscape="" style="clear:both;display:block;"></div><div class=" ubtn-ctn-left ct-promo__sns_ab">
          
        <?php if ($datos['repositorio']!='') {  ?> 
          <a target="_blank" class="ubtn-link ult-adjust-bottom-margin ubtn-left ubtn-custom ct-promo__sns_ab" href="https://<?php echo $datos['repositorio']; ?>"> 
            <button type="button" id="ubtn-2790" class="ubtn ult-adjust-bottom-margin ult-responsive ubtn-custom ubtn-no-hover-bg  none  ubtn-left   tooltip-5f4560835df40" data-hover="" data-border-color="" data-bg="" data-hover-bg="" data-border-hover="" data-shadow-hover="" data-shadow-click="none" data-shadow="" data-shd-shadow="" data-ultimate-target="#ubtn-2790" data-responsive-json-new="{&quot;font-size&quot;:&quot;desktop:18px;&quot;,&quot;line-height&quot;:&quot;&quot;}" style="font-family:'Poppins';font-weight:500;width:271px;min-height:68px;padding:px px;border:none;color: #ffffff;"><span class="ubtn-hover" style="background-color:"></span><span class="ubtn-data ubtn-text ">REPOSITORIO</span></button>
          </a>
        <?php } ?>
      </div><div class="ult-spacer spacer-5f4560835e00b" data-id="5f4560835e00b" data-height="72" data-height-mobile="0" data-height-tab="72" data-height-tab-portrait="0" data-height-mobile-landscape="0" style="clear:both;display:block;"></div></div></div></div><div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-offset-1 vc_col-lg-6 vc_col-md-offset-0 vc_col-md-6 vc_col-has-fill"><div class="vc_column-inner vc_custom_1500628361313"><div class="wpb_wrapper"><div class="vc_row wpb_row vc_inner vc_row-fluid"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner "><div class="wpb_wrapper"><div class="ult-spacer spacer-5f4560835e4ab" data-id="5f4560835e4ab" data-height="129" data-height-mobile="50" data-height-tab="" data-height-tab-portrait="50" data-height-mobile-landscape="50" style="clear:both;display:block;"></div></div></div></div><div class="ct-p-views-carousel ct-p-views-carousel--right wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner "><div class="wpb_wrapper slick-initialized slick-slider">
        
      <div class="slick-list draggable" style="height: 354px;"><div class="slick-track" style="opacity: 1; width: 1904px;">
      
      
      <div class="wpb_single_image wpb_content_element vc_align_center slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" style="width: 476px; position: relative; left: 0px; top: 0px; z-index: 1000; opacity: 1; transition: opacity 2000ms ease 0s;" tabindex="-1">
      <figure class="wpb_wrapper vc_figure">
      <div class="vc_single_image-wrapper   vc_box_border_grey ">
        <img width="854" height="636" src="wp-content/uploads/2016/06/layer-portfolio-1.jpg" class="vc_single_image-img attachment-full" alt="" srcset="https://crane.grooni.com/wp-content/uploads/2016/06/layer-portfolio-1.jpg 854w, https://crane.grooni.com/wp-content/uploads/2016/06/layer-portfolio-1-598x445.jpg 598w, https://crane.grooni.com/wp-content/uploads/2016/06/layer-portfolio-1-300x223.jpg 300w, https://crane.grooni.com/wp-content/uploads/2016/06/layer-portfolio-1-768x572.jpg 768w" sizes="(max-width: 854px) 100vw, 854px">
        <!-- <div class="framework">  <div class="left"> (8) </div><div class="right"> (9)</div> </div>
        <div class="framework">  <div class="left"> (8) </div><div class="right"> (9)</div> </div>
        <div class="framework">  <div class="left"> (8) </div><div class="right"> (9)</div> </div> 
        <div class="framework">  <div class="left"> (8) </div><div class="right"> (9)</div> </div>
        <div class="framework">  <div class="left"> (8) </div><div class="right"> (9)</div> </div>
        <div class="framework">  <div class="left"> (8) </div><div class="right"> (9)</div> </div>
        <div class="framework"> <div class="left"> (8) </div><div class="right"> (9)</div> </div>
        <div class="framework"> <div class="left"> (8) </div><div class="right"> (9)</div> </div> -->
      </div>
      </figure>
      </div>
   
    </div>
  
  </div>
      
      
      
      </div></div></div><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner "><div class="wpb_wrapper"><div class="ult-spacer spacer-5f4560836012e" data-id="5f4560836012e" data-height="118" data-height-mobile="50" data-height-tab="100" data-height-tab-portrait="100" data-height-mobile-landscape="50" style="clear:both;display:block;"></div></div></div></div></div></div></div></div></div></div>
      </div>

    <?php 
    
      // if ($_REQUEST['num_proy']==1){
      //     //Acerca de
      //     include ("proyectos/pag_previewW1.html");

      // }
      // if ($_REQUEST['num_proy']==2){
      //     //Portafolio
      //     include ("proyectos/pag_previewW2.html");
      // }
      // if ($_REQUEST['num_proy']==3){
      //     //Skill
      //     include ("proyectos/pag_previewW3.html");
      // }
      // if ($_REQUEST['num_proy']==4){
      //     //Empleo
      //     include ("proyectos/pag_previewW4.html");
      // }
      // if ($_REQUEST['num_proy']==5){
      //     //Educacion
      //     include ("proyectos/pag_previewW5.html");
      // }
      
      // if ($_REQUEST['num_proy']==6){
      //   //Educacion
      //   include ("proyectos/pag_previewW6.html");
      // }
    
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