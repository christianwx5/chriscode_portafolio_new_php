

<style>

  .margen {
    
    padding: 18px;
  }

  .Efecto_sobrepuesto2 {
        height: 100%;
        
        background: #ffffffd9;
    }

    #fondo-menu2 {
        background: url(imagen/relieve.jpg);
        padding: 3px;
    }

    #fondo-menu3 {
        background: url(imagen/relieve.jpg);
        padding: 4px;
    }

    div#fondo-portafolio {
      position: initial;;
    }
</style>

<style>
  @media (max-width:991px){
    .AdaptMedia {
    top: -15px;
    }

    .AdaptMedia2 {
    top: 0px;
    }
    
  }

  @media (max-width:767px){
    .AdaptMedia3 {
    width: 100%;
    }
  }
  
</style>

<style type="text/css">
  img.tg-item-image{height:170px}
  .tg-item-media-inner:after{content:'';background:#f5f5f5;position:absolute;width:calc(100% - 50px);border-radius:3px;height:10px;top:10px;left:40px}
  .tg-item-media-inner:before{content:'';color:#bbb;width:100%;height:30px;padding:0 8px;display:block;font-size:20px;line-height:28px;text-align:left;background-image:url('../../wp-content/uploads/2018/04/dots.html');background-position:left center;background-repeat:no-repeat;background-color:#272727}
  .tg-item-media-inner:not(.no-media-poster){overflow:hidden;outline:#272727 solid 1px}
</style>

<!-- Mirrored from brando.themezaa.com/personal/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 19 Aug 2020 21:42:32 GMT -->

      <!-- Util para portafolio -->
      <!--Ñ[AFecta en los margenes]>
<link rel='stylesheet' id='crane-style-main-css' href='css/style-main.min43c6.css?ver=1.4.8.2' type='text/css' media='all' />
     <![Afecta Fin]-->


<script type="text/javascript" src='js/ultimate.minb3be.js?ver=3.18.0'></script>

<link rel='stylesheet' id='redux-google-fonts-crane_options-css' href='css/estilo1.css' type='text/css' media='all' />

<script src="js/rocket-loader.min.js" data-cf-settings="4321cc7462fa17f084085127-|49" defer=""></script>
<script type="4321cc7462fa17f084085127-text/javascript" src='js/frontend-bundle.min43c6.js?ver=1.4.8.2'></script>


  <!-- Util para portafolio Fin-->





  <section id="portfolio" class="gutter-medium " style="border-bottom: 1px solid #e5e5e5;">
    
        <div class="row margen">
          <div class="container">
          <div class="wpb_column brando-column-container  vc_col-sm-12 vc_col-md-12 vc_col-xs-12 xs-text-center margin-six-bottom xs-margin-ten-bottom" data-front-class="brando-column-container  xs-text-center margin-six-bottom xs-margin-ten-bottom" >
            <div class="vc-column-innner-wrapper">
                <div class="wpd-innner-wrapper">
                    <h4 class="brando-remove-frontend-editor-top alt-font  black-text heading-style11 ">Portafolio</h4>
                </div>
            </div>
        </div>
      </div>
  
  <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-has-fill" id="fondo-portafolio"><div class="vc_column-inner vc_custom_1556536597224"><div class="wpb_wrapper">
    <div class="wpb_raw_code wpb_raw_js">
    <div class="wpb_wrapper">
    <script type="4321cc7462fa17f084085127-text/javascript">
    (function($) {
      "use strict";
      $(document).ready(function() {
        var $grid = $(".ct-promo-grid").isotope({
          // options
          itemSelector: ".ct-promo-grid-item",
          percentPosition: true,
          layoutMode: "fitRows"
        });
    
        $grid.imagesLoaded().progress(function() {
    console.log('hi');
          $grid.isotope("layout");
        });
    
        function toggleVisibility() {
          if (window.matchMedia(`(max-width: 1025px)`).matches) {
            $(".filters-select-group__wraper").removeClass("hidden");
            $(".filters-button-group").addClass("hidden");
    
            // bind filter on select change
            $(".filters-select-group").on("change", function() {
              // get filter value from option value
              var filterValue = this.value;
              // use filterFn if matches value
              $grid.isotope({ filter: filterValue });
            });
          } else {
            $(".filters-select-group__wraper").addClass("hidden");
            $(".filters-button-group").removeClass("hidden");
    
            // bind filter button click
            $(".filters-button-group").on("click", "button", function() {
              var filterValue = $(this).attr("data-filter");
              // use filterFn if matches value
              $grid.isotope({ filter: filterValue });
            });
    
            // change is-checked class on buttons
            $(".button-group").each(function(i, buttonGroup) {
              var $buttonGroup = $(buttonGroup);
              $buttonGroup.on("click", "button", function() {
                $buttonGroup.find(".is-checked").removeClass("is-checked");
                $(this).addClass("is-checked");
              });
            });
          }
        }
    
        toggleVisibility();
    
        $(window).resize(
          _.debounce(function() {
            toggleVisibility();
          }, 100)
        );
      });
    })(jQuery);
    
    
    </script>

    
    </div>
    </div>
    <div class="wpb_raw_code wpb_content_element wpb_raw_html">
    <div class="wpb_wrapper">
    <div class="ct-sorter">
    
    <div class="button-group filters-button-group menu-item" id="fondo-menu2">
      <div class="Efecto_sobrepuesto2">
    <button class="button menu-item is-checked" data-filter="*"><a class="menu-item-a">Todo</a></button>
    <button class="button menu-item" data-filter=".Node"><a class="menu-item-a">Node</a></button>
    <button class="button menu-item" data-filter=".React"><a class="menu-item-a">React</a></button>
    <button class="button menu-item" data-filter=".Php"><a class="menu-item-a">Php/Laravel</a></button>
    <button class="button menu-item" data-filter=".CSharpJava"><a class="menu-item-a">C#/Java</a></button>
    </div>
    </div>
  
    <div class="filters-select-group__wraper menu-item" id="fondo-menu3">
      <div class="Efecto_sobrepuesto2">
    <select class="filters-select-group" name="filters-select-group" id="filters-select-group" style="margin: 0 0 0px 0;">
      <option value="*">Todo</option>
    <option value=".Node">Node</option>
     <option value=".React">React</option>
    <option value=".Php">Php/Laravel</option>
    <option value=".CSharpJava">C#/Java</option>
    </select>
    <i class="fa fa-angle-down" aria-hidden="true"></i>
    
    </div>
  </div>
    <div class="ct-promo-grid">

    <!-- Aca se empiezan a cargar los items del contenido -->
    <?php
      include("itemsPortafolio.php");
    ?>

    </div>
    </div>
    </div>
    </div>
    </div></div></div>


  </div></div>

  <style id="woocommerce-inline-inline-css" type="text/css">
    .tg-item-image { height: 268px; }
</style>
</section>


