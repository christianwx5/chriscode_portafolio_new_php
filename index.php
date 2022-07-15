<!DOCTYPE html>
<html lang="en-US" class="no-js">

<style>
    .Efecto_sobrepuesto {
        height: 100%;
        
        background: #ffffffd9;
    }


    .navbar-nav li a {
        color
    }

    .section-link:focus{
        color: yellow;
        
    }
    
    #fondo-menu {
        background: url(imagen/relieve.jpg);
        padding: 6px;
    }
    .arreglar_margen {
        left: 18px;
    }
    
    .arreglar_margen2 {
        left: 3px;
    }

    @media (max-width:767){
        .contennido_slider {
            display: none;
        }
    }

    .Efecto_sobrepuesto {
        height: 100%;
        min-height: 570px;
        background: #ffffffd9;
    }



    @media (max-width:991px){
        .Efecto_sobrepuesto {
            min-height: 71px;
        }

    }

    @media (min-width:991px){
            
        /*Estilos para el menu de la pagina*/

    li.menu-item a:before {
        content:"";
        left:-1px;
        position:absolute;
        top:9px;
        border:1px solid #00ff2b;
        height:2px;
        width:6px;
        transition-duration: .4s;
        -moz-transition-duration: .4s;
        -webkit-transition-duration: .4s;
        -o-transition-duration: .4s
    }

    li.menu-item a:hover:before {
        width:130px;
        border:1px solid #00ff2b
    }
    
    

    li.menu-item.active a:before {
        text-decoration: none;
        border: 2px solid #00ff2b;
        background: #41ff6114;
        width:130px;
        height:51px;
        top: -14px;
        
    }

    /*Estilos para el menu de la seccion portafolio*/

    button.menu-item {
        position:relative;
    }
    a.menu-item-a:before {
        content: "";
        position: absolute;
        left: 1px;
        top: 18px;
        border: 1px solid #00ff2b;
        height: 2px;
        width: 6px;
        transition-duration: .4s;
        -moz-transition-duration: .4s;
        -webkit-transition-duration: .4s;
        -o-transition-duration: .4s
    }

    a.menu-item-a:hover:before {
        width:99%;
        border:1px solid #00ff2b
    }
    
    

    button.menu-item.is-checked a.menu-item-a:before {
        text-decoration: none;
        border: 2px solid #00ff2b;
        background: #41ff6114;
        width:99%;
        height:36px;
        top: 1px;
        
    }
            
    }

    .sidebar-nav .navbar-nav li a:hover{color:#000}

    
</style>

<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->



<script src="js/jquery-1.8.2.min.js" type="text/javascript"></script>
<script type="text/javascript">

$(document).ready(function() {
    //alert('Has cambiado el tamaño de la ventana 2');
    $("#brando-owl-slider7").css("min-height", "720px");
        $("#brando-owl-slider7").css("max-height", "720px");

        $("#slider-imag").css("min-height", "720px");
        $("#slider-imag").css("max-height", "720px");

        $("#slider-imag2").css("min-height", "720px");
        $("#slider-imag2").css("max-height", "720px");

        $("#slider-imag3").css("min-height", "720px");
        $("#slider-imag3").css("max-height", "720px");
         
         $(".enlace-off").click(function() {
            alert("Este enlace no está disponible por el momento.");

         });
        var ven_width = $(window).width();
        
        if(ven_width<=768){
            $(".mojojojo").attr("style","background: #ffffff;");
            $(".contennido_slider").attr("style","background: #f2f2f2;");
        }

        if(ven_width>=991){
            $(".mojojojo").attr("style","background: url(imagen/foto_de_perfil.jpg) no-repeat;");
            $(".contennido_slider").attr("style","background: #f2f2f200;");
        }
    $(window).resize(function() {
        //alert('Has cambiado el tamaño de la ventana');
        $("#brando-owl-slider7").css("min-height", "720px");
        $("#brando-owl-slider7").css("max-height", "720px");

        $("#slider-imag").css("min-height", "720px");
        $("#slider-imag").css("max-height", "720px");

        $("#slider-imag2").css("min-height", "720px");
        $("#slider-imag2").css("max-height", "720px");

        $("#slider-imag3").css("min-height", "720px");
        $("#slider-imag3").css("max-height", "720px");

        var ven_width = $(window).width();
        //alert(ven_width);
        if(ven_width<=768){
            $(".mojojojo").attr("style","#ffffff");
            $(".contennido_slider").attr("style","background: #f2f2f2;");
        }

        if(ven_width>=991){
            $(".mojojojo").attr("style","background: url(imagen/foto_de_perfil.jpg) no-repeat;");
            $(".contennido_slider").attr("style","background: #f2f2f200;");
        }
        
        
        
        
        
        //min-height: 580px;max-height: 720px
    });
});
</script>


<head>

<!--codigo para el stilo de la pagina de proyectos -->

    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="pingback" href="https://crane.grooni.com/xmlrpc.php">

    <title>✰ ChrisCode especialista en tecnología web - Porque innovar es avanzar ✰</title>

    <link rel="dns-prefetch" href="http://crane.grooni.com/">
    <link rel="dns-prefetch" href="http://fonts.googleapis.com/">
    <link rel="dns-prefetch" href="http://s.w.org/">
    <link rel="alternate" type="application/rss+xml" title="The Crane » Feed" href="https://crane.grooni.com/feed/">
    <link rel="alternate" type="application/rss+xml" title="The Crane » Comments Feed" href="https://crane.grooni.com/comments/feed/">
    <script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script><script type="text/javascript">
        
    // if (window.top.location != document.location) {
    //     window.top.location.href = document.location.href;
    // }
    
    </script>
    

    <link rel="stylesheet" id="groovy-menu-style-fonts-groovy-28328-css" href="wp-content/uploads/groovy/fonts/groovy-28328befe.css?ver=1.8.3.2" type="text/css" media="all">
    <link rel="stylesheet" id="groovy-menu-style-fonts-groovy-69018-css" href="wp-content/uploads/groovy/fonts/groovy-69018befe.css?ver=1.8.3.2" type="text/css" media="all">
    <link rel="stylesheet" id="bodhi-svgs-attachment-css" href="wp-content/plugins/svg-support/css/svgs-attachment03ec.css?ver=5.3.4" type="text/css" media="all">
    <style id="woocommerce-inline-inline-css" type="text/css">
    .woocommerce form .form-row .required { visibility: visible; }
    </style>
    <link rel="stylesheet" id="js_composer_front-css" href="wp-content/plugins/js_composer/assets/css/js_composer.mine23c.css?ver=5.7" type="text/css" media="all">
    <link rel="stylesheet" id="js_composer_custom_css-css" href="wp-content/uploads/js_composer/custome23c.css?ver=5.7" type="text/css" media="all">
    <link rel="stylesheet" id="crane-style-css" href="wp-content/themes/crane/style43c6.css?ver=1.4.8.2" type="text/css" media="all">
    <link rel="stylesheet" id="crane-style-main-css" href="wp-content/themes/crane/assets/css/style-main.min43c6.css?ver=1.4.8.2" type="text/css" media="all">

    <link rel="stylesheet" id="" href="css/stilo2.css" type="text/css" media="all">
    <link rel="stylesheet" id="" href="css/stilo1.css" type="text/css" media="all">
<!-- hasta los stilo de proyectos-->


<!-- stilo de mini imagen proyectos -->
    <link rel="stylesheet" href="css/stilo3.css" media="all" />
<!-- stilo de mini imagen proyectos -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="xmlrpc.php">
    
    <meta name="robots" content="index, follow">
<meta name="description" content="Programador especializado en tecnologias Node/React, Php y .NET">
<meta name="keywords" content="Programador, developer, devp, technodegy, tecnología, web, html, html5, php, javascript, c#, mysql, postgreSQL, heroku, vercel, aws, mongodb, desarrollador, venezolano, maracay, caracas, programador venezolano, christian programador, backend, frontend, fullstack, typescript">

    
<link rel='dns-prefetch' href='http://fonts.googleapis.com/' />
<link rel="alternate" type="application/rss+xml" title="Brando Responsive &amp; Multipurpose OnePage WordPress Theme &raquo; Feed" href="feed/index.html" />
<link rel="alternate" type="application/rss+xml" title="Brando Responsive &amp; Multipurpose OnePage WordPress Theme &raquo; Comments Feed" href="comments/feed/index.html" />
<link rel="stylesheet" href="wp-content/cache/minify/1c9e1.css" media="all" />


<link rel='stylesheet' id='brando-fonts-css'  href='http://fonts.googleapis.com/css?family=Roboto%3A100%2C300%2C400%2C500%2C700%2C900%7CMontserrat%3A100%2C200%2C300%2C400%2C500%2C600%2C700%2C800%2C900&amp;subset=cyrillic%2Ccyrillic-ext%2Cgreek%2Cgreek-ext%2Clatin-ext%2Cvietnamese' type='text/css' media='all' />
<!--[if lt IE 9]>
<link rel='stylesheet' id='vc_lte_ie9-css'  href='https://brando.themezaa.com/personal/wp-content/plugins/js_composer/assets/css/vc_lte_ie9.min.css' type='text/css' media='screen' />
<![endif]-->

<!--[El problema de del portafolio2 ya aca]>

<![Final del problema]-->
<link rel="stylesheet" href="wp-content/cache/minify/705bd.css" media="all" />


<!--[if IE 9]>
<link rel='stylesheet' id='brando-ie9-css'  href='https://brando.themezaa.com/personal/wp-content/themes/brando/assets/css/style-ie9.css' type='text/css' media='all' />
<![endif]-->
<script src="wp-content/cache/minify/9ad44.js"></script>


<!--[if lt IE 9]>
<script type='text/javascript' src='https://brando.themezaa.com/personal/wp-content/themes/brando/assets/js/html5shiv.js'></script>
<![endif]-->
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="xmlrpc0db0.php?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="wp-includes/wlwmanifest.xml" /> 
<link rel="canonical" href="index.html" />
<link rel='shortlink' href='index.html' />
<link rel="alternate" type="application/json+oembed" href="wp-json/oembed/1.0/embed26bf.json?url=https%3A%2F%2Fbrando.themezaa.com%2Fpersonal%2F" />
<link rel="alternate" type="text/xml+oembed" href="wp-json/oembed/1.0/embedd778?url=https%3A%2F%2Fbrando.themezaa.com%2Fpersonal%2F&amp;format=xml" />
            <link rel="shortcut icon" href="wp-content/uploads/2016/07/brando-32x32.png">
<link rel="apple-touch-icon" href="wp-content/uploads/2016/07/brando-57x57.png">
<link rel="apple-touch-icon" sizes="72x72" href="wp-content/uploads/2016/07/brando-72x72.png">

<link rel="apple-touch-icon" sizes="114x114" href="wp-content/uploads/2016/07/brando-114x114.png">
<link rel="apple-touch-icon" sizes="149x149" href="wp-content/uploads/2016/07/brando-114x114.png">
            
<script data-cfasync="false" type="text/javascript">var Arrive=function(d,e,c){"use strict";if(d.MutationObserver&&"undefined"!=typeof HTMLElement){var a,t,r=0,u=(a=HTMLElement.prototype.matches||HTMLElement.prototype.webkitMatchesSelector||HTMLElement.prototype.mozMatchesSelector||HTMLElement.prototype.msMatchesSelector,{matchesSelector:function(e,t){return e instanceof HTMLElement&&a.call(e,t)},addMethod:function(e,t,a){var r=e[t];e[t]=function(){return a.length==arguments.length?a.apply(this,arguments):"function"==typeof r?r.apply(this,arguments):void 0}},callCallbacks:function(e,t){t&&t.options.onceOnly&&1==t.firedElems.length&&(e=[e[0]]);for(var a,r=0;a=e[r];r++)a&&a.callback&&a.callback.call(a.elem,a.elem);t&&t.options.onceOnly&&1==t.firedElems.length&&t.me.unbindEventWithSelectorAndCallback.call(t.target,t.selector,t.callback)},checkChildNodesRecursively:function(e,t,a,r){for(var i,n=0;i=e[n];n++)a(i,t,r)&&r.push({callback:t.callback,elem:i}),0<i.childNodes.length&&u.checkChildNodesRecursively(i.childNodes,t,a,r)},mergeArrays:function(e,t){var a,r={};for(a in e)e.hasOwnProperty(a)&&(r[a]=e[a]);for(a in t)t.hasOwnProperty(a)&&(r[a]=t[a]);return r},toElementsArray:function(e){return void 0===e||"number"==typeof e.length&&e!==d||(e=[e]),e}}),w=((t=function(){this._eventsBucket=[],this._beforeAdding=null,this._beforeRemoving=null}).prototype.addEvent=function(e,t,a,r){var i={target:e,selector:t,options:a,callback:r,firedElems:[]};return this._beforeAdding&&this._beforeAdding(i),this._eventsBucket.push(i),i},t.prototype.removeEvent=function(e){for(var t,a=this._eventsBucket.length-1;t=this._eventsBucket[a];a--)if(e(t)){this._beforeRemoving&&this._beforeRemoving(t);var r=this._eventsBucket.splice(a,1);r&&r.length&&(r[0].callback=null)}},t.prototype.beforeAdding=function(e){this._beforeAdding=e},t.prototype.beforeRemoving=function(e){this._beforeRemoving=e},t),l=function(i,n){var l=new w,o=this,s={fireOnAttributesModification:!1};return l.beforeAdding(function(t){var e,a=t.target;a!==d.document&&a!==d||(a=document.getElementsByTagName("html")[0]),e=new MutationObserver(function(e){n.call(this,e,t)});var r=i(t.options);e.observe(a,r),t.observer=e,t.me=o}),l.beforeRemoving(function(e){e.observer.disconnect()}),this.bindEvent=function(e,t,a){t=u.mergeArrays(s,t);for(var r=u.toElementsArray(this),i=0;i<r.length;i++)l.addEvent(r[i],e,t,a)},this.unbindEvent=function(){var a=u.toElementsArray(this);l.removeEvent(function(e){for(var t=0;t<a.length;t++)if(this===c||e.target===a[t])return!0;return!1})},this.unbindEventWithSelectorOrCallback=function(a){var e,r=u.toElementsArray(this),i=a;e="function"==typeof a?function(e){for(var t=0;t<r.length;t++)if((this===c||e.target===r[t])&&e.callback===i)return!0;return!1}:function(e){for(var t=0;t<r.length;t++)if((this===c||e.target===r[t])&&e.selector===a)return!0;return!1},l.removeEvent(e)},this.unbindEventWithSelectorAndCallback=function(a,r){var i=u.toElementsArray(this);l.removeEvent(function(e){for(var t=0;t<i.length;t++)if((this===c||e.target===i[t])&&e.selector===a&&e.callback===r)return!0;return!1})},this},i=new function(){var s={fireOnAttributesModification:!1,onceOnly:!1,existing:!1};function n(e,t,a){return!(!u.matchesSelector(e,t.selector)||(e._id===c&&(e._id=r++),-1!=t.firedElems.indexOf(e._id))||(t.firedElems.push(e._id),0))}var d=(i=new l(function(e){var t={attributes:!1,childList:!0,subtree:!0};return e.fireOnAttributesModification&&(t.attributes=!0),t},function(e,i){e.forEach(function(e){var t=e.addedNodes,a=e.target,r=[];null!==t&&0<t.length?u.checkChildNodesRecursively(t,i,n,r):"attributes"===e.type&&n(a,i)&&r.push({callback:i.callback,elem:a}),u.callCallbacks(r,i)})})).bindEvent;return i.bindEvent=function(e,t,a){t=void 0===a?(a=t,s):u.mergeArrays(s,t);var r=u.toElementsArray(this);if(t.existing){for(var i=[],n=0;n<r.length;n++)for(var l=r[n].querySelectorAll(e),o=0;o<l.length;o++)i.push({callback:a,elem:l[o]});if(t.onceOnly&&i.length)return a.call(i[0].elem,i[0].elem);setTimeout(u.callCallbacks,1,i)}d.call(this,e,t,a)},i},o=new function(){var r={};function i(e,t){return u.matchesSelector(e,t.selector)}var n=(o=new l(function(){return{childList:!0,subtree:!0}},function(e,r){e.forEach(function(e){var t=e.removedNodes,a=[];null!==t&&0<t.length&&u.checkChildNodesRecursively(t,r,i,a),u.callCallbacks(a,r)})})).bindEvent;return o.bindEvent=function(e,t,a){t=void 0===a?(a=t,r):u.mergeArrays(r,t),n.call(this,e,t,a)},o};e&&g(e.fn),g(HTMLElement.prototype),g(NodeList.prototype),g(HTMLCollection.prototype),g(HTMLDocument.prototype),g(Window.prototype);var n={};return s(i,n,"unbindAllArrive"),s(o,n,"unbindAllLeave"),n}function s(e,t,a){u.addMethod(t,a,e.unbindEvent),u.addMethod(t,a,e.unbindEventWithSelectorOrCallback),u.addMethod(t,a,e.unbindEventWithSelectorAndCallback)}function g(e){e.arrive=i.bindEvent,s(i,e,"unbindArrive"),e.leave=o.bindEvent,s(o,e,"unbindLeave")}}(window,"undefined"==typeof jQuery?null:jQuery,void 0);function check_webp_feature(e,t){var a=new Image;a.onload=function(){var e=0<a.width&&0<a.height;t(e)},a.onerror=function(){t(!1)},a.src="data:image/webp;base64,"+{alpha:"UklGRkoAAABXRUJQVlA4WAoAAAAQAAAAAAAAAAAAQUxQSAwAAAARBxAR/Q9ERP8DAABWUDggGAAAABQBAJ0BKgEAAQAAAP4AAA3AAP7mtQAAAA==",animation:"UklGRlIAAABXRUJQVlA4WAoAAAASAAAAAAAAAAAAQU5JTQYAAAD/////AABBTk1GJgAAAAAAAAAAAAAAAAAAAGQAAABWUDhMDQAAAC8AAAAQBxAREYiI/gcA"}[e]}function ewwwLoadImages(e){var n="data-";function t(e,t){for(var a=["accesskey","align","alt","border","class","contenteditable","contextmenu","crossorigin","dir","draggable","dropzone","height","hidden","hspace","id","ismap","lang","longdesc","sizes","spellcheck","style","tabindex","title","translate","usemap","vspace","width","data-attachment-id","data-caption","data-comments-opened","data-event-trigger","data-height","data-highlight-color","data-highlight-border-color","data-highlight-border-opacity","data-highlight-border-width","data-highlight-opacity","data-image-meta","data-image-title","data-image-description","data-large_image_width","data-large_image_height","data-lazy","data-lazy-type","data-no-lazy","data-orig-size","data-permalink","data-pin-description","data-pin-id","data-pin-media","data-pin-url","data-width"],r=0,i=a.length;r<i;r++)ewwwAttr(t,a[r],e.getAttribute(n+a[r]));return t}if(e){for(var a=document.querySelectorAll(".batch-image img, .image-wrapper a, .ngg-pro-masonry-item a, .ngg-galleria-offscreen-seo-wrapper a"),r=0,i=a.length;r<i;r++)ewwwAttr(a[r],"data-src",a[r].getAttribute("data-webp")),ewwwAttr(a[r],"data-thumbnail",a[r].getAttribute("data-webp-thumbnail"));for(r=0,i=(o=document.querySelectorAll(".rev_slider ul li")).length;r<i;r++){ewwwAttr(o[r],"data-thumb",o[r].getAttribute("data-webp-thumb"));for(var l=1;l<11;)ewwwAttr(o[r],"data-param"+l,o[r].getAttribute("data-webp-param"+l)),l++}var o;for(r=0,i=(o=document.querySelectorAll(".rev_slider img")).length;r<i;r++)ewwwAttr(o[r],"data-lazyload",o[r].getAttribute("data-webp-lazyload"));var s=document.querySelectorAll("div.woocommerce-product-gallery__image");for(r=0,i=s.length;r<i;r++)ewwwAttr(s[r],"data-thumb",s[r].getAttribute("data-webp-thumb"))}var d=document.querySelectorAll("video");for(r=0,i=d.length;r<i;r++)ewwwAttr(d[r],"poster",e?d[r].getAttribute("data-poster-webp"):d[r].getAttribute("data-poster-image"));var c=document.querySelectorAll("img.ewww_webp_lazy_load");for(r=0,i=c.length;r<i;r++){if(e){ewwwAttr(c[r],"data-lazy-srcset",c[r].getAttribute("data-lazy-srcset-webp")),ewwwAttr(c[r],"data-srcset",c[r].getAttribute("data-srcset-webp")),ewwwAttr(c[r],"data-lazy-src",c[r].getAttribute("data-lazy-src-webp")),ewwwAttr(c[r],"data-src",c[r].getAttribute("data-src-webp")),ewwwAttr(c[r],"data-orig-file",c[r].getAttribute("data-webp-orig-file")),ewwwAttr(c[r],"data-medium-file",c[r].getAttribute("data-webp-medium-file")),ewwwAttr(c[r],"data-large-file",c[r].getAttribute("data-webp-large-file"));var u=c[r].getAttribute("srcset");null!=u&&!1!==u&&u.includes("R0lGOD")&&ewwwAttr(c[r],"src",c[r].getAttribute("data-lazy-src-webp"))}c[r].className=c[r].className.replace(/\bewww_webp_lazy_load\b/,"")}var w=document.querySelectorAll(".ewww_webp");for(r=0,i=w.length;r<i;r++){var g=document.createElement("img");e?(ewwwAttr(g,"src",w[r].getAttribute("data-webp")),ewwwAttr(g,"srcset",w[r].getAttribute("data-srcset-webp")),ewwwAttr(g,"data-orig-file",w[r].getAttribute("data-orig-file")),ewwwAttr(g,"data-orig-file",w[r].getAttribute("data-webp-orig-file")),ewwwAttr(g,"data-medium-file",w[r].getAttribute("data-medium-file")),ewwwAttr(g,"data-medium-file",w[r].getAttribute("data-webp-medium-file")),ewwwAttr(g,"data-large-file",w[r].getAttribute("data-large-file")),ewwwAttr(g,"data-large-file",w[r].getAttribute("data-webp-large-file")),ewwwAttr(g,"data-large_image",w[r].getAttribute("data-large_image")),ewwwAttr(g,"data-large_image",w[r].getAttribute("data-webp-large_image")),ewwwAttr(g,"data-src",w[r].getAttribute("data-src")),ewwwAttr(g,"data-src",w[r].getAttribute("data-webp-src"))):(ewwwAttr(g,"src",w[r].getAttribute("data-img")),ewwwAttr(g,"srcset",w[r].getAttribute("data-srcset-img")),ewwwAttr(g,"data-orig-file",w[r].getAttribute("data-orig-file")),ewwwAttr(g,"data-medium-file",w[r].getAttribute("data-medium-file")),ewwwAttr(g,"data-large-file",w[r].getAttribute("data-large-file")),ewwwAttr(g,"data-large_image",w[r].getAttribute("data-large_image")),ewwwAttr(g,"data-src",w[r].getAttribute("data-src"))),g=t(w[r],g),w[r].parentNode.insertBefore(g,w[r].nextSibling),w[r].className=w[r].className.replace(/\bewww_webp\b/,"")}window.jQuery&&jQuery.fn.isotope&&jQuery.fn.imagesLoaded&&(jQuery(".fusion-posts-container-infinite").imagesLoaded(function(){jQuery(".fusion-posts-container-infinite").hasClass("isotope")&&jQuery(".fusion-posts-container-infinite").isotope()}),jQuery(".fusion-portfolio:not(.fusion-recent-works) .fusion-portfolio-wrapper").imagesLoaded(function(){jQuery(".fusion-portfolio:not(.fusion-recent-works) .fusion-portfolio-wrapper").isotope()}))}
function ewwwWebPInit(e){ewwwLoadImages(e),ewwwNggLoadGalleries(e),document.arrive(".ewww_webp",function(){ewwwLoadImages(e)}),document.arrive(".ewww_webp_lazy_load",function(){ewwwLoadImages(e)});var t=0,a=setInterval(function(){"undefined"!=typeof galleries&&(ewwwNggParseGalleries(e),clearInterval(a)),1e3<(t+=25)&&clearInterval(a)},25)}function ewwwAttr(e,t,a){null!=a&&!1!==a&&e.setAttribute(t,a)}function ewwwNggParseGalleries(e){if(e)for(var t in galleries){var a=galleries[t];galleries[t].images_list=ewwwNggParseImageList(a.images_list)}}function ewwwNggLoadGalleries(e){e&&document.addEventListener("ngg.galleria.themeadded",function(e,t){window.ngg_galleria._create_backup=window.ngg_galleria.create,window.ngg_galleria.create=function(e,t){var a=$(e).data("id");return galleries["gallery_"+a].images_list=ewwwNggParseImageList(galleries["gallery_"+a].images_list),window.ngg_galleria._create_backup(e,t)}})}function ewwwNggParseImageList(e){for(var t in e){var a=e[t];if(void 0!==a["image-webp"]&&(e[t].image=a["image-webp"],delete e[t]["image-webp"]),void 0!==a["thumb-webp"]&&(e[t].thumb=a["thumb-webp"],delete e[t]["thumb-webp"]),void 0!==a.full_image_webp&&(e[t].full_image=a.full_image_webp,delete e[t].full_image_webp),void 0!==a.srcsets)for(var r in a.srcsets)nggSrcset=a.srcsets[r],void 0!==a.srcsets[r+"-webp"]&&(e[t].srcsets[r]=a.srcsets[r+"-webp"],delete e[t].srcsets[r+"-webp"]);if(void 0!==a.full_srcsets)for(var i in a.full_srcsets)nggFSrcset=a.full_srcsets[i],void 0!==a.full_srcsets[i+"-webp"]&&(e[t].full_srcsets[i]=a.full_srcsets[i+"-webp"],delete e[t].full_srcsets[i+"-webp"])}return e}check_webp_feature("alpha",ewwwWebPInit);</script>

<!-- En este estilo esta el estilo de la linea roja que me estorbar, en caso de no haber interferencia en otra cosa en el futuro no sera necesario usarla

<style type="text/css" title="dynamic-css" class="options-output">body{font-family:Roboto;}.alt-font, .sidebar ul li a, .tags a, .btn{font-family:Montserrat;}body{line-height:23px;font-size:13px;}h1{line-height:50px;font-size:45px;}h2{line-height:45px;font-size:40px;}
h3{line-height:40px;font-size:35px;}h4{line-height:30px;font-size:25px;}h5{line-height:25px;font-size:20px;}h6{line-height:23px;font-size:18px;}.text-extra-small{line-height:15px;font-size:10px;}.text-small{line-height:20px;font-size:11px;}.text-medium{line-height:24px;font-size:14px;}
.text-large{line-height:22px;font-size:15px;}.text-extra-large{line-height:27px;font-size:18px;}.title-small{line-height:30px;font-size:20px;}.title-medium{line-height:28px;font-size:24px;}.title-large{line-height:34px;font-size:28px;}.title-extra-large{line-height:37px;font-size:35px;}.title-extra-large-2{line-height:45px;font-size:45px;}
.title-extra-large-3{line-height:50px;font-size:50px;}.title-extra-large-4{line-height:70px;font-size:70px;}.title-extra-large-5{line-height:50px;font-size:80px;}.title-big{line-height:100px;font-size:100px;}.title-big2{line-height:125px;font-size:125px;}.title-big3{line-height:150px;font-size:150px;}.bg-white{background:#ffffff;}
.bg-black{background:#000000;}.bg-dark-gray{background:#252525;}.bg-mid-gray{background:#d4d4d4;}.bg-mid-gray2{background:#b2b2b2;}.bg-mid-gray3{background:#e2e2e2;}.bg-light-gray{background:#f7f7f7;}.bg-gray{background:#f6f6f6;}.bg-yellow{background:#e6af2a;}.bg-light-yellow{background:#f8f7f5;}
.bg-deep-yellow{background:#c8a64b;}.bg-golden-yellow{background:#ffd800;}.bg-fast-yellow{background:#ef106e;}.bg-yellow-ochre{background:#997546;}.bg-brown{background:#614c45;}.bg-deep-brown{background:#544441;}.bg-orange{background:#c24742;}.bg-deep-orange{background:#d66e4a;}
.bg-fast-orange{background:#ff513b;}.bg-pink{background:#c2345f;}.bg-deep-red{background:#dc3535;}.bg-crimson-red{background:#e31d3b;}.bg-deep-pink{background:#e53878;}.bg-light-pink{background:#dc378e;}.bg-deep-pink-dark{background:#e15276;}.bg-fast-pink{background:#ff1a56;}.bg-fast-pink-dark{background:#ef106e;}
.bg-magenta{background:#d94378;}.bg-dark-green{background:#60a532;}.bg-fast-green{background:#00ff97;}.bg-deep-green{background:#1acd7b;}.bg-deep-green2{background:#7ebaa1;}.bg-deep-green-dark{background:#04b966;}.bg-deep-green-dark2{background:#6ad5a7;}.bg-deep-green-dark3{background:#62a486;}
.bg-transparent-green{background:rgba(0,255,151,0.5);}.bg-fast-blue{background:#00efff;}.bg-dark-blue{background:#1e2126;}.bg-deep-blue{background:#2283d4;}.bg-deep-blue2{background:#131d43;}.bg-deep-blue3{background:#1d2127;}.bg-transparent-deep-blue{background:rgba(17,116,198,0.9);}
.bg-turquoise-blue{background:#93e4cf;}.bg-deep-blue-dark{background:#1d6cae;}.bg-transparent-blue{background:rgba(0,239,255,0.5);}.bg-violet{background:#6c407e;}.menu-wrap{background:#ffffff;}nav.center-logo-header.shrink{background:#93e4cf;}.transparent-header.shrink{background:rgba(0,0,0,0.7);}
.sidebar-nav, nav.shrink.sidebar-nav{background:#ffffff;}nav.without-border.shrink{background:#000000;}.sidebar-nav .navbar-nav li a::before{border-bottom-color:#ef106e;}
.sidebar-nav .navbar-nav li > a:hover::before, .sidebar-nav .navbar-nav li.active > a::before, .sidebar-nav .navbar-nav li.current-menu-item > a:before, .sidebar-nav .navbar-nav li ul li.current-menu-item > a:before{border-bottom-color:#ef106e;}
body{color:#626262;}a{color:#626262;}a:hover{color:#272727;}i{color:#9a9a9a;}.white-text{color:#ffffff;}.black-text{color:#000000;}.gray-text{color:#626262;}.light-gray-text{color:#ababab;}.light-gray-text2{color:#c5c5c5;}.medium-gray-text{color:#929292;}
.dark-gray-text{color:#373737;}.deep-gray-text{color:#404040;}.deep-light-gray-text{color:#878787;}.magenta-text{color:#d94378;}.orange-text{color:#ff513b;}.deep-orange-text{color:#d66e4a;}.deep-red-text{color:#e75e50;}.crimson-red-text{color:#e31d3b;}.deep-pink-dark-text{color:#e15276;}
.fast-pink-text{color:#ff1a56;}.fast-pink-text-dark{color:#ef106e;}.yellow-text{color:#fdd947;}.fast-yellow-text{color:#ffffff;}.brown-text{color:#614c45;}.deep-yellow-text{color:#c8a64b;}.dark-blue-text{color:#1e2126;}.deep-blue-text{color:#2283d4;}.turquoise-blue-text{color:#85d4c0;}
.transparent-blue-text{color:rgba(0,255,151,0.5);}.fast-green-text{color:#85eea5;}.deep-green-text{color:#1acd7b;}.deep-green-dark2-text{color:#6ad5a7;}.transparent-green-text{color:rgba(0,255,151,0.5);}</style><noscript><style> .wpb_animate_when_almost_visible { opacity: 1; }</style>
</noscript>    

-->

    <!--Util-->
        <link rel='stylesheet' id='ionicons-css' href='wp-content/themes/aya/assets/css/ionicons.minc225.css?ver=5.4.1' type='text/css' media='all' />
        <link rel='stylesheet' id='aya_slick-css-css' href='wp-content/plugins/aya-plugins/shortcodes/assets/css/slickc225.css?ver=5.4.1' type='text/css' media='all' />
        <link rel='stylesheet' id='aya_aos-css-css' href='wp-content/themes/aya/assets/css/aosc225.css?ver=5.4.1' type='text/css' media='all' />
        <link rel='stylesheet' id='aya-theme-css-css' href='wp-content/themes/aya/assets/css/aya.minc225.css?ver=5.4.1' type='text/css' media='all' />
        <link rel='stylesheet' id='landing-style-css' href='wp-content/themes/aya/assets/css/landingc225.css?ver=5.4.1' type='text/css' media='all' />
        <link rel='stylesheet' id='js_composer_front-css' href='wp-content/plugins/js_composer/assets/css/js_composer.min8b06.css?ver=5.4.7' type='text/css' media='all' />
        <link rel='stylesheet' id='the-grid-css' href='wp-content/plugins/the_grid/frontend/assets/css/the-grid.mind315.css?ver=2.6.0' type='text/css' media='all' />

        <script type='text/javascript' src='wp-includes/js/jquery/jquery4a5f.js?ver=1.12.4-wp'></script>
        <script type='text/javascript' src='wp-includes/js/jquery/jquery-migrate.min330a.js?ver=1.4.1'></script>

        <script type='text/javascript' src='wp-content/themes/aya/assets/js/lib/scriptsc225.js?ver=5.4.1'></script>

        
    <!--Util fin-->






       




</head>
<body class="home page-template-default page page-id-3063 wpb-js-composer js-comp-ver-6.0.3 vc_responsive">
    <nav class="navbar no-margin-bottom alt-font bg-white sidebar-nav" id="fondo-menu" data-offset=-59>
    <div class="Efecto_sobrepuesto">
            <div class="container navigation-menu ">
                <div class="row">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="col-md-12 col-sm-12 navbar-header margin-ten-bottom sm-no-margin">
                                                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                                                                                <a class="navbar-brand section-link" href="#home">
                                                                            <img alt="chris coder" src="imagen/logo.png" class="logo" />
                                                                            <img alt="chris coder" src="imagen/logo.png" class="retina-logo" />
                                                                        </a>
                                            </div>
                    <div class="col-md-12 margin-fifteen-tb sm-no-margin navigation-menu-wrap">
                        <div class="collapse navbar-collapse accordion-menu mejora-menu" id="bs-example-navbar-collapse-1">
                        <div class="menu-personal-menu-container "><ul id="menu-personal-menu" class="nav navbar-nav main-menu-height">
                        <?php 
                        if (isset($_REQUEST['num_proy'])){
                            echo '<li id="menu-item-3078" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3078"><a href="?" class="section-link">Regresar</a></li>';
                        }else {
                            echo '<li id="menu-item-3078" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3078"><a href="#about" class="section-link">Acerca de mí</a></li>
                            <li id="menu-item-3080" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3080"><a href="#skills" class="section-link">Habilidades</a></li>
                            <li id="menu-item-3079" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3079"><a href="#portfolio" class="section-link">Portafolio</a></li>
                            <li id="menu-item-3081" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3081"><a href="#employment" class="section-link">Experiencia</a></li>
                            <li id="menu-item-3082" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3082"><a href="#education" class="section-link">Estudios</a></li>';
                        }
                        ?>
                        <!-- <li id="menu-item-3079" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3079"><a href="#contact" class="section-link">Contacto</a></li>-->
                            
                                
<!-- 
    Aqui se omitieron algunos Items del menu, si quieres ki añades despues
    <li id="menu-item-3083" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3083"><a href="#blog" class="section-link">Blog</a></li>
<li id="menu-item-3084" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3084"><a href="#contact" class="section-link">Contacto</a></li>

-->
</ul></div>                        </div>
                    </div>
                                                <div class="col-md-12 margin-ten no-margin-lr sm-no-padding-left sidebar-nav-bottom sm-display-none" style="top: 90%;padding-top: -3%;position: fixed;width: 200px">
                                <div id="custom_html-2" class="widget_text custom-widget widget_custom_html"><div class="textwidget custom-html-widget"><div class="footer-social margin-fifteen-top xs-margin-ten-top col-md-12 no-padding-lr"><a target="_blank" class="directpage" href="https://wa.me/584124249751?text=Estoy%20interesad@%20en%20ponerme%20en%20contacto%20con%20el%20señor%20Christian%20Di%20Santo" rel="noopener noreferrer"><i class="fab fa-whatsapp"></i></a><a target="_blank" class="directpage enlace-off" href="https://www.linkedin.com/in/christian-di-santo-2828a1225/" rel="noopener noreferrer"><i class="fab fa-linkedin-in"></i></a>
<a target="_blank" class="directpage" href="https://github.com/christianwx5/" rel="noopener noreferrer"><i class="fab fa-github"></i></a><a target="_blank" class="directpage" href="https://facebook.com/christness" rel="noopener noreferrer"><i class="fab fa-facebook-f icon"></i></a></div></div></div>                            </div>
                                    </div>
                </div>
            </div>
        </nav>
<div class="sidebar-wrapper personal"><section class="parent-section no-padding post-3063 page type-page status-publish hentry"><div class="container-fluid"><div class="row"><div class="entry-content">



<!-- Home -->
<?php 

if (isset($_REQUEST['num_proy'])){
    include ("proyectos.php");
}else {

        //include ("home.html"); 

        //Acerca de
        include ("about.html");

        //Skill
        include ("skills.html");


        //Portafolio
        //include ("portafolio2.html");
        include ("portafolio.php");
        
   
        //Empleo
        include ("empleos.html");
    
        //Educacion
        include ("educacion.html");

        // //Contacto
        // include ("contacto.html");

        // //blog
        // include ("blog.html");
        
        

}




//BLog
//include ("blog.html");

//Contacto
//include ("contacto.html");

?>


<footer class="brando-footer cover-background" style="background-image:url(wp-content/uploads/2016/04/bg.jpg)">
    <div class="container">
        <div class="row footer-border border-bottom padding-five-tb">
                        <div class="col-md-8 col-sm-9 col-xs-12 text-left xs-text-center">
                    <div id="text-4" class="custom-widget widget_text">			<div class="textwidget">
                        
                    <?php 

                        if (isset($_REQUEST['num_proy'])){
                            echo ('<div class="footer-social position-relative top4">
                            <a href="https://wa.me/584124249751?text=Estoy%20interesad@%20en%20ponerme%20en%20contacto%20con%20el%20señor%20Christian%20Di%20Santo/"  rel="noopener noreferrer" class=""><i class="fab fa-whatsapp"></i></a>
                            <a href="https://www.linkedin.com/in/christian-di-santo-2828a1225/"  rel="noopener noreferrer" class=""><i class="fab fa-linkedin-in"></i></a>
                            <a href="https://github.com/christianwx5/"  rel="noopener noreferrer" class=""><i class="fab fa-github"></i></a>
                            <a href="https://facebook.com/christness/"  rel="noopener noreferrer" class=""><i class="fab fa-facebook"></i></a>
                            </div>');
                        }else {
                            echo ('<div class="footer-social position-relative top4">
                            <a href="https://wa.me/584124249751?text=Estoy%20interesad@%20en%20ponerme%20en%20contacto%20con%20el%20señor%20Christian%20Di%20Santo/" target="_blank" rel="noopener noreferrer" class=""><i class="fab fa-whatsapp"></i></a>
                            <a href="https://www.linkedin.com/in/christian-di-santo-2828a1225/" target="_blank" rel="noopener noreferrer" class=""><i class="fab fa-linkedin"></i></a>
                            <a href="https://github.com/christianwx5/" target="_blank" rel="noopener noreferrer" class=""><i class="fab fa-github"></i></a>
                            <a href="https://facebook.com/christness/" target="_blank" rel="noopener noreferrer" class=""><i class="fab fa-facebook"></i></a>
                            </div>');
                        }
                        
                    
                    ?>
                    


</div>
		</div>            </div>
                                        <div class="col-md-4 col-sm-3 col-xs-12 text-right xs-text-center xs-margin-ten-top">
                    <a href="#home" class="inner-link">
                                                        <img src="imagen/logo.png" alt="footer-logo"/>
                                            </a>
                </div>
                    </div>
    </div>
            <div class="footer-bottom">
            <div class="container">
                <div class="row">
                                                <div class="col-md-12 col-sm-12 text-center">
                                <span style="color: black" class="text-small text-uppercase alt-font">© 2020 ChristCode is proudly powered by <a href="#" target="_blank">Christian Di Santo.</a></span>
                            </div>
                                        </div>
            </div>
        </div>
    </footer>
</div><script type='text/javascript'>
/* <![CDATA[ */
var wpcf7 = {"apiSettings":{"root":"https:\/\/brando.themezaa.com\/personal\/wp-json\/contact-form-7\/v1","namespace":"contact-form-7\/v1"},"cached":"1"};
/* ]]> */
</script>

<script defer src="wp-content/cache/minify/0538f.js"></script>

<script type='text/javascript'>
/* <![CDATA[ */
var brandoajaxurl = {"ajaxurl":"https:\/\/brando.themezaa.com\/personal\/wp-admin\/admin-ajax.php","themeurl":"https:\/\/brando.themezaa.com\/personal\/wp-content\/themes\/brando","loading_image":"https:\/\/brando.themezaa.com\/personal\/wp-content\/themes\/brando\/assets\/images\/ajax-loader.gif"};
var brando_infinite_scroll_message = {"message":"All Post Loaded"};
/* ]]> */
</script>

<script defer src="wp-content/cache/minify/a708c.js"></script>

<style id="brando-themesetting-css" type="text/css">nav.transparent-navbar-default.shrink{background:#000000;}.center-logo-header,.shrink.center-logo-header{background:#93e4cf;}.header-white,.header-white.shrink{background:#ffffff;}nav.without-border.shrink{background:#000000;}</style>





<?php// include("efectos_añadidura.html") ?>

</body>

</html>