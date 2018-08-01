<?php 
   
    use Illuminate\Support\HtmlString;
    use Inicia\Tracker;
    

    if (!function_exists('url_img_web')) {
        /**
         * 
         * 
         * @param  
         * @return 
         */
        function url_img_web($file, $path = null)
        {
            return url('images/web/'.$path, $file);
        }
    }

    if (!function_exists('url_avatar')) {
        /**
         * 
         * 
         * @param  
         * @return 
         */
        function url_avatar($file)
        {
            return url('images/avatars/users', $file);
        }
    }

    if (!function_exists('url_avatar')) {
        /**
         * 
         * 
         * @param  
         * @return 
         */
        function url_avatar($file)
        {
            return url('images/avatars/users', $file);
        }
    }

    if (!function_exists('url_carousel_home')) {
        /**
         * 
         * 
         * @param  
         * @return 
         */
        function url_carousel_home($file)
        {
            return url('images/web/carousel/home', $file);
        }
    }

    if (!function_exists('url_img_propierty')) {
        /**
         * 
         * 
         * @param  
         * @return 
         */
        function url_img_propierty($file)
        {
            return url('images/web/propierty', $file);
        }
    }

    if (!function_exists('path_propierty')) {
        /**
         * 
         * 
         * @param  
         * @return 
         */
        function path_propierty($folder, $view)
        {
            return "dashboard.modules.propierty.{$folder}.{$view}";
        }
    }

    if (!function_exists('favicon')) {
        /**
         * 
         * 
         * @param  
         * @return 
         */
        function favicon($file)
        {
            return new HtmlString('<link rel="shortcut icon" type="image/x-icon" href="'.asset($file).'">');
        }
    }

    if (!function_exists('style')) {
        /**
         * 
         * 
         * @param  
         * @return 
         */
        function style($file)
        {
            return new HtmlString('<link media="all" type="text/css" rel="stylesheet" href="'.asset('web/css/'.$file).'">');
        }
    }

    if (!function_exists('css_plugin')) {
        /**
         * 
         * 
         * @param  
         * @return 
         */
        function css_plugin($file)
        {
            return new HtmlString('<link media="all" type="text/css" rel="stylesheet" href="'.asset('web/css/'.$file).'">');
        }
    }

    if (!function_exists('script')) {
        /**
         * 
         * 
         * @param  
         * @return 
         */
        function script($file)
        {
            return new HtmlString('<script src="'.asset('web/js/'.$file).'"></script>');
        }
    }


    if (!function_exists('css_plugin_dashboard')) {
        /**
         * 
         * 
         * @param  
         * @return 
         */
        function css_plugin_dashboard($file)
        {
            return new HtmlString('<link media="all" type="text/css" rel="stylesheet" href="'.asset('tmpl_dashboard/css/plugins/'.$file).'">');
        }
    }

    if (!function_exists('js_plugin_dashboard')) {
        /**
         * 
         * 
         * @param  
         * @return 
         */
        function js_plugin_dashboard($file)
        {
            return new HtmlString('<script src="'.asset('tmpl_dashboard/js/plugins/'.$file).'"></script>');
        }
    }

    if (!function_exists('js_plugin')) {
        /**
         * 
         * 
         * @param  
         * @return 
         */
        function js_plugin($file)
        {
            return new HtmlString('<script src="'.asset('web/js/'.$file).'"> </script>');
        }
    }

    if (!function_exists('js_dashboard')) {
        /**
         * 
         * 
         * @param  
         * @return 
         */
        function js_dashboard($file)
        {
            return new HtmlString('<script src="'.asset('tmpl_dashboard/js/'.$file).'"> </script>');
        }
    }

    if (!function_exists('setActive')) {
        /**
         * 
         * 
         * @param  
         * @return 
         */
        function setActive($path)
        {
            return Request::is('dashboard/'.$path) ? 'class = active' : null;
        }
    }


    if (!function_exists('setActiveWeb')) {
        /**
         * 
         * 
         * @param  
         * @return 
         */
        function setActiveWeb($path)
        {
            return Request::is($path) ? 'class = active' : null;
        }
    }

    if (!function_exists('user_avatar')) {
        /**
         * 
         * 
         * @param  
         * @return 
         */
        function user_avatar()
        {
            $avatar = auth()->check() ? auth()->user()->avatar : null;

            return auth()->check() ? url_avatar($avatar) : null;
        }
    }

    if (!function_exists('user_name')) {
        /**
         * user_name
         *
         * @return 
         */
        function user_name()
        {
            return auth()->check() ? auth()->user()->name : null;
        }
    }

    if (!function_exists('user_level')) {
        /**
         * 
         * 
         * @param  
         * @return 
         */
        function user_level()
        {
            if (Shinobi::isRole('head')) {
                return 'Super Usuario';
            }else if(Shinobi::isRole('admin')){
                return 'Administrador';
            }

            return 'Usuario';
        }
    }

    if (!function_exists('id_user')) {
        /**
         * 
         * 
         * @param  
         * @return 
         */
        function id_user()
        {
            return auth()->check() ? auth()->user()->id : null;
        }
    }

    if (!function_exists('copyright')) {
        /**
         * 
         * 
         * @param  
         * @return 
         */
        function copyright()
        {
            return new HtmlString('Derechos de Autor &copy; '.date('Y').' | '.'<b>'.config('app.name').'</b>');
        }
    }

    if (!function_exists('copyright_web')) {
        /**
         * 
         * 
         * @param  
         * @return 
         */
        function copyright_web()
        {
            return new HtmlString('Derechos de Autor &copy; '.date('Y').' | '.'<b>'.config('app.name').'</b>');
        }
    }

    if (!function_exists('var_null')) {
        /**
         * 
         * 
         * @param  
         * @return 
         */
        function var_null($value)
        {
            return is_null($value) ? new HtmlString('<div class="var_null">El campo está vacio</div>') : $value;
        }
    }

    if (!function_exists('placeholder_value')) {
        /**
         * 
         * 
         * @param  
         * @return 
         */
        function placeholder_value($value)
        {
            return is_null($value) ? new HtmlString("placeholder='El campo está vacio'") : new HtmlString("value='{$value}'");
        }
    }
    

    if (!function_exists('is_active')) {
        /**
         * 
         * 
         * @param  
         * @return 
         */
        function is_active($value)
        {
            return $value == 1 ? 'Activo' : 'Inactivo';
        }
    }

    if (!function_exists('url_propierty')) {
        /**
         * 
         * 
         * @param  
         * @return 
         */
        function url_propierty($file)
        {
            return url('images/web/propierty', $file);
        }
    }

    if (!function_exists('true_false')) {
        /**
         * 
         * 
         * @param  
         * @return 
         */
        function true_false($var, $option)
        {
            if ($option == 1) {
                if ($var == 1) {
                   return 'true';
                }
                return 'false';
            }

            if ($option == 0 && $var == 1) {
                return new HtmlString('target="_blank"'); 
            }
        }
    }



    if (!function_exists('trueFalseForHumans')) {
        /**
         * 
         * 
         * @param  
         * @return 
         */
        function trueFalseForHumans($var)
        {
            if ($var == 1) {
                return new HtmlString('<b class="a-active">Activo</b>'); 
            }
            
            return new HtmlString('<b class="b-inactive">Inactivo</b>'); 
        }
    }


    if (!function_exists('hideShowForHumans')) {
        /**
         * 
         * 
         * @param  
         * @return 
         */
        function hideShowForHumans($var)
        {
            if ($var == 1) {
                return new HtmlString('<b class="a-active">Visible</b>'); 
            }
            
            return new HtmlString('<b class="b-inactive">Oculta</b>'); 
        }
    }

    if (!function_exists('response_request')) {
        /**
         * 
         * 
         * @param  
         * @return 
         */
        function response_request($request, $route, $position, $arrayP1, $arrayP2)
        {
            $message = [
                'Guardado correctamente',
                'Modificado correctamente',
                'No fue Guardado, correctamente.',
                'No fue Modificado, correctamente.',
                'Ha ocurrido un error al guardar los datos',
                'Eliminado correctamente',
                'No fue eliminado correctamente'
            ];

            if ($request) {
                return redirect()->route("{$route}.{$position}")->with('success', $message[$arrayP1]);
            }

            return redirect()->route("{$route}.{$position}")->with('error', $message[$arrayP2]);
        }
    }


    if (!function_exists('response_request_back')) {
        /**
         * 
         * 
         * @param  
         * @return 
         */
        function response_request_back($request, $arrayP1, $arrayP2)
        {
            $message = [
                'Eliminado correctamente',
                'No fue eliminado correctamente'
            ];

            if ($request) {
                return back()->with('success', $message[$arrayP1]);
            }
            
            return back()->with('success', $message[$arrayP2]);
        }
    }

    if (!function_exists('fullname')) {
        /**
         * 
         * 
         * @param  
         * @return 
         */
        function fullname($first_name, $last_name)
        {
            return $first_name.' '.$last_name;
        }
    }


    if (!function_exists('yesIsNullForWeb')) {
        /**
         * 
         * 
         * @param  
         * @return 
         */
        function yesIsNullForWeb($value)
        {
            return is_null($value) ? new HtmlString('<div class="yesIsNullForWeb">No Disponible</div>') : $value;
        }
    }

    if (!function_exists('inStock')) {
        /**
         * 
         * 
         * @param  
         * @return 
         */
        function inStock($value)
        {
            if ($value == 1) {
                return new HtmlString('<div class="inStock">Propiedad Disponible</div>');
            }
            return new HtmlString('<div class="NoStock">Propiedad No Disponible</div>');
        }
    }


    if (!function_exists('IsNullForWebAjax')) {
        /**
         * 
         * 
         * @param  
         * @return 
         */
        function IsNullForWebAjax($value)
        {
            return is_null($value) ? 'No Disponible' : $value;
        }
    }

    if (!function_exists('inStockAjax')) {
        /**
         * 
         * 
         * @param  
         * @return 
         */
        function inStockAjax($value)
        {
            if ($value == 1) {
                return 'Propiedad Disponible';
            }
            return 'Propiedad No Disponible';
        }
    }

    if (!function_exists('radio_value')) {
        /**
         * 
         * 
         * @param  
         * @return 
         */
            function radio_value($name, $value)
            {
                if ($value == 1) {
                    return new HtmlString(
                        'Si Posee: <input type="radio" name=" '.$name.' " value=" 1 " checked> 
                        No Posee: <input type="radio" name=" '.$name.' " value="0">'
                    );
                    
                }elseif ($value == 0) {
                    return new HtmlString(
                       'No Posee: <input type="radio" name=" '.$name.' " value=" 0 " checked> 
                        Si Posee: <input type="radio" name=" '.$name.' " value="1">'
                    );
            }
         }
    }

    if (!function_exists('status_client')) {
        /**
         * 
         * 
         * @param  
         * @return 
         */
        function status_client($value)
        {
            switch ($value) {
                case 0:
                    return new HtmlString('<div class="color-0">Activo</div>'); 
                break;

                case 1:
                    return new HtmlString('<div class="color-1">No Activo</div>'); 
                break;

                case 2:
                    return new HtmlString('<div class="color-2">En espera</div>'); 
                break;

                case 3:
                    return new HtmlString('<div class="color-3">Contactado</div>'); 
                break;

                case 4:
                    return new HtmlString('<div class="color-4">Visita</div>'); 
                break;

                case 5:
                    return new HtmlString('<div class="color-5">Realizada</div>'); 
                break;

                case 6:
                    return new HtmlString('<div class="color-6">En espera por visita</div>'); 
                break;

                case 7:
                    return new HtmlString('<div class="color-7">Venta concretada</div>'); 
                break;
            }
        }
    }

    if (!function_exists('textarea_value')) {
        /**
         * 
         * 
         * @param  
         * @return 
         */
        function textarea_value($name, $value, $rows = null)
        {
            if ($value == '') {
                return new HtmlString(
                    '<textarea name="'.$name.'" rows="'.$rows.'" class="form-control" placeholder="El campo está vacio"></textarea>'
                );
            }else{
                return new HtmlString(
                    '<textarea name="'.$name.'" rows="'.$rows.'" class="form-control">'.$value.'</textarea>'
                );
            }
            
        }
    }
    
    if (!function_exists('type_client')) {
        /**
         * 
         * 
         * @param  
         * @return 
         */
        function type_client($value)
        {
            switch ($value) {
                case 0:
                    return new HtmlString('<div class="tt-color-0">Comprar</div>'); 
                break;

                case 1:
                    return new HtmlString('<div class="tt-color-1">Alquilar</div>'); 
                break;

                case 2:
                    return new HtmlString('<div class="tt-color-2">Vender</div>'); 
                break;
            }
        }
    }

    if (!function_exists('user_email')) {
        /**
         * 
         * 
         * @param  
         * @return 
         */
        function user_email($name, $email)
        {
            return ($name.', Notificar al Correo: '.$email);
        }
    }


    if (!function_exists('tracker_validate')) {
        /**
         * 
         * 
         * @param  
         * @return 
         */
        function tracker_validate($propierty, $id_property, $tracker_count, $tracker_get)
        {
            if ($tracker_count == '') {

                if ($propierty) {
                    Tracker::create(['id_property' => $id_property, 'ip_address' => request()->ip()]);
                }

                return view('web.read_more', compact('propierty'));
                
            }elseif (count($tracker_get) == 1) {
                return view('web.read_more', compact('propierty'));
            }
        }
    }

    if (!function_exists('if_you_have')) {
        /**
         * 
         * 
         * @param  
         * @return 
         */
        function if_you_have($option, $position = 1)
        {
            if ($position == 1) {
                if ($option == 1) {
                    return 'Si posee';
                }else{
                    return 'No posee';
                }
            }else{
               if ($option == 1) {
                    return 'Si aceptamos';
                }else{
                    return 'No aceptamos';
                }
            }
        }
    }

    if (!function_exists('type_street')) {
        /**
         * 
         * 
         * @param  
         * @return 
         */
        function type_street($value)
        {
            if (is_null($value)) {
                return 'Sin tipo de calle';
            }

            switch ($value) {
                case 0:
                    return 'Avenida'; 
                break;

                case 1:
                    return 'Calle'; 
                break;

                case 2:
                    return 'Autopista'; 
                break;

                case 3:
                    return 'Callejon'; 
                break;

                case 4:
                    return 'Pavimento enpedrado'; 
                break;

                case 5:
                    return 'Tierra'; 
                break;

                case 6:
                    return ''; 
                break;

                case 7:
                    return ''; 
                break;

                case 8:
                    return ''; 
                break;

                case 9:
                    return ''; 
                break;
            }
        }
    }

    if (!function_exists('months')) {
        /**
         * 
         * 
         * @param  
         * @return 
         */
        function months($value)
        {
            switch ($value) {
                case 1:
                    return 'Enero'; 
                break;

                case 2:
                    return 'Febrero'; 
                break;

                case 3:
                    return 'Marzo'; 
                break;

                case 4:
                    return 'Abril'; 
                break;

                case 5:
                    return 'Mayo'; 
                break;

                case 6:
                    return 'Junio'; 
                break;

                case 7:
                    return 'Julio'; 
                break;

                case 8:
                    return 'Agosto'; 
                break;

                case 9:
                    return 'Septiembre'; 
                break;

                case 10:
                    return 'Octubre'; 
                break;
                
                case 11:
                    return 'Noviembre'; 
                break;
                
                break;
                  case 12:
                    return 'Diciembre'; 
                break;
            }
        }
    }

    if (!function_exists('is_category')) {
        /**
         * 
         * 
         * @param  
         * @return 
         */
        function is_category($value)
        {
            switch ($value) {
                case 1:
                    return 'Calidades'; 
                break;

                case 2:
                    return 'Tipo de Entorno'; 
                break;

                case 3:
                    return 'Tipo de Piso'; 
                break;
            }
        }
    }

    






    