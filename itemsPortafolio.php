<?php 


    $datos = json_decode(file_get_contents("https://new-portafolio-backend.herokuapp.com/portafolio"),true);
    
    // function OrdenImportancia ($datos){
    //     $nivelador; $nuevoOrden;
    //     for($i = 0; $i < count($datos); $i++){
            
    //         // while (isset($nivelador[$datos[$i]['nivel_importancia']][$o])){
    //         //     $o++;
    //         // }
    //         $nivelador[$datos[$i]['nivel_importancia']][$i] = $datos[$i];
    //         // $o = 0;
    //     }

    //     $e = 0;
    //     for ($i = 14; $i >=0; $i--){
    //         if (isset($nivelador[$i])){
    //             for ($o = 0; $o < count($nivelador[$i]); $o++){
    //                 if (isset($nivelador[$i][$o])){
    //                     $nuevoOrden[$e] = $nivelador[$i][$o];
    //                     $e++;
    //                 }
    //             }
    //         }
            
    //     }

    //     return $nuevoOrden;
    // }
    
    
    // // echo ''.$datos;
    // // print_r($datos);
    // // echo '<script>alert("soy una alerta = '.$datos[0]['titulo'].'")</script>';
    // $proyectos = OrdenImportancia($datos);
    // echo '<script>console.log("soy una alerta = '.count($proyectos).'")</script>';

    function filtrosExtractor ($datos, $index) {
        $lenguajes = '';
        foreach ($datos[$index]['lenguajes'] as $lenguaje){
            // echo '<script>console.log("'.$lenguaje.'");</script>';
            if ($lenguaje=='C#' || $lenguaje=='Java') $lenguaje = 'CSharpJava';
            $lenguajes.= ' '.$lenguaje;
        }

        $frameworks = '';
        foreach ($datos[$index]['frameworks'] as $framework){
            // echo '<script>console.log("'.$framework.'");</script>';
            $frameworks.= ' '.$framework;
        }

        // $filtros = $datos[$index]['lenguajes'];
        return ''.$lenguajes.$frameworks;
    }

    function imagen_mini ($datos,$index) {
        if(file_exists('./imagen/'.$datos[$index]['url_imagen_min'])){
            // echo '<script>console.log("si existe");</script>';
            return $datos[$index]['url_imagen_min'];
        }else {
            // echo '<script>console.error("no existe '."./imagen/".$datos[$index]['url_imagen_min'].'");</script>';
            
            $Node = false;
            $React = false;
            $Php = false;
            $CSharp = false;
            $Java = false;
            
            for ($i = 0; $i<count($datos[$index]['frameworks']); $i++){
                if ($datos[$index]['frameworks'][$i]=='Node'){
                    $Node = true;
                }
                if ($datos[$index]['frameworks'][$i]=='React'){
                    $React = true;
                }
            }

            for ($i = 0; $i<count($datos[$index]['lenguajes']); $i++){
                if ($datos[$index]['lenguajes'][$i]=='Php'){
                    $Php = true;
                }

                if ($datos[$index]['lenguajes'][$i]=='C#'){
                    $CSharp = true;
                }

                if ($datos[$index]['lenguajes'][$i]=='Java'){
                    $Java = true;
                }
            }

            if ($Node&&$React&&$Php){
                return "node_react_php.jpg";
            }
            if ($Node&&$React&&$CSharp){
                return "c_react_node.jpg";
            }
            if ($Node&&$React){
                return "node_react.jpg";
            }
            if ($Node&&$Php){
                return "node_php.jpg";
            }

            if ($Node){
                return "node.jpg";
            }

            if ($React){
                return "react.jpg";
            }

            if ($Php){
                return "php.jpg";
            }

            if ($CSharp){
                return "CSharp.jpg";
            }

            if ($Java){
                return "java.jpg";
            }

            return "default.jpg";
             
        }

    }

    function imagen_max ($datos,$index) {
        if(file_exists('./imagen/'.$datos[$index]['url_imagen_max'])){
            // echo '<script>console.log("si existe");</script>';
            return $datos[$index]['url_imagen_max'];
        }else {
            // echo '<script>console.error("no existe '."./imagen/".$datos[$index]['url_imagen_max'].'");</script>';
            
            $Node = false;
            $React = false;
            $Php = false;
            $CSharp = false;
            $Java = false;
            
            for ($i = 0; $i<count($datos[$index]['frameworks']); $i++){
                if ($datos[$index]['frameworks'][$i]=='Node'){
                    $Node = true;
                }
                if ($datos[$index]['frameworks'][$i]=='React'){
                    $React = true;
                }
            }

            for ($i = 0; $i<count($datos[$index]['lenguajes']); $i++){
                if ($datos[$index]['lenguajes'][$i]=='Php'){
                    $Php = true;
                }

                if ($datos[$index]['lenguajes'][$i]=='C#'){
                    $CSharp = true;
                }

                if ($datos[$index]['lenguajes'][$i]=='Java'){
                    $Java = true;
                }
            }

            if ($Node&&$React&&$Php){
                return "node_react_php.jpg";
            }
            if ($Node&&$React&&$CSharp){
                return "c_react_node.jpg";
            }
            if ($Node&&$React){
                return "node_react.jpg";
            }
            if ($Node&&$Php){
                return "node_php.jpg";
            }

            if ($Node){
                return "node.jpg";
            }

            if ($React){
                return "react.jpg";
            }

            if ($Php){
                return "php.jpg";
            }

            if ($CSharp){
                return "CSharp.jpg";
            }

            if ($Java){
                return "java.jpg";
            }

            return "default.jpg";
             
        }

    }

    for ($e = 14; $e>=0; $e--){
        for ($i = 0; $i<count($datos); $i++){

            $filtros = filtrosExtractor($datos, $i);
            $imag_min = imagen_mini($datos, $i);
            $imag_max = imagen_max($datos, $i);

            if ($datos[$i]['nivel_importancia']==$e)
            echo '<div class="ct-promo-grid-item '.$filtros.'">

            <!--y aca-->
            <div class="gallery-img">
            
            
                
            <div class="<!--vc_row wpb_row vc_row-fluid vc_custom_1525276175315  padding-lg-80b padding-sm-60b padding-xs-40b-->">
                

                <div class="tg-grid-sizer">

                </div>
                <div class="tg-gutter-sizer">

                </div>
                    <!--Aca-->
                    <article class=" tg-landing f18" data-row="1" data-col="1">
                        <div class="tg-item-inner">
                            <div class="tg-item-media-holder tg-light">
                                <div class="tg-item-media-inner">
                                    <img class="tg-item-image" alt="'.$datos[$i]['titulo'].'" width="400" height="1807" src="imagen/'.$imag_min.'">
                                </div>
                                <div class="tg-item-media-content1 ">
                                    <a class="tg-element-absolute tg-element-above" target="" href="?num_proy=2">
                                    </a>
                                </div>
                            </div>
                            <div class="tg-item-content-holder tg-dark image-format" data-position="bottom">
                                <h4 class="tg-item-title tg-element-3">
                                    <a target="" href="?num_proy='.$datos[$i]['number_project'].'&url_img='.$imag_max.'">'.$datos[$i]['titulo'].'</a>
                                </h4>
                                <div class="tg-item-clear"></div>
                            </div>
                        </div>
                    </article>
                    <!--hasta aca-->

            </div>
            
        
            </div>

            <!--y aca Fin-->
        </div>';
        }
    }


?>